<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

class SiswaImport implements WithHeadingRow,ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        // $validator = Validator::make($rows->toArray(), [
        //     '*.name' => 'required',
        //     '*.nisn' => 'required|unique:users',
        //     '*.email' => 'required|unique:users',
        //     '*.jenis_kelamin' => 'required',
        //     '*.komptensi_keahlian' => 'required',
        //     '*.alamat' => 'required',
        //     '*.avatar' => 'required',
        //     '*.tanggal' => 'required',
        //     '*.tempat' => 'required',
        //     '*.agama' => 'required',
        // ])->validate();

        foreach ($rows as $row) {
            User::create([
                'name' => $row['name'],
                'nisn' => $row['nisn'], 
                'email' => $row['email'], 
                'jenis_kelamin' => $row['jenis_kelamin'], 
                'komptensi_keahlian' => $row['komptensi_keahlian'], 
                'alamat' => $row['alamat'], 
                'avatar' => $row['avatar'], 
                'tanggal' => $row['tanggal'], 
                'tempat' => $row['tempat'], 
                'agama' => $row['agama'], 
                'password' => $row['nisn'], 
            ]);
        }
    }
}
