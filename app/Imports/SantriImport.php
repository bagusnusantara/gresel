<?php

namespace App\Imports;

use App\Models\rb_santri;
use Maatwebsite\Excel\Concerns\ToModel;

class MitraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new rb_santri([
            'id_mitra' => $row[1],
            'nama' => $row[2],
            'status_wapu' => $row[3],
            'jalan' => $row[4],
            'id_kategori_mitra' => $row[5],
            'id_bidang_usaha' => $row[6],
            'updater' => $row[7]
        ]);
    }
}
