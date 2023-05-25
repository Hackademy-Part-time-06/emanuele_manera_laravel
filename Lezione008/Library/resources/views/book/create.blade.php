<form action="{{route('book.store')}}" method="POST">
    @method('POST')
    @csrf 

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('name')}}">
        
    </div>
    <div class="mb-3">
        <label class="form-label">Numero di pagine</label>
        <input type="integer" class="form-control" id="pages" name="pages" placeholder="Pagine" value="{{old('pages')}}">
        
    </div>
    <div class="mb-3">
        <label class="form-label">Autore</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Autore" value="{{old('author')}}">
        
    </div>
    <div class="mb-3">
        <label class="form-label">Anno prima edizione</label>
        <input type="integer" class="form-control" id="pages" name="year" placeholder="Anno" value="{{old('year')}}">
        
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
</form>
