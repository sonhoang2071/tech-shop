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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maSP',100);
            $table->string('tenSP',100)->nullable();
            $table->string('hinhanh',100)->nullable();
            $table->integer('id_loai')->unsigned();
            $table->integer('id_hieu')->unsigned();
            $table->integer('soLuong')->nullable();
            $table->integer('giaMua')->nullable();
            $table->integer('giaBan')->nullable();
            $table->timestamp('ngayNhap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
