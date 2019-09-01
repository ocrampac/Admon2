<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:37:59 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Autore
 *
 * @property int $id
 * @property string $Nombre
 * @property string $ApellidoP
 * @property string $ApellidoM
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $articulo_autors
 * @property \Illuminate\Database\Eloquent\Collection $autor_capitulolibros
 * @property \Illuminate\Database\Eloquent\Collection $autor_congresos
 * @property \Illuminate\Database\Eloquent\Collection $autor_divulgacions
 * @property \Illuminate\Database\Eloquent\Collection $autor_doctrabajos
 * @property \Illuminate\Database\Eloquent\Collection $autor_libros
 * @property \Illuminate\Database\Eloquent\Collection $autor_memoria
 * @property \Illuminate\Database\Eloquent\Collection $autor_reportetecnicos
 * @property \Illuminate\Database\Eloquent\Collection $autor_reseñas
 * @property \Illuminate\Database\Eloquent\Collection $datospersonales
 * @property \Illuminate\Database\Eloquent\Collection $documentostrabajos
 * @property \Illuminate\Database\Eloquent\Collection $memorias
 * @property \Illuminate\Database\Eloquent\Collection $reseñas
 * @property \Illuminate\Database\Eloquent\Collection $tesisdirigidas
 *
 * @package App\Models
 */
class Autor extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'autores';
	protected $fillable = [
		'Nombre',
		'ApellidoP',
		'ApellidoM'
	];

 public function scopeName($query,$name)
{
	if ($name)
		return $query->where('Nombre','LIKE', "%$name");

}


	public function articulos()
	{
		return $this->belongsToMany(\App\Models\Articulo::class,'articulo_autor','autor_id','articulo_id');
	}

	public function capituloslibro()
	{
		return $this->belongsToMany('App\Models\Capituloslibro');
	}

	public function congresos()
	{
		return $this->belongsToMany(\App\Models\Congreso::class);
	}

	public function divulgaciones()
	{
		return $this->belongsToMany(\App\Models\Divulgacion::class);
	}

	public function doctrabajos()
	{
		return $this->belongsToMany(\App\Models\Doctrabajo::class);
	}

	public function libros()
	{
		return $this->belongsToMany(\App\Models\Libro::class);
	}


	public function reportestecnicos()
	{
		return $this->belongsToMany(\App\Models\Reportetecnico::class, 'autor_id');
	}

	public function reseñas()
	{
		return $this->belongsToMany(\App\Models\Reseña::class, 'autor_id');
	}

	public function datospersonales()
	{
		return $this->hasMany(\App\Models\Datopersonal::class, 'autor_id');
	}

	public function documentotrabajo()
	{
		return $this->belongsToMany(\App\Models\Documentotrabajo::class, 'autor_id');
	}



	public function tesisdirigida()
	{
		return $this->belongsToMany(\App\Models\Tesisdirigida::class, 'autor_id');
	}
}
