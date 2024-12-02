<?php
session_start();

include "assets/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Material Admin Pro</title>
    <link href="img/logo.webp" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
    <link href="template/css/styles.css" rel="stylesheet" />
</head>

<body class="bg-gradient-primary">
    <header class="bg-white border-bottom py-3 fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand fw-bold" href="login.php">Vicky Saputra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Projek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <main class="py-5 mt-5">
        <section id="home" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="img/me.jpg" class="img-fluid shadow-sm" alt="Profile Picture" style="max-width: 250px; border-radius: 8px;">
                    </div>
                    <div class="col-md-8">
                        <h1 class="fw-bold">VICKY SAPUTRA</h1>
                        <p class="text-muted">Web Developer | Desain UI/UI</p>
                        <p>
                            Saya adalah pengembang web profesional dengan pengalaman dalam membangun website dinamis dan responsif.
                            Ayo bekerja sama untuk menciptakan sesuatu yang hebat!
                        </p>
                        <a href="#contact" class="btn btn-primary btn-lg px-4">Hubungi Saya</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Keahlian</h2>
                <div class="row g-4">
                    <?php
                    $stmt = $kon->prepare("SELECT * FROM skill");
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($tcs = $result->fetch_assoc()) {
                        $gambar_skill = !empty($tcs['gambar_skill']) ? $tcs['gambar_skill'] : 'default-skill.png';
                        $nama_skill = !empty($tcs['nama_skill']) ? $tcs['nama_skill'] : 'Skill Undefined';
                        $progres = (!empty($tcs['progres']) && $tcs['progres'] <= 100) ? $tcs['progres'] : 0;
                    ?>
                        <div class="col-md-4">
                            <div class="position-relative text-center">
                                <img src="assets/gambar_skill/<?php echo htmlspecialchars($gambar_skill, ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid rounded" width="250px" height="250px" alt="<?php echo htmlspecialchars($nama_skill, ENT_QUOTES, 'UTF-8'); ?>">
                                <div class="progress mt-3" style="height: 15px;">
                                    <h5 class="position-absolute top-60 start-50 translate-middle text-dark fw-bold" style="margin-top : -20px;">
                                        <?php echo htmlspecialchars($nama_skill, ENT_QUOTES, 'UTF-8'); ?>
                                    </h5>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo htmlspecialchars($progres, ENT_QUOTES, 'UTF-8'); ?>%;" aria-valuenow="<?php echo htmlspecialchars($progres, ENT_QUOTES, 'UTF-8'); ?>" aria-valuemin="0" aria-valuemax="100">
                                        <?php echo htmlspecialchars($progres, ENT_QUOTES, 'UTF-8'); ?>%
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    $stmt->close();
                    ?>
                </div>
            </div>
        </section>



        <section id="portfolio" class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Projek Saya</h2>
                <div class="row g-4">
                    <?php
                    // Set limit to show only 3 projects or all if specified
                    $limit = isset($_GET['lihat']) && $_GET['lihat'] === 'semua' ? '' : 'LIMIT 3';
                    $cp = $kon->query("SELECT * FROM project ORDER BY id_project DESC $limit");

                    while ($tcp = $cp->fetch_assoc()) {
                        $fileExtension = strtolower(pathinfo($tcp['file_project'], PATHINFO_EXTENSION));
                        $filePath = "assets/file_project/" . htmlspecialchars($tcp['file_project'], ENT_QUOTES, 'UTF-8');

                        if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'])) {
                            echo "<div class='col-md-4'>
                            <div class='card shadow'>
                                <img src='$filePath' class='card-img-top' alt='Project Image'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . htmlspecialchars($tcp['nama_projek'], ENT_QUOTES, 'UTF-8') . "</h5>
                                    <p class='card-text'>" . htmlspecialchars($tcp['keterangan'], ENT_QUOTES, 'UTF-8') . "</p>
                                    " . (isset($tcp['link_project']) && $tcp['link_project'] !== "-" ? "<a href='" . htmlspecialchars($tcp['link_project'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='btn btn-primary'>Lihat</a>" : '') . "
                                </div>
                            </div>
                        </div>";
                        } elseif (in_array($fileExtension, ['mp4', 'avi', 'mov', 'wmv', 'mkv'])) {
                            echo "<div class='col-md-4'>
                            <div class='card shadow'>
                                <video class='card-img-top' controls>
                                    <source src='$filePath' type='video/$fileExtension'>
                                    Your browser does not support the video tag.
                                </video>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . htmlspecialchars($tcp['nama_projek'], ENT_QUOTES, 'UTF-8') . "</h5>
                                    <p class='card-text'>" . htmlspecialchars($tcp['keterangan'], ENT_QUOTES, 'UTF-8') . "</p>
                                    " . (isset($tcp['link_project']) && $tcp['link_project'] !== "-" ? "<a href='" . htmlspecialchars($tcp['link_project'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='btn btn-primary'>Lihat</a>" : '') . "
                                </div>
                            </div>
                        </div>";
                        } elseif ($fileExtension === 'pdf') {
                            echo "<div class='col-md-4'>
                            <div class='card shadow'>
                                <iframe src='https://docs.google.com/gviewer?embedded=true&url=" . urlencode($filePath) . "' width='100%' height='250px' style='border: none;'></iframe>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . htmlspecialchars($tcp['nama_projek'], ENT_QUOTES, 'UTF-8') . "</h5>
                                    <p class='card-text'>" . htmlspecialchars($tcp['keterangan'], ENT_QUOTES, 'UTF-8') . "</p>
                                    " . (isset($tcp['link_project']) && $tcp['link_project'] !== "-" ? "<a href='" . htmlspecialchars($tcp['link_project'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='btn btn-primary'>Lihat</a>" : '') . "
                                </div>
                            </div>
                        </div>";
                        }
                    }
                    ?>
                </div>

                <div class="text-center mt-4">
                    <?php if (!isset($_GET['lihat']) || $_GET['lihat'] !== 'semua') { ?>
                        <a href="?lihat=semua" class="btn btn-outline-primary">Lihat Semua Projek</a>
                    <?php } else { ?>
                        <a href="?lihat=teratas" class="btn btn-outline-secondary">Lihat 3 Projek Teratas</a>
                    <?php } ?>
                </div>
            </div>
        </section>



        <section id="testimonials" class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Testimoni</h2>
                <div class="overflow-auto d-flex flex-nowrap">
                    <?php
                    $stmt = $kon->prepare("SELECT * FROM testimoni WHERE ket_status = 1");
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($tct = $result->fetch_assoc()) {
                    ?>
                        <div class="card shadow h-100 me-3" style="min-width: 18rem;">
                            <div class="card-body text-center">
                                <?php
                                $fotoPath = "assets/foto_test/" . basename($tct['foto']);
                                if (!empty($tct['foto']) && file_exists($fotoPath)) {
                                ?>
                                    <img src="<?php echo htmlspecialchars($fotoPath); ?>" class="rounded-circle mb-3" alt="Foto Client" style="width: 8rem; height: 8rem; object-fit: cover;">
                                <?php
                                } else {
                                ?>
                                    <img src="assets/foto_test/profile_error.png" class="rounded-circle mb-3" alt="Foto Tidak Ditemukan" style="width: 8rem; height: 8rem; object-fit: cover;">
                                <?php
                                }
                                ?>
                                <blockquote class="blockquote">
                                    <p><?php echo htmlspecialchars($tct['nama']); ?></p>
                                    <footer class="blockquote-footer">"<?php echo htmlspecialchars($tct['pesan']); ?>"</footer>
                                </blockquote>
                            </div>
                        </div>
                    <?php
                    }
                    $stmt->close();
                    ?>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#testimoniModal">Berikan Testimoni</button>
                </div>
            </div>
        </section>
        <div class="modal fade" id="testimoniModal" tabindex="-1" aria-labelledby="testimoniModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="testimoniModalLabel">Testimoni</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="testimoniForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Anda</label>
                                <input class="form-control" type="file" name="foto" id="foto" aria-label="foto">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Anda</label>
                                <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Testimoni Anda</label>
                                <textarea class="form-control" name="pesan" id="pesan" rows="4" placeholder="Tulis testimoni Anda di sini..." required></textarea>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-primary" type="button" id="submitTestimoni">Kirim</button>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#submitTestimoni').click(function() {
                    var formData = new FormData($('#testimoniForm')[0]);

                    $.ajax({
                        url: 'assets/tambah_testimoni.php',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            alert('Testimoni telah direkan Admin akan memproses!');
                            $('#testimoniForm')[0].reset();
                            $('#testimoniModal').modal('hide');
                            reload.location();
                        },
                        error: function() {
                            alert('Terjadi kesalahan, silakan coba lagi.');
                        }
                    });
                });
            });
        </script>

        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Hubungi Saya</h2>
                <form id="contactForm">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" name="nama_pengirim" class="form-control form-control-lg" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email_pengirim" class="form-control form-control-lg" placeholder="Masukkan email Anda" required>
                        </div>
                    </div>
                    <div class="my-4">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea id="message" class="form-control form-control-lg" name="pesan" rows="4" placeholder="Tulis pesan Anda" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" id="submitContactForm" class="btn btn-success btn-lg px-5">Kirim</button>
                    </div>
                </form>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#submitContactForm').click(function() {
                            var formData = new FormData($('#contactForm')[0]);

                            $.ajax({
                                url: 'assets/kirim_pesan.php',
                                type: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    alert('Pesan berhasil dikirim!');
                                    $('#contactForm')[0].reset();
                                },
                                error: function() {
                                    alert('Terjadi kesalahan, silakan coba lagi.');
                                }
                            });
                        });
                    });
                </script>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <!-- Kolom pertama: Teks copyright -->
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 Vicky Saputra. All rights reserved.</p>
                </div>

                <!-- Kolom kedua: Ikon media sosial -->
                <div class="col-md-6 text-md-end">
                    <a href="#" target="_blank" class="text-white me-3">
                        <i class="fab fa-facebook fa-lg"></i>
                        Vicky Saputra
                    </a>
                    <a href="#" target="_blank" class="text-white">
                        <i class="fab fa-instagram fa-lg"></i>
                        mr.black_1user
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Tambahkan CDN untuk Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script type="module" src="js/material.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>