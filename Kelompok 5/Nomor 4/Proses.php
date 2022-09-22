<?php
include 'Index.php';
for ($i = 0; $i < $_POST['kolom']; $i++) {
    if (isset($_POST["nilaiMatkul$i"])) {
        $nilai[] = $_POST["nilaiMatkul$i"];
    }
}
?>
<table style="border: 1px solid black">
    <tr style="border: 1px solid black">
        <th style="border: 1px solid black">Nilai Mata Kuliah</th>
        <th style="border: 1px solid black">Nilai Mutu</th>
        <th style="border: 1px solid black">Huruf Mutu</th>
    </tr>

    <?php if (isset($nilai)) : ?>
        <?php for ($i = 0; $i < count($nilai); $i++) : ?>
            <?php $num = $i + 1;?>
            <tr style="border: 1px solid black">
                <td style="border: 1px solid black"><?php echo "Matkul $num: $nilai[$i]" ?></td>
                <td style="border: 1px solid black"><?php echo hasilMutu($nilai[$i])?></td>
                <td style="border: 1px solid black"><?php echo hurufMutu($nilai[$i])?></td>
            </tr>
        <?php endfor; ?>
    <?php endif; ?>

</table>