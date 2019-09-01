<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tesisdirigida
 * 
 * @property int $id
 * @property string $Institucion
 * @property int $autor_id
 * @property string $Titulo
 * @property int $estadoTesis_id
 * @property \Carbon\Carbon $FechaAprobacion
 * @property \Carbon\Carbon $FechaObtencionGrado
 * @property int $pais_id
 * @property int $gradoAcademico_id
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
 * @property \App\Models\Paise $paise
 * @property \App\Models\Campo $campo
 * @property \App\Models\Area $area
 * @property \App\Models\Disciplina $disciplina
 * @property \App\Models\Subdisciplina $subdisciplina
 * @property \App\Models\Autore $autore
 * @property \App\Models\Gradosacademico $gradosacademico
 * @property \App\Models\Estadotesi $estadotesi
 *
 * @package App\Models
 */
class Tesisdirigida extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'autor_id' => 'int',
		'estadoTesis_id' => 'int',
		'pais_id' => 'int',
		'gradoAcademico_id' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int'
	];

	protected $dates = [
		'FechaAprobacion',
		'FechaObtencionGrado'
	];

	protected $fillable = [
		'Institucion',
		'autor_id',
		'Titulo',
		'estadoTesis_id',
		'FechaAprobacion',
		'FechaObtencionGrado',
		'pais_id',
		'gradoAcademico_id',
		'area_id',
		'campo_id',
		'disciplina_id',
		'subdisciplina_id',
		'Archivo',
		'Link'
	];

	public function paise()
	{
		return $this->belongsTo(\App\Models\Paise::class, 'pais_id');
	}

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

	public function gradosacademico()
	{
		return $this->belongsTo(\App\Models\Gradosacademico::class, 'gradoAcademico_id');
	}

	public function estadotesi()
	{
		return $this->belongsTo(\App\Models\Estadotesi::class, 'estadoTesis_id');
	}
}
