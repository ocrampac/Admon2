<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:55:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Area
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
class Area extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Nombre'
	];

	public function articulo()
	{
		return $this->hasMany(\App\Models\Articulo::class);
	}

	public function capituloLibro()
	{
		return $this->hasMany(\App\Models\Capitulolibro::class);
	}

	public function cursoImpartido()
	{
		return $this->hasMany(\App\Models\Cursoimpartido::class);
	}

	public function diplomadoImpartido()
	{
		return $this->hasMany(\App\Models\Diplomadoimpartido::class);
	}

	public function documentoTrabajo()
	{
		return $this->hasMany(\App\Models\Documentostrabajo::class);
	}

	public function libro()
	{
		return $this->hasMany(\App\Models\Libro::class);
	}

	public function memoria()
	{
		return $this->hasMany(\App\Models\Memoria::class);
	}

	public function reseña()
	{
		return $this->hasMany(\App\Models\Reseña::class);
	}

	public function tesisdirigida()
	{
		return $this->hasMany(\App\Models\Tesisdirigida::class);
	}
}
