<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Memoria
 * 
 * @property int $id
 * @property string $Titulo
 * @property int $autor_id
 * @property int $PaginaDe
 * @property int $PaginaA
 * @property \Carbon\Carbon $FechaPublicacion
 * @property int $pais_id
 * @property string $PalabraClave
 * @property string $PalabraClave2
 * @property string $PalabraClave3
 * @property int $area_id
 * @property int $campo_id
 * @property int $disciplina_id
 * @property int $subdisciplina_id
 * @property string $Archivo
 * @property string $Link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\Campo $campo
 * @property \App\Models\Area $area
 * @property \App\Models\Disciplina $disciplina
 * @property \App\Models\Subdisciplina $subdisciplina
 * @property \App\Models\Autore $autore
 * @property \App\Models\Paise $paise
 * @property \Illuminate\Database\Eloquent\Collection $autor_memoria
 *
 * @package App\Models
 */
class Memoria extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'autor_id' => 'int',
		'PaginaDe' => 'int',
		'PaginaA' => 'int',
		'pais_id' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int'
	];

	protected $dates = [
		'FechaPublicacion'
	];

	protected $fillable = [
		'Titulo',
		'autor_id',
		'PaginaDe',
		'PaginaA',
		'FechaPublicacion',
		'pais_id',
		'PalabraClave',
		'PalabraClave2',
		'PalabraClave3',
		'area_id',
		'campo_id',
		'disciplina_id',
		'subdisciplina_id',
		'Archivo',
		'Link'
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

	public function autore()
	{
		return $this->belongsTo(\App\Models\Autore::class, 'autor_id');
	}

	public function paise()
	{
		return $this->belongsTo(\App\Models\Paise::class, 'pais_id');
	}

	public function autor_memoria()
	{
		return $this->hasMany(\App\Models\AutorMemorium::class);
	}
}
