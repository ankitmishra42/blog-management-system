<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('author');
            $table->string('tag')->nullable();
            $table->timestamps('Published Date');
            $table->string('published')->nullable();
            $table->string('draft')->nullable();
        });
    }
};
