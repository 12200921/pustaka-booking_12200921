<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
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

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
