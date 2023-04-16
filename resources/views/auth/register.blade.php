<x-layout>
    <div class="container vh-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-6">
                <form action="{{ route('register') }}" method="POST" class="shadow text-white">
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
                    <h1 class="display-6 text-center">Registrati!</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="col-12">
                        <div class="d-flex w-100 justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Registrati</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
