<form method="POST" action="/restaurant/create">
    {{ csrf_field() }}
    <div>
        <label for="name">Name :</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="adress">Adress :</label>
        <input type="text" name="adress" id="adress">
    </div>
    <div>
        <label for="zipCode">ZipCode :</label>
        <input type="number" name="zipCode" id="zipCode">
    </div>
    <div>
        <label for="town">Town :</label>
        <input type="text" name="town" id="town">
    </div>
    <div>
        <label for="country">Country :</label>
        <input type="text" name="country" id="country">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="review">Review :</label>
        <input type="number" name="review" id="review">
    </div>
    <div>
        <input type="submit" value="Submit" href="/">
    </div>
</form>

<p>
    <a href="/">Retour index</a>
</p>