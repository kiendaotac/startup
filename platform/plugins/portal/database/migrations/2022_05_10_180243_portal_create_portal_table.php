<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PortalCreatePortalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->text('description');
            $table->text('image');
            $table->text('link');
            $table->tinyInteger('order');
            $table->string('status', 60)->default('published');
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
        Schema::dropIfExists('portals');
    }
}
