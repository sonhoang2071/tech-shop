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
        Schema::table('orderdetail', function(Blueprint $table){
            $table
            ->foreign('id_sp')
            ->references('id')
            ->on('products');
        });
    }

 
    /**
     * Reverse the migrations.
     *    @return void
     */
    public function down()
    {
        Schema::table('orderdetail', function(Blueprint $table){
           $table->dropForeign('orderdetail_id_sp_foreign');
        });
    }

};
