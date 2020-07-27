<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarsTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();
            $table->string('link', 512)->unique();
            $table->string('room_name', 128);
            $table->string('password')->nullable();
            $table->string('statement_number', 16)->nullable();
            $table->foreign('statement_number')->references('number')->on('statements')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('webinars');
    }
}
