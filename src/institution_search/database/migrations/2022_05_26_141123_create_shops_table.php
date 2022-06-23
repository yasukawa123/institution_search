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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('店名');
            $table->string('email')->unique('メールアドレス');
            $table->string('tel')->comment('電話番号');
            $table->string('manager')->comment('担当者');
            $table->string('zip_code_jp')->comment('郵便番号');
            $table->string('prefecture')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('unique_name')->comment('地名番地');
            $table->string('images')->comment('画像');
            $table->string('introduction_text')->comment('紹介テキスト');
            $table->timestamps();
        });
        DB::table('shops')->insert(['id'=>1, 'name'=>'Bland本店', 
                            'email'=>'test1@example.com', 'tel'=>'09012345678', 'manager'=>'田中太郎',
                            'zip_code_jp'=>'120-0006', 'prefecture'=>'東京都', 'city'=>'足立区', 
                            'unique_name'=>'谷中1-2-3', 'images'=>'https://digipress.info/_wp/wp-content/uploads/2016/05/capture-2016-05-20-14.06.42.jpg', 
                            'introduction_text'=>'紹介文をここに書きます。' ]);
        DB::table('shops')->insert(['id'=>2, 'name'=>'ハンガリ', 
                            'email'=>'test2@example.com', 'tel'=>'08033333333', 'manager'=>'ゆで太郎',
                            'zip_code_jp'=>'120-0006', 'prefecture'=>'千葉県', 'city'=>'千代田区', 
                            'unique_name'=>'沖1-2-3', 'images'=>'https://digipress.info/_wp/wp-content/uploads/2016/05/capture-2016-05-20-14.06.42.jpg', 
                            'introduction_text'=>'紹介文をここに書きます。' ]); 
        DB::table('shops')->insert(['id'=>3, 'name'=>'マック', 
                            'email'=>'test3@example.com', 'tel'=>'0907777772', 'manager'=>'野島花太郎',
                            'zip_code_jp'=>'120-0006', 'prefecture'=>'広島県', 'city'=>'港区', 
                            'unique_name'=>'谷中5-2-3', 'images'=>'https://digipress.info/_wp/wp-content/uploads/2016/05/capture-2016-05-20-14.06.42.jpg', 
                            'introduction_text'=>'紹介文をここに書きます。' ]); 
        DB::table('shops')->insert(['id'=>4, 'name'=>'開発店', 
                            'email'=>'test4@example.com', 'tel'=>'09097722221', 'manager'=>'榎本浩平',
                            'zip_code_jp'=>'120-0006', 'prefecture'=>'福岡県', 'city'=>'葛飾区', 
                            'unique_name'=>'谷中23-2-3', 'images'=>'https://digipress.info/_wp/wp-content/uploads/2016/05/capture-2016-05-20-14.06.42.jpg', 
                            'introduction_text'=>'紹介文をここに書きます。' ]); 
        DB::table('shops')->insert(['id'=>5, 'name'=>'あああ', 
                            'email'=>'test5@example.com', 'tel'=>'08083932987', 'manager'=>'石井はるお',
                            'zip_code_jp'=>'120-0006', 'prefecture'=>'北海道', 'city'=>'渋谷区', 
                            'unique_name'=>'谷中1-21-3', 'images'=>'https://digipress.info/_wp/wp-content/uploads/2016/05/capture-2016-05-20-14.06.42.jpg', 
                            'introduction_text'=>'紹介文をここに書きます。' ]); 
        
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
