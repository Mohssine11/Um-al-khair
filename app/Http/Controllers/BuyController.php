<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buy;
use App\Models\Essen;
class BuyController extends Controller
{
    public function buy($id)
    {
        $product = Essen::findOrFail($id);
        return view('buy', compact('product'));
    }
    public function buy_post(Request $request, $id){
    $request->validate([
        'Nom' => 'required',
        'telephone' => 'required',
        'city' => 'required',
        'adresse' => 'required', // <-- hier anpassen!
    ]);
    $data = $request->only(['Nom', 'telephone', 'city', 'adresse']); // <-- hier anpassen!
    $data['product_id'] = $id;
    Buy::create($data);
    return redirect()->route('products.index')->with('success', 'Order placed successfully!');
}
    public function delete($id)
    {
        $order = Buy::findOrFail($id);
        $order->delete();
        return redirect()->route('order.order')->with('success', 'Order deleted successfully!');
    }
    public function about()
    {
        return view('about_us');
    }
    public function contact()
    {
        return view('contact_us');
    }
}
