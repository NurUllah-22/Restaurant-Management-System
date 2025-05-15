<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    @include('admin.add_food_css')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a> {{-- Home button --}}
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">

                <li class="nav-item">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('my_cart')}}">Cart</a>
                            </li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">
                            </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Register</a>
                            </li>
                        @endauth
                    @endif
                </li>
            </ul>
        </div>
    </nav>
    </br> </br> </br> </br></br> </br>
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 style="padding-bottom: 30px;">My Orders</h2>
        <table class="cart">
            <tr>
                <th class="cart">Food Title</th>
                <th class="cart">Price</th>
                <th class="cart">Quantity</th>
                <th class="cart">Food Image</th>
                <th class="cart">Delivery Status</th>
            </tr>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->title}}</td>
                    <td>${{$order->price}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>
                        <img width="150px" src="food_images/{{$order->image}}" alt="">
                    </td>
                    <td>{{$order->delivery_status}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>