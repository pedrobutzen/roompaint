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

    /**
     * Retorna array com os tamanhos de lata recomendados para o usuário comprar
     *
     * @return array
     */
    public function recommendedGallonsToBuy()
    {
        $rest = $this->amountNeededToPaint();
        $sizes = [18, 3.6, 2.5, 0.5];
        $gallonsToBy = [
            '18' => 0, 
            '3.6' => 0, 
            '2.5' => 0, 
            '0.5' => 0
        ];

        foreach($sizes as $key => $size) {
            // caso não tenha resto, sair do loop
            if($rest <= 0)
                break;

            // verifica quantidade necessário do tamanho atual iterado
            $amount = ($key == count($sizes)-1) ? ceil($rest/$size) : intval($rest/$size);
            if($amount > 0) {
                // varifica quantidade total do tamanho atual não é maior que o tamanho anterior do loop
                // no último tamanho, a quantidade é arredondada pra cima, portanto pode acontecer do total arredondado ser igual ao tamanho anterior
                if($amount * $size >= $sizes[$key-1]){
                    $amount = 1;
                    $size = $sizes[$key-1];
                }

                // subtrai tamanho recomendado do resto
                $rest -= $size * $amount;
                $gallonsToBy[strval($size)] += $amount;
            }
        }

        // remove tamanhos com quantidade zero
        return array_filter($gallonsToBy);
    }
}
