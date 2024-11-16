<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('event_details', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigInteger('event_id')->unique()->autoIncrement();
=======
            $table->bigInteger('event_id')->unique();
>>>>>>> fc48673907dbea020c02c8d0370ee6d0d7cebc9e
            $table->string('e_name');
            $table->string('e_type');
            $table->string('organizer');
            $table->string('role');
            $table->dateTime('open_reg');
            $table->dateTime('close_reg');
            $table->dateTime('report_deadline');
            $table->text('e_desc');
            $table->text('notes')->nullable();
            $table->enum('cb_type', ['Pancasila', 'Kewarganegaraan', 'Agama']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_details');
    }
};
