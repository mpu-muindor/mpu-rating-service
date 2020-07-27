<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementsTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('statements', function (Blueprint $table) {
            $table->string('number', 16)->primary();
            $table->string('kind', 128);
            $table->string('type', 128)->nullable();
            $table->boolean('is_individual');
            $table->string('subject', 255);
            $table->string('mark_type', 128);
            $table->foreignId('cathedra_id')->constrained()->onDelete('cascade');
            $table->dateTime('certification_from')->nullable();
            $table->dateTime('certification_to')->nullable();
            $table->dateTime('unblocking_from')->nullable();
            $table->dateTime('unblocking_to')->nullable();
            $table->dateTime('closing_date')->nullable();
            $table->integer('course');
            $table->integer('semester');
            $table->string('education_form', 45)->nullable();
            $table->string('profile', 45);
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('statements');
    }
}
