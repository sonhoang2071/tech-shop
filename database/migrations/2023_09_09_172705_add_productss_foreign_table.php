<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table){
            $table
            ->foreign('id_hieu')
            ->references('id')
            ->on('brands');
        });
    }

 
    /**
     * Reverse the migrations.
     *    @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
           $table->dropForeign('products_id_hieu_foreign');
        });
    }

};
