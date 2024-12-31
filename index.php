<?php 
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>Muhammad Danil Jamaludin</title>
  </head>
  <body>
      <!-- Awal Navbar -->
     <section>
      <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color:#466b6e;">
        <div class="container"> 
          <a class="navbar-brand" href="#">Muhammad Danil Jamaludin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home"><b>HOME</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT ME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">PROJECT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      </section>
      <!-- Akhir Navbar -->

      <!-- Awal Jumbotron -->
      <section id="home" class="jumbotron text-center">
          <img src="img/Danil.jpeg" alt="Muhammad Danil Jamaludin" width="400" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Muhammad Danil Jamaludin</h1>
        <p class="lead">Student | Programmer</p>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"> -->
          <path fill="#e0f4f1" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,53.3C384,53,480,75,576,106.7C672,139,768,181,864,181.3C960,181,1056,139,1152,117.3C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
      </section>
      <!-- Akhir Jumbotron -->

      <!-- Awal About -->
      <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-between fs-5">
                <div class="col-md-4">
                <p>Hello, my name is <b>Muhammad Danil Jamaludin</b>, you can call me Danil. <b>I am from Kuningan, Indonesia</b>. I am 20 years old and currently studying at Kuningan University. I have a strong interest in technology, particularly in programming and graphic design.
                  I really enjoy the challenge of creating new things, and one of the ways I nurture my creativity is through drawing.</p>
            </div>
                <div class="col-md-4">
                <p>I often make sketches, digital designs, or other creative projects. In addition, I am also active in app development and continually strive to deepen my skills in various programming languages.
                  With the experience I have, I hope to contribute positively to the digital world. I aim to continue growing as a professional who can quickly adapt to this ever-evolving world.</p> 
            </div>
            </div>
        </div>
      </section>
      <!-- Akhir About -->

      <!-- Awal project -->
      <section id="project">
        <div class="container">
            <div class="row text-center">
                <div class="col mt-5 mb-5 text-black">
                    <h2>Project</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4 mb-3">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#projectModal1">
                        <img src="img/sketch.jpeg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                          <p class="card-text text-center">SKETCH</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#projectModal2">
                        <img src="img/2.jpeg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                          <p class="card-text text-center">COLOUR</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#projectModal3">
                        <img src="img/3.jpeg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                          <p class="card-text text-center">PHOTO</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
      </section>
      <!-- Akhir project -->

      <!-- Modal Project 1 -->
    <section>
      <div class="modal fade" id="projectModal1" tabindex="-1" aria-labelledby="projectModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="projectModalLabel1">Description Sketch</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Ini adalah project pertama saya dalam membuat gambar sketsa animasi. Sketsa ini dibuat menggunakan pensil dan kertas.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Project 2 -->
      <div class="modal fade" id="projectModal2" tabindex="-1" aria-labelledby="projectModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="projectModalLabel2">Description Colour</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Project ini adalah gambar yang diwarnai menggunakan campuran dari pensil warna. agar kesan yang di tampilkan hidup.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Project 3 -->
      <div class="modal fade" id="projectModal3" tabindex="-1" aria-labelledby="projectModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="projectModalLabel3">Description Photo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Project ini menggambarkan langit pada waktu senja. Menggunakan alat SmartPhone dan waktu pengambilan saat matahari mulai terbenam, sehingga  gambar yang dihasilkan bagus dan esetik.</p>
            </div>
          </div>
        </div>
      </div>
      </section>

      <!-- Awal Contact -->
      <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form name="contact-form" id="contact-form" action="simpandata.php" method="POST">
                        <div class="mb-3">
                            <input placeholder="Name" type="text" class="form-control" id="name" name="nama" />
                        </div>
                        <div class="mb-3">
                            <input placeholder="Email" type="email" class="form-control" id="email" name="email" />
                        </div>
                        <div class="mb-3">
                            <textarea placeholder="Message" class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-kirim"><b>Send</b></button>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </form>
                    <!-- Pesan Error -->
                    <div id="error-message" class="alert alert-danger mt-3" style="display:none;">
                        <strong>Error:</strong> Semua kolom harus diisi!
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Menambahkan event listener untuk form submit
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form dikirimkan langsung
    
            // Ambil nilai dari input dan textarea
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var pesan = document.getElementById('pesan').value;
    
            // Periksa apakah ada kolom yang kosong
            if (name === '' || email === '' || pesan === '') {
                // Tampilkan pesan error jika ada kolom yang kosong
                document.getElementById('error-message').style.display = 'block';
            } else {
                // Sembunyikan pesan error jika semua kolom terisi
                document.getElementById('error-message').style.display = 'none';
    
                // Lakukan aksi pengiriman form di sini (misalnya AJAX atau simulasikan pengiriman)
                // Contoh simulasikan loading:
                document.querySelector('.btn-kirim').disabled = true;
                document.querySelector('.spinner-border').style.display = 'inline-block';
    
                // Simulasi pengiriman form
                setTimeout(function() {
                    alert('Form berhasil dikirim!');
                    document.querySelector('.btn-kirim').disabled = false;
                    document.querySelector('.spinner-border').style.display = 'none';
                    document.getElementById('contact-form').reset(); // Reset form
                }, 2000);
            }
        });
    </script>
      <!-- Akhir Contact -->

      <footer>
        <p>&copy; <b class="text-white fw-bold">Muhammad Danil Jamaludin</b></p>
        <div class="social-links">
            <a href="https://wa.me/+62895379293518" target="_blank" class="bi bi-whatsapp"></a> 
            <a href="https://www.instagram.com/daniell.mhmmd/" target="_blank" class="bi bi-instagram"></a>
            <a href="https://github.com/" target="_blank" class="bi bi-github"></a>
            <a href="https://email.com/muhammaddaniljamaludin@gmail.com" target="_blank" class="bi bi-envelope""></a>
        </div>
      </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
