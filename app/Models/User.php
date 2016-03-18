<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

		use Authenticatable, CanResetPassword;

		/**
	   * The database table used by the model.
	   *
	   * @var string
	   */
	  protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the comments for the user.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

		/**
     * Get the educations for the user.
     */
    public function educations()
    {
        return $this->hasMany('App\Models\Education');
    }

		/**
     * Get the experiences for the user.
     */
    public function experiences()
    {
        return $this->hasMany('App\Models\Experience');
    }

		/**
     * Get the posts for the user.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

		/**
     * Get the projects for the user.
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

		/**
  	 * One to Many relation
  	 *
  	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
  	 */
  	public function role()
  	{
  		return $this->belongsTo('App\Models\Role');
  	}

  	/**
  	 * Check media all access
  	 *
  	 * @return bool
  	 */
  	public function accessMediasAll()
  	{
  	    return $this->role->slug == 'admin';
  	}

		/**
  	 * Check media access one folder
  	 *
  	 * @return bool
  	 */
  	public function accessMediasFolder()
  	{
  	    return $this->role->slug != 'user';
  	}
  }
