<?php

namespace Pirategram;

use Illuminate\Database\Eloquent\Model;

class myUser extends Model
{
    protected $fillable = ['strName', 'strEmail', 'strPassword', 'dateBirth', 
                                'strGender', 'strUserDescription', 'intCover', 'intProfile'];

    protected $dates = ['dateBirth'];

    protected $table = 'catUser';
    
    public function cover(){
        return $this->belongsTo('Pirategram\Multimedia', 'intCover');
    }

    public function profile(){
        return $this->belongsTo('Pirategram\Multimedia', 'intProfile');
    }

    public function coment(){
        return $this->hasMany('Pirategram\Coment', 'id');
    }

    public function post(){
        return $this->hasMany('Pirategram\Post', 'id');
    }

    public function pvtMsg(){
        return $this->belongsToMany('Pirategram\myUser', 'relPvtMsg', 'id', 'id');
    }

    public function follow(){
        return $this->belongsToMany('Pirategram\myUser', 'relFollow', 'id', 'id');
    }

    public function postLiked(){
        return $this->belongsToMany('Pirategram\Post', 'relPostLiked');
    }

}
