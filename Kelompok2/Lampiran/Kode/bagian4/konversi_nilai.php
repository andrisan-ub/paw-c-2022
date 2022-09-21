<?php

    echo "PROGRAM KONVERSI NILAI\n";

    do {
        echo "Apakah anda ingin merubah nilai menjadi angka mutu atau huruf mutu? ((a : Angka Mutu / h : Huruf Mutu)\n";

        $choose = readline('Masukkan disini: ');

        if ($choose == 'h') {

            $grade = (int)readline('Masukkan Nilai: ');

            switch ($grade) {
                case $grade > 80 && $grade <=100:
                    $huruf_mutu = 'A';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                case $grade > 75:
                    $huruf_mutu = 'B+';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                case $grade > 69:
                    $huruf_mutu = 'B';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                case $grade > 60:
                    $huruf_mutu = 'C+';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                case $grade > 55:
                    $huruf_mutu = 'C';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                case $grade > 50:
                    $huruf_mutu = 'D+';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                case $grade > 44:
                    $huruf_mutu = 'D';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
                default:
                    $huruf_mutu = 'E';
                    echo "Huruf mutu : $huruf_mutu";
                    break;
            }
            echo "\n";
        } elseif ($choose == 'a'){

            $grade = (int)readline('Masukkan Nilai: ');

            switch ($grade) {
                case $grade > 80 && $grade <=100:
                    $angka_mutu = '>=3.75';
                    echo "Angka mutu : $angka_mutu";
                    break;
                case $grade > 75:
                    $angka_mutu = '3.25-3.74';
                    echo "Angka mutu : $angka_mutu";
                    break;
                case $grade > 69:
                    $angka_mutu = '2.75-3.24';
                    echo "Angka mutu : $angka_mutu";
                    break;
                case $grade > 60:
                    $angka_mutu = '2.25-2.74';
                    echo "Angka mutu : $angka_mutu";
                    break;
                case $grade > 55:
                    $angka_mutu = '1.75-2.24';
                    echo "Angka mutu : $angka_mutu";
                    break;
                case $grade > 50:
                    $angka_mutu = '1.25-1.74';
                    echo "Angka mutu : $angka_mutu";
                    break;
                case $grade > 44:
                    $angka_mutu = '0.75-1.24';
                    echo "Angka mutu : $angka_mutu";
                    break;
                default:
                    $angka_mutu = '<0.75';
                    echo "Angka mutu : $angka_mutu";
                    break;
            }
            echo "\n";
            
        } else {
            echo "Input salah\n";
            echo "Silahkan restart program";
            exit();
        }
        echo "Apakah anda ingin melakukan konversi lagi? (y : Ya / t : tidak)\n";
        $continue = readline('Masukkan disini: ');

    } while ($continue == 'y');

    echo('Terima kasih telah menggunakan program ini');
    