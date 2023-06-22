<?php

namespace App\Http\Livewire;

use App\Models\Guest;
use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\GuestsExport;
use Maatwebsite\Excel\Facades\Excel;

class Admin extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name, $phone, $status, $guest_id, $all_guests, $attend_guests, $pending_guests;
    public $top_message, $body_message, $bottom_message, $message_id, $saved_top_message, $saved_body_message, $saved_bottom_message;

    public $search = '';
    public $perPage = 20;

    public $sortByName = 'created_at';
    public $sortDirection = 'desc';

    public function refresh()
    {
        return;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // Sort by
    public function sortBy($columnName)
    {
        if ($this->sortByName === $columnName) {
            $this->sortDirection = $this->swapSortDirection();
        } else {
            $this->sortDirection = 'ASC';
        }
        $this->sortByName = $columnName;
    }

    public function swapSortDirection()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    // validation rules
    protected function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'phone' => 'required|numeric|digits_between:10,11'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    // Auto close modal
    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->phone = '';
        $this->top_message = '';
        $this->body_message = '';
        $this->bottom_message = '';
    }

    // CRUD Guest
    public function saveGuest()
    {
        $validatedData = $this->validate();

        $save_guest = Guest::create([
            'name' => $validatedData['name'],
            'phone' => '62' . $validatedData['phone'],
        ]);
        $last_id = $save_guest->id;

        $guest = Guest::findOrFail($last_id);
        $guest->code = substr(md5($last_id), 0, 12);

        $guest->save();
        session()->flash('message', 'Guest Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('show-toasts');
    }

    public function editGuest($guest_id)
    {
        $guest = Guest::find($guest_id);

        if ($guest) {
            $this->guest_id = $guest->id;
            $this->name = $guest->name;
            $this->phone = substr($guest->phone, 2, 11);
            $this->status = (bool) $guest->status;
        } else {
            return redirect()->to('/');
        }
    }

    public function updateGuest()
    {
        $validatedData = $this->validate();

        Guest::where('id', $this->guest_id)->update([
            'name' => $validatedData['name'],
            'phone' => '62' . $validatedData['phone'],
            'status' => (bool) $this->status,
        ]);
        session()->flash('message', 'Guest Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('show-toasts');
    }

    public function deleteGuest($guest_id)
    {
        $this->guest_id = $guest_id;
    }

    public function destroyGuest()
    {
        Guest::find($this->guest_id)->delete();
        session()->flash('message', 'Guest Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('show-toasts');
    }


    // Export Excel
    public function export()
    {
        return Excel::download(new GuestsExport, 'Guest Lists.xlsx');
    }

    // Broadcast message create & edit
    public function saveMessage()
    {
        Message::create([
            'top_message' => $this->top_message,
            'body_message' => $this->body_message,
            'bottom_message' => $this->bottom_message,
        ]);

        session()->flash('message', 'Message Saved Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('show-toasts');
    }

    public function editMessage($message_id)
    {
        $find_message = Message::find($message_id);

        if ($find_message) {
            $this->message_id = $find_message->id;
            $this->top_message = $find_message->top_message;
            $this->body_message = $find_message->body_message;
            $this->bottom_message = $find_message->bottom_message;
        } else {
            return redirect()->to('/');
        }
    }

    public function updateMessage()
    {
        Message::where('id', $this->message_id)->update([
            'top_message' => $this->top_message,
            'body_message' => $this->body_message,
            'bottom_message' => $this->bottom_message,
        ]);
        session()->flash('message', 'Message Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('show-toasts');
    }

    // Render dashboard view
    public function render()
    {
        $this->all_guests = Guest::latest()->count();
        $this->attend_guests = Guest::where('status', true)->latest()->count();
        $this->pending_guests = Guest::where('status', false)->latest()->count();
        $find_message = Message::where('id', 1)->first();
        if ($find_message) {
            $this->message_id = $find_message->id;
            $this->saved_top_message = $find_message->top_message;
            $this->saved_body_message = $find_message->body_message;
            $this->saved_bottom_message = $find_message->bottom_message;
        }

        $guests = Guest::where('name', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortByName, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.admin', ['guests' => $guests]);
    }

    // Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
}