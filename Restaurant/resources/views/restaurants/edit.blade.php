
<form method="POST" action="/restaurant/edit/{{$reviews->id}}">
    {{ csrf_field() }}
    @if($errors->has('title'))
        <small class="error">{{ $errors->first('title') }}</small>
    @endif 

    <div>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" value="{{ $reviews->name }}">
    </div>
    <div>
        <label for="adress">Adress :</label>
        <input type="text" name="adress" id="adress" value="{{ $reviews->adress }}">
    </div>
    <div>
        <label for="zipCode">ZipCode :</label>
        <input type="number" name="zipCode" id="zipCode" value="{{ $reviews->zipCode }}">
    </div>
    <div>
        <label for="town">Town :</label>
        <input type="text" name="town" id="town" value="{{ $reviews->town }}">
    </div>
    <div>
        <label for="country">Country :</label>
        <input type="text" name="country" id="country" value="{{ $reviews->country }}">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description" value="{{ $reviews->description }}">
    </div>
    <div>
        <label for="review">Review :</label>
        <input type="number" name="review" id="review" value="{{ $reviews->review }}">
    </div>
    <div>
        <input type="submit" value="Submit" href="/">
    </div>
</form>

