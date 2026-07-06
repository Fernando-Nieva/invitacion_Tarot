<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tarot_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('arcana')->default('major');
            $table->string('number')->nullable();
            $table->text('description');
            $table->text('meaning');
            $table->text('message');
            $table->string('image');
            $table->string('keywords')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tarot_cards');
    }
};
