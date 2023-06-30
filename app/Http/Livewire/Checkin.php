<?php

namespace App\Http\Livewire;

use App\Models\Guest;
use Livewire\Component;

class Checkin extends Component
{
    public $checkin;

    public function resetInput()
    {
        $this->checkin = '';
    }

    public function update()
    {
        $guest = Guest::where('code', 'like', $this->checkin)->first();
        if ($guest) {
            if ((bool) $guest->status === false) {
                (bool) $guest->status = true;
                $guest->save();
                session()->flash('message', $guest->name);
                $this->dispatchBrowserEvent('open-modal');
            } else {
                session()->flash('error', 'You are already checked-in');
                $this->dispatchBrowserEvent('error');
            }
        } else {
            session()->flash('error', 'Check-in Failed');
            $this->dispatchBrowserEvent('error');
        }

        $this->resetInput();
    }
    public function render()
    {
        return view('livewire.checkin');
    }
}