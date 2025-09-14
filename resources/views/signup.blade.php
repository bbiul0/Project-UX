<x-layout>
    <div class="d-flex justify-content-center align-items-center"
        style="min-height: 100vh;">
        <form class="p-5 rounded shadow" id="form-log"
            style="max-width: 30rem; width: 100%"
            method="POST"
            action="{{route('loginCustomer.signup')}}">
        @csrf

        <h1 class="text-center display-4 pb-5">REGISTER</h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissable fade show fw-bold" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissable fade show fw-bold" role="alert">
                {{session('error')}}
            </div>
        @endif
        
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" name = "fullname" id="exampleInputName" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
    
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name = "password"  id="exampleInputPassword1" required>
            </div>
    
            <div class="d-flex justify-content-between mt-3">
                <div>
                    <button type="submit" class="log-btn btn btn-outline-success" name="btnregister">Register User</button>
                    <a class="log-btn btn btn-outline-primary" href="/loginCustomer">Login</a>
                </div>
                
                <a class="log-btn btn btn-outline-secondary" href="/index">Store</a>
            </div>

        </form>
    </div>
</x-layout>