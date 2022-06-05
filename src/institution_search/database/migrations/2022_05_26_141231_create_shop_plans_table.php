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
        Schema::create('shop_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('num')->comment('人数');
            $table->integer('price')->comment('金額');
            $table->string('check_in')->comment('チェックイン');
            $table->string('check_out')->comment('チェックアウト');
            $table->boolean('filled_up')->default(false)->comment('空き埋まり状況');
        });
        DB::table('shop_plans')->insert(['id'=>1,'num'=>2,'price'=>20000,'check_in'=>'16:00','check_out'=>'10:00','filled_up'=>'0']);
        DB::table('shop_plans')->insert(['id'=>2,'num'=>4,'price'=>60000,'check_in'=>'16:00','check_out'=>'10:00','filled_up'=>'0']);
        DB::table('shop_plans')->insert(['id'=>3,'num'=>6,'price'=>68000,'check_in'=>'18:00','check_out'=>'12:00','filled_up'=>'0']);
        DB::table('shop_plans')->insert(['id'=>4,'num'=>8,'price'=>102000,'check_in'=>'18:00','check_out'=>'12:00','filled_up'=>'0']);
        DB::table('shop_plans')->insert(['id'=>5,'num'=>10,'price'=>138000,'check_in'=>'15:00','check_out'=>'12:00','filled_up'=>'0']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_plans');
    }
};
