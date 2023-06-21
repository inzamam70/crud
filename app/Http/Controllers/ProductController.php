<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $products = $this->product->latest()->paginate(5);
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        $this->product->create([
            'name' =>$request->name,
            'description' =>$request->description,
            'price' =>$request->price,
        ]);
        return redirect()->route('product.index');
    }
    public function show($id)
    {
        $product = $this->product->find($id);
        return view('admin.product.show', compact('product'));
    }
    public function edit($id){
        $product = $this->product->find($id);
        return view('admin.product.edit',compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product =$this->product->find($id)->update([
            'name' =>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return redirect()->route('product.index');
    }
    public function destroy($id)
    {
        $product = $this->product->find($id)->delete();
        return redirect()->route('product.index');
    }
}
