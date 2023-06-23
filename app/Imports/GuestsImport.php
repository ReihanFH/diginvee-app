<?php

namespace App\Imports;

use App\Models\Guest;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuestsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Guest|null
     */
    public function model(array $row)
    {
        return new Guest([
            'id' => $row['id'],
            'name' => $row['name'],
            'phone' => '62' . $row['phone'],
            'note' => $row['note'],
            'code' => substr(md5($row['id']), 0, 12),
        ]);
    }
}