<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Category;
use App\Models\Shipping;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;



class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $producttags = ProductTag::latest()->get();
        $products = Product::latest()->take(15)->get();
        $categorys = Category::where('parent_id', 0)->get();
        return view('page', compact('sliders', 'products', 'producttags', 'categorys'));
    }

    public function category()
    {
        $categorys = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(50)->get();
        return view('Pages.categories', compact('categorys', 'products'));
    }

    public function indexcategory($slug, $categoryId)
    {
        $categorys = Category::where('parent_id', 0)->get();
        $categorysLimit = Category::where('parent_id', 0)->take(3)->get();
        $products = Product::where('category_id', $categoryId)->paginate(12);
        return view('Pages.categories', compact('categorysLimit', 'products', 'categorys'));
    }

    public function contact()
    {
        return view('Pages.contact');
    }

    public function single($id)
    {
        $products = Product::where('id', $id)->paginate(1);
        $productImages = ProductImage::where('product_id', $id)->paginate(4);
        return view('Pages.single', compact('products', 'productImages'));
    }

    public function addToCart($id)
    {
        // session()->flush('cart');

        $product = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->feature_image_path,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function showCart(Request $request)
    {
        $carts = session()->get('cart') ?? [];
        return view('Pages.cartproduct', compact('carts'));
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('Pages.cartproduct', compact('carts'))->render();
            return response()->json(['cartproduct' => $cartComponent, 'code' => 200], 200);
        }
    }

    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponent = view('Pages.cartproduct', compact('carts'))->render();
            return response()->json(['cartproduct' => $cartComponent, 'code' => 200], 200);
        }
    }

    public function indexship()
    {
        return view('Pages.checkout');
    }

    public function shippingItem(Request $request)
    {
        $carts = session()->get('cart');
        $request->validate([
            'shipping_name' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_email' => 'required',
            'shipping_city' => 'required',
            'shipping_method' => 'required',
            'shipping_accept' => 'required',
        ]);

        $shipping = Shipping::create([
            'shipping_name' => $request->shipping_name,
            'shipping_address' => $request->shipping_address,
            'shipping_phone' => $request->shipping_phone,
            'shipping_email' => $request->shipping_email,
            'shipping_city' => $request->shipping_city,
            'shipping_method' => $request->shipping_method,
            'shipping_accept' => $request->shipping_accept,
        ]);

        Mail::send('emails.active_order', compact('shipping', 'carts'), function ($email) use ($shipping, $carts) {
            $email->subject('Min Store - Xác nhận đơn hàng');
            $email->to($shipping->shipping_email, $shipping->shipping_name);
            $email->to('nhminh2610@gmail.com');
        });

        $carts = session()->put('cart');
        return  redirect()->to('/showcart');
    }
}
