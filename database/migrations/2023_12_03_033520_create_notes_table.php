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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255)->nullable();
            $table->boolean('done')->default(false);
            $table->timestamps();
            // Others:
            // $table->enum('state', ['DRAFT', 'PUBLISHED', 'DELETED']);
            // $table->integer('column_integer');
            // $table->unsignedInteger('column_unsignedInteger');
            // $table->bigInteger('column_bigInteger');
            // $table->unsignedBigInteger('column_unsignedBigInteger');
            // $table->text('column_text');
            // $table->float('column_float');
            // $table->double('column_double');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
