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
        Schema::table('users', function (Blueprint $table)
        {
            
            if(Schema::hasColumn('users', 'role'))
            {
                $table->string('role',20)->after('email');
            }

          

        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            
            if(Schema::hasColumn('users', 'role'))
            {
                $table->dropColumn('role');
            }

           
        });
    }
};
