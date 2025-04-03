<?php

namespace App\Models;

use CodeIgniter\Model;

class contatoModel extends Model
{
    protected $table      = 'contatos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'message', 'created_at'];
}