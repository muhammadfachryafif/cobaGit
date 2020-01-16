<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\anggota::insert([
            [
                'nama_anggota'=>'fachri',
                'alamat'=>'sawojajar',
                'telp'=>'081180',
            ],
            [
                'nama_anggota'=>'afif',
                'alamat'=>'malang',
                'telp'=>'08123',
            ],
            [
                'nama_anggota'=>'fachriansyah',
                'alamat'=>'ngalam',
                'telp'=>'08900',
            ],
            [
                'nama_anggota'=>'rafly',
                'alamat'=>'sidoarjo',
                'telp'=>'0812345',
            ],
            [
                'nama_anggota'=>'nuril',
                'alamat'=>'malang',
                'telp'=>'08123456s',
            ]
        ]);
    }
}
