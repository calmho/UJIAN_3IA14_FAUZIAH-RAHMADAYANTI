<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='background-color: beige;' >
<header>
        <nav class="navbar navbar-light" style="background-color: bisque;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Gunadarma University
                </a>
            </div>
        </nav>
    </header>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Tambahkan Data</a></button>
        <table class="table table-white table-hover">
  <thead>
    <tr>
      <th scope="col" style="color: black">No</th>
      <th scope="col" style="color: black">NPM</th>
      <th scope="col" style="color: black">NAMA</th>
      <th scope="col" style="color: black">KELAS</th>
      <th scope="col" style="color: black"></th>
      
    </tr>
  </thead>
  <tbody>

  <?php

$sql="select * from siswa";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $npm=$row['npm'];
        $nama=$row['nama'];
        $kelas=$row['kelas'];
        echo '<tr>
        <th scope="row" style="color: black">'.$id.'</th>
        <td style="color: black">'.$npm.'</td>
        <td style="color: black">'.$nama.'</td>
        <td style="color: black">'.$kelas.'</td>
        <td style="color: black">
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
      </tr>';
    }
}