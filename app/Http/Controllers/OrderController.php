<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = Order::orderBy('created_at', 'desc')->take(25);

        if(isset($request->status)){
            $orders = $orders->where('status', $request->status);
        }

        $orders = $orders->with(['items', 'owner'])->get();
        // return $orders;
        return view('dashboard.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        DB::beginTransaction();
        try {
            $order = new Order($request->validated());

            if ($order->save()) {
                $order->takeItemsFromCart();
            }
            DB::commit();
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'تم تقديم الطلب', 'm-dir' => 'rtl']);
        } catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->with(['m-color' => 'danger', 'message' => $e->getMessage(), 'm-dir' => 'rtl']);
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'فشل تقديم الطلب', 'm-dir' => 'rtl']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
