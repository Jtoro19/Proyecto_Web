<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'roleID',
        'userName',
        'nickname',
        'email',
        'phoneNumber',
        'password',
        'able',
    ];

    // Removed duplicate role method

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
    return $this->hasMany(Address::class, 'userID', 'id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'roleID', 'id'); // Asegúrate de que la clave foránea y primaria sean correctas
    }
}
