<?php

namespace App\Http\Livewire;

use App\Models\Wish;
use App\Models\Guest;
use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\GuestsExport;
use App\Imports\GuestsImport;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class Admin extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $name, $phone, $phonecode = '62', $note, $status, $invited, $guest_id, $all_guests, $attend_guests, $pending_guests;
    public $top_message, $body_message, $bottom_message, $message_id, $saved_top_message, $saved_body_message, $saved_bottom_message;
    public $file;

    public $search = '';
    public $filter = false;
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
            'name' => 'required|string',
            'phone' => 'nullable|numeric|digits_between:9,12',
            'note' => 'nullable|string'
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
        $this->note = '';
        $this->top_message = '';
        $this->body_message = '';
        $this->bottom_message = '';
    }

    // CRUD Guest
    public function saveGuest()
    {
        $validatedData = $this->validate();

        if (!is_null($validatedData['phone'])) {
            $save_guest = Guest::create([
                'name' => $validatedData['name'],
                'phone' => $this->phonecode . $validatedData['phone'],
                'note' => $validatedData['note'],
            ]);
        } else {
            $save_guest = Guest::create([
                'name' => $validatedData['name'],
                'phone' => $validatedData['phone'],
                'note' => $validatedData['note'],
            ]);
        }
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
            $this->phonecode = substr($guest->phone, 0, 2);
            $this->note = $guest->note;
            $this->invited = (bool) $guest->invited;
            $this->status = (bool) $guest->status;
        } else {
            return redirect()->to('/');
        }
    }

    public function updateGuest()
    {
        $validatedData = $this->validate();

        if (!is_null($validatedData['phone'])) {
            Guest::where('id', $this->guest_id)->update([
                'name' => $validatedData['name'],
                'phone' => $this->phonecode . $validatedData['phone'],
                'invited' => (bool) $this->invited,
                'status' => (bool) $this->status,
                'note' => $validatedData['note'],
            ]);
        } else {
            Guest::where('id', $this->guest_id)->update([
                'name' => $validatedData['name'],
                'phone' => $validatedData['phone'],
                'invited' => (bool) $this->invited,
                'status' => (bool) $this->status,
                'note' => $validatedData['note'],
            ]);
        }

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

    // Import Excel
    public function import()
    {
        $this->validate([
            'file' => 'required',
        ]);

        Excel::import(new GuestsImport, $this->file->getRealPath());

        session()->flash('message', 'Guest Imported Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('show-toasts');
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

        $guests = Guest::where(function ($query) {
            return $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('note', 'like', '%' . $this->search . '%');
        })
            ->when($this->filter, function ($query, $status) {
                $filterValue = $this->filter ? 1 : 0;
                return $query->where('status', $filterValue);
            })
            ->paginate($this->perPage);

        $wishes = Wish::latest()->get();

        return view('livewire.admin', ['guests' => $guests, 'wishes' => $wishes]);
    }

    // Logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
}