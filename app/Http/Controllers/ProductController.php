<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    public function index()
    {
    	$product=Product::all();
    	return view('product',['product'=>$product]);
    }
    public function detail($id)
    {
    	return view('detail')->withData(Product::find($id));
    
    }
    public function search(Request $request)
    {
    	return view('search')
    	->withData(Product::where('name','like','%'.$request->input('query').'%')->get());
    	
    }
    public function addtocart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartitem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
