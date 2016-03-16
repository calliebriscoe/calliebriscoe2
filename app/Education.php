<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'educations';
  /**
   * Get the user that owns the education.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
