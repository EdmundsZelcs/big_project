<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<style>
.skats {
background: linear-gradient(to right, rgb(12, 13, 58), rgb(9, 7, 104),  rgb(47, 30, 124), rgb(44, 20, 150));
overflow-x: hidden;
}
.loged-in{
    display: flex;
    flex-wrap: wrap;
}
</style>
<body class = "skats">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a class="navbar-brand" href="/">
                        <img src="data:image/png;base64,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" alt="Logo" style="width:40px;">
                    </a>
                </div>
                {{-- @if (Route::has('login')) --}}
                <div class="navbar-nav ms-auto"> 
                    @auth
                        <div class = 'loged-in'>
                            <h3>{{Auth::user()->username}}</h3>
                            <button onclick="logout()" class="btn btn-danger"><i class="bi bi-box-arrow-left"></i></button>
                        </div> 
                        <form id = 'logout-form' action="{{route('logout')}}" method="POST">
                            @csrf
                        </form>
                    @else
                    <a href="/login" class="nav-item nav-link">Login</a>
                    <a href="/register" class="nav-item nav-link">Sign Up</a>
                    @endauth
                    
                </div>
                {{-- @endif --}}
            </div>
        </div>
    </nav>
    
    @yield('content')
</body>
<script>
    const logoutForm = document.getElementById('logout-form');
    const logout = () => {
        event.preventDefault();
        logoutForm.submit();
    }
</script>
</html>