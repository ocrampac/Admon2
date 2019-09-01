<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Cursosimpartido
 *
 * @property int $id
 * @property string $InstitucionOrganizadora
 * @property string $NombrePrograma
 * @property string $NombreCurso
 * @property \Carbon\Carbon $FechaInicio
 * @property \Carbon\Carbon $FechaFin
 * @property int $HorasTotales
 * @property int $area_id
 * @property int $campo_id
 * @property int $disciplina_id
 * @property int $subdisciplina_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Campo $campo
 * @property \App\Models\Area $area
 * @property \App\Models\Disciplina $disciplina
 * @property \App\Models\Subdisciplina $subdisciplina
 *
 * @package App\Models
 */
class Cursoimpartido extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'cursosimpartidos';
	protected $casts = [
		'HorasTotales' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int'
	];

	protected $dates = [
		'FechaInicio',
		'FechaFin'
	];

	protected $fillable = [
		'InstitucionOrganizadora',
		'NombrePrograma',
		'NombreCurso',
		'FechaInicio',
		'FechaFin',
		'HorasTotales',
		'area_id',
		'campo_id',
		'disciplina_id',
		'subdisciplina_id'
	];

	public function campo()
	{
		return $this->belongsTo(\App\Models\Campo::class);
	}

	public function area()
	{
		return $this->belongsTo(\App\Models\Area::class);
	}

	public function disciplina()
	{
		return $this->belongsTo(\App\Models\Disciplina::class);
	}

	public function subdisciplina()
	{
		return $this->belongsTo(\App\Models\Subdisciplina::class);
	}
}
