<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->string('thumbnail')->nullable();
            $table->string('imageA')->nullable();
            $table->string('imageB')->nullable();
            $table->string('link')->nullable();
            $table->string('title',191);
            $table->string('slug',191);
            $table->text('body');
            $table->timestamp('edited_at')->Nullable();
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
        Schema::dropIfExists('artikels');
    }
}
