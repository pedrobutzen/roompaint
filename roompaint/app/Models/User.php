<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function colors()
    {
        return $this->hasMany(\App\Models\Color::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function rooms()
    {
        return $this->hasMany(\App\Models\Room::class);
    }

    /**
     * Retorna a área pintável de todas as peredes do imóvel do usuário
     *
     * @return float
     */
    public function getArea()
    {
        return $this->rooms->sum(fn($room) => $room->getArea());
    }

    /**
     * Retorna a quantidade em litros necessária para todo o imóvel do usuário
     *
     * @return float
     */
    public function amountNeededToPaint()
    {
        return $this->rooms->sum(fn($room) => $room->amountNeededToPaint());
    }
}
