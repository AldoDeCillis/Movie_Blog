<form wire:submit.prevent="store" method="POST" class="shadow text-white p-3">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('articleCreated'))
        <div class="alert alert-success">
            {{ session('articleCreated') }}
        </div>
    @endif
    <h1 class="display-6 text-center">Inserisci articolo!</h1>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" wire:model="title" name="title" class="form-control @error('title') is-invalid @enderror" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" wire:model="description" class="form-control" id="description" cols="30" rows="10"> </textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" wire:model="price" name="price" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoria</label>
        <select name="category" wire:model.defer="category" id="">
            <option value="" hidden>Categoria:</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select>
    </div>



    <div class="col-12">
        <div class="d-flex w-100 justify-content-center">
            <button type="submit" class="btn btn-outline-success">Inserisci articolo!</button>
        </div>
    </div>
</form>