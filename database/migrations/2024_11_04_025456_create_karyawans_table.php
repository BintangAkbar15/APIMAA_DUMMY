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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',70);
            $table->string('telp',20)->unique();
            $table->string('email',80)->unique();
            $table->date('date_of_birth');
            $table->string('education');
            $table->boolean('is_maried')->default(false);
            $table->string('address',100);
            $table->string('nik',20)->unique();
            $table->string('timezone',10);
            $table->string('nip',20)->unique()->nullable();
            $table->string('username',20)->nullable();
            $table->string('password',100)->nullable();
            $table->enum('contract',[3,6,12])->nullable();
            $table->unsignedBigInteger('divisi_id')->nullable();
            $table->foreign('divisi_id')->references('id')->on('divisis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
