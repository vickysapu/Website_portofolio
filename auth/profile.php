<?php
session_start();

include("../assets/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from material-admin-pro.startbootstrap.com/app-dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 14:16:33 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Material Admin Pro</title>
    <!-- Load Favicon-->
    <link href="../img/logo.webp" rel="shortcut icon" type="image/x-icon" />
    <!-- Load Material Icons from Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <!-- Roboto and Roboto Mono fonts from Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
    <!-- Load main stylesheet-->
    <link href="../template/css/styles.css" rel="stylesheet" />
</head>

<body class="nav-fixed bg-light">
    <nav class="top-app-bar navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <!-- Drawer toggle button-->
            <button class="btn btn-lg btn-icon order-1 order-lg-0" id="drawerToggle" href="javascript:void(0);"><i class="material-icons">menu</i></button>
            <!-- Navbar brand-->
            <a class="navbar-brand me-auto" href="index-2.html">
                <div class="text-uppercase font-monospace">My Portofolio</div>
            </a>
            <!-- Navbar items-->
            <div class="d-flex align-items-center mx-3 me-lg-0">
                <div class="d-flex">
                    <!-- Messages dropdown-->
                    <div class="dropdown dropdown-notifications d-none d-sm-block">
                        <button class="btn btn-lg btn-icon dropdown-toggle me-3" id="dropdownMenuMessages" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">mail_outline</i></button>
                        <ul class="dropdown-menu dropdown-menu-end me-3 mt-3 py-0 overflow-hidden" aria-labelledby="dropdownMenuMessages">
                            <li>
                                <h6 class="dropdown-header bg-primary text-white fw-500 py-3">Messages</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item unread" href="#!">
                                    <div class="dropdown-item-content">
                                        <div class="dropdown-item-content-text">
                                            <div class="text-truncate d-inline-block" style="max-width: 18rem">Hi there, I had a question about something, is there any way you can help me out?</div>
                                        </div>
                                        <div class="dropdown-item-content-subtext">Mar 12, 2023 · Juan Babin</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <div class="dropdown-item-content">
                                        <div class="dropdown-item-content-text">
                                            <div class="text-truncate d-inline-block" style="max-width: 18rem">Thanks for the assistance the other day, I wanted to follow up with you just to make sure everyting is settled.</div>
                                        </div>
                                        <div class="dropdown-item-content-subtext">Mar 10, 2023 · Christine Hendersen</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <div class="dropdown-item-content">
                                        <div class="dropdown-item-content-text">
                                            <div class="text-truncate d-inline-block" style="max-width: 18rem">Welcome to our group! It's good to see new members and I know you will do great!</div>
                                        </div>
                                        <div class="dropdown-item-content-subtext">Mar 8, 2023 · Celia J. Knight</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item py-3" href="#!">
                                    <div class="d-flex align-items-center w-100 justify-content-end text-primary">
                                        <div class="fst-button small">View all</div>
                                        <i class="material-icons icon-sm ms-1">chevron_right</i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Notifications and alerts dropdown-->
                    <div class="dropdown dropdown-notifications d-none d-sm-block">
                        <button class="btn btn-lg btn-icon dropdown-toggle me-3" id="dropdownMenuNotifications" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">notifications</i></button>
                        <ul class="dropdown-menu dropdown-menu-end me-3 mt-3 py-0 overflow-hidden" aria-labelledby="dropdownMenuNotifications">
                            <li>
                                <h6 class="dropdown-header bg-primary text-white fw-500 py-3">Alerts</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item unread" href="#!">
                                    <i class="material-icons leading-icon">assessment</i>
                                    <div class="dropdown-item-content me-2">
                                        <div class="dropdown-item-content-text">Your March performance report is ready to view.</div>
                                        <div class="dropdown-item-content-subtext">Mar 12, 2023 · Performance</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">check_circle</i>
                                    <div class="dropdown-item-content me-2">
                                        <div class="dropdown-item-content-text">Tracking codes successfully updated.</div>
                                        <div class="dropdown-item-content-subtext">Mar 12, 2023 · Coverage</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">warning</i>
                                    <div class="dropdown-item-content me-2">
                                        <div class="dropdown-item-content-text">Tracking codes have changed and require manual action.</div>
                                        <div class="dropdown-item-content-subtext">Mar 8, 2023 · Coverage</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider my-0" />
                            </li>
                            <li>
                                <a class="dropdown-item py-3" href="#!">
                                    <div class="d-flex align-items-center w-100 justify-content-end text-primary">
                                        <div class="fst-button small">View all</div>
                                        <i class="material-icons icon-sm ms-1">chevron_right</i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- User profile dropdown-->
                    <div class="dropdown">
                        <button class="btn btn-lg btn-icon dropdown-toggle" id="dropdownMenuProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">person</i></button>
                        <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuProfile">
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">person</i>
                                    <div class="me-3">Profile</div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">settings</i>
                                    <div class="me-3">Settings</div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">help</i>
                                    <div class="me-3">Help</div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    <i class="material-icons leading-icon">logout</i>
                                    <div class="me-3">Logout</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Layout wrapper-->
    <div id="layoutDrawer">
        <!-- Layout navigation-->
        <div id="layoutDrawer_nav">
            <!-- Drawer navigation-->
            <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
                <div class="drawer-menu">
                    <div class="nav">
                        <div class="drawer-menu-divider d-sm-none"></div>
                        <!-- Drawer section heading (Interface)-->
                        <div Drawer section heading (Interface)-->
                            <div class="drawer-menu-heading">Interface</div>
                            <!-- Drawer link (Overview)-->
                            <a class="nav-link" href="dashboard.php">
                                <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                                Dashboaord
                            </a>

                            <a class="nav-link" href="dataProject.php">
                                <div class="nav-link-icon"><i class="material-icons">topic</i></div>
                                Data Projek
                            </a>

                            <a class="nav-link" href="dataGlobal.php">
                                <div class="nav-link-icon"><i class="material-icons">topic</i></div>
                                Data Global
                            </a>

                            <a class="nav-link" href="profile.php">
                                <div class="nav-link-icon"><i class="material-icons">person </i></div>
                                Profile
                            </a>
                        </div>
                    </div>
                    <div class="footer">
                    </div>
            </nav>
        </div>
        <div id="layoutDrawer_content">
            <main>
                <div style="padding: 20px; max-width: 1200px; margin: auto;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                        <h2 style="font-size: 1.5rem;">Profil Pengguna</h2>
                    </div>
                    <hr style="margin-top: 10px; margin-bottom: 30px; border: 0; border-top: 1px solid #ddd;" />

                    <?php
                    include "../assets/koneksi.php";

                    $query = $kon->query("SELECT * FROM user");
                    while ($view = $query->fetch_assoc()) {
                    ?>
                        <form style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border: none; overflow: hidden;" action="../assets/cangeProfile.php" method="post">
                            <div style="background-color: #007bff; color: white; padding: 15px; display: flex; align-items: center;">
                                <span style="font-size: 2rem; margin-right: 10px;"><i class='fas fa-user'></i></span>
                                <div style="font-weight: 500;">Informasi Akun</div>
                            </div>
                            <div style="padding: 20px;">
                                <div style="text-align: center; margin-bottom: 20px;">
                                    <span style="font-size: 8rem; color: #007bff; display: block; margin-bottom: 10px;"><i class='fas fa-user-circle'></i></span>
                                    <button type="button" style="display: block; margin: 10px auto 0; padding: 5px 10px; border: 1px solid #ccc; background: none; cursor: pointer; border-radius: 5px;">Ubah Icon</button>
                                </div>
                                <div style="display: flex; flex-wrap: wrap;">
                                    <input type="hidden" id="uuid_user" name="userId" value="<?php echo $view['uuid_user'] ?>">

                                    <div style="flex: 1; min-width: 300px; margin-right: 10px; margin-bottom: 20px;">
                                        <label for="userName" style="display: block; margin-bottom: 5px;">Nama Pengguna</label>
                                        <div style="display: flex; align-items: center;">
                                            <span style="margin-right: 10px; color: #999; font-size: 1.2rem;"><i class='fas fa-user'></i></span>
                                            <input type="text" id="userName" name="userName" style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" value="<?php echo $view['nama']; ?>" placeholder="Masukkan nama pengguna">
                                        </div>
                                    </div>
                                    <div style="flex: 1; min-width: 300px; margin-bottom: 20px;">
                                        <label for="userPassword" style="display: block; margin-bottom: 5px;">Kata Sandi</label>
                                        <div style="display: flex; align-items: center;">
                                            <span style="margin-right: 10px; color: #999; font-size: 1.2rem;"><i class='fas fa-lock'></i></span>
                                            <input type="password" id="userPassword_<?php echo $view['uuid_user']; ?>" name="userPassword" style="flex: 1; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" value="<?php echo $view['password']; ?>" placeholder="Masukkan kata sandi baru">
                                            <button type="button" onclick="togglePassword('<?php echo $view['uuid_user']; ?>')" style="margin-left: 10px; padding: 5px 10px; border: none; background: #ccc; border-radius: 5px; cursor: pointer;">Show</button>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                                    <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">Simpan Perubahan</button>
                                    <button type="reset" style="padding: 10px 20px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">Reset Kata Sandi</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    }
                    ?>

                    <script>
                        function togglePassword(uuid) {
                            const passwordField = document.getElementById(`userPassword_${uuid}`);
                            const toggleButton = passwordField.nextElementSibling;

                            if (passwordField.type === "password") {
                                passwordField.type = "text";
                                toggleButton.textContent = "Hide";
                            } else {
                                passwordField.type = "password";
                                toggleButton.textContent = "Show";
                            }
                        }
                    </script>
                </div>
            </main>
            <footer style="padding: 20px; margin-top: auto; border-top: 1px solid #ddd; text-align: center;">
                <div style="font-size: 0.875rem;">Copyright &copy; Vicky Saputra 2024</div>
            </footer>
        </div>


    </div>
    <!-- Load Bootstrap JS bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Load global scripts-->
    <script type="module" src="js/material.js"></script>
    <script src="../template/js/scripts.js"></script>
    <!-- Load Custom Checkbox Script-->
    <script src="../template/js/widgets/checklist.js"></script>

    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="material-admin-pro"></sb-customizer>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'8289108f2d416029',t:'MTcwMDQwMzMyMC40NTAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/g/scripts/jsd/9914b343/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8289108f2d416029","version":"2023.10.0","token":"6e2c2575ac8f44ed824cef7899ba8463"}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from material-admin-pro.startbootstrap.com/app-dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 14:16:34 GMT -->

</html>