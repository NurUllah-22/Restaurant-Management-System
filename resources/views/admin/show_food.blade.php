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
                <div>
                    <h1>All Foods</h1>
                    <table>
                        <tr>
                            <th class="Food">Food Title</th>
                            <th class="Food">Food Details</th>
                            <th class="Food">Price</th>
                            <th class="Food">Food Image</th>
                            <th class="Food">Delete</th>
                            <th class="Food">Update</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td">{{$data->detail}}</td>
                            <td>{{$data->price}}</td>
                            <td>
                                <img width="150px" src="food_images/{{$data->image}}" alt="food image">
                            </td>
                            <td>
                                <a class="btn btn-danger" 
                                onclick="return confirm('Are you sure you want to delete this food?')" 
                                href="{{url('delete_food', $data->id)}}">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{url('update_food', $data->id)}}">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>