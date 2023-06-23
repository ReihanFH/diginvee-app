<?php

namespace App\Http\Livewire;

use App\Models\Wish;
use Livewire\Component;

class index extends Component
{
    public $name = 'Tamu Undangan';
    public $code = null;

    public function render()
    {
        $wishes = Wish::oldest()->get();

        return view('livewire.invitation', compact('wishes'))->layout('layouts.main');
    }
}