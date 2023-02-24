<!DOCTYPE html>
<html>

@section('app')

<body>
    <div class="login-page d-flex align-items-center bg-gray-100">
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body p-5">
                            <header class="text-center mb-5">
                                <h1 class="text-xxl text-gray-400 text-uppercase">Bootstrap<strong class="text-primary">Dashboard</strong></h1>
                                <p class="text-gray-500 fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            </header>
                            <form class="login-form" method="get" action="index.html">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto">
                                        <div class="input-material-group mb-3">
                                            <input class="input-material" id="login-username" type="text" name="loginUsername" autocomplete="off" required data-validate-field="loginUsername">
                                            <label class="label-material" for="login-username">Username</label>
                                        </div>
                                        <div class="input-material-group mb-4">
                                            <input class="input-material" id="login-password" type="password" name="loginPassword" required data-validate-field="loginPassword">
                                            <label class="label-material" for="login-password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary mb-3" id="login" type="submit">Login</button><br><a class="text-xs text-paleBlue" href="#!">Forgot Password? </a><br><span class="text-xs mb-0 text-gray-500">Do not have an account? </span><a class="text-xs text-paleBlue ms-1" href="register.html"> Signup</a>
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
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
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
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>