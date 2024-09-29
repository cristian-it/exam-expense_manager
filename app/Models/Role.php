<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    // protected $table = 'role';

    // finding a record ex. for editing
    static public function getSingleRecord($id)
    {
        return Role::find($id);
    }

    // getting record
    static public function getRecord()
    {
        return Role::get();
    }


}
