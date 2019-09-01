<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tiempodedicado
 * 
 * @property int $id
 * @property string $TiempoDedicado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $gradosacademicos
 *
 * @package App\Models
 */
class Tiempodedicado extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tiempodedicado';

	protected $fillable = [
		'TiempoDedicado'
	];

	public function gradosacademicos()
	{
		return $this->hasMany(\App\Models\Gradosacademico::class, 'tiempoDedicado_id');
	}
}
