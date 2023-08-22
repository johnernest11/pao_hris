<?php

namespace App\Models;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model 
{
    use HasFactory;
    use Notifiable;
    use CanResetPassword;
    public $connection ="mysql";

    protected $table='users';
    protected $primaryKey = 'id';
    
}
