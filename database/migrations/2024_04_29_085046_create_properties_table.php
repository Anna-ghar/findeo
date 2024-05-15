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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');            $table->string('title');
            $table->double('area');
            $table->text('description');
            $table->string('address');
            $table->string('city')->nullable();;
            $table->string('state')->nullable();;
            $table->integer('zip-code');
            $table->double('price');
            $table->integer('rooms');
            $table->integer('bathrooms')->nullable();
            $table->string('building_age')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
