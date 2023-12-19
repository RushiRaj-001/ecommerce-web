<?php

namespace App\Models;

use CodeIgniter\Model;

class Products extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['prod_id','prod_name','category','image','prod_price'];
}

 