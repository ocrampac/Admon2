<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Articulo
 *
 * @property int $id
 * @property string $TituloArticulo
 * @property string $NombreRevista
 * @property string $ISSNImpreso
 * @property string $ISSNElectronico
 * @property string $DOI
 * @property int $NumRevista
 * @property int $VolumenRevista
 * @property string $AñoPublicacion
 * @property int $PaginaDe
 * @property int $PaginaA
 * @property string $PalabraClave
 * @property string $PalabraClave2
 * @property string $PalabraClave3
 * @property int $area_id
 * @property int $campo_id
 * @property int $disciplina_id
 * @property int $subdisciplina_id
 * @property string $Indexado
 * @property string $Arbitrado
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
 * @property \Illuminate\Database\Eloquent\Collection $articulo_autors
 * @property \Illuminate\Database\Eloquent\Collection $articulo_lgacs
 *
 * @package App\Models
 */
class Articulo extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'articulos';

	protected $casts = [
		'NumRevista' => 'int',
		'VolumenRevista' => 'int',
		'PaginaDe' => 'int',
		'PaginaA' => 'int',
		'area_id' => 'int',
		'campo_id' => 'int',
		'disciplina_id' => 'int',
		'subdisciplina_id' => 'int'
	];

	protected $fillable = [
		'TituloArticulo',
		'NombreRevista',
		'ISSNImpreso',
		'ISSNElectronico',
		'DOI',
		'NumRevista',
		'VolumenRevista',
		'AñoPublicacion',
		'PaginaDe',
		'PaginaA',
		'PalabraClave',
		'PalabraClave2',
		'PalabraClave3',
		'area_id',
		'campo_id',
		'disciplina_id',
		'subdisciplina_id',
		'Indexado',
		'Arbitrado',
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

	public function autores()
	{
		return $this->belongsToMany(\App\Models\Autor::class);
	}

	public function lgac()
	{
		return $this->belongsTo(\App\Models\Lineageneracionaplicacion::class);
	}
}
