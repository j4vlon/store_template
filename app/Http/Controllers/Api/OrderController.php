<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return auth()->user()->orders->map(function ($order) {
            $order->products = json_decode($order->products);
            return $order;
        });
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOrderRequest $request
     * @return JsonResponse
     */
    public function store(StoreOrderRequest $request): JsonResponse
    {
        $sum = 0;
        $data = $request->validated();
        $data['products'] = json_encode($data['products']);
        foreach ($request['products'] as $product)
        {
            $productStock = Product::with('stocks')->findOrFail($product['product_id']);

            if (
                $product->stocks()->find($product['stock_id']) &&
                $product->stocks()->find($product['stock_id'])->quantity >= $product['quantity']
            )
            {
                $productWithStock =$productStock->withStock($product['stock_id']);
                $productResource = new ProductResource($productWithStock);
                $sum += $productResource['price'];
                $product[] = $productResource->resolve();
            }
        }
        try {
            $order = Order::create($data);
            return response()->json(['message' => 'Запись успешно сохранена', 'order' => $order], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Произошла ошибка при сохранении заказа', 'error' => $e->getMessage()], 500);
        }
    }



    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return OrderResource
     */
    public function show(Order $order): OrderResource
    {
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param Order $order
     * @return Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
