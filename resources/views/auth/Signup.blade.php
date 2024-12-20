@extends("layout.default")
@section("title", "Signup")
@section("content")
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <body>
        <main class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        @if(session()->has("success"))
                            <div class="alert alert-success">
                                {{session()->get("success")}}
                            </div>
                        
                        @endif
                        @if (session()->has("error"))
                             <div class="alert alert-success">
                                {{session()->get("error")}}
                            </div> 
                        
                        @endif
                        <div class="card">
                            <h3 class="card-header text-center">Please Sign up!</h3>
                            <div div class="card-body">
                                <form method="POST" action="{{route("Signup.post")}}">
                                    @csrf
                                    <div class="form-group mb-3">
                                    <input type="text" placeholder="username"
                                            id="fullname" class="form-control" name="fullname"
                                            required authofocus>
                                        @if ($errors->has('fullname'))
                                            <span class="text-danger">
                                                {{ $errors->first('fullname') }}
                                            </span>
                                        @endif                                    
                                    </div>
                                    <div class="form-group mb-3">
                                    <input type="text" placeholder="email"
                                            id="email" class="form-control" name="email"
                                            required authofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif                                    
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password"
                                                id="password" class="form-control"
                                                name="password" required>
                                        <br>
                                        <input type="password" placeholder="Confirm Password"
                                                id="password_confirmation" class="form-control"
                                                name="password_confirmation" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger" >
                                                    {{ $errors->first('password') }}
                                                </span>
                                            
                                            @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="role">Select Role</label>
                                        <select name="role" id="role" class="form-control" required>
                                            <option value="client">Client</option>
                                            <option value="psg">PSG Volunteer</option>
                                        </select>
                                    </div>
                                    
                                    <div class="d-grid mx-auto">
                                        <button type="submit"
                                            class="btn btn-dark btn-block">Sign Up</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>

@endsection