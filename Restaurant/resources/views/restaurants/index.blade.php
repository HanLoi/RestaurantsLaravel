<h1>Hello</h1>



@foreach($reviews as $review )
    <h2>Autheur : {{$review->name}}</h2>
    <p>{{$review->review}}</p>
    <p>
        <a href="/restaurant/show/{{$review->id}}">=> Detail</a>
    </p>
@endforeach

<p>
    <a name="" id="" class="btn btn-primary" href="/restaurant/create" role="button">Create</a>
</p>