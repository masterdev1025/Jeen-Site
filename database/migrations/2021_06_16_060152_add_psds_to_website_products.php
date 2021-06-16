<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPsdsToWebsiteProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('website_products', function (Blueprint $table) {
            //
            $table->integer('pdfSds')->default(1);
            $table->integer('pdfSpecs')->default(0);
            $table->integer('pdfTds')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_products', function (Blueprint $table) {
            //
            $table->dropColumn('pdfSds');
            $table->dropColumn('pdfSpecs');
            $table->dropColumn('pdfTds');
        });
    }
}
