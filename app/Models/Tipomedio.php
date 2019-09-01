<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tiposmedio
 *
 * @property int $id
 * @property string $TipoMedio
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $divulgaciones
 *
 * @package App\Models
 */
class Tipomedio extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tiposmedio';

	protected $fillable = [
		'TipoMedio'
	];

	public function divulgaciones()
	{
		return $this->hasMany(\App\Models\Divulgacione::class, 'tipoMedio_id');
	}
}
