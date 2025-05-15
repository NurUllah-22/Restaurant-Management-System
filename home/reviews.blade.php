<div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
    <h2 class="section-title my-5 text-center">REVIEWS</h2>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            @auth
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('submit_review') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="review">Write a review:</label>
                                <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit Review</button>
                        </form>
                    </div>
                </div>
            @else
                <p class="text-center mb-4">
                    <a href="{{ route('login') }}" class="text-warning">Login</a> to write a review.
                </p>
            @endauth

            <div id="reviews-container">
                @if(isset($reviews) && count($reviews) > 0)
                    @foreach($reviews as $review)
                        <div class="testmonial-card mb-4">
                            <h3 class="testmonial-title">{{ $review->name }}</h3>
                            <div class="testmonial-body">
                                <p>{{ $review->review }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $reviews->links() }}
                    </div>
                @else
                    <p class="text-center">No reviews yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>