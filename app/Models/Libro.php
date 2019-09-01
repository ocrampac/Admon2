<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Libro
 * 
 * @property int $id
 * @property string $Titulo
 * @property string $ISBNImpreso
 * @property string $ISBNElectronico
 * @property string $Editorial
 * @property string $Edicion
 * @property string $AñoPublicacion
 * @property string $AñoEdicion
 * @property int $idioma_id
 * @property int $Volumen
 * @property int $Tomo
 * @property int $pais_id
 * @property int $Tiraje
 * @property int $NumPaginas
 * @property string $PalabraClave
 * @property string $PalabraClave2
 * @property string $PalabraClave3
 * @property string $ISBNTraducido
 * @property string $TituloTraducido
 * @property int $idiomaTraducido_id
 * @property int $apoyoInstitucional_id
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
 * @property \App\Models\Idioma $idioma
 * @property \App\Models\Campo $campo
 * @property \App\Models\Area $area
 * @property \App\Models\Disciplina $disciplina
 * @property \App\Models\Subdisciplina $subdisciplina
 * @property \App\Models\Apoyosinstitucionale $apoyosinstitucionale
 * @property \Illuminate\Database\Eloquent\Collection $autor_libros
 *
 * @package App\Models
 */
class Libro extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'idioma_id' => 'int',
		'Volumen' => 'int',
		'Tomo' => 'int',
		'pais_id' => 'int',
		'Tiraje' => 'int',
		'NumPaginas' => 'int',
		'idiomaTraducido_id' => 'int',
		'apoyoInstitucional_id' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int'
	];

	protected $fillable = [
		'Titulo',
		'ISBNImpreso',
		'ISBNElectronico',
		'Editorial',
		'Edicion',
		'AñoPublicacion',
		'AñoEdicion',
		'idioma_id',
		'Volumen',
		'Tomo',
		'pais_id',
		'Tiraje',
		'NumPaginas',
		'PalabraClave',
		'PalabraClave2',
		'PalabraClave3',
		'ISBNTraducido',
		'TituloTraducido',
		'idiomaTraducido_id',
		'apoyoInstitucional_id',
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

	public function idioma()
	{
		return $this->belongsTo(\App\Models\Idioma::class, 'idiomaTraducido_id');
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

	public function apoyosinstitucionale()
	{
		return $this->belongsTo(\App\Models\Apoyosinstitucionale::class, 'apoyoInstitucional_id');
	}

	public function autor_libros()
	{
		return $this->hasMany(\App\Models\AutorLibro::class);
	}
}
