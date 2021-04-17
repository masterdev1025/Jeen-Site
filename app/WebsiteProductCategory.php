<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteProductCategory extends Model
{
    //
    public $table = 'website_products_categories';
    public $timestamps = false;
    public $fillable = [
        'id',
        'category_name',
        'category_url_alias',
        'active',
        'sql_param',
        'html_data'
    ];
}
