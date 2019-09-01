<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Capituloslibro
 *
 * @property int $id
 * @property string $TituloLibro
 * @property string $ISBNImpreso
 * @property string $ISBNElectronico
 * @property string $Editorial
 * @property string $Edicion
 * @property string $AñoPublicacion
 * @property string $TituloCapitulo
 * @property int $NoCapitulo
 * @property int $PaginaDe
 * @property int $PaginaA
 * @property string $Resumen
 * @property int $area_id
 * @property int $campo_id
 * @property int $disciplina_id
 * @property int $subdisciplina_id
 * @property int $apoyoInstitucional_id
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
 * @property \App\Models\Apoyosinstitucionale $apoyosinstitucionale
 * @property \Illuminate\Database\Eloquent\Collection $autor_capitulolibros
 *
 * @package App\Models
 */
class Capitulolibro extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'capituloslibros';
	protected $casts = [
		'NoCapitulo' => 'int',
		'PaginaDe' => 'int',
		'PaginaA' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int',
		'apoyoInstitucional_id' => 'int'
	];

	protected $fillable = [
		'TituloLibro',
		'ISBNImpreso',
		'ISBNElectronico',
		'Editorial',
		'Edicion',
		'AñoPublicacion',
		'TituloCapitulo',
		'NoCapitulo',
		'PaginaDe',
		'PaginaA',
		'Resumen',
		'area_id',
		'campo_id',
		'disciplina_id',
		'subdisciplina_id',
		'apoyoInstitucional_id',
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

	public function apoyosinstitucionale()
	{
		return $this->belongsTo(\App\Models\Apoyoinstitucional::class, 'apoyoInstitucional_id');
	}

	public function autores()
	{
		return $this->belongsToMany(\App\Models\Autor::class, 'capituloLibro_id');
	}
}
