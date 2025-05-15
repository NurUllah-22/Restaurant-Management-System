<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function my_home()
    {
        $data = Food::all();
        return view("home.index", compact('data'));
    }
    public function index()
    {
        if (Auth()->id())
        {
            $userType = Auth()->user()->userType;
            if ($userType == "user")
            {
                $data = Food::all();
                $reviews = $this->get_reviews(); // Fetch reviews
                return view("home.index", compact('data', 'reviews')); // Pass to the view
            }
            else
            {
                return view("admin.index");
            }
        }
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id())
        {
            $food = Food::find($id);
            $cart_title = $food->title;
            $cart_details = $food->detail;
            $cart_price = Str::remove('$', $food->price);
            $cart_image = $food->image;
            $data = new Cart;
            $data->title = $cart_title;
            $data->details = $cart_details;
            $data->price = $cart_price * $request->qty;
            $data->image = $cart_image;
            $data->quantity = $request->qty;
            $data->userid = Auth()->user()->id;
            $data->save();
            flash()->info('Item added to your cart!');
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    public function my_cart()
    {
        $user_id = Auth()->user()->id;
        $data = Cart::where('userid', '=', $user_id)->get();
        return view('home.my_cart', compact('data'));
    }

    public function remove_cart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {
        $user_id = Auth()->user()->id;
        $cart = Cart::where('userid','=', $user_id)->get();
        foreach($cart as $cart)
        {
            $order = new Order;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->title = $cart->title;
            $order->quantity = $cart->quantity;
            $order->price = $cart->price;
            $order->image = $cart->image;
            $order->save();
            $data = Cart::find($cart->id);
            $data->delete();
        }
        flash()->success('Order placed Successfully!');
        return redirect('my_orders');
    }

    public function my_orders()
    {
        if (Auth::id())
        {
            $user_email = Auth()->user()->email;
            $orders = Order::where('email', '=', $user_email)->get(); // Fetch orders based on user's email
            return view('home.my_orders', compact('orders')); // Pass orders to the view
        }
        else
        {
            return redirect('login');
        }
    }

    public function book_table(Request $request)
    {
        $data = new Book;
        $data->phone = $request->phone;
        $data->guest = $request->n_guest;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->save();
        flash()->success('Your booked a table!');
        return redirect()->back();
    }
    //new fo reviews
    public function submit_review(Request $request)
    {
        $request->validate([
            'review' => 'required|string|max:255',
        ]);

        $review = new Review();
        $review->name = Auth::user()->name; // Get the user's name
        $review->review = $request->review;
        $review->save();

        flash()->success('Thank you for your review!');
        return redirect()->back();
    }

    public function get_reviews()
    {
        $reviews = Review::latest()->paginate(3); // Get the latest reviews, paginated
        return $reviews;
    }
}
