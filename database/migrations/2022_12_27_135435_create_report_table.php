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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('item', 50);
            $table->integer('id_category');
            $table->string('identity')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('value')->nullable();
            $table->date('report_date');
            $table->date('loss_date');
            $table->string('lost_location');
            $table->text('story')->nullable();
            $table->text('picture')->nullable();
            $table->integer('id_user');
            $table->integer('id_police');
            $table->tinyInteger('isValidated');
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
        Schema::dropIfExists('report');
    }
};
