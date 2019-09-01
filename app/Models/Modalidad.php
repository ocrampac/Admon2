<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Modalidade
 *
 * @property int $id
 * @property string $Modalidad
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $gradosacademicos
 *
 * @package App\Models
 */
class Modalidad extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'modalidades';
	protected $fillable = [
		'Modalidad'
	];

	public function gradosacademicos()
	{
		return $this->hasMany(\App\Models\Gradosacademico::class, 'modalidad_id');
	}
}
