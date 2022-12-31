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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('name', 50);
            $table->enum('gender', ["l", "p"]);
            $table->date('birth_date');
            $table->text('address');
            $table->string('phone', 15);
            $table->string('email')->unique();
            $table->text('password');
            $table->tinyInteger("role_id")->default(1);
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
        Schema::dropIfExists('member');
    }
};
