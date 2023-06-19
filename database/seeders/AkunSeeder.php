<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akun = [
            [
                'username' => 'pieter',
                'password' => Hash::make('123456'),
                'hak_akses_akun' => 'multimedia',
                'status_akun' => '1',
            ],
            [
                'username' => 'hao',
                'password' => Hash::make('123456'),
                'hak_akses_akun' => 'pendeta',
                'status_akun' => '0',
            ],
            [
                'username' => 'adi',
                'password' => Hash::make('123456'),
                'hak_akses_akun' => 'admin',
                'status_akun' => '1',
            ],
            
        ];
        Akun::insert($akun);
    }
}
