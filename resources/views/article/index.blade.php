<x-layout>
    <div class="row h-100 justify-content-around align-items-center">
        @foreach ($articles as $article)
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>

                        <p class="card-text">CATEGORIA: {{ $article->category->name }}</p>

                        <p class="card-text">{{ $article->description }}</p>
                        <p class="card-text">{{ $article->price }}</p>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Mostra di più</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
