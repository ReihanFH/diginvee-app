<?php

namespace App\Http\Livewire;

use App\Models\Wish;
use Livewire\Component;

class index extends Component
{
    public $name = null;
    public $code = null;
    public $note = null;
    public $guestwish = null;

    public function render()
    {
        $wishes = Wish::oldest()->get();

        return view('livewire.invitation', compact('wishes'))->layout('layouts.main');
    }
}