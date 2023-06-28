<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $priority
 * @property $category
 * @property $etiqueta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ticket extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
		'priority' => 'required',
		'category' => 'required',
		'etiqueta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','priority','category','etiqueta'];



}
