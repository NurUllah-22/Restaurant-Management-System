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
                    <a class="nav-link" href="{{route('home')}}">Home</a>
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
                                <a class="nav-link" href="{{url('my_orders')}}">My Orders</a>  {{--  New "My Orders" button  --}}
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
    </br> </br> </br> </br>
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <table class="cart">
            <tr>
                <th class="cart">Food Title</th>
                <th class="cart">Price</th>
                <th class="cart">Quantity</th>
                <th class="cart">Food Image</th>
                <th class="cart">Remove</th>
            </tr>
            <?php
                $total_price = 0;
            ?>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->quantity}}</td>
                <td>
                    <img width="150px" src="food_images/{{$data->image}}" alt="">
                </td>
                <td>
                    <a onclick="return confirm('Are you sure you want to remove this cart?')" class="btn btn-danger" href="{{url('remove_cart', $data->id)}}">Remove</a>
                </td>
            </tr>
            <?php
                $total_price = $total_price + $data->price;
            ?>
            @endforeach
        </table>
        <h3>Your total price is: ${{$total_price}}</h3>
    </div>
    <div class="div_center">
        <form action="{{url('confirm_order')}}" method="POST">
            @csrf
            <div class="div_deg">
                <label for="">Name</label>
                <input type="text" name="name" value="{{Auth()->user()->name}}">
            </div>
            <div class="div_deg">
                <label for="">Email</label>
                <input type="email" name="email" value="{{Auth()->user()->email}}">
            </div>
            <div class="div_deg">
                <label for="">Phone</label>
                <input type="number" name="phone" value="{{Auth()->user()->phone}}">
            </div>
            <div class="div_deg">
                <label for="">Address</label>
                <input type="text" name="address" value="{{Auth()->user()->address}}">
            </div>
            <div class="div_deg">
                <input class="btn btn-info" type="submit" value="Place Order">
            </div>
        </form>
    </div>
</body>
</html>