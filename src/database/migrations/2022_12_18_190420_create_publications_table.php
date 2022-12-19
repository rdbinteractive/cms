<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publication_type_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('title');

            $table->string('slug')
                ->unique();

            $table->text('excerpt');

            $table->string('layout')
                ->default('page_builder');

            $table->json('page_builder')
                ->nullable();

            $table->boolean('is_published')
                ->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
};
