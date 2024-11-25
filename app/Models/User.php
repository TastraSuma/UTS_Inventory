<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'users';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['username', 'nama', 'email'];

    // Optional: If you have timestamps in your table, you can enable this or remove it if not used
    public $timestamps = true;
}
