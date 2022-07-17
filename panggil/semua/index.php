<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">

  <!-- Title -->
  <title>Aplikasi Antrian Berbasis Web</title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <!-- Fontawesome Icons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

  <!-- Custom Style -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="container pt-4">
      <!-- <div class="d-flex flex-column flex-md-row px-4 py-3 mb-4 bg-white rounded-2 shadow-sm"> -->
      <!-- judul halaman -->
      <!-- <div class="d-flex align-items-center me-md-auto">
          <i class="bi-mic-fill text-success me-3 fs-3"></i>
          <h1 class="h5 pt-2 fw-bolder">DAFTAR ANTREAN</h1>
        </div> -->
      <!-- breadcrumbs -->
      <!-- <div class="ms-5 ms-md-0 pt-md-3 pb-md-0">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="http://Disdukcapil Bantul/"><i class="bi-house-fill text-success"></i></a></li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              <li class="breadcrumb-item" aria-current="page">Antrian</li>
            </ol>
          </nav>
        </div>
      </div> -->

      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-a text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Perekaman KTP</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-b text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-b" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Kartu Keluarga</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-b" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-b" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-b" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-c text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-c" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Mutasi Penduduk</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-c" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-c" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-c" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-f text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-f" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Legalisir</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-f" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-f" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-f" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-g text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-g" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Konsultasi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-g" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-g" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-g" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-h text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-h" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Pengaduan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-h" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-h" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-h" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- menampilkan informasi jumlah antrian -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="fa-solid fa-i text-dark"></i>
                </div>
                <div>
                  <p id="jumlah-antrian-i" class="fs-3 text-dark mb-1"></p>
                  <p class="mb-0">Perkawinan</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang sedang dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-check text-success"></i>
                </div>
                <div>
                  <p id="antrian-sekarang-i" class="fs-3 text-success mb-1"></p>
                  <p class="mb-0">Antrian Sekarang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi nomor antrian yang akan dipanggil selanjutnya -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person-plus text-info"></i>
                </div>
                <div>
                  <p id="antrian-selanjutnya-i" class="fs-3 text-info mb-1"></p>
                  <p class="mb-0">Antrian Selanjutnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- menampilkan informasi jumlah antrian yang belum dipanggil -->
        <div class="col-md-3 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-2">
              <div class="d-flex justify-content-start">
                <div class="feature-icon-3 me-4">
                  <i class="bi-person text-danger"></i>
                </div>
                <div>
                  <p id="sisa-antrian-i" class="fs-3 text-danger mb-1"></p>
                  <p class="mb-0">Sisa Antrian</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container">
      <hr class="my-4">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2022 - <a href="https://disdukcapil.bantulkab.go.id/" target="_blank"
          class="text-danger text-decoration-none">Disdukcapil Bantul</a>. All rights reserved.
      </div>
    </div>
  </footer>



  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>

  <!-- DataTables -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <!-- Responsivevoice -->
  <!-- Get API Key -> https://responsivevoice.org/ -->
  <!-- <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script> -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=AdOLuec5"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      // tampilkan informasi antrian
      $('#jumlah-antrian').load('../loket-a/get_jumlah_antrian.php');
      $('#antrian-sekarang').load('../loket-a/get_antrian_sekarang.php');
      $('#antrian-selanjutnya').load('../loket-a/get_antrian_selanjutnya.php');
      $('#sisa-antrian').load('../loket-a/get_sisa_antrian.php');

      // tampilkan informasi antrian
      $('#jumlah-antrian-b').load('../loket-b/get_jumlah_antrian_b.php');
      $('#antrian-sekarang-b').load('../loket-b/get_antrian_sekarang_b.php');
      $('#antrian-selanjutnya-b').load('../loket-b/get_antrian_selanjutnya_b.php');
      $('#sisa-antrian-b').load('../loket-b/get_sisa_antrian_b.php');

      // tampilkan informasi antrian
      $('#jumlah-antrian-c').load('../loket-c/get_jumlah_antrian.php');
      $('#antrian-sekarang-c').load('../loket-c/get_antrian_sekarang.php');
      $('#antrian-selanjutnya-c').load('../loket-c/get_antrian_selanjutnya.php');
      $('#sisa-antrian-c').load('../loket-c/get_sisa_antrian.php');

      // tampilkan informasi antrian
      $('#jumlah-antrian-f').load('../loket-f/get_jumlah_antrian.php');
      $('#antrian-sekarang-f').load('../loket-f/get_antrian_sekarang.php');
      $('#antrian-selanjutnya-f').load('../loket-f/get_antrian_selanjutnya.php');
      $('#sisa-antrian-f').load('../loket-f/get_sisa_antrian.php');

      // tampilkan informasi antrian
      $('#jumlah-antrian-g').load('../loket-g/get_jumlah_antrian.php');
      $('#antrian-sekarang-g').load('../loket-g/get_antrian_sekarang.php');
      $('#antrian-selanjutnya-g').load('../loket-g/get_antrian_selanjutnya.php');
      $('#sisa-antrian-g').load('../loket-g/get_sisa_antrian.php');


      // tampilkan informasi antrian
      $('#jumlah-antrian-h').load('../loket-h/get_jumlah_antrian.php');
      $('#antrian-sekarang-h').load('../loket-h/get_antrian_sekarang.php');
      $('#antrian-selanjutnya-h').load('../loket-h/get_antrian_selanjutnya.php');
      $('#sisa-antrian-h').load('../loket-h/get_sisa_antrian.php');


      // tampilkan informasi antrian
      $('#jumlah-antrian-i').load('../loket-i/get_jumlah_antrian.php');
      $('#antrian-sekarang-i').load('../loket-i/get_antrian_sekarang.php');
      $('#antrian-selanjutnya-i').load('../loket-i/get_antrian_selanjutnya.php');
      $('#sisa-antrian-i').load('../loket-i/get_sisa_antrian.php');
      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      setInterval(function () {
        $('#jumlah-antrian').load('../loket-a/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang').load('../loket-a/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya').load('../loket-a/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian').load('../loket-a/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-b').load('../loket-b/get_jumlah_antrian_b.php').fadeIn("slow");
        $('#antrian-sekarang-b').load('../loket-b/get_antrian_sekarang_b.php').fadeIn("slow");
        $('#antrian-selanjutnya-b').load('../loket-b/get_antrian_selanjutnya_b.php').fadeIn("slow");
        $('#sisa-antrian-b').load('../loket-b/get_sisa_antrian.php_b').fadeIn("slow");

        $('#jumlah-antrian-c').load('../loket-c/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-c').load('../loket-c/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-c').load('../loket-c/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-c').load('../loket-c/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-d').load('../loket-d/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-d').load('../loket-d/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-d').load('../loket-d/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-d').load('../loket-d/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-e').load('../loket-e/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-e').load('../loket-e/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-e').load('../loket-e/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-e').load('../loket-e/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-f').load('../loket-f/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-f').load('../loket-f/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-f').load('../loket-f/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-f').load('../loket-f/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-g').load('../loket-g/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-g').load('../loket-g/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-g').load('../loket-g/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-g').load('../loket-g/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-h').load('../loket-h/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-h').load('../loket-h/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-h').load('../loket-h/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-h').load('../loket-h/get_sisa_antrian.php').fadeIn("slow");

        $('#jumlah-antrian-i').load('../loket-i/get_jumlah_antrian.php').fadeIn("slow");
        $('#antrian-sekarang-i').load('../loket-i/get_antrian_sekarang.php').fadeIn("slow");
        $('#antrian-selanjutnya-i').load('../loket-i/get_antrian_selanjutnya.php').fadeIn("slow");
        $('#sisa-antrian-i').load('../loket-i/get_sisa_antrian.php').fadeIn("slow");

        table.ajax.reload(null, false);
      }, 1000);
    });
  </script>
</body>

</html>