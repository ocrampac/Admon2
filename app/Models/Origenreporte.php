<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Origenreporte
 * 
 * @property int $id
 * @property string $OrigenReporte
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $reportetecnicos
 *
 * @package App\Models
 */
class Origenreporte extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'origenreporte';

	protected $fillable = [
		'OrigenReporte'
	];

	public function reportetecnicos()
	{
		return $this->hasMany(\App\Models\Reportetecnico::class, 'origenReporte_id');
	}
}
