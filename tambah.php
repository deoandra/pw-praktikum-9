<?php
require 'function.php';


if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "MANTAP!";
    } else {
        echo "SALAH DONG";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <style>
        body {
            background-color: #f4dfba;
            text-align: center;
        }

        input {
            border-radius: 6px;
            text-align: center;
        }

        select {
            border-radius: 6px;
            text-align: center;
        }

        .btn-sub {
            padding: 5px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div>

        <div>
            <h1>Tambah Data Karyawan</h1>
        </div>

    </div>

    <div>
        <form action="" method="post">
            <div>
                <label for="name">Name</label>
                <div>
                    <input type="text" id="name" name="name" placeholder="Full Name" Required>
                </div>
            </div>
            <div>
                <label for="email">Email</label>
                <div class="col-sm-6">
                    <input type="email" id="email" name="email" placeholder="@example.com" Required>
                </div>
            </div>
            <div>
                <label for="address">Address</label>
                <div class="col-sm-6">
                    <input type="text" id="address" placeholder="Address" name="address">
                </div>
            </div>
            <div>
                <label for="gender">Gender</label>
                <div class="col-sm-6">

                    <select name="gender" id="gender">
                        <option selected value="">Gender</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>

                </div>
            </div>
            <div>
                <label for="position">Position</label>
                <div class="col-sm-6">
                    <input type="text" id="position" name="position" placeholder="Position" Required>
                </div>
            </div>
            <div>
                <label for="status">Status</label>
                <div class="col-sm-6">
                    <select name="status" id="status">
                        <option selected value="">Status</option>
                        <option value="Fulltime">Full-time</option>
                        <option value="Parttime">Part-time</option>
                    </select>

                </div>
            </div>
            <br>
            <div style="text-align: center;">
                <button class="btn-sub" type="submit" name="submit">Submit</button>

            </div>
        </form>
    </div>


</body>

</html>