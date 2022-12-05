<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Antrian Berbasis Web">
    <meta name="author" content="Candra Aditama">

    <!-- Title -->
    <title>Aplikasi Antrian Berbasis Web</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <!-- <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> <!-- Custom Style -->
    <link rel="stylesheet" href="../assets/css/style.css">



    <style>
        a {
            color: unset;

            text-decoration: none;
        }
        .table-responsive { overflow-x: initial; }


    </style>
</head>

<body class="d-flex flex-column h-100">
    <?php 
require_once "../config/database.php";
$hariIni = new DateTime();

?>
    <main class="flex-shrink-0">

        <div class="container pt-5">
            <?php 
            $fmt = new IntlDateFormatter('ID',
            IntlDateFormatter::FULL, 
            IntlDateFormatter::FULL
        );
        $fmt->setPattern('EEEE, d LLLL yyyy');
        echo '<span class="h3">'. $fmt->format(time()).'</span>'; ?>
            <div class="row mt-3">
                <div class="col">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="table-responsive mb-3">
                                <table id="tabel-antrian" class="table align-middle mb-0 bg-white"
                                    >
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Loket</th>
                                            <th>Jumlah Layanan</th>
                                            <!-- <th>Status</th> -->
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <small class="text-primary">Catatan : Loket yang tidak muncul berarti tidak melakukan panggilan sama sekali</small>
                        </div>
                    </div>
                </div>
                <div class="col" style="width: 500px;">
                    <canvas id="myChart" width="400px" height="400px"></canvas>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer mt-auto py-4">
        <div class="container">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script>
                - <a href="https://disdukcapil.bantulkab.go.id/" target="_blank"
                    class="text-danger text-decoration-none">Disdukcapil Bantul</a>. All rights reserved.
            </div>
        </div>
    </footer>
    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan informasi antrian

      // menampilkan data antrian menggunakan DataTables
      var table = $('#tabel-antrian').DataTable({
        "lengthChange": false,              // non-aktifkan fitur "lengthChange"
        "searching": false,                 // non-aktifkan fitur "Search"
        "info" : false,
        "ajax": "get_antrian.php",          // url file proses tampil data dari database
        // menampilkan data
        "columns": [{
            "data": "dilayani",
            "width": '250px',
            "className": 'fw-bold'
          },
          {
            "data": "total_layanan",
          }        
        ],
        "order": [
          [1, "desc"]             // urutkan data berdasarkan "no_antrian" secara descending
        ],
        "iDisplayLength": 10,     // tampilkan 10 data per halaman
      });

      // panggilan antrian dan update data
      $('#tabel-antrian tbody').on('click', 'button', function() {
        // ambil data dari datatables 
        var data = table.row($(this).parents('tr')).data();
        // buat variabel untuk menampilkan data "id"
        var id = data["id"];
        // buat variabel untuk menampilkan audio bell antrian
        var bell = document.getElementById('tingtung');

        // mainkan suara bell antrian
        bell.pause();
        bell.currentTime = 0;
        bell.play();

        // set delay antara suara bell dengan suara nomor antrian
        // durasi_bell = bell.duration * 770;
        durasi_bell = bell.duration * 700;

        // mainkan suara nomor antrian
        setTimeout(function() {
          responsiveVoice.speak("Nomor Antrian, " + data["no_antrian"] + ", silahkan menuju, loket, 1", "Indonesian Female", {
            rate: 0.78,
            pitch: 1,
            volume: 1
          });
        }, durasi_bell);

        // proses update data
        $.ajax({
          type: "POST",               // mengirim data dengan method POST
          url: "update.php",          // url file proses update data
          data: { id: id }            // tentukan data yang dikirim
        });
      });

      // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
      setInterval(function() {
        
        table.ajax.reload(null, false);
      }, 1000);
    });
  </script>


    <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# Antrean Dilayani',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


</body>

</html>