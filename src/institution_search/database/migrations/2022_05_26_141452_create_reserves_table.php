<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;   // ← 追記 *

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id()->comment('予約番号');
            $table->integer('user_id')->constrained()->onDelete('cascade');
            $table->integer('shop_id')->constrained()->onDelete('cascade');
            $table->integer('shop_plan_id')->constrained()->onDelete('cascade');
            $table->date('reserve_date')->comment('予約日');
            $table->time('check_in')->comment('チェックイン予定時間');
            $table->integer('num')->comment('大人人数');
            $table->integer('num_small')->comment('子供人数');
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
        Schema::dropIfExists('reserves');
    }
};
