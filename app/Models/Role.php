<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 1;
    const PESERTA = 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role';
}
