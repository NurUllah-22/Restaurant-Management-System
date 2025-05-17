<!DOCTYPE html>
<html>
    <head> 
        @include('admin.css')
        @include('admin.add_food_css')
    </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
              <table>
                <tr>
                  <th class="order">Customer's Name</th>
                  <th class="order">Email</th>
                  <th class="order">Phone Number</th>
                  <th class="order">Address</th>
                  <th class="order">Food Title</th>
                  <th class="order">Quantity</th>
                  <th class="order">Price</th>
                  <th class="order">Image</th>
                  <th class="order">Delivery_status</th>
                  <th class="order">Change status</th>
                </tr>

                @foreach ($data as $data)

                <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->address}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->quantity}}</td>
                  <td>{{$data->price}}</td>
                  <td>
                    <img width="100px" src="food_images/{{$data->image}}" alt="">
                  </td>
                  <td>{{$data->delivery_status}}</td>
                  <td>
                    <a class="btn btn-info" href="{{url('on_the_way', $data->id)}}">On the way</a>
                    <a class="btn btn-warning" href="{{url('delivered', $data->id)}}">Delivered</a>
                    <a class="btn btn-danger" href="{{url('cancelled', $data->id)}}">Cancelled</a>
                  </td>
                </tr>

                @endforeach
              </table>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>