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
                            <th>Food Title</th>
                            <th>Food Details</th>
                            <th>Price</th>
                            <th>Food Image</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->detail}}</td>
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