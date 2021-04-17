<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('companyId');
            $table->string('product_name');
            $table->string('product_name_clean');
            $table->integer('product_id');
            $table->string('url_alias');
            $table->string('product_type');
            $table->string('product_categories');
            $table->text('product_inci');
            $table->text('short_description');
            $table->string('chemical_families');
            $table->string('image_url');
            $table->string('product_status');
            $table->integer('active');
            $table->integer('private')->default(0);
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
        Schema::dropIfExists('website_products');
    }
}
