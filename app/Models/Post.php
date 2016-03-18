<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Post extends Model
{
    use DatePresenter;

    /**
  	 * The database table used by the model.
  	 *
  	 * @var string
  	 */
  	protected $table = 'posts';

  	/**
  	 * Get the user that owns the post.
  	 *
  	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
  	 */
  	public function user()
  	{
  		return $this->belongsTo('App\Models\User');
  	}

    /**
     * Many to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function tags()
    {
    	return $this->belongsToMany('App\Models\Tag');
    }

  	/**
  	 * Get the comments of the post.
  	 *
  	 * @return Illuminate\Database\Eloquent\Relations\hasMany
  	 */
  	public function comments()
  	{
  		return $this->hasMany('App\Models\Comment');
  	}
}
