<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Lineageneracionaplicacion
 *
 * @property int $id
 * @property string $LineaGeneracionAplicacion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $articulo_lgacs
 *
 * @package App\Models
 */
class Lineageneracionaplicacion extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'lineasgeneracionaplicacion';

	protected $fillable = [
		'LineaGeneracionAplicacion'
	];

	public function articulo_lgacs()
	{
		return $this->hasMany(\App\Models\ArticuloLgac::class, 'LGAC_id');
	}
}
