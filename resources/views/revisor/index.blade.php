<x-layout>
    @if ($articles_to_check)

        <div class="container">
            <div class="row">
                <div class="col-6 offset-3 text-white">
                    <div class="accordion" id="accordionPanelsStayOpenExample">

                        <div class="accordion-item">
                            @foreach ($articles_to_check as $article)
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne{{ $article->id }}" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne{{ $article->id }}">
                                        Articolo: {{ $article->id }}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne{{ $article->id }}" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <a href="{{route('revisor.show', compact('article'))}}">{{ $article->title }}</a>
                                        <p>{{ $article->description }}</p>
                                        <p>{{ $article->price }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
        </div>





    @endif















</x-layout>
