<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to create the announcements table.
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('author'); // Author of the announcement
            $table->text('body'); // Body of the announcement
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations to drop the announcements table.
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
};
