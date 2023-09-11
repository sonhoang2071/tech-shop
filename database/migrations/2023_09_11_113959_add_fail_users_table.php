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
            
            if(!Schema::hasColumn('users', 'role'))
            {
                $table->string('role',20)->after('email');
            }

            if(!Schema::hasColumn('users', 'phone'))
            {
                $table->string('phone',100)->after('role');
            }

            if(!Schema::hasColumn('users', 'dob'))
            {
                $table->date('dob')->after('phone');
            }

            if(!Schema::hasColumn('users', 'gender'))
            {
                $table->integer('gender')->after('dob');
            }

            if(!Schema::hasColumn('users', 'address'))
            {
                $table->text('address')->after('gender');
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

            if(Schema::hasColumn('users', 'phone'))
            {
                $table->dropColumn('phone');
            }

            if(Schema::hasColumn('users', 'dob'))
            {
                $table->dropColumn('dob');
            }

            if(Schema::hasColumn('users', 'gender'))
            {
                $table->dropColumn('gender');
            }

            if(Schema::hasColumn('users', 'address'))
            {
                $table->dropColumn('address');
            }
           
        });
    }
};
