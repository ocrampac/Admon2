<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Diplomadosimpartido
 *
 * @property int $id
 * @property string $Institucion
 * @property string $NombreDiplomado
 * @property string $NombreCurso
 * @property string $AñoPublicacion
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
 * @property \Illuminate\Database\Eloquent\Collection $curso_diplomados
 *
 * @package App\Models
 */
class Diplomadoimpartido extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'diplomadosimpartidos';
	protected $casts = [
		'HorasTotales' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int'
	];

	protected $fillable = [
		'Institucion',
		'NombreDiplomado',
		'NombreCurso',
		'AñoPublicacion',
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

	public function curso_diplomados()
	{
		return $this->hasMany(\App\Models\CursoDiplomado::class, 'dipImp_id');
	}
}
