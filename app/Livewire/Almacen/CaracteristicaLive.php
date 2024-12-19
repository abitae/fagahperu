<?php

namespace App\Livewire\Almacen;

use App\Livewire\Forms\CaracteristicaForm;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CaracteristicaLive extends Component
{
    use LivewireAlert;
    public $product;
    public CaracteristicaForm $form;
    public function mount(Product $product)
    {
        if(!is_null($product->caracteristicas->first())){
            $this->form->setCaracteristica($product->caracteristicas->first());
        }
    }
    public function render()
    {
        $product = $this->product;
        return view('livewire.almacen.caracteristica-live', compact('product'));
    }
    public function saveCaracteristicas()
    {

        if ($this->form->store($this->product)) {
            $this->message('success', 'En hora buena!', 'Registro actualizado correctamente!');
        } else {
            $this->message('error', 'Error!', 'No se pudo actualizar el registro!');
        }
    }
    private function message($tipo, $tittle, $message)
    {
        $this->alert($tipo, $tittle, [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => false,
            'text' => $message,
            'timerProgressBar' => true,
        ]);
    }
}
