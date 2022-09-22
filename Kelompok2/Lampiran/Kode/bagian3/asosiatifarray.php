<!DOCTYPE html>
<html>
<body>

<?php
  $siswas = [
    'Andi' => 'Belajar', 
    'Deni' => 'Membaca', 
    'Budi' => 'Bermain'
  ];
  foreach ($siswas as $siswa => $siswa_value) { 
    echo "Key = " . $siswa . ", Value = " . $siswa_value;
  }
?>

</body>
</html>