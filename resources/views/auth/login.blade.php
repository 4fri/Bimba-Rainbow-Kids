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
                                <h1 class="text-xxl text-gray-400 text-uppercase">LOGIN<strong class="text-primary"> BIMBA</strong></h1>
                                <p class="text-gray-500 fw-light">Silahkan Login terlebih dahulu</p>
                            </header>
                            <form class="login-form" method="get" action="index.html">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto">
                                        <div class="form-group mb-3">
                                            <input class="form-control" id="login-username" type="text" name="loginUsername" autocomplete="off" required>
                                            <label class="label-material" for="login-username">Username</label>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input class="form-control" id="login-password" type="password" name="loginPassword" required>
                                            <label class="label-material" for="login-password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary mb-3" id="login" type="submit">Sign In</button><br><a class="text-xs text-paleBlue" href="#!">Forgot Password? </a><br><span class="text-xs mb-0 text-gray-500">Do not have an account? </span><a class="text-xs text-paleBlue ms-1" href="{{ route('register') }}"> Sign Up</a>
                                        <!-- This should be submit button but I replaced it with <a> for demo purposes-->
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