<?php
$status = isset($_GET['status']) ? $_GET['status'] : null;

$message = '';
if ($status === 'false') {
    $message = 'Username atau password salah.';
} elseif ($status === 'error') {
    $message = 'Akun tidak ditemukan.';
}

if ($message) {
    echo "<div class='alert alert-danger position-absolute m-5' role='alert'>$message</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Material Admin Pro</title>
    <!-- Load Favicon-->
    <link href="../img/logo.webp" rel="shortcut icon" type="image/x-icon" />
    <!-- Load Material Icons from Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <!-- Roboto and Roboto Mono fonts from Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
    <!-- Load main stylesheet-->
    <link href="template/css/styles.css" rel="stylesheet" />
</head>

<body class="bg-pattern-waihou">
    <!-- Layout wrapper-->
    <div id="layoutAuthentication">
        <!-- Layout content-->
        <div id="layoutAuthentication_content">
            <!-- Main page content-->
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8">
                            <div class="card card-raised shadow-10 mt-5 mt-xl-10 mb-4">
                                <div class="card-body p-5">
                                    <!-- Auth header with logo image-->
                                    <div class="text-center">
                                        <h1 class="display-5 mb-0">Login</h1>
                                        <div class="subheading-1 mb-5">to continue to app</div>
                                    </div>
                                    <form action="assets/fungsi_login.php" method="POST">
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" id="name" name="username" class="form-control w-100" placeholder="Enter your name">
                                        </div>

                                        <div class="mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" id="password" name="password" class="form-control w-100" placeholder="Enter your password">
                                        </div>

                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center mb-5"><a class="small fw-500 text-decoration-none link-white" href="app-auth-register-basic.html">Need an account? Sign up!</a></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Load Bootstrap JS bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Load global scripts-->
    <script type="module" src="js/material.js"></script>
    <script src="template/js/scripts.js"></script>

    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="material-admin-pro"></sb-customizer>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'828910c77ff83fb9',t:'MTcwMDQwMzMyOS40NzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"828910c77ff83fb9","version":"2023.10.0","token":"6e2c2575ac8f44ed824cef7899ba8463"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from material-admin-pro.startbootstrap.com/app-auth-login-styled-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 14:16:38 GMT -->

</html>