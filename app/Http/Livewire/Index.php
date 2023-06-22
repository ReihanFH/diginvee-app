<?php

namespace App\Http\Livewire;

use Livewire\Component;

class index extends Component
{
    public $name = 'Tamu Undangan';

    public function render()
    {
        return view('livewire.invitation')->layout('layouts.main');
    }
}