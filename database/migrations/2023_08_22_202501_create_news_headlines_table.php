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
        Schema::create('news_headlines', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('photo')->nullable();
            $table->longText('intro');
            $table->longText('body');
            $table->longText('conclusion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_headlines');
    }
};
