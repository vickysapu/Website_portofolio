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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- Load Favicon-->
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
                    <!-- Navbar-->
                    <!-- Navbar buttons-->
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
            <!-- Layout content-->
            <div id="layoutDrawer_content">
                <!-- Main page content-->
                <main>
                    <div class="container-xl p-5">
                        <div class="d-flex justify-content-between align-items-end">
                            <h2 class="display-6 mb-0">Data Project</h2>
                        </div>
                        <hr class="mt-2 mb-5" />
                        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahProject">Tambah Data</button>

                        <div class="card card-raised h-100 overflow-hidden">
                            <div class="card-header bg-primary text-white px-4">
                                <div class="fw-500">Project Terdaftar</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <tbody class="align-middle"></tbody>
                                    <thead class="text-center font-monospace">
                                        <tr>
                                            <td class="px-4 py-2 border-bottom-0 text-muted text-start">Nama Project</td>
                                            <td class="px-4 py-2 border-bottom-0 text-muted text-center">Member</td>
                                            <td class="px-4 py-2 border-bottom-0 text-muted">Besar</td>
                                            <td class="px-4 py-2 border-bottom-0 text-muted">Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        $query = $kon->query("SELECT * FROM project");

                                        while ($row = $query->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td class="px-4 border-top text-start">
                                                    <div class="d-flex align-items-center">
                                                        <i class="material-icons text-muted me-2">folder</i>
                                                        <?php echo !empty($row['nama_projek']) ? $row['nama_projek'] : '-'; ?>
                                                    </div>
                                                </td>
                                                <td class="px-4 border-top"><?php echo !empty($row['member']) ? $row['member'] : '-'; ?></td>
                                                <td class="px-4 border-top"><?php echo !empty($row['besar_project']) ? $row['besar_project'] : '-'; ?></td>
                                                <td class="px-4 border-top">
                                                    <button
                                                        class="btn preview-btn"
                                                        type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailModal"
                                                        data-id="<?php echo $row['id_project']; ?>"
                                                        data-nama="<?php echo $row['nama_projek']; ?>"
                                                        data-member="<?php echo $row['member']; ?>"
                                                        data-mentor="<?php echo $row['mentor']; ?>"
                                                        data-besar="<?php echo $row['besar_project']; ?>"
                                                        data-link="<?php echo $row['link_project']; ?>"
                                                        data-keterangan="<?php echo $row['keterangan']; ?>"
                                                        data-tanggal="<?php echo $row['tanggal_input']; ?>"
                                                        data-foto="<?php echo $row['file_project']; ?>">
                                                        &#128269;
                                                    </button>
                                                    <button
                                                        class="btn edit-btn"
                                                        type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal"
                                                        data-id="<?php echo $row['id_project']; ?>"
                                                        data-nama="<?php echo $row['nama_projek']; ?>"
                                                        data-member="<?php echo $row['member']; ?>"
                                                        data-mentor="<?php echo $row['mentor']; ?>"
                                                        data-besar="<?php echo $row['besar_project']; ?>"
                                                        data-link="<?php echo $row['link_project']; ?>"
                                                        data-keterangan="<?php echo $row['keterangan']; ?>"
                                                        data-foto="<?php echo $row['file_project']; ?>">
                                                        &#9998;
                                                    </button>
                                                    <a href="javascript:void(0);" class="btn" onclick="deleteProject(<?php echo $row['id_project']; ?>)">
                                                        &#10006;
                                                    </a>

                                                    <script>
                                                        function deleteProject(id) {
                                                            Swal.fire({
                                                                title: 'Are you sure?',
                                                                text: "You won't be able to revert this!",
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'Yes, delete it!',
                                                                cancelButtonText: 'Cancel'
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    window.location.href = "../assets/hapusProject.php?id=" + id + "&status=dataProject";
                                                                }
                                                            });
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 mt-auto border-top" style="min-height: 74px">
                    <div class="container-xl px-5">
                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between small">
                            <div class="me-sm-2">Copyright © vicky saputra 2024</div>
                            <div class="d-flex ms-sm-2">
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Project</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../assets/updateData.php?status=dashboard" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_project" value="" class="form-control" id="id_project" />
                            <div class="mb-3">
                                <label for="file_project" class="form-label">File</label>
                                <input type="file" name="file" class="form-control" id="file_project" />
                            </div>

                            <!-- Nama Project -->
                            <div class="mb-3">
                                <label for="nama_project" class="form-label">Nama Project</label>
                                <input type="text" name="nama_projek" class="form-control" id="nama_project" />
                            </div>

                            <!-- Member -->
                            <div class="mb-3">
                                <label for="member_project" class="form-label">Member</label>
                                <input type="text" name="member" class="form-control" id="member_project" />
                            </div>

                            <!-- Mentor -->
                            <div class="mb-3">
                                <label for="mentor_project" class="form-label">Mentor</label>
                                <input type="text" name="mentor" class="form-control" id="mentor_project" />
                            </div>

                            <!-- Besar Project -->
                            <div class="mb-3">
                                <label for="besar_project" class="form-label">Besar Project</label>
                                <input type="text" name="besar_project" class="form-control" id="besar_project" />
                            </div>

                            <!-- Link Project -->
                            <div class="mb-3">
                                <label for="link_project" class="form-label">Link Project</label>
                                <input type="text" name="link_project" class="form-control" id="link_project" />
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Project Details</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <!-- Foto -->
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <img src="path_to_image.jpg" alt="Project Image" class="img-fluid" id="foto" readonly />
                            </div>

                            <!-- Nama Project -->
                            <div class="mb-3">
                                <label for="nama_project" class="form-label">Nama Project</label>
                                <input type="text" class="form-control" id="nama_project" value="Sample Project" readonly />
                            </div>

                            <!-- Member -->
                            <div class="mb-3">
                                <label for="member_project" class="form-label">Member</label>
                                <input type="text" class="form-control" id="member_project" value="John Doe, Jane Doe" readonly />
                            </div>

                            <!-- Mentor -->
                            <div class="mb-3">
                                <label for="mentor_project" class="form-label">Mentor</label>
                                <input type="text" class="form-control" id="mentor_project" value="Dr. Smith" readonly />
                            </div>

                            <!-- Besar Project -->
                            <div class="mb-3">
                                <label for="besar_project" class="form-label">Besar Project</label>
                                <input type="text" class="form-control" id="besar_project" value="5GB" readonly />
                            </div>

                            <!-- Link Project -->
                            <div class="mb-3">
                                <label for="link_project" class="form-label">Link Project</label>
                                <input type="url" class="form-control" id="link_project" value="https://www.projectlink.com" readonly />
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" rows="3" readonly>Project description goes here...</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_input" class="form-label">Tanggal Input</label>
                                <input type="text" class="form-control" id="tanggal_input" value="2024-11-19" readonly />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modalTambahProject" tabindex="-1" aria-labelledby="modalTambahProjectLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahProjectLabel">Tambah Project</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../assets/tambah_project.php?status=dataProject" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Pilih-File">Pilih File</label>
                                <input type="file" class="form-control" name="file_project" id="Pilih-File" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_file">Nama File</label>
                                <input type="text" class="form-control" name="nama_project" id="nama_file" placeholder="nama file..." required>
                            </div>
                            <div class="form-group">
                                <label for="member">Member</label>
                                <input type="text" class="form-control" id="member" name="member_project" aria-describedby="emailHelp" placeholder="member...">
                            </div>
                            <div class="form-group">
                                <label for="mentor">Mentor</label>
                                <input type="text" class="form-control" id="mentor" name="mentor_project" placeholder="nama mentor...">
                            </div>
                            <div class="form-group">
                                <label for="besar_file">Besar</label>
                                <input type="text" class="form-control" id="besar_file" name="besar_project" aria-describedby="emailHelp" placeholder="besar_file...">
                            </div>
                            <div class="form-group">
                                <label for="link-project">Link</label>
                                <input type="text" class="form-control" id="link-project" name="link_project" aria-describedby="emailHelp" placeholder="besar_file...">
                            </div>
                            <div class="form-group">
                                <label for="keteragan">Keterangan</label>
                                <textarea type="text" class="form-control" id="link-project" name="keterangan" aria-describedby="emailHelp" placeholder="keterangan..."></textarea>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Keluar</button>
                                <button class="btn btn-text-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const previewButtons = document.querySelectorAll(".preview-btn");
                const modal = document.getElementById("detailModal");

                previewButtons.forEach(button => {
                    button.addEventListener("click", function() {
                        const nama = this.getAttribute("data-nama");
                        const member = this.getAttribute("data-member");
                        const mentor = this.getAttribute("data-mentor");
                        const besar = this.getAttribute("data-besar");
                        const link = this.getAttribute("data-link");
                        const keterangan = this.getAttribute("data-keterangan");
                        const tanggal = this.getAttribute("data-tanggal");
                        const foto = this.getAttribute("data-foto");

                        modal.querySelector("#nama_project").value = nama || "-";
                        modal.querySelector("#member_project").value = member || "-";
                        modal.querySelector("#mentor_project").value = mentor || "-";
                        modal.querySelector("#besar_project").value = besar || "-";
                        modal.querySelector("#link_project").value = link || "-";
                        modal.querySelector("#keterangan").value = keterangan || "-";
                        modal.querySelector("#tanggal_input").value = tanggal || "-";
                        modal.querySelector("#foto").src = `../assets/file_project/${foto}`;
                    });
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const editButtons = document.querySelectorAll(".edit-btn");
                const modal = document.getElementById("editModal");

                editButtons.forEach(button => {
                    button.addEventListener("click", function() {
                        // Ambil data dari atribut
                        const nama = this.getAttribute("data-nama");
                        const member = this.getAttribute("data-member");
                        const mentor = this.getAttribute("data-mentor");
                        const besar = this.getAttribute("data-besar");
                        const link = this.getAttribute("data-link");
                        const keterangan = this.getAttribute("data-keterangan");
                        const tanggal = this.getAttribute("data-tanggal");
                        const foto = this.getAttribute("data-foto");

                        // Masukkan data ke dalam modal
                        modal.querySelector("#nama_project").value = nama || "-";
                        modal.querySelector("#member_project").value = member || "-";
                        modal.querySelector("#mentor_project").value = mentor || "-";
                        modal.querySelector("#besar_project").value = besar || "-";
                        modal.querySelector("#link_project").value = link || "-";
                        modal.querySelector("#keterangan").value = keterangan || "-";
                        modal.querySelector("#file_project").value = foto || "-";
                    });
                });
            });
        </script>

        <!-- Load Bootstrap JS bundle-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- Load global scripts-->
        <script type="module" src="js/material.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../template/js/scripts.js"></script>
        <!-- Load Custom Checkbox Script-->
        <script src="../template/js/widgets/checklist.js"></script>

        <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
        <sb-customizer project="material-admin-pro"></sb-customizer>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8289108f2d416029","version":"2023.10.0","token":"6e2c2575ac8f44ed824cef7899ba8463"}' crossorigin="anonymous"></script>
    </body>

    <!-- Mirrored from material-admin-pro.startbootstrap.com/app-dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 14:16:34 GMT -->

    </html>