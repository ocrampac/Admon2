<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Profesor
 *
 * @property int $id
 * @property int $datosPersonales_id
 * @property string $ContactoTelefonicoTrabajo
 * @property int $adscripcion_id
 * @property int $categoria_id
 * @property int $tipoContrato_id
 * @property \Carbon\Carbon $FechaIngreso
 * @property int $estatus_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Datospersonale $datospersonale
 * @property \App\Models\Adscripcione $adscripcione
 * @property \App\Models\Categoria $categoria
 * @property \App\Models\Tiposcontrato $tiposcontrato
 * @property \App\Models\Estatus $estatus
 * @property \Illuminate\Database\Eloquent\Collection $experienciadocentes
 * @property \Illuminate\Database\Eloquent\Collection $experienciasprofesionaldocentes
 *
 * @package App\Models
 */
class Profesor extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'profesores';

	protected $casts = [
		'datosPersonales_id' => 'int',
		'adscripcion_id' => 'int',
		'categoria_id' => 'int',
		'tipoContrato_id' => 'int',
		'estatus_id' => 'int'
	];

	protected $dates = [
		'FechaIngreso'
	];

	protected $fillable = [
		'datosPersonales_id',
		'ContactoTelefonicoTrabajo',
		'adscripcion_id',
		'categoria_id',
		'tipoContrato_id',
		'FechaIngreso',
		'estatus_id'
	];

	public function datospersonale()
	{
		return $this->belongsTo(\App\Models\Datospersonale::class, 'datosPersonales_id');
	}

	public function adscripcion()
	{
		return $this->belongsTo(\App\Models\Adscripcion::class, 'adscripcion_id');
	}

	public function categoria()
	{
		return $this->belongsTo(\App\Models\Categoria::class);
	}

	public function tiposcontrato()
	{
		return $this->belongsTo(\App\Models\Tiposcontrato::class, 'tipoContrato_id');
	}

	public function estatus()
	{
		return $this->belongsTo(\App\Models\Estatus::class);
	}

	public function experienciadocentes()
	{
		return $this->hasMany(\App\Models\Experienciadocente::class);
	}

	public function experienciasprofesionaldocentes()
	{
		return $this->hasMany(\App\Models\Experienciasprofesionaldocente::class);
	}
}
