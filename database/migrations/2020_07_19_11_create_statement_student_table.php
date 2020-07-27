<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatementStudentTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('statement_student', function (Blueprint $table) {
            $table->string('statement_number', 16);
            $table->foreign('statement_number')->references('number')->on('statements')
                ->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('ticket_number')->nullable();
            $table->string('mark', 24);
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('statement_student');
    }
}
