<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteFormTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websiteFormTags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tagType');
            $table->string('name');
            $table->integer('active')->default(1);
            $table->integer('sortBy');
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
        Schema::dropIfExists('websiteFormTags');
    }
}
