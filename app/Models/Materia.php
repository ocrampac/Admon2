<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Materium
 *
 * @property int $id
 * @property int $posgrado_id
 * @property string $Nombre
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \App\Models\Posgrado $posgrado
 * @property \Illuminate\Database\Eloquent\Collection $docenciaposgrados
 *
 * @package App\Models
 */
class Materia extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'materias';
	protected $casts = [
		'posgrado_id' => 'int'
	];

	protected $fillable = [
		'posgrado_id',
		'Nombre'
	];

	public function posgrado()
	{
		return $this->belongsTo(\App\Models\Posgrado::class);
	}

	public function docenciaposgrados()
	{
		return $this->hasMany(\App\Models\Docenciaposgrado::class, 'materia_id');
	}
}
