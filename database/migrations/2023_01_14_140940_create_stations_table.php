<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('address')->unique();
            $table->decimal('lat', 10, 7)->unique();
            $table->decimal('lon', 10, 7)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('stations');
    }
}