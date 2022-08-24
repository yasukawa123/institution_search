<?php

// ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
// プランの作成・編集・更新・削除
// ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\ShopPlan;
use Illuminate\Http\Request;

class ShopAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 一覧ページ（index）に返すのは下の処理
    public function index()
    {
        // データを所得
		// $shops = Shop::paginate(5);
        $user = auth()->user();
		$shops = Shop::where('id', $user['shop_id'])->get();
		$shopPlans = ShopPlan::select('shop_id', 'price', 'limit_num')->get();

        $shop_id = $user['shop_id'];

		// ショップの情報を組み替える
		$shops_make = [];
		foreach ($shops as $shop) {
            $path = "storage/images/" . $shop['id'] . "/";
			$val = array(
                        'id' => $shop['id'],
                        'name' => $shop['name'], 
						'prefecture' => $shop['prefecture'] . $shop['city'] . $shop['unique_name'], 
						'introduction_text' => $shop['introduction_text'],
                        'images01' => $path . $shop['images01'],
                        'images02' => $path . $shop['images02'],
                        'images03' => $path . $shop['images03'],
					);
			$shops_make += $val;
		}

        // 返すのが増えるかもしれないので取っておく
        // ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼
		// // ショッププランの情報を組み替える
		// $shopPlans_make = [];
		// foreach ($shopPlans as $shopPlan) {
		// 	$key = $shopPlan['shop_id'];
		// 	$val_price = $shopPlan['price'];
		// 	$val_num = $shopPlan['limit_num'];
		// 	if (isset($shopPlans_make[$key])) {
		// 		if ($shopPlans_make[$key]['price'] > $val_price) {
		// 			$shopPlans_make[$key]['price'] = $val_price;
		// 		}
		// 		if ($shopPlans_make[$key]['limit_num'] > $val_num) {
		// 			$shopPlans_make[$key]['limit_num'] = $val_num;
		// 		}
		// 	} else {
		// 		$shopPlans_make += [$key => array('price'=>$val_price, 'limit_num'=>$val_num)];
		// 	}
		// }

		// // ショップとショッププランの情報を結合
		// $shops_list = [];
		// foreach ($shops_make as $key => $val) {
		// 	if(isset($shopPlans_make[$key])) {
		// 		$val += $shopPlans_make[$key];
		// 		$shops_list += [$key => $val];
		// 	}
		// }
        // ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲

        return view('shop_admin.index', compact('shop_id', 'shops_make'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create(ShopPlan $shopPlan, Shop $shop)
    {   
        // userがguestだったらログインページへ返す処理を書く①
        $users = auth()->user();
        $u = User::select('id', 'name', 'email', 'tel', 'shop_id')->where('id','=',$users['id'])->get();
        $user = ['id' => $u[0]['id'], 'name' => $u[0]['name'], 'email' => $u[0]['email'], 'tel' => $u[0]['tel'], 'shop_id' => $u[0]['shop_id']];

        // viewに返して隠しておく
        // hideしてrequestに渡す
        return view('shop_admin.create', compact('user', 'shop'));
    }

    /**
     * Create the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $shop = new Shop;
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->tel = $request->tel;
        $shop->manager = $request->manager;
        $shop->zip_code_jp = $request->zip_code_jp;
        $shop->prefecture = $request->prefecture;
        $shop->city = $request->city;
        $shop->unique_name = $request->unique_name;
        $shop->images01 = $request->images01->getClientOriginalName();
        $shop->images02 = $request->images02->getClientOriginalName();
        $shop->images03 = $request->images03->getClientOriginalName();
        $shop->introduction_text = $request->introduction_text;
        $shop->save();
        
        // userを使うときは下のauthを使って情報を取る必要がある
        $users = auth()->user();
        $user = User::find($users->id);
        $user->shop_id = $shop->id;
        $user->save();
        
        $file_name01 = $request->file('images01')->getClientOriginalName();
        $file_name02 = $request->file('images02')->getClientOriginalName();
        $file_name03 = $request->file('images03')->getClientOriginalName();
        // オリジナル名前にすること
        $request->file('images01')->storeAs('public/images/'. $shop->id, $file_name01);
        $request->file('images02')->storeAs('public/images/'. $shop->id, $file_name02);
        $request->file('images03')->storeAs('public/images/'. $shop->id, $file_name03);

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
