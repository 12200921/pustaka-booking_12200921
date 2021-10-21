<?php

namespace App\Database\Seeds;

use App\Models\Pengguna_12200921;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200921 extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'      => 'Richo Dwi W.R',
                'password'  => md5('12200921')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => '12200921',
                'password'  => md5('Richo Dwi W.R')
            ]
        ];

        $p = new Pengguna_12200921();
        $p->insertBatch($data);
    }
}
