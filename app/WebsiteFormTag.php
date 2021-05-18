<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteFormTag extends Model
{
    //
    public $table = 'websiteFormTags';
    public $timestamps = false;
    public $fillable = [
        'id',
        'tagType',
        'name',
        'active',
        'sortBy'
    ];
}
