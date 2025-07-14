<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Essen;
use App\Models\Buy;
class EssenController extends Controller{
    
    public function index(){
    $products = Essen::all();         
    $lenght=Essen::count();

    return view('index', compact('products','lenght'));
}

    public function show($id){

        $product = Essen::findOrFail($id);
        return view('show', compact('product'));
    }
    public function create(){
        return view('add_Product');
    }
    public function store(Request $request){
        $data=$request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric',

        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Essen::create($data);
        return redirect()->route('products.dashboard')->with('success', 'Product added successfully!');

    }
    public function edit($id){
        $product = Essen::findOrFail($id);
        return view('edit_Product', compact('product'));
    }

    public function update(Request $request, $id){

        $product = Essen::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $product->update($data);
        return redirect()->route('products.dashboard')->with('success', 'Product updated successfully!');
    }

    public function destroy($id){
        $product = Essen::findOrFail($id);
        $product->delete();
        return redirect()->route('products.dashboard')->with('success', 'Product deleted successfully!');

    }
    public function admin(){
        $products = Essen::all();
        return view('Dashboard', compact('products'));
    }
    public function more($id){
        $product = Essen::findOrFail($id);
        return view('more', compact('product'));
    }
    public function order(){
        $orders = Buy::all();
        $products = Essen::all();
        return view('order', compact('orders','products'));
    }
    
}
