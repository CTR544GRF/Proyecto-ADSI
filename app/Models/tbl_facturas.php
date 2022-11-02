<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_facturas extends Model
{
    use HasFactory;
    protected $primaryKey = 'num_factura';
}
