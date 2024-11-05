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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->string('photo')->nullable();
            $table->time('in')->nullable();
            $table->time('out')->nullable();
            $table->enum('status',['hadir','tidak hadir','replacement off']);
            $table->text('out_range_reason')->nullable();
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
