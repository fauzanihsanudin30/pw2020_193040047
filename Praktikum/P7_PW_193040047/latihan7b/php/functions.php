<?php

  // Koneksi database
  function koneksi(){
    $host     = 'localhost';
    $username = 'root';
    $password = '';
    $db       = 'tubes_193040047';

    $conn = mysqli_connect($host, $username, $password) or die("koneksi DB gagal");
    mysqli_select_db($conn, $db) or die("database tidak ditemukan");
    return $conn;
  }
  // Query
  function query($sql){
    $result = mysqli_query(koneksi(), $sql);   

    $rows = [];

    while ( $row= mysqli_fetch_assoc($result) ) {
      $rows[] = $row;
    }

    return $rows;
  }
// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// fungsi untuk ubah data
function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $judul = htmlspecialchars($data['judul']);
  $kategori = htmlspecialchars($data['kategori']);
  $author = htmlspecialchars($data['author']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $cover = htmlspecialchars($data['cover']);

  $query = "UPDATE buku
            SET 
              judul = '$judul', 
              kategori = '$kategori', 
              author = '$author', 
              penerbit = '$penerbit', 
              cover = '$cover'
              WHERE id = '$id'
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

// fungsi untuk menambah data
function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $kategori = htmlspecialchars($data['kategori']);
  $author = htmlspecialchars($data['author']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $cover = htmlspecialchars($data['cover']);

  $query = "INSERT INTO
              buku
            VALUES
              (null, '$judul', '$kategori', '$author', '$penerbit', '$cover')
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
  // cari
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku
              WHERE 
              judul LIKE '%$keyword%' OR 
              kategori LIKE '%$keyword%' OR
              author LIKE '%$keyword%' OR
              penerbit LIKE '%$keyword%'
              ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}


?>