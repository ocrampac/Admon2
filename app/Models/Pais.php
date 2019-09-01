<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paise
 *
 * @property int $id
 * @property string $Pais
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $congresos
 * @property \Illuminate\Database\Eloquent\Collection $datospersonales
 * @property \Illuminate\Database\Eloquent\Collection $documentostrabajos
 * @property \Illuminate\Database\Eloquent\Collection $gradosacademicos
 * @property \Illuminate\Database\Eloquent\Collection $libros
 * @property \Illuminate\Database\Eloquent\Collection $memorias
 * @property \Illuminate\Database\Eloquent\Collection $practicasinternacionales
 * @property \Illuminate\Database\Eloquent\Collection $reseñas
 * @property \Illuminate\Database\Eloquent\Collection $tesisdirigidas
 *
 * @package App\Models
 */
class Pais extends Eloquent
{
	protected $table = 'Paises';
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Pais'
	];

	public function congresos()
	{
		return $this->hasMany(\App\Models\Congreso::class, 'pais_id');
	}

	public function datospersonales()
	{
		return $this->hasMany(\App\Models\Datospersonale::class, 'paisOrigen_id');
	}

	public function documentostrabajos()
	{
		return $this->hasMany(\App\Models\Documentostrabajo::class, 'pais_id');
	}

	public function gradosacademicos()
	{
		return $this->hasMany(\App\Models\Gradosacademico::class, 'pais_id');
	}

	public function libros()
	{
		return $this->hasMany(\App\Models\Libro::class, 'pais_id');
	}

	public function memorias()
	{
		return $this->hasMany(\App\Models\Memoria::class, 'pais_id');
	}

	public function practicasinternacionales()
	{
		return $this->hasMany(\App\Models\Practicasinternacionale::class, 'pais_id');
	}

	public function reseñas()
	{
		return $this->hasMany(\App\Models\Reseña::class, 'pais_id');
	}

	public function tesisdirigidas()
	{
		return $this->hasMany(\App\Models\Tesisdirigida::class, 'pais_id');
	}
}
