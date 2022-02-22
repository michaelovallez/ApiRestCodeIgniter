<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id','nombre','mail','admin','password'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

    // Validation
    protected $validationRules      = [
        'nombre' => 'required|alpha_numeric_space|min_length[3]|maz_length[75]',
        'password' => 'required|alpha_numeric|min_length[4]|maz_length[75]',
        'mail' => 'required|valid_email|maz_length[85]',
        'admin' => 'required|boolean',

    ];
    protected $validationMessages   = [
        'nombre'=>[
            'alpha_numeric_space'=>'El nombre ingresado debe poseer solo letras, numeros o espacios',
        ],
        'password'=>[
            'alpha_numeric'=>'La contraseña ingresada debe poseer letras y numeros',
            'min_length[4]'=>'la contraseña ingresada debe poseer 4 caracteres como minimo'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
