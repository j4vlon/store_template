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
    public function index(): Response
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
//        try {
        // Инициализация переменной для хранения суммы заказа
        $sum = 0;
        $products = [];
        // Валидация данных запроса и сохранение их в переменной $data
        $data = $request->validated();

        // Преобразование массива продуктов в формат JSON и сохранение в переменной $data
        $data['products'] = json_encode($data['products']);

        // Перебор всех продуктов из запроса
        foreach ($request['products'] as $product)
        {
            // Получение объекта продукта с связанными данными о складах
            $productStock = Product::with('stocks')->findOrFail($product['product_id']);

            // Проверка наличия запрошенного количества продукта на складе
            if (
                $productStock->stocks()->find($product['stock_id']) &&
                $productStock->stocks()->find($product['stock_id'])->quantity >= $product['quantity']
            )
            {
                // Получение объекта продукта с данными о конкретном складе
                $productWithStock = $productStock->withStock($product['stock_id']);

                // Создание ресурса для продукта с данными о складе
                $productResource = new ProductResource($productWithStock);

                // Добавление цены продукта к общей сумме заказа
                $sum += $productResource['price'];

                // Разрешение ресурса и добавление данных продукта в массив $data['products']
                $products[] = $productResource->resolve();
            }

        }

            // Создание заказа на основе валидированных данных
           auth()->user()->orders()->create([
                "comment" => $request->comment,
                "delivery_method_id" => $request->delivery_method_id,
                "payment_type_id" => $request->payment_type_id,
                "price" => $sum,
                "user_address_id" => $request->user_address_id,
                "products" => $products,
            ]);
            // Возврат успешного ответа с данными о заказе
            return response()->json(['message' => 'Заказ успешно сохранен', 'order' => 'создан'], 201);
//        } catch (\Exception $e) {
            // Возврат ответа с сообщением об ошибке в случае исключения при сохранении заказа
//            return response()->json(['message' => 'Произошла ошибка при сохранении заказа', 'error' => $e->getMessage()], 500);
//        }
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
