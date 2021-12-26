<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coch
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $matricula
 * @property $id_propietario
 *
 * @property Propietario $propietario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coch extends Model
{
    
    static $rules = [
		'marca' => 'required',
		'modelo' => 'required',
		'matricula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','modelo','matricula','id_propietario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function propietario()
    {
        return $this->hasOne('App\Models\Propietario', 'id', 'id_propietario');
    }
    

}
