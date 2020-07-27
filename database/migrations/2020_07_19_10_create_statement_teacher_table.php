<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementTeacherTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('statement_teacher', function (Blueprint $table) {
            $table->string('statement_number', 16);
            $table->foreign('statement_number')->references('number')->on('statements')
                ->onDelete('cascade');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('status', 45);
            $table->boolean('has_signature');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('statement_teacher');
    }
}
