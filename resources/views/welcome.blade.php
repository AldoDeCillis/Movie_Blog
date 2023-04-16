<x-layout>
    <div class="container bg-transparent">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-white shadow text-center py-3">Presto.it</h1>
            </div>
            @auth
                <div class="col-12 d-flex justify-content-center my-5">
                    <a href="{{route('article.create')}}" class="btn btn-outline-warning">Inserisci un articolo!</a>
                </div>
            @endauth
        </div>
    </div>


</x-layout>
