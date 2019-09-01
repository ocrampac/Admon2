<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Curso
 * 
 * @property int $id
 * @property string $Curso
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $curso_diplomados
 *
 * @package App\Models
 */
class Curso extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'Curso'
	];

	public function curso_diplomados()
	{
		return $this->hasMany(\App\Models\CursoDiplomado::class);
	}
}
