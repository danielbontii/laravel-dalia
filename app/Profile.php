<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_of_birth', 'gender', 'position', 'user_id', 'telephone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
