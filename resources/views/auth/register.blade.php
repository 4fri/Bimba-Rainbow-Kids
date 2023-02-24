@extends('auth.head')

<body>
    <div class="login-page d-flex align-items-center bg-gray-100">
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    @if (session()->has('pop_message'))
                    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('pop_message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-body p-5">
                            <header class="text-center mb-5">
                                <h1 class="text-xxl text-gray-400 text-uppercase">Registrasi<strong class="text-primary"> BIMBA</strong></h1>
                                <p class="text-gray-500 fw-light">Silahkan Lakukan Registrasi Disini</p>
                            </header>
                            <form class="register-form" method="POST" action="{{ route('storeRegist') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="form-group mb-3">
                                            <label class="label-material">Full Name </label>
                                            <input class="form-control @error('fullname') is-invalid @enderror" type="text" name="fullname">
                                            @error('fullname')
                                            <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="label-material">Username </label>
                                            <input class="form-control @error('username') is-invalid @enderror" type="text" name="username">
                                            @error('username')
                                            <small class=" text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="label-material">Email Address</label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email">
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="label-material">Password</label>
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                                            @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" id="register-agree" name="registerAgree" type="checkbox" required value="1">
                                            <label class="form-check-label form-label" for="register-agree">I agree with the terms and policy </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary mb-3" id="login" type="submit">Sign Up</button><br><span class="text-xs text-gray-500">Already have an account? </span><a class="text-xs text-paleBlue ms-1" href="{{ route('login') }}">Sign In</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>

    @extends('auth.script')
</body>

</html>