<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteProduct extends Model
{
    //
    public $table = 'website_products';
    public $timestamps = false;
    public $fillable = [
        'id',
        'companyId',
        'product_name',
        'product_name_clean',
        'product_id',
        'url_alias',
        'product_type',
        'product_categories',
        'product_inci',
        'short_description',
        'chemical_families',
        'image_url',
        'product_status',
        'primary_category_id',
        'active',
        'private'
    ];
    public function primaryCategory(){
        return $this->belongsTo('App\WebsiteProductCategory'. 'primary_category_id');
    }
}
