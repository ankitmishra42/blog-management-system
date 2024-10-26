<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content'); // Changed to text for larger content
            $table->string('author');
            $table->string('tags')->nullable(); // Changed to tags
            $table->timestamp('published_at')->useCurrent(); // Correct usage
            $table->string('draft')->nullable();
            $table->timestamps(); // Creates created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

