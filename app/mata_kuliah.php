<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    protected $table = 'mata_kuliah';

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
}
