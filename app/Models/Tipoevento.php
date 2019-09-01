<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:02 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tiposevento
 *
 * @property int $id
 * @property string $TipoEvento
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $divulgaciones
 *
 * @package App\Models
 */
class Tipoevento extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tiposevento';

	protected $fillable = [
		'TipoEvento'
	];

	public function divulgaciones()
	{
		return $this->hasMany(\App\Models\Divulgacione::class, 'tipoEvento_id');
	}
}
