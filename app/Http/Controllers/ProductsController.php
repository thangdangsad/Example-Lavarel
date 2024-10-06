<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductsController
{
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required|max:255',
                'price' => 'nullable',
                'quantity' =>'nullable',
                'description' => 'nullable',
            ]
        );

        ProductModel::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
            ]
        );

        return redirect()->route('products.index')->with('Tao thanh cong' ,'San pham duoc tao thanh cong');
    }

    public function create(){
        return view('products.create');
    }

    public function index(){
        $products = ProductModel::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = ProductModel::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id){
        $product = ProductModel::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, $id){
        $product = ProductModel::find($id);

        $product->update(
            [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'description' => $request->input('description'),
            ]
        );

        return redirect()->route('products.index')->with('success', 'Create updated syccessfully');
    }

    public function destroy1($id){
        $product = ProductModel::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success','Delete user successfully');
    }
}
