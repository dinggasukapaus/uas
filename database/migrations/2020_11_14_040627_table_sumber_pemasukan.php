<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSumberPemasukan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadistributor', function (Blueprint $table) {
            $table->string('id', 40);
            $table->string('nama', 115);
            $table->string('nohp',15);
            $table->text('alamat');
            // $table->string('keterangan', 115);
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datadistributor');
    }
}
