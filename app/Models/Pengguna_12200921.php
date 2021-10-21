<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna_12200921 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200921';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

    public function cekLogin($user, $pass)
    {
        return $this->where('nama', $user)
            ->where('password', md5($pass))->first();
    }
}
