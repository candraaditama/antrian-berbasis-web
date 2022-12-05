<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
// if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  // panggil file "database.php" untuk koneksi ke database
  require_once "../config/database.php";

  // ambil tanggal sekarang
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  // sql statement untuk menampilkan data dari tabel "tbl_antrian" berdasarkan "tanggal"
  $query = mysqli_query($mysqli, "SELECT dilayani, COUNT(*) AS total_layanan FROM tbl_antrian WHERE tanggal='".$tanggal."' GROUP BY dilayani;")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  // ambil jumlah baris data hasil query
  $rows = mysqli_num_rows($query);

  // cek hasil query
  // jika data ada
  if ($rows <> 0) {
    $response         = array();
    $response["data"] = array();

    // ambil data hasil query
    while ($row = mysqli_fetch_assoc($query)) {
      $data['dilayani']         = $row["dilayani"];
      $data['total_layanan'] = $row["total_layanan"];

      array_push($response["data"], $data);
    }

    // tampilkan data
    echo json_encode($response);
  }
  // jika data tidak ada
  else {
    $response         = array();
    $response["data"] = array();

    // buat data kosong untuk ditampilkan
    $data['dilayani']         = "";
    $data['total_layanan'] = "-";

    array_push($response["data"], $data);

    // tampilkan data
    echo json_encode($response);
  }
// }
