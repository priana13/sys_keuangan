<?php

namespace App\Imports;

use App\Models\NotaBon;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportNotaBon implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NotaBon([
            //
        ]);
    }
}
