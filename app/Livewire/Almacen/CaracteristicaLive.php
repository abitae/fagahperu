<?php

namespace App\Livewire\Almacen;

use App\Livewire\Forms\CaracteristicaForm;
use App\Models\Product;
use Livewire\Component;

class CaracteristicaLive extends Component
{
    public $id;
    public CaracteristicaForm $form;
    public function mount(Product $id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $id = $this->id;
        return view('livewire.almacen.caracteristica-live', compact('id'));
    }
}
