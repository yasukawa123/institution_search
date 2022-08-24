<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\ShopPlan;
use Illuminate\Http\Request;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth; // 追加

class ReserveController extends Controller
{
    public function index()
    {
        // データを所得
        $users = auth()->user();
        $user = User::select('id', 'name', 'email', 'tel')->where('id','=',$users['id'])->get();
        $reserves = Reserve::select()->where('user_id','=',$users['id'])->get();

        // shop_idだけの配列を作る
        $reserves_shop = [];
        foreach ($reserves as $reserve) {
            $k = $reserve['shop_id'];
            $reserves_shop[] = $k;
        }

        // shop_plan_idだけの配列を作る
        $reserves_plan = [];
        foreach ($reserves as $reserve) {
            $k = $reserve['shop_plan_id'];
            $reserves_plan[] = $k;
        }

        // 予約を作り替える
        $reserves_make = [];
        $t = 0;
        foreach ($reserves as $k) {
            $key = $t;
            $val = array('id' => $k['id'],
                        'reserve_date' => $k['reserve_date'],
                        'check_in' => $k['check_in'],
                        'num' => $k['num'],
                        'num_small' => $k['num_small']
            );
            $reserves_make += [$key => $val];
            $t++;
        }

        // ショップの情報を組み替える 1 3 5 5 2
		$shops_make = [];
        $i = 0;
        foreach ($reserves_shop as $rs) {
            $shops = Shop::select('id', 'name', 'tel', 'prefecture', 'city', 'unique_name')
                        ->where('id','=',$rs)
                        ->get();
            foreach ($shops as $k) {
                $key = $i;
                // 引き取る時配列の中に余計なものが入るからこうしてる
                $val = array('id' => $k['id'],
                        'name' => $k['name'],
                        'tel' => $k['tel'],
                        'address' => $k['prefecture'] . $k['city'] . $k['unique_name']
                );
                $shops_make += [$key=>$val];
                $i++;
            }
		}

        // ショッププランの情報を組み替える 1 7 8 6 4
        $plans_make = [];
        $u = 0;
        foreach ($reserves_plan as $rp) {
            $shopPlans = ShopPlan::select('id', 'name', 'price', 'shop_id', 'check_out', 'images01', 'images02', 'images03')
                        ->where('id','=',$rp)
                        ->get();
            foreach ($shopPlans as $k) {
                $key = $u;
                $path = "storage/images/" . $k['shop_id'] . "/" . $k['id'] . "/";
                // 引き取る時配列の中に余計なものが入るからこうしてる
                $val = array('id' => $k['id'],
                        'name' => $k['name'],
                        'limit_num' => $k['limit_num'],
                        'price' => $k['price'],
                        'check_out' => $k['check_out'],
                        'images01' => $path . $k['images01'],
                        'images02' => $path . $k['images02'],
                        'images03' => $path . $k['images03']
                );
                $plans_make += [$key => $val];
                $u++;
            }
		}

        // ショップとプランを一つにする
        $reserves_list = [];
        if (!empty($reserves_make)) {
            $y = 0;
            foreach ($shops_make as $ssm) {
                $val = array('reserve' => $reserves_make[$y], 'shop' => $ssm, 'shopPlan' => $plans_make[$y]);
                $reserves_list += [$y => $val];
                $y++;
            }
        }

        return view('reserve.index', compact('reserves_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        // 
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
