<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function walls()
    {
        return $this->hasMany(\App\Models\Wall::class);
    }

    /**
     * Retorna a área pintável de todas as peredes da cor
     *
     * @return float
     */
    public function getArea()
    {
        return $this->walls->sum(fn($wall) => $wall->getArea());
    }

    /**
     * Retorna a quantidade em litros necessária para pintar toda a área da cor
     *
     * @return float
     */
    public function amountNeededToPaint()
    {
        return $this->walls->sum(fn($wall) => $wall->amountNeededToPaint());
    }
}