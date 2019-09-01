<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Datoslaboralesalumno
 *
 * @property int $id
 * @property int $datosPersonales_id
 * @property bool $TrabajoActual
 * @property string $Empresa
 * @property string $Departamento
 * @property string $Puesto
 * @property string $Direccion
 * @property \Carbon\Carbon $FechaInicio
 * @property \Carbon\Carbon $FechaFin
 * @property string $ContactoTelefonico
 * @property string $ContactoTelefonico2
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Datospersonale $datospersonale
 *
 * @package App\Models
 */
class Datolaboralalumno extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'datoslaboralesalumno';

	protected $casts = [
		'datosPersonales_id' => 'int',
		'TrabajoActual' => 'bool'
	];

	protected $dates = [
		'FechaInicio',
		'FechaFin'
	];

	protected $fillable = [
		'datosPersonales_id',
		'TrabajoActual',
		'Empresa',
		'Departamento',
		'Puesto',
		'Direccion',
		'FechaInicio',
		'FechaFin',
		'ContactoTelefonico',
		'ContactoTelefonico2'
	];

	public function datospersonale()
	{
		return $this->belongsTo(\App\Models\Datospersonale::class, 'datosPersonales_id');
	}
}
