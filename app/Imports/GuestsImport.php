<?php

namespace App\Imports;

use App\Models\Guest;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class GuestsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Guest|null
     */
    public function model(array $row)
    {
        return new Guest([
            'name' => $row[0],
            'phone' => $row[1],
            'note' => $row[2],
        ]);
    }
}