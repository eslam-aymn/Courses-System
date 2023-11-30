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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("name");

            $table->foreignId('category_id')->constrained('categories')->onUpdate("cascade")->onDelete("cascade");

            $table->foreignId("trainer_id")->constrained("trainers")->onUpdate("cascade")->onDelete("cascade");

            $table->string("small_description");
            $table->text("description");
            $table->integer("price");
            $table->string("img");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
