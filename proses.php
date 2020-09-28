
<?php
if ($_GET) :
    $bil1 = $_GET['bil1'];
    $bil2 = $_GET['bil2'];
    $operasi = $_GET['operasi'];

    switch ($operasi) {
        case 'tambah':
            $hasil = $bil1 + $bil2;
            break;
        case 'kurang':
            $hasil = $bil1 - $bil2;
            break;
        case 'kali':
            $hasil = $bil1 * $bil2;
            break;
        case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
    }
?>
    <br>
    Hasil: <strong><?php echo $hasil ?></strong>

<?php
endif; ?>
