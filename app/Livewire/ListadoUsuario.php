<?php

namespace App\Livewire;
use App\Models\Register;
use Livewire\Component;

class ListadoUsuario extends Component
{
    public $usuarios=[];


    public function mount(){

        $this->usuarios=Register::all();
    }


    public function render()
    {
        return view('livewire.listado-usuario');
    }
}
