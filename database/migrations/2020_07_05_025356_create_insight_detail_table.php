<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsightDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insight_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('active_value');
            $table->smallInteger('tujuan'); // 0 = Followers, 1 = Following
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('insight_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('insight_id')
                ->references('id')
                ->on('insight')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insight_detail');
    }
}
