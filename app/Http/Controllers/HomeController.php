<?php

namespace App\Http\Controllers;

use App\Events\UserAuthenticated;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
     public function index(){

     $menu = Menu::paginate(5);
         return  view('home.index', ['items' => $menu, 'menus' => $menu]);
     }
    public function testimonial(){

        return view('home.testimonial');
    }


    public function food_menu(){


        $menu = Menu::paginate(5);

        return  view('home.menu', ['items' => $menu, 'menus' => $menu]);

    }


//    public function cart(){
//
//        // Fetch all cart items related to the authenticated user
//        $cartItems = Cart::where('user_id', Auth::id())->get();
//
//        // Prepare cart details for WhatsApp
//        $orderDetails = $cartItems->map(function ($item) {
//            return "{$item->menu->name} (x{$item->quantity}): ₦" . ($item->menu->price * $item->quantity);
//        })->join("\n");
//
//        return view('home.cart', ['cartItems' => $cartItems, 'orderDetails' => $orderDetails]);
//    }



    public function cart(Request $request)
    {
        $session_id = $request->session()->getId();
        $user = Auth::user();

        if ($user) {
            // Fetch cart items for authenticated user
            $cartItems = Cart::where('user_id', $user->id)->get();
            $userName = $user->name;
        } else {
            // Fetch cart items for guest user using session_id
            $cartItems = Cart::where('session_id', $session_id)->get();
            $userName = 'Guest';
        }

        // Prepare cart details for WhatsApp
        $orderDetails = "Hello, my name is {$userName}. I would like to place an order for the following items:\n\n";
        $orderDetails .= $cartItems->map(function ($item) {
            return "{$item->menu->name} (x{$item->quantity}): ₦" . ($item->menu->price * $item->quantity);
        })->join("\n");
        $orderDetails .= "\n\nThank you!";

        return view('home.cart', compact('cartItems', 'orderDetails'));
    }




    public function addToCart(Request $request, $menuId)
    {
        $session_id = $request->session()->getId();
        $user_id = Auth::id();

        // Check if the item already exists in the cart
        $existingCartItem = Cart::where('menu_id', $menuId)
            ->where(function($query) use ($user_id, $session_id) {
                if ($user_id) {
                    $query->where('user_id', $user_id);
                } else {
                    $query->where('session_id', $session_id);
                }
            })->first();

        if ($existingCartItem) {
            // Update the quantity if the item exists
            $existingCartItem->quantity += 1;
            $existingCartItem->save();

            return redirect()->route('index')->with('success', 'Item quantity updated in cart');
        } else {
            // Create a new cart entry if the item does not exist
            Cart::create([
                'user_id' => $user_id,
                'session_id' => $user_id ? null : $session_id, // Use session_id only if user is not authenticated
                'menu_id' => $menuId,
                'quantity' => 1
            ]);

            return redirect()->route('cart')->with('success', 'Item added to cart');
        }
    }



    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        event(new UserAuthenticated($user));

        return redirect()->back()->with('success', 'Login Successful... Redirecting please wait');
    }



    public function removeFromCart($id)
    {
        // Find the cart item by ID
        $cartItem = Cart::findOrFail($id);

        // Ensure the cart item belongs to the authenticated user
        if ($cartItem->user_id == Auth::id()) {
            $cartItem->delete();
        }

        return redirect()->route('cart')->with('success', 'Item removed from cart');
    }



    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);

        // Ensure the cart item belongs to the authenticated user
        if ($cartItem->user_id == Auth::id()) {
            $cartItem->update(['quantity' => $request->quantity]);
        }

        return redirect()->route('cart')->with('success', 'Quantity updated');
    }

    public function checkout()
    {

    }

    public function cartCount(Request $request)
    {
        $session_id = $request->session()->getId();
        $user_id = Auth::id();

        // Get the count of cart items based on user_id or session_id
        $cartCount = Cart::where(function ($query) use ($user_id, $session_id) {
            $query->where('user_id', $user_id)
                ->orWhere('session_id', $session_id);
        })->count();

        return response()->json(['count' => $cartCount]);
    }



    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('index')->with('success', 'Login Successful... Redirecting please wait');
        }

        return redirect()->intended('/')->with('error', 'Invalid Credentials');
    }

}
