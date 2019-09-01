<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Estadotesi
 *
 * @property int $id
 * @property string $EstadoTesis
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @property \Illuminate\Database\Eloquent\Collection $tesisdirigidas
 *
 * @package App\Models
 */
class Estadotesis extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
  protected $table = 'estadostesis';
	protected $fillable = [
		'EstadoTesis'
	];

	public function tesisdirigidas()
	{
		return $this->hasMany(\App\Models\Tesisdirigida::class, 'estadoTesis_id');
	}
}
