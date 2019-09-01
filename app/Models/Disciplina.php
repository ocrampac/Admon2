<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Disciplina
 * 
 * @property int $id
 * @property string $Nombre
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $articulos
 * @property \Illuminate\Database\Eloquent\Collection $capituloslibros
 * @property \Illuminate\Database\Eloquent\Collection $cursosimpartidos
 * @property \Illuminate\Database\Eloquent\Collection $diplomadosimpartidos
 * @property \Illuminate\Database\Eloquent\Collection $documentostrabajos
 * @property \Illuminate\Database\Eloquent\Collection $libros
 * @property \Illuminate\Database\Eloquent\Collection $memorias
 * @property \Illuminate\Database\Eloquent\Collection $reseñas
 * @property \Illuminate\Database\Eloquent\Collection $tesisdirigidas
 *
 * @package App\Models
 */
class Disciplina extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Nombre'
	];

	public function articulos()
	{
		return $this->hasMany(\App\Models\Articulo::class);
	}

	public function capituloslibros()
	{
		return $this->hasMany(\App\Models\Capituloslibro::class);
	}

	public function cursosimpartidos()
	{
		return $this->hasMany(\App\Models\Cursosimpartido::class);
	}

	public function diplomadosimpartidos()
	{
		return $this->hasMany(\App\Models\Diplomadosimpartido::class);
	}

	public function documentostrabajos()
	{
		return $this->hasMany(\App\Models\Documentostrabajo::class);
	}

	public function libros()
	{
		return $this->hasMany(\App\Models\Libro::class);
	}

	public function memorias()
	{
		return $this->hasMany(\App\Models\Memoria::class);
	}

	public function reseñas()
	{
		return $this->hasMany(\App\Models\Reseña::class);
	}

	public function tesisdirigidas()
	{
		return $this->hasMany(\App\Models\Tesisdirigida::class);
	}
}
