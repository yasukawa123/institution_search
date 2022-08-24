<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\ShopPlan;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ShopController extends Controller
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
		// $shops = Shop::paginate(6);
        $shops = Shop::get();
		$shopPlans = ShopPlan::select('shop_id', 'price', 'limit_num')->get();

		// ショップの情報を組み替える
		$shops_make = [];
		foreach ($shops as $shop) {
            $path = "storage/images/" . $shop['id'] . "/";
			$key = $shop['id'];
			$val = array('name' => $shop['name'], 
						'prefecture' => $shop['prefecture'], 
						'city' => $shop['city'], 
						'images01' => $path . $shop['images01'], 
						'introduction_text' => $shop['introduction_text']
					);
			$shops_make += [$key => $val];
		}

		// ショッププランの情報を組み替える
		$shopPlans_make = [];
		foreach ($shopPlans as $shopPlan) {
			$key = $shopPlan['shop_id'];
			$price = $shopPlan['price'];
			$num = $shopPlan['limit_num'];
		    $shopPlans_make += [$key => array('price'=>$price, 'limit_num'=>$num)];
		}

		// ショップとショッププランの情報を結合
		$shops_list = [];
		foreach ($shops_make as $key => $val) {
			if(isset($shopPlans_make[$key])) {
				$val += $shopPlans_make[$key];
				$shops_list += [$key => $val];
			}
		}

        return view('shop.index', compact('shops_list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {   
        $shopPlans = ShopPlan::where('shop_id', $shop['id'])->where('filled_up','>',0)->get();
        
        return view('shop.show',  compact('shop', 'shopPlans')); 
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function plan(ShopPlan $shopPlan, Shop $shop)
    {
		return view('shop.plan',  compact('shop', 'shopPlan'));
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
        $u = User::select('id', 'name', 'email', 'tel')->where('id','=',$users['id'])->get();
        $user = ['id' => $u[0]['id'], 'name' => $u[0]['name'], 'email' => $u[0]['email'], 'tel' => $u[0]['tel']];

        // viewに返して隠しておく
        // hideしてrequestに渡す
        return view('shop.create', compact('user', 'shop', 'shopPlan'));
    }

    /**
     * Create the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $reserve = new Reserve;
        $reserve->user_id = $request->user_id;
        $reserve->shop_id = $request->shop_id;
        $reserve->shop_plan_id = $request->shop_plan_id;
        $reserve->reserve_date = $request->reserve_date;
        $reserve->check_in = $request->check_in;
        $reserve->num = $request->num;
        $reserve->num_small = $request->num_small;
        $reserve->save();

        $shopplan = ShopPlan::find($request->shop_plan_id);
        $shopplan->filled_up -= 1;
        $shopplan->save();
        // echo "<pre>";
        // var_dump($shopplan);
        // echo"</pre>";
        // ShopPlanを修正する処理を作る　0->1
        return redirect('/reserve');
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
