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
                        <th>Phone Number</th>
                        <th>Number of Guests</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    @foreach ($book as $book)
                    <tr>
                        <td>{{$book->phone}}</td>
                        <td>{{$book->guest}}</td>
                        <td>{{$book->date}}</td>
                        <td>{{$book->time}}</td>
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