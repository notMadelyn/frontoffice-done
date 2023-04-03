<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Rekayasa Perangkat Lunak', 'Akuntansi Keuangan Lembaga 1', 'Akuntansi Keuangan Lembaga 2' , 'Bisnis Daring Pemasaran 1','Bisnis Daring Pemasaran 2', 'Otomatisasi Tata Kelola Perkantoran 1', 'Otomatisasi Tata Kelola Perkantoran 2']);
            // $table->enum('class', ['1','2'])->nullable();
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
        Schema::dropIfExists('majors');
    }
}
