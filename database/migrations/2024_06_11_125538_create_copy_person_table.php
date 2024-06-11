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
        Schema::create('copy_person', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("copy_id")->nullable();
            $table->foreign("copy_id")->references("id")->on("copies")->onDelete("set null");

            $table->unsignedBigInteger("person_id")->nullable();
            $table->foreign("person_id")->references("id")->on("people")->onDelete("set null");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copy_person');
    }
};
