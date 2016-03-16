<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'experiences';
  /**
   * Get the user that owns the experience.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
