<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeOrderStatusRequest;
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
        $order->owner;
        $order->items;
        // return $order;
        return view('dashboard.orders.order', compact('order'));
    }

    public function changeStatus(ChangeOrderStatusRequest $request, Order $order)
    {
        if($order->update($request->validated())) {
            return redirect()->back()->with(['m-color' => 'success', 'message' => 'order status changed successfully', 'm-dir' => 'ltr']);
        } else {
            return redirect()->back()->with(['m-color' => 'danger', 'message' => 'failed to change order status', 'm-dir' => 'ltr']);
        }
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
