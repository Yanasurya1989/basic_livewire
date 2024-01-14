<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $name = "Yana";
    public $show_password = false;

    public function render()
    {
        return view('livewire.belajar');
    }
}
