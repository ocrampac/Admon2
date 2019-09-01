<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:26:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Apoyoinstitucional
 *
 * @property int $id
 * @property string $ApoyoInstitucional
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App\Models
 */
class Apoyoinstitucional extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'apoyoinstitucional';

	protected $fillable = [
		'ApoyoInstitucional'
	];
	public function capitulolibro()
	{
		return $this->hasMany(\App\Models\Capitulolibro::class, 'apoyoInstitucional_id');
	}

	public function libros()
	{
		return $this->hasMany(\App\Models\Libro::class, 'apoyoInstitucional_id');
	}
}
