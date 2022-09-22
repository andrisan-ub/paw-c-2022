<?php

function hurufMutu($inputUser)
{
    if ($inputUser > 80 && $inputUser <= 100) {
        return 'A';
    }
    if ($inputUser > 75 && $inputUser <= 80) {
        return 'B+';
    }
    if ($inputUser > 69 && $inputUser <= 75) {
        return 'B';
    }
    if ($inputUser > 60 && $inputUser <= 69) {
        return 'C+';
    }
    if ($inputUser > 55 && $inputUser <= 60) {
        return 'C';
    }
    if ($inputUser > 50 && $inputUser <= 55) {
        return 'D+';
    }
    if ($inputUser > 44 && $inputUser <= 50) {
        return 'D';
    }
    if ($inputUser >= 0 && $inputUser <= 44) {
        return 'E';
    }
    return 'Nilai yang anda masukkan tidak sesuai';
}

function hasilMutu($inputUser)
{
    switch (hurufMutu($inputUser)) {
        case 'A':
            return round(rangeAngkaMutu(80, 100, 3.75, 4, $inputUser), 2);
        case 'B+':
            return round(rangeAngkaMutu(75, 80, 3.25, 3.74, $inputUser), 2);
        case 'B':
            return round(rangeAngkaMutu(69, 75, 2.75, 3.24, $inputUser), 2);
        case 'C+':
            return round(rangeAngkaMutu(60, 69, 2.25, 2.74, $inputUser), 2);
        case 'C':
            return round(rangeAngkaMutu(55, 60, 1.75, 2.24, $inputUser), 2);
        case 'D+':
            return round(rangeAngkaMutu(50, 55, 1.25, 1.74, $inputUser), 2);
        case 'D':
            return round(rangeAngkaMutu(44, 50, 0.75, 1.24, $inputUser), 2);
        case 'E':
            return round(rangeAngkaMutu(0, 44, 0, 0.75, $inputUser), 2);
    }
}

function rangeAngkaMutu($batasBawah, $batasAtas, $mutuBawah, $mutuAtas, $inputUser)
{
    if ($batasBawah == 0 && $batasAtas == 44) {
        if ($inputUser == 0) {
            return 0;
        }
        return $mutuAtas / ($batasAtas + 1) * ($inputUser + 1) - 0.01;
    }
    if ($inputUser == $batasBawah + 1) {
        return $mutuBawah;
    }

    return ($mutuAtas - $mutuBawah + 0.01) / ($batasAtas - $batasBawah) * ($inputUser - $batasBawah) - 0.01 + $mutuBawah;
}

?>

<html>
<form method="post">
    Masukkan Jumlah Matkul:
    <br>
    <input type="number" name="kolom">
    <br>
    <input type="submit" value="Submit">
</form>

<?php
$kolom = 0;
$nilai = null;
if (isset($_POST['kolom'])) :
    $kolom = $_POST['kolom'];
?>
    <form action="Proses.php" method="post">
        <?php for ($i = 0; $i < $kolom; $i++) : ?>
            <?php $num=$i + 1;?>
            <?php echo "Masukkan Nilai Matkul ke-$num"?>
            <br>
            <input type="number" name="nilaiMatkul<?php echo $i ?>">
            <br>
            <?php endfor; ?>
            <input type="hidden" name="kolom" value="<?= $kolom?>">
            
            <?php if ($kolom != 0) : ?>
            <input type="submit" value="Submit">
            <?php endif; ?>
    </form>

<?php endif; ?>

</html>