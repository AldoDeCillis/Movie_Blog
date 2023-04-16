<x-layout>
    <div class="container vh-100">
        <div class="row align-items-center h-100">
            <div class="col-6 d-flex flex-column align-items-center">
                <h1 class="text-white">Diventa Revisore!</h1>
                <p class="text-white">
                    Ottieni un introito extra revisionando i contenuti per la nostra piattaforma
                </p>
            </div>
            <div class="col-6">
                <form action="{{route('updateRevisor.become')}}" method="POST" class="shadow text-white p-3">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-10">
                            <label for="name" class="form-label">Indirizzo</label>
                            <input type="text" name="address" class="form-control" id="name">
                        </div>
                        <div class="col-2">
                            <label for="exampleInputEmail1" class="form-label">N°</label>
                            <input type="number" name="civic" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Civico</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">IBAN</label>
                        <input type="text" name="iban" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Telefono</label>
                        <input type="number" name="tel" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="col-12">
                        <div class="d-flex w-100 justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Diventa Revisore!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
