<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Idioma
 * 
 * @property int $id
 * @property string $Idioma
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $libros
 *
 * @package App\Models
 */
class Idioma extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Idioma'
	];

	public function libros()
	{
		return $this->hasMany(\App\Models\Libro::class, 'idiomaTraducido_id');
	}
}
