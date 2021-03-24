<?php
include 'myclass.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form inputan -->
    <h6>Lingkaran</h6>
    <form action="" method="POST">
        <input type="number" name="r" required min=0 placeholder="Masukan r" />
        <br><br>
        <button type="submit" class="btn btn-outline-dark" name="luaslingkaran">hitung luas</button>
        <button type="submit" class="btn btn-outline-dark" name="kelilinglingkaran">hitung Keliling</button>
        <!-- <input type="submit" name="luaslingkaran" value="hitung luas" />
        <input type="submit" name="kelilinglingkaran" value="hitung keliling" /> -->
    </form>


    <?php
        // $formlingkaran = new lingkaran($_POST['r']);
        if (isset($_POST['luaslingkaran'])) {
            $formlingkaran = new lingkaran($_POST['r']);
            echo "Luas lingkaran dengan jari-jari " . $_POST['r'] . " adalah : " . $formlingkaran->get_luas();
        }
        if (isset($_POST['kelilinglingkaran'])) {
            $formlingkaran = new lingkaran($_POST['r']);
            echo "Keliling lingkaran dengan jari-jari " . $_POST['r'] . " adalah : " . $formlingkaran->get_keliling();
        }
        // echo "Luas lingkarang dengan jari-jari" . $_POST['r'] . "adalah : " . $formlingkaran->get_luas();
        // echo "Keliling lingkarang dengan jari-jari" . $_POST['r'] . "adalah : " . $formlingkaran->get_keliling();
    ?> 

    <hr />

    <h6>Jajar Genjang</h6>
    <form name="form_jg" action="" method="POST">
        <input type="number" name="al" required min=0 placeholder="Masukan Alas" />
        <input type="number" name="t" required min=0 placeholder="Masukan Tinggi" />
        <input type="number" name="a" required min=0 placeholder="Masukan Sisi A" />
        <input type="number" name="b" required min=0 placeholder="Masukan Sisi B" />
        <br><br>
        <button type="submit" class="btn btn-outline-dark" id="luas" name="luasjg">hitung luas</button>
        <button type="submit" class="btn btn-outline-dark" id="keliling" name="kelilingjg">hitung Keliling</button>
        <!-- <button type="reset" class="btn btn-outline-dark" name="reset" onclick="kosong()">reset</button> -->
        <!-- <input type="submit" name="luasjg" value="hitung luas" /> -->
        <!-- <input type="submit" name="kelilingjg" value="hitung keliling" /> -->
    </form>
    <?php
        if (isset($_POST['luasjg'])) {
            $form_jg = new jajar_genjang($_POST['al'], $_POST['t'], $_POST['a'], $_POST['b']);
            echo "Luas jajar genjang dengan alas " . $_POST['al'] . " dan tinggi " . $_POST['t'] . " adalah : "
                . $form_jg->get_luas();
        }
        if (isset($_POST['kelilingjg'])) {
            $form_jg = new jajar_genjang($_POST['al'], $_POST['t'], $_POST['a'], $_POST['b']);
            echo "Keliling jajar genjang dengan sisi A " . $_POST['a'] . " dan sisi b " . $_POST['b'] . " adalah : "
                . $form_jg->get_keliling();
        }
    ?>

    <hr />

    <h6>Segitiga</h6>
    <form name="form_segitiga" action="" method="POST">
        <input type="number" name="alas" required min=0 placeholder="Masukan Alas" />
        <input type="number" name="tinggi" required min=0 placeholder="Masukan Tinggi" />
        <input type="number" name="sisi_a" required min=0 placeholder="Masukan Sisi A" />
        <input type="number" name="sisi_b" required min=0 placeholder="Masukan Sisi B" />
        <input type="number" name="sisi_c" required min=0 placeholder="Masukan Sisi C" />
        <br><br>
        <button type="submit" class="btn btn-outline-dark" name="luassegitiga">hitung luas</button>
        <button type="submit" class="btn btn-outline-dark" name="kelilingsegitiga">hitung Keliling</button>
        <!-- <input type="submit" name="luassegitiga" value="hitung luas" />
        <input type="submit" name="kelilingsegitiga" value="hitung keliling" /> -->
    </form>

    <?php
        if (isset($_POST['luassegitiga'])) {
            $form_segitiga = new segitiga($_POST['alas'], $_POST['tinggi'], $_POST['sisi_a'], $_POST['sisi_b'], $_POST['sisi_c']);
            echo "Luas segitiga dengan alas " . $_POST['alas'] . " dan tinggi " . $_POST['tinggi'] . " adalah : "
                . $form_segitiga->get_luas();
        }
        if (isset($_POST['kelilingsegitiga'])) {
            $form_segitiga = new segitiga($_POST['alas'], $_POST['tinggi'], $_POST['sisi_a'], $_POST['sisi_b'], $_POST['sisi_c']);
            echo "Keliling segitiga dengan sisi A " . $_POST['sisi_a'] . ", sisi b " . $_POST['sisi_b'] . " dan sisi c " . $_POST['sisi_c'] . " adalah : "
                . $form_segitiga->get_luas();
        }
    ?>

</body>

</html>