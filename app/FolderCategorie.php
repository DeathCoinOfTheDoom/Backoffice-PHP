<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolderCategorie extends Model 
{

    protected $table = 'folders_categories';
    public $timestamps = false;
    protected $fillable = array('name');

    public function filestypes()
    {
        return $this->hasMany('App\FileType');
    }

}