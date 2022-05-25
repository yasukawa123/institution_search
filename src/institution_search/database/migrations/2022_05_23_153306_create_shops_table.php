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
        // テーブルを作成するには、Schema::createメソッドを使用します
        // 新しいテーブルを定義するためのBlueprintオブジェクトを取ります。
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_plan_id')->constrained()->onDelete('cascade');
            $table->string('name')->comment('店名');
            $table->string('email')->unique('メールアドレス');
            $table->string('tel')->comment('電話番号');
            $table->string('manager')->comment('担当者');
            $table->string('zip_code_jp')->comment('郵便番号');
            $table->string('prefectures')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('unique_name')->comment('地名番地');
            $table->string('images')->comment('画像');
            $table->string('introduction_text')->comment('紹介テキスト');
            $table->timestamps();
        });
        // // テスト用DBを制作
        // DB::table('shops')->insert(['id'=>0000000,'shop_plan_id'=>'', 'name'=>'Bland本店', 
        //                     'email'=>'test@example.com', 'tel'=>'09012345678', 'manager'=>'田中太郎',
        //                     'zip_code_jp'=>'120-0006', 'prefectures'=>'東京都', 'city'=>'足立区', 
        //                     'unique_name'=>'谷中1-2-3', 'images'=>'', 'introduction_text'=>'紹介文をここに書きます。' ]); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
