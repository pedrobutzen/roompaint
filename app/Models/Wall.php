<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wall extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'width',
        'height',
        'windows',
        'doors',
        'width',
        'direction',
        'color_id',
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
    public function room()
    {
        return $this->belongsTo(\App\Models\Room::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function color()
    {
        return $this->belongsTo(\App\Models\Color::class);
    }

    /**
     * Retorna a área pintável da parede
     *
     * @return float
     */
    public function getArea()
    {
        // subtrai a área total da parede pela área das janelas e portas
        return ($this->width * $this->height) - $this->getWindowsArea() - $this->getDoorsArea();
    }

    /**
     * Retorna a área total das janelas da parede
     *
     * @return float
     */
    public function getWindowsArea()
    {
        return $this->windows * (2.00 * 1.20);
    }

    /**
     * Retorna a área total das portas da parede
     *
     * @return float
     */
    public function getDoorsArea()
    {
        return $this->doors * (0.80 * 1.90);
    }

    /**
     * Retorna a quantidade em litros necessária para pintar a parede
     *
     * @return float
     */
    public function amountNeededToPaint()
    {
        return $this->getArea() / 5;
    }
}
