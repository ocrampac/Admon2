<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Reportetecnico
 * 
 * @property int $id
 * @property string $Titulo
 * @property string $InstitucionDestino
 * @property \Carbon\Carbon $FechaEntrega
 * @property \Carbon\Carbon $FechaPublicacion
 * @property int $NumPaginas
 * @property int $origenReporte_id
 * @property string $Descripcion
 * @property string $Objetivos
 * @property string $PalabraClave
 * @property string $PalabraClave2
 * @property string $PalabraClave3
 * @property string $Archivo
 * @property string $Link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Origenreporte $origenreporte
 * @property \Illuminate\Database\Eloquent\Collection $autor_reportetecnicos
 *
 * @package App\Models
 */
class Reportetecnico extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'reportetecnico';

	protected $casts = [
		'NumPaginas' => 'int',
		'origenReporte_id' => 'int'
	];

	protected $dates = [
		'FechaEntrega',
		'FechaPublicacion'
	];

	protected $fillable = [
		'Titulo',
		'InstitucionDestino',
		'FechaEntrega',
		'FechaPublicacion',
		'NumPaginas',
		'origenReporte_id',
		'Descripcion',
		'Objetivos',
		'PalabraClave',
		'PalabraClave2',
		'PalabraClave3',
		'Archivo',
		'Link'
	];

	public function origenreporte()
	{
		return $this->belongsTo(\App\Models\Origenreporte::class, 'origenReporte_id');
	}

	public function autor_reportetecnicos()
	{
		return $this->hasMany(\App\Models\AutorReportetecnico::class, 'reporteTecnico_id');
	}
}
