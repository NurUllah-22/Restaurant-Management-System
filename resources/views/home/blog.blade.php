<!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">Our Current Menu</h2>
        <div class="row justify-content-center">
            
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    @foreach ($data as $data)
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img height="200px" src="food_images/{{$data->image}}" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">{{$data->price}}</a></h1>
                                <h4 class="pt20 pb20">{{$data->title}}</h4>
                                <p class="text-white">{{$data->detail}}</p>
                            </div>
                        <form action="{{url('add_cart', $data->id)}}" method="POST">
                            @csrf
                            <input value="1" name="qty" required type="number" min="1">
                            <input class="btn btn-info" type="submit" value="Add to Cart">
                        </form>
                        <br>
                        <br>
                        <br>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>