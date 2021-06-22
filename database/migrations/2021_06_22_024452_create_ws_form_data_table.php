<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_form_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('companyId')->default(1);
            $table->string('form_url');
            $table->string('form_type');
            $table->string('product_name');
            $table->string('user_ip');
            $table->string('contact_name');
            $table->string('contact_company');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('contact_reason');
            $table->string('contact_country');
            $table->string('contact_state');
            $table->text('message');
            $table->text('browserData');
            $table->integer('sync')->default(0);
            $table->integer('active')->default(1);
            $table->integer('spam')->default(0);
            $table->integer('status')->default(0);
            $table->string('sync_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_form_data');
    }
}
