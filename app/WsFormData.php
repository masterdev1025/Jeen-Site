<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WsFormData extends Model
{
    //
    public $table = 'ws_form_data';
    public $fillable = [
        'id',
        'companyId',
        'form_url',
        'form_type',
        'product_name',
        'user_ip',
        'contact_name',
        'contact_company',
        'contact_phone',
        'contact_email',
        'contact_reason',
        'contact_country',
        'contact_state',
        'message',
        'browserData',
        'sync',
        'active',
        'spam',
        'status',
        'sync_date'
    ];
}
