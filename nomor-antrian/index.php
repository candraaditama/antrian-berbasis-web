<?php
require('layout/header.php');
?>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="container pt-3">
      <div class="row justify-content-lg-center">

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Perekaman KTP</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET A</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-a" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>



        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Kartu Keluarga</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET B</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-b" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-b" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>


        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Mutasi Penduduk</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET C</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-c" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-c" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Akta Kelahiran</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET D</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-d" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-d" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Akta Kematian</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET E</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-e" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-e" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Legalisir</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET F</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-f" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-f" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Konsultasi</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET G</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-g" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-g" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Pengaduan</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET H</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-h" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-h" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Perkawinan</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET I</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-i" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-i" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="px-4 py-3 mb-2 bg-white rounded-1 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-postcard text-success me-3 fs-3"></i>
              <h1 class="h6 pt-2 fw-bold">Umum</h1>
            </div>
          </div>

          <div class="card border-0 rounded-1 shadow-sm">
            <div class="card-body text-center d-grid p-4">
              <div class="border border-success rounded-1 py-2 mb-3" id="ktp">
                <h3 class="pt-4 text-center">LOKET J</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian-j" class="display-1 fw-bolder text-successlh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert-j" href="javascript:void(0)" class="btn btn-success btn-block fs-5 px-5 py-3 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
              </a>
            </div>
          </div>
        </div>



      </div>
    </div>
  </main>

  <?php
 require('layout/footer.php');
?>



  <script type="text/javascript">
    $(document).ready(function () {
      // tampilkan jumlah antrian
      $('#antrian').load('get_antrian.php');
      $('#antrian-b').load('get_antrian_b.php');
      $('#antrian-c').load('get_antrian_c.php');
      $('#antrian-d').load('get_antrian_d.php');
      $('#antrian-e').load('get_antrian_e.php');
      $('#antrian-f').load('get_antrian_f.php');
      $('#antrian-g').load('get_antrian_g.php');
      $('#antrian-h').load('get_antrian_h.php');
      $('#antrian-i').load('get_antrian_i.php');
      $('#antrian-j').load('get_antrian_j.php');

      function wait(ms) {
        var start = new Date().getTime();
        var end = start;
        while (end < start + ms) {
          end = new Date().getTime();
        }
      }


      // proses insert data
      $('#insert-a').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              
        $.get("get_antrian.php", function (loketa) {
          PrintElem(loketa);
          $('#antrian').text(loketa);

        });

            }
          },
        });

      });

      $('#insert-b').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_b.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_b.php", function (loketb) {
                PrintElem(loketb);
                $('#antrian-b').text(loketb);
              });
            }
          },
        });
      });

      $('#insert-c').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_c.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_c.php", function (loketc) {
                PrintElem(loketc);
                $('#antrian-c').text(loketc);
              });
            }
          },
        });
      });

      $('#insert-d').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_d.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_d.php", function (loketd) {
                PrintElem(loketd);
                $('#antrian-d').text(loketd);
              });
            }
          },
        });
      });

      $('#insert-e').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_e.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_e.php", function (lokete) {
                PrintElem(lokete);
                $('#antrian-e').text(lokete);
              });
            }
          },
        });
      });

      $('#insert-f').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_f.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_f.php", function (loketf) {
                PrintElem(loketf);
                $('#antrian-f').text(loketf);
              });
            }
          },
        });
      });

      $('#insert-g').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_g.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_g.php", function (loketg) {
                PrintElem(loketg);
                $('#antrian-g').text(loketg);
              });
            }
          },
        });
      });

      $('#insert-h').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_h.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_h.php", function (loketh) {
                PrintElem(loketh);
                $('#antrian-h').text(loketh);
              });
            }
          },
        });
      });

      $('#insert-i').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_i.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_i.php", function (loketi) {
                PrintElem(loketi);
                $('#antrian-i').text(loketi);
              });
            }
          },
        });
      });

      $('#insert-j').on('click', function () {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert_j.php', // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              $.get("get_antrian_j.php", function (loketj) {
                PrintElem(loketj);
                $('#antrian-j').text(loketj);
              });
            }
          },
        });
      });


    });


    function PrintElem(nomor) {
      let today = new Date().toLocaleDateString();
      let time = new Date().toLocaleTimeString();
      let loket = nomor.charAt(0);
      switch (loket) {
        case "A":
          loket = "Loket A (Perekaman KTP)";
          break;
        case "B":
          loket = "Loket B (Pendaftaran Penduduk)";
          break;
        case "C":
          loket = "Loket C (Mutasi Penduduk)";
          break;
        case "D":
          loket = "Loket D (Akta Kematian)";
          break;
        case "E":
          loket = "Loket E (Akta Kelahiran)";
          break;
        case "F":
          loket = "Loket F (Legalisir)";
          break;
        case "G":
          loket = "Loket G (Konsultasi)";
          break;
        case "H":
          loket = "Loket H (Pengaduan)";
          break;
        case "I":
          loket = "Loket I (Perkawinan)";
          break;
        case "J":
          loket = "Loket J (Umum)";
      }
      var qrcode = new QRCode.Encoder();

      var mywindow = window.open('', 'PRINT');
      mywindow.document.write(
        '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Antrian</title></head>'
      );
      mywindow.document.write(
        '<style>*,*:before,*:after { box-sizing: border-box;}body { font: 16px/1.2 "Nunito", sans-serif;}.blog { font-size: 14px; font-weight: bold; text-align: center; position: absolute; bottom: 15px; left: 50%; z-index: 1;}svg,img { display: block;}/* container */.container { width: 280px; height: auto; border-radius: 5px; background-color: white; position: absolute; z-index: 1;}/* receipt_box */.receipt_box>* { padding: 5px 10px;}/* head */.head { display: flex; align-items: center;}.head .logo { flex: 1 0 20%;}.head .number { flex: 1 0 70%; font-size: 13px; font-weight: 800; text-transform: uppercase;}.head .ref { font-size: 14px; font-weight: normal; text-transform: none;}/* body */.body .info { position: relative;}.body .info:before { content: ""; display: block; width: 5px; height: 100%; position: absolute; top: 0; left: -32px;}.body .info .welcome { font-weight: bold;}.body .info .welcome .username { color: rgb(0, 0, 0);}.body .info p { font-size: 14px;}.cart .title { font-size: 36px; font-weight: 900; text-align: center; text-transform: capitalize;}.cart .content { font-size: 14px;}.cart_list { color: black;}.cart_list .cart_item { display: flex; padding: 5px 0;}.cart_list .cart_item+.cart_item { border-top: 1px dashed rgb(0, 0, 0);}.cart_list .cart_item .index { margin-right: 8px; width: 18px; overflow: hidden;}.cart_list .cart_item .name { flex-grow: 1;}.cart_list .cart_item .price { font-weight: bold;}.cart .total { font-weight: bold; text-transform: uppercase; /* border-top: 2px solid black; */}.cart .total_price { float: right;}/* foot */.foot { border-top: 2px dotted black; position: relative; display: flex;}.foot:before,.foot:after { border: 4px solid transparent; position: absolute; top: -5px;}.foot:before { content: ""; display: block; border-left: 7px solid black; left: -1px;}.foot:after { content: ""; display: block; border-right: 7px solid black; right: -1px;}.foot .logo { flex: 1 0 20%;}.foot .number { flex: 1 0 70%; font-size: 12px;}ul { display: block; list-style-type: disc; margin-block-start: 0em; margin-block-end: 0em; margin-inline-start: 0px; margin-inline-end: 0px; padding-inline-start: 10px;}@media print {@page { size: auto; margin: 0mm;}}</style>'
      );
      mywindow.document.write(
        '<body><div class="container"> <div class="receipt_box"><div class="head"><div class="logo"> <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Seal_of_Bantul_Regency.svg" width="40px" /></div><div class="number"> <div class="date">Dinas Kependudukan dan Pencatatan Sipil</div> <div class="ref">Kabupaten Bantul</div></div></div><div class="body"><div class="info"> <center><div class="welcome">Nomor Antrian Anda</div> </center></div><div class="cart"> <div class="title">' +
        nomor +
        '</div> <div class="content"><ul class="cart_list"><li class="cart_item"> <span class="index">1</span> <span class="name">Tanggal</span> <span class="price">' +
        today +
        '</span></li><li class="cart_item"> <span class="index">2</span> <span class="name">Jam</span> <span class="price">' +
        time + '</span></li></ul><div class="total"><center><span>' + loket +
        '</span></center></div> </div></div><center></center></div><div class="foot"><div class="logo"> ');

      qrcode.write('https://dukcapilonline.bantulkab.go.id/antrean/scan/' + nomor).make();
      mywindow.document.write(
        '<img src="' + qrcode.toDataURL() +
        '" width="48" /> </div><div class="number"> Dimohon menunggu sampai nomor antrean dipanggil petugas. <br />Terima kasih</div></div> </div></div></body>'
      );

      mywindow.document.write('</body></html>');
      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/
      setTimeout(function () {

        mywindow.print();
        mywindow.close();
      }, 250);
      return true;
    }
  </script>
</body>

</html>