<?php

namespace App\Imports;

use App\Mou;
use Maatwebsite\Excel\Concerns\ToModel;

class MouImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mou([
            'id_mou' => $row[1],
            'no_mou' => $row[2],
            'no_mou_mitra' => $row[3],
            'tgl_mou' => $row[4],
            'tgl_masa_berlaku' => $row[5],
            'masa_berlaku' => $row[6],
            'penandatangan' => $row[7],
            'jabatan' => $row[8],
            'penandatangan_mitra' => $row[9],
            'jabatan_mitra' => $row[10],
            'id_mitra' => $row[11],
            'updater' => $row[13],
            'keterangan' => $row[14]
        ]);
    }
}
