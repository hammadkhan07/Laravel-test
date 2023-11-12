<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignment extends Model
{
    use HasFactory;

    protected $fillable = [
       'company',
       'contact',
       'address_line_1',
       'address_line_2',
       'address_line_3',
       'city',
       'country',
       'file_path'
    ];
}
