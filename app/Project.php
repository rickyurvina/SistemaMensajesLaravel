<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded=[];//mientras no se mande request all
    //protected $fillable=['title','url','description'];
    //
//    protected $table="projects";
}
