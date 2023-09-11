<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function(Blueprint $table){
            $table->dropForeign('orders_user_id_foreign');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function(Blueprint $table){
            if(Schema::table('orders','user_id'))
            {
            $table
            ->foreign('user_id')
            ->references('id')
            ->on('users');
            }
            
        });
    }
};
