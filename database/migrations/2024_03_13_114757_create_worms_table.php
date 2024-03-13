<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('worms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', (['Sand', 'Spacial']));
            $table->integer('velocity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worms');
    }
};
