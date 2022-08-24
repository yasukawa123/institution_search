<?php

// ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
// プランの作成・編集・更新・削除
// ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\ShopPlan;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ShopPlanAdminController extends Controller
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
		$shopPlans = ShopPlan::where('shop_id', $user['shop_id'])->get();
		$shop_id = $user['shop_id'];

		if (empty($user['shop_id'])) {
			return view('shop_admin.index');
		}

		// ショッププランの情報を組み替える
		$shopPlan_list = [];
		foreach ($shopPlans as $shopPlan) {
			$path = "storage/images/" . $shopPlan['shop_id'] . "/" . $shopPlan['id'] . "/";
			$val = [
				'name' => $shopPlan['name'],
				'introduction_text' => $shopPlan['introduction_text'],
				'limit_num' => $shopPlan['limit_num'],
				'limit_num_small' => $shopPlan['limit_num_small'],
				'price' => $shopPlan['price'],
				'check_in' => $shopPlan['check_in'],
				'check_out' => $shopPlan['check_out'],
				'filled_up' => $shopPlan['filled_up'],
				'images01' => $path . $shopPlan['images01'],
				'images02' => $path . $shopPlan['images02'],
				'images03' => $path . $shopPlan['images03'],
			];
			$shopPlan_list[] = $val;
		}
		
		return view('shop_plan_admin.index', compact('shop_id','shopPlan_list'));
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
		if (empty($user['shop_id'])) {
			return view('shop_admin.index');
		}

		// viewに返して隠しておく
		// hideしてrequestに渡す
		return view('shop_plan_admin.create', compact('user', 'shopPlan'));
	}

	/**
	 * Create the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{   
		$shopPlan = new ShopPlan;
		$shopPlan->name = $request->name;
		$shopPlan->limit_num = $request->limit_num;
		$shopPlan->limit_num_small = $request->limit_num_small;
		$shopPlan->price = $request->price;
		$shopPlan->check_in = $request->check_in;
		$shopPlan->check_out = $request->check_out;
		$shopPlan->filled_up = $request->filled_up;
		$shopPlan->introduction_text = $request->introduction_text;
		$shopPlan->images01 = $request->images01->getClientOriginalName();
		$shopPlan->images02 = $request->images02->getClientOriginalName();
		$shopPlan->images03 = $request->images03->getClientOriginalName();
		$shopPlan->shop_id = $request->shop_id;
		$shopPlan->save();

		$file_name01 = $request->file('images01')->getClientOriginalName();
		$file_name02 = $request->file('images02')->getClientOriginalName();
		$file_name03 = $request->file('images03')->getClientOriginalName();

		// オリジナル名前にすること
		$request->file('images01')->storeAs('public/images/' . $shopPlan->shop_id . '/' . $shopPlan->id, $file_name01);
		$request->file('images02')->storeAs('public/images/' . $shopPlan->shop_id . '/' . $shopPlan->id, $file_name02);
		$request->file('images03')->storeAs('public/images/' . $shopPlan->shop_id . '/' . $shopPlan->id, $file_name03);

		return redirect('/shop_plan_admin');
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
