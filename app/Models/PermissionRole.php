<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected  $table = 'permissionsRoles';
    protected $fillable =  ['idRole', 'idPage'];
}
