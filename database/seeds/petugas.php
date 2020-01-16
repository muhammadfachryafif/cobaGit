<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\petugas::insert ([
            [
                'nama_petugas'=>'fachri',
                'alamat'=>'sawojajar',
                'telp'=>'08123',
                'username'=>'fachryafif',
                'password'=>'fachri123',
            ],
            [
                'nama_petugas'=>'rafly',
                'alamat'=>'sidoarjo',
                'telp'=>'081234',
                'username'=>'muhammadrafly',
                'password'=>'rafly123',
            ],
            [
                'nama_petugas'=>'ocir',
                'alamat'=>'madiun',
                'telp'=>'0812345',
                'username'=>'ocirico',
                'password'=>'ocir123',
            ],
            [
                'nama_petugas'=>'saddam',
                'alamat'=>'malang',
                'telp'=>'08123456',
                'username'=>'saddamraihan',
                'password'=>'saddam123',
            ],
            [
                'nama_petugas'=>'nuril',
                'alamat'=>'ngalam',
                'telp'=>'081234567',
                'username'=>'nurilhaidar',
                'password'=>'nuril123'
            ]
        ]);
    }
}
