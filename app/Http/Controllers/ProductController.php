<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index(ProductService $productService)
    {
        $newProduct = [
            'id' => 4,
            'name' => 'Orange',
            'category' => 'Fruit'
        ];

        $productService->insert($newProduct);

        $this->taskService->add('Add to cart');
        $this->taskService->add('Checkout');

        $data = [
            'products' => $productService->listProducts(),
            'tasks' => $this->taskService->getAllTasks(),
        ];

        return view('Products.list', $data);
    }

    public function show(ProductService $productService, $id)
    {
        $product = collect($productService->listProducts())->filter(function($item) use ($id) {
            return isset($item['id']) && $item['id'] == $id;
        })->first();

        return $product;
    }

    public function store(Request $request, ProductService $productService)
    {
        $newProduct = [
            'id' => time(),
            'name' => $request->input('name'),
            'category' => $request->input('category', 'uncategorized'),
        ];

        $productService->insert($newProduct);
        return redirect()->route('products.index');
    }
}
