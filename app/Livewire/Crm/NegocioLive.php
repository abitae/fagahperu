<?php

namespace App\Livewire\Crm;

use App\Livewire\Forms\NegocioForm;
use App\Models\Crm\CustomerType;
use App\Models\Customer;
use App\Models\Negocio;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class NegocioLive extends Component
{
    use WithPagination, WithoutUrlPagination, LivewireAlert, WithFileUploads;

    public NegocioForm $negocioForm;
    public $search = '';
    public $num = 10;
    public $isActive = 1;
    public $isOpenModal = false;
    public $isOpenModalExport = false;
    public $dateNow;
    public $selectedOption;
    public $stageFilter;
    protected $listeners = ['select2Changed' => 'handleSelect2Changed'];

    public function handleSelect2Changed($value)
    {
        $this->selectedOption = $value;
    }

    public function mount()
    {
        $this->dateNow = Carbon::now('GMT-5')->format('Y-m-d');
    }

    #[Computed]
    public function negocios()
    {
        $search = trim($this->search);
        $query = Negocio::query();

        // Only apply search filters if search term exists
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                // Search in customer relationship
                $q->whereHas('customer', function ($subQuery) use ($search) {
                    $subQuery->where('code', 'like', "%{$search}%")
                            ->orWhere('first_name', 'like', "%{$search}%");
                })
                // Search in user relationship
                ->orWhereHas('user', function ($subQuery) use ($search) {
                    $subQuery->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                })
                // Search in main table
                ->orWhere('code', 'like', "%{$search}%")
                ->orWhere('name', 'like', "%{$search}%");
            });
        }

        // Apply stage filter if exists
        if (!empty($this->stageFilter)) {
            $query->where('stage', $this->stageFilter);
        }

        // Apply active status filter
        $query->where('isActive', $this->isActive);

        return $query->latest()
                    ->paginate($this->num);
    }

    public function render()
    {
        $customers = Customer::where('isActive', 1)->get();
        $users = User::where('isActive', 1)->get();
        $customerTypes = CustomerType::where('isActive', 1)->get();
        return view('livewire.crm.negocio-live', compact('customers', 'users', 'customerTypes'));
    }

    public function detail(Negocio $id)
    {
        return Redirect::route('crm.detail', [$id]);
    }

    public function create()
    {
        $this->negocioForm->reset();
        $this->isOpenModal = true;
    }

    public function createNegocio()
    {
        if ($this->negocioForm->store()) {
            $this->message('success', 'En hora buena!', 'Registro creado correctamente!');
            $this->isOpenModal = false;
        } else {
            $this->message('error', 'Error!', 'Verifique los datos ingresados!');
        }
    }

    public function update(Negocio $negocio)
    {
        $this->negocioForm->setNegocio($negocio);
        $this->isOpenModal = true;
    }

    public function updateNegocio()
    {
        if ($this->negocioForm->update()) {
            $this->message('success', 'En hora buena!', 'Registro actualizado correctamente!');
            $this->isOpenModal = false;
        } else {
            $this->message('error', 'Error!', 'Verifique los datos ingresados!');
        }
    }

    public function delete(Negocio $negocio)
    {
        if ($this->negocioForm->destroy($negocio->id)) {
            $this->message('success', 'En hora buena!', 'Registro eliminado correctamente!');
        } else {
            $this->message('error', 'Error!', 'No se pudo eliminar el registro!');
        }
    }

    public function estado(Negocio $negocio)
    {
        if ($this->negocioForm->estado($negocio->id)) {
            $this->message('success', 'En hora buena!', 'Registro actualiza correctamente!');
        } else {
            $this->message('error', 'Error!', 'No se pudo actualizar el registro!');
        }
    }

    public function exportNegocio()
    {
        $this->isOpenModalExport = false;
        return $this->negocioForm->export();
    }

    public function updatedSearch($value)
    {
        $this->resetPage();
    }

    private function message($tipo, $tittle, $message)
    {
        $this->alert($tipo, $tittle, [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => $message,
            'timerProgressBar' => true,
        ]);
    }
}
