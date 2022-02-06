<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->unsignedBigInteger('admin_id');
            $table->string('name')->nullable(false);
            $table->integer('back_number')->nullable(false);
            $table->integer('position');
            $table->string('dominant');
            $table->string('role');
            $table->timestamp('created_at');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->unique('name','back_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
