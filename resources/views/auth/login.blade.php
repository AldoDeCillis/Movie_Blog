<x-layout>
    <div class="container vh-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-6">
                <form action="{{ route('login') }}" method="POST" class="shadow text-white p-3 rounded">
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
                    <h1 class="display-6 text-center">Accedi!</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('register')}}" class="text-white">Non hai ancora un account? Crealo qui</a>
                    </div>
                    <div class="col-12">
                        <div class="d-flex w-100 justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Accedi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
