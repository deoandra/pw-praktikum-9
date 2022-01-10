<?php

$prak = mysqli_connect("localhost", "root", "", "praktikum_9");


function query($query)
{
    global $prak;
    $data = mysqli_query($prak, $query);
    $karyawan = [];
    while ($pekerja = mysqli_fetch_assoc($data)) {
        $karyawan[] = $pekerja;
    }
    return $karyawan;
}

function tambah($data)
{
    global $prak;


    $name = $data["name"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];

    $query = "INSERT INTO karyawan
                    VALUES
                    ('', '$name', '$email', '$address', '$gender','$position','$status')
                ";

    mysqli_query($prak, $query);

    return mysqli_affected_rows($prak);
}


function hapus($id)
{
    global $prak;
    mysqli_query($prak, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($prak);
}