<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() 
    {
        $orders_info = DB::table('orders')
        ->select('inplace', DB::raw('count(*) as orders_count'))
        ->groupBy('inplace')
        ->get();
        // return $orders_info;

        $users_count = User::count();
        $products_count = Product::count();

        $earning['total'] = OrderItem::sum('total_price');
        $earning['annual'] = OrderItem::lastYear()->sum('total_price');
        $earning['monthly'] = OrderItem::last30days()->sum('total_price');
        $earning['daily'] = OrderItem::today()->sum('total_price');

        return view('dashboard.dashboard', compact('orders_info', 'users_count', 'products_count', 'earning'));
    }
}
