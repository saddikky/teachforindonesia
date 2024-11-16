<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('progress_details', function (Blueprint $table) {
            $table->id('p_id'); // Primary Key
            $table->enum('status', ['waiting', 'in-review', 'revision', 'reviewed']);
            $table->string('nim'); // This is your foreign key column
            $table->foreign('nim')->references('nim')->on('users')->onDelete('cascade');
            $table->string('leader_nim');
            $table->string('lecturer_code');
            $table->string('lecturer');
            $table->string('cb_type');
            $table->bigInteger('event_id');
            $table->foreign('event_id')->references('event_id')->on('event_details')->onDelete('cascade');
            $table->string('cb_class');
            $table->string('project_name');
            $table->string('project_location');
            $table->string('category');
            $table->string('scale');
            
            // File paths or filenames for video and report
            $table->string('report'); // Store file path or filename for report
            $table->string('video'); // Store file path or filename for video
            
            // Links to report and video (URL as a string)
            $table->string('report_link'); // URL for report
            $table->string('video_link'); // URL for video
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('progress_details');
    }

};
