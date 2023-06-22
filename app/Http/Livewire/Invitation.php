<?php

namespace App\Http\Livewire;

use App\Models\Guest;
use Livewire\Component;

class Invitation extends Component
{
    public $name;
    public $code;

    public function mount($code)
    {
        $guest = Guest::where('code', $code)->first();
        $this->name = $guest->name;
        $this->code = $guest->code;
    }

    public function render()
    {
        return view('livewire.invitation')->layout('layouts.main');
    }
}