<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Congreso
 * 
 * @property int $id
 * @property string $TituloTrabajo
 * @property string $NombreCongreso
 * @property int $tipoParticipacion_id
 * @property int $pais_id
 * @property \Carbon\Carbon $Fecha
 * @property string $PalabraClave
 * @property string $PalabraClave2
 * @property string $PalabraClave3
 * @property string $Archivo
 * @property string $Link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Paise $paise
 * @property \App\Models\Tiposparticipacion $tiposparticipacion
 * @property \Illuminate\Database\Eloquent\Collection $autor_congresos
 *
 * @package App\Models
 */
class Congreso extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'tipoParticipacion_id' => 'int',
		'pais_id' => 'int'
	];

	protected $dates = [
		'Fecha'
	];

	protected $fillable = [
		'TituloTrabajo',
		'NombreCongreso',
		'tipoParticipacion_id',
		'pais_id',
		'Fecha',
		'PalabraClave',
		'PalabraClave2',
		'PalabraClave3',
		'Archivo',
		'Link'
	];

	public function paise()
	{
		return $this->belongsTo(\App\Models\Paise::class, 'pais_id');
	}

	public function tiposparticipacion()
	{
		return $this->belongsTo(\App\Models\Tiposparticipacion::class, 'tipoParticipacion_id');
	}

	public function autor_congresos()
	{
		return $this->hasMany(\App\Models\AutorCongreso::class);
	}
}
