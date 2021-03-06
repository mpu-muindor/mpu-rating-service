<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCathedrasTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up(){
        Schema::create('cathedras', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->foreignId('faculity_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cathedras');
    }
}
