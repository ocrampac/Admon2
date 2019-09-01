<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 01 Sep 2019 19:56:01 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Divulgacionydifusion
 * 
 * @property int $id
 * @property string $DivulgacionyDifusion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $divulgaciones
 *
 * @package App\Models
 */
class Divulgacionydifusion extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'divulgacionydifusion';

	protected $fillable = [
		'DivulgacionyDifusion'
	];

	public function divulgaciones()
	{
		return $this->hasMany(\App\Models\Divulgacione::class, 'divulgacionyDifusion_id');
	}
}
