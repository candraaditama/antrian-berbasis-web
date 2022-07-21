<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project counter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>


    <link rel="stylesheet" type="text/css" href="../../assets/css/dark.css">


</head>

<body>

    <div class="sectiontitle mb-5">
        <h2>Dinas Kependudukan & Pencatatan Sipil <br /> Kabupaten Bantul</h2>
        <!-- <span class="headerLine mt-2"></span> -->
    </div>
    <div id="projectFacts" class="sectionClass">
        <div class="fullWidth eight columns">
            <div class="projectFactsWrap ">
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket A</p>
                    <p id="antrian-sekarang" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">PEREKAMAN KTP</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket B</p>
                    <p id="antrian-sekarang-b" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">KARTU KELUARGA</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket C</p>
                    <p id="antrian-sekarang-c" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">MUTASI PENDUDUK</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket D</p>
                    <p id="antrian-sekarang-d" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">AKTA KELAHIRAN & KEMATIAN</p>
                </div>
            </div>
            <div class="projectFactsWrap ">
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket F</p>
                    <p id="antrian-sekarang-f" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">LEGALISIR</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket G</p>
                    <p id="antrian-sekarang-g" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">KONSULTASI</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket H</p>
                    <p id="antrian-sekarang-h" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">PENGADUAN & PPID</p>
                </div>
                <div class="item wow fadeInUpBig animated animated" style="visibility: visible;">
                    <p id="number1" class="loket">Loket I</p>
                    <p id="antrian-sekarang-i" class="number"></p>
                    <span></span>
                    <p class="fw-bolder">PERKAWINAN</p>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            // tampilkan informasi antrian
            $('#antrian-sekarang').load('../loket-a/get_antrian_sekarang.php');

            // tampilkan informasi antrian
            $('#antrian-sekarang-b').load('../loket-b/get_antrian_sekarang_b.php');

            // tampilkan informasi antrian
            $('#antrian-sekarang-c').load('../loket-c/get_antrian_sekarang.php');

            // tampilkan informasi antrian
            $('#antrian-sekarang-d').load('../loket-d/get_antrian_sekarang.php');

            // tampilkan informasi antrian
            $('#antrian-sekarang-f').load('../loket-f/get_antrian_sekarang.php');

            // tampilkan informasi antrian
            $('#antrian-sekarang-g').load('../loket-g/get_antrian_sekarang.php');


            // tampilkan informasi antrian
            $('#antrian-sekarang-h').load('../loket-h/get_antrian_sekarang.php');

            // tampilkan informasi antrian
            $('#antrian-sekarang-i').load('../loket-i/get_antrian_sekarang.php');

            // auto reload data antrian setiap 1 detik untuk menampilkan data secara realtime
            setInterval(function () {
                $('#antrian-sekarang').load('../loket-a/get_antrian_sekarang.php').fadeIn("slow");

                $('#antrian-sekarang-b').load('../loket-b/get_antrian_sekarang_b.php').fadeIn("slow");

                $('#antrian-sekarang-c').load('../loket-c/get_antrian_sekarang.php').fadeIn("slow");

                $('#antrian-sekarang-d').load('../loket-d/get_antrian_sekarang.php').fadeIn("slow");

                $('#antrian-sekarang-f').load('../loket-f/get_antrian_sekarang.php').fadeIn("slow");

                $('#antrian-sekarang-g').load('../loket-g/get_antrian_sekarang.php').fadeIn("slow");

                $('#antrian-sekarang-h').load('../loket-h/get_antrian_sekarang.php').fadeIn("slow");

                $('#antrian-sekarang-i').load('../loket-i/get_antrian_sekarang.php').fadeIn("slow");


            }, 1000);
        });
    </script>

</body>

</html>