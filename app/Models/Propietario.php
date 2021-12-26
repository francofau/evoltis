<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Propietario
 *
 * @property $id
 * @property $nombre
 * @property $dni
 * @property $direccion
 * @property $telefono
 *
 * @property Coch[] $coches
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Propietario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'dni' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','dni','direccion','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coches()
    {
        return $this->hasMany('App\Models\Coch', 'id_propietario', 'id');
    }
    

}
