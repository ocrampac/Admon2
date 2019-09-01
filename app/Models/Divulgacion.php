<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Divulgacione
 *
 * @property int $id
 * @property string $InstitucionOrganizadora
 * @property string $TituloTrabajo
 * @property int $tipoParticipacion_id
 * @property int $tipoEvento_id
 * @property int $dirigido_id
 * @property \Carbon\Carbon $Fecha
 * @property string $NotasPeriodisticas
 * @property int $divulgacionyDifusion_id
 * @property int $tipoMedio_id
 * @property string $ProductoObtenido
 * @property string $PalabraClave
 * @property string $PalabraClave2
 * @property string $PalabraClave3
 * @property string $Archivo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Tiposparticipacion $tiposparticipacion
 * @property \App\Models\Tiposevento $tiposevento
 * @property \App\Models\Dirigido $dirigido
 * @property \App\Models\Divulgacionydifusion $divulgacionydifusion
 * @property \App\Models\Tiposmedio $tiposmedio
 * @property \Illuminate\Database\Eloquent\Collection $autor_divulgacions
 *
 * @package App\Models
 */
class Divulgacion extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'divulgaciones';
	protected $casts = [
		'tipoParticipacion_id' => 'int',
		'tipoEvento_id' => 'int',
		'dirigido_id' => 'int',
		'divulgacionyDifusion_id' => 'int',
		'tipoMedio_id' => 'int'
	];

	protected $dates = [
		'Fecha'
	];

	protected $fillable = [
		'InstitucionOrganizadora',
		'TituloTrabajo',
		'tipoParticipacion_id',
		'tipoEvento_id',
		'dirigido_id',
		'Fecha',
		'NotasPeriodisticas',
		'divulgacionyDifusion_id',
		'tipoMedio_id',
		'ProductoObtenido',
		'PalabraClave',
		'PalabraClave2',
		'PalabraClave3',
		'Archivo'
	];

	public function tiposparticipacion()
	{
		return $this->belongsTo(\App\Models\Tiposparticipacion::class, 'tipoParticipacion_id');
	}

	public function tiposevento()
	{
		return $this->belongsTo(\App\Models\Tiposevento::class, 'tipoEvento_id');
	}

	public function dirigido()
	{
		return $this->belongsTo(\App\Models\Dirigido::class);
	}

	public function divulgacionydifusion()
	{
		return $this->belongsTo(\App\Models\Divulgacionydifusion::class, 'divulgacionyDifusion_id');
	}

	public function tiposmedio()
	{
		return $this->belongsTo(\App\Models\Tiposmedio::class, 'tipoMedio_id');
	}

	public function autor_divulgacions()
	{
		return $this->hasMany(\App\Models\AutorDivulgacion::class, 'divulgacion_id');
	}
}
