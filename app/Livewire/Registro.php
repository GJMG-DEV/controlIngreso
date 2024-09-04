<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Register;
use Livewire\Attributes\Validate;
class Registro extends Component
{
    #[Validate('required')]
    public $apePaterno='';

    #[Validate('required')]
    public $apeMaterno='';

    #[Validate('required')]
    public $nombre='';

    #[Validate('required')]
    public $unidad='';

    #[Validate('required')]
    public $dni='';

    #[Validate('required')]
    public $horaIngreso='';

    public function save()
    {
        $this->validate();
        Register::create(
            $this->only(['apePaterno', 'apeMaterno','nombre','unidad','dni','horaIngreso'])
        );

        session()->flash('status', 'Post successfully updated.');

        return $this->redirect('/register');
    }




}
