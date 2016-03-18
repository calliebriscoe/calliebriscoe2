<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Comment extends Model
{
	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	/**
   * Get the user that owns the comment.
   */
  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }

	 /**
   * Get the post that owns the comment.
   */
  public function post()
  {
      return $this->belongsTo('App\Models\Post');
  }

	 /**
   * Get the parent comment that owns the comment.
   */
  public function parentComment()
  {
      return $this->belongsTo('App\Models\Comment');
  }

	 /**
   * Get the child comments owned by the comment.
   */
  public function childComments()
  {
      return $this->hasMany('App\Models\Comment');
  }
}
