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
                $.get('../panggil/loket-a/get_sisa_antrian.php', function (data) {
                  sisa_a = data - 1;
                  PrintElem(loketa, sisa_a);
                });
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
                $.get('../panggil/loket-b/get_sisa_antrian_b.php', function (data) {
                  sisa_b = data - 1;
                  PrintElem(loketb, sisa_b);
                });
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
                $.get('../panggil/loket-c/get_sisa_antrian.php', function (data) {
                  sisa_c = data - 1;
                  PrintElem(loketc, sisa_c);
                });
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
                $.get('../panggil/loket-d/get_sisa_antrian.php', function (data) {
                  sisa_d = data - 1;
                  PrintElem(loketd, sisa_d);
                });
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
                $.get('../panggil/loket-e/get_sisa_antrian.php', function (data) {
                  sisa_e = data - 1;
                  PrintElem(lokete, sisa_e);
                });
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
                $.get('../panggil/loket-f/get_sisa_antrian.php', function (data) {
                  sisa_f = data - 1;
                  PrintElem(loketf, sisa_f);
                });
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
                $.get('../panggil/loket-g/get_sisa_antrian.php', function (data) {
                  sisa_g = data - 1;
                  PrintElem(loketg, sisa_g);
                });
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
                $.get('../panggil/loket-h/get_sisa_antrian.php', function (data) {
                  sisa_h = data - 1;
                  PrintElem(loketh, sisa_h);
                });
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
                $.get('../panggil/loket-i/get_sisa_antrian.php', function (data) {
                  sisa_i = data - 1;
                  PrintElem(loketi, sisa_i);
                });               
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
                $.get('../panggil/loket-j/get_sisa_antrian.php', function (data) {
                  sisa_j = data - 1;
                  PrintElem(loketj, sisa_j);
                });
                $('#antrian-j').text(loketj);
              });
            }
          },
        });
      });


    });


    function PrintElem(nomor, sisa) {
      let today = new Date().toLocaleDateString();
      let time = new Date().toLocaleTimeString();
      let loket = nomor.charAt(0);
      switch (loket) {
        case "A":
          loket = "Loket A (Perekaman KTP)";
          break;
        case "B":
          loket = "Loket B (Kartu Keluarga)";
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
        '<style>.blog,.container{position:absolute;z-index:1}.blog,.body .info p{font-size:14px}.cart_list .cart_item .jam,.cart_list .cart_item .tanggal{margin-left:2px;font-weight:700}.foot,.head{display:flex}img,svg,ul{display:block}:after,:before{box-sizing:border-box}body{font:16px/1.2 Nunito,sans-serif;margin:0 0 0 10px}.blog{font-weight:700;text-align:center;bottom:15px;left:50%}.container{width:265px;height:auto;border-radius:5px;background-color:#fff}.body .info,.foot{position:relative}.receipt_box>*{padding:0}.head{align-items:center}.head .logo{flex:1 0 10%}.head .number{flex:1 0 70%;font-size:12px;font-weight:900;text-transform:uppercase}.head .ref{font-size:12px;font-weight:400;text-transform:none}.body .info:before{content:"";display:block;width:5px;height:100%;position:absolute;top:0;left:-32px}.body .info .welcome,.cart_list .cart_item .price{font-weight:700}.body .info .welcome .username,.cart_list{color:#000}.cart .title{font-size:40px;font-weight:900;text-align:center;text-transform:capitalize;margin:-7px}.cart .content{font-size:12px}.cart_list .cart_item{display:flex;padding:3px 0}.cart_list .cart_item+.cart_item{border-top:1px dashed #000}.cart_list .cart_item .index{margin-right:8px;overflow:hidden}.cart_list .cart_item .name{flex-grow:1}.cart_list .cart_item .jam{text-align:right;float:right}.cart_list .cart_item .label-jam{float:right;margin-left:auto}.cart .total{font-weight:700;text-transform:uppercase}.cart .total_price{float:right}.foot{margin-top:1px}.foot:after,.foot:before{border:4px solid transparent;position:absolute;top:-5px}.foot .logo{flex:1 0 20%}.foot .number{flex:1 0 80%;font-size:11px}ul{list-style-type:disc;margin-block-start:0em;margin-block-end:0em;margin-inline-start:0;margin-inline-end:0;padding-inline-start:10px}@media print{@page{size:auto;margin:0}}</style>'
      );
      mywindow.document.write(
        '<body><div class="container"> <div class="receipt_box"><div class="head"><div class="logo"> <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Seal_of_Bantul_Regency.svg" width="35px" /></div><div class="number"> <div class="date">Dinas Kependudukan dan Pencatatan Sipil</div> <div class="ref">Kabupaten Bantul</div></div></div><div class="body"><div class="info"> <center><div class="welcome">Nomor Antrean Anda</div> </center></div><div class="cart"> <div class="title">' +
        nomor +
        '</div> <div class="content"><ul class="cart_list"><li class="cart_item">Tanggal : <span class="tanggal">' +
        today +
        '</span><span class="label-jam">Jam : </span><span class="jam">' +
        time +
        '</span></li><li class="cart_item"><span class="index">1</span><span class="name">Layanan</span> <span class="price">' +
        loket +
        '</span></li><li class="cart_item"> <span class="index">2</span> <span class="name">Jumlah antrean didepan Anda</span> <span class="price">' +
        sisa + '</span></li></ul></div></div></div><div class="foot"><div class="logo"> ');

      qrcode.write('https://dukcapilonline.bantulkab.go.id/antrean/scan/' + nomor).make();
      mywindow.document.write(
        '<img src="' + qrcode.toDataURL() +
        '" width="40" /> </div><div class="number"> Dimohon menunggu sampai nomor antrean Anda dipanggil petugas. <br />Terima kasih</div></div> </div></div></body>'
      );

      mywindow.document.write('</body></html>');
      mywindow.document.close(); // necessary for IE >= 10
      mywindow.focus(); // necessary for IE >= 10*/
      setTimeout(function () {

        mywindow.print();
        mywindow.close();
      }, 150);
      return true;
    }
  </script>
</body>

</html>