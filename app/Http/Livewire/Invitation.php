<?php

namespace App\Http\Livewire;

use App\Models\Wish;
use App\Models\Guest;
use Livewire\Component;

class Invitation extends Component
{
    public $name, $wish;
    public $attendance = '';
    public $code, $note;
    public $guestwish;

    public function mount($code)
    {
        $guest = Guest::where('code', $code)->first();
        $this->name = $guest->name;
        $this->code = $guest->code;
        $this->note = $guest->note;

        $this->guestwish = Wish::where('name', $this->name)->first();
    }

    public function saveWish()
    {
        Wish::create([
            'name' => $this->name,
            'wish' => $this->wish,
            'attendance' => $this->attendance,
        ]);

        $this->dispatchBrowserEvent('refresh-page');
    }

    public function render()
    {
        $wishes = Wish::oldest()->get();

        return view('livewire.invitation', compact('wishes'))->layout('layouts.main');
    }
}