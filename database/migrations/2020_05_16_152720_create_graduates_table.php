<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nopesubk');
            $table->string('nis');
            $table->string('nisn');
            $table->string('name');
            $table->string('slug');
            $table->string('ttl');
            $table->string('name_ortu');
            $table->string('nopes_skl');
            $table->string('ket');
            $table->integer('r_bind');
            $table->integer('r_bing');
            $table->integer('r_mat');
            $table->integer('r_ipa');
            $table->integer('r_agama');
            $table->integer('r_pkn');
            $table->integer('r_ips');
            $table->integer('r_seni');
            $table->integer('r_penjas');
            $table->integer('r_pra');
            $table->integer('r_jumlah');
            $table->float('r_rata');
            $table->integer('nus_bind');
            $table->integer('nus_bing');
            $table->integer('nus_mat');
            $table->integer('nus_ipa');
            $table->integer('nus_agama');
            $table->integer('nus_pkn');
            $table->integer('nus_ips');
            $table->integer('nus_seni');
            $table->integer('nus_penjas');
            $table->integer('nus_pra');
            $table->integer('nus_jumlah');
            $table->float('nus_rata');
            $table->integer('nas_bind');
            $table->integer('nas_bing');
            $table->integer('nas_mat');
            $table->integer('nas_ipa');
            $table->integer('nas_agama');
            $table->integer('nas_pkn');
            $table->integer('nas_ips');
            $table->integer('nas_seni');
            $table->integer('nas_penjas');
            $table->integer('nas_pra');
            $table->integer('nas_jumlah');
            $table->float('nas_rata');
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
        Schema::dropIfExists('graduates');
    }
}
