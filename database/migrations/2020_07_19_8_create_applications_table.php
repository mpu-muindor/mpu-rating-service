<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration {

    /**
     * Run the migrations.
     * @return void
     */
    public function up() {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('statement_number');
            $table->foreign('statement_number')->references('number')->on('statements')
                ->onDelete('cascade');
            $table->string('type', 45);
            $table->unsignedBigInteger('request_user_id');
            $table->unsignedBigInteger('response_user_id');
            $table->foreign('request_user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('response_user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->text('request_text');
            $table->text('response_text')->nullable();
            $table->dateTime('request_date');
            $table->dateTime('response_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down() {
        Schema::dropIfExists('applications');
    }
}
