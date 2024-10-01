<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predikat Nilai</title>
</head>

<body>
    <h2>Predikat Nilai Neper</h2>
    <form method="post">
        <label for="ips">Ips: </label>
        <input type="number" id="ips" name="ips" required><br><br>

        <label for="dpk">Dpk: </label>
        <input type="number" id="dpk" name="dpk" required><br><br>

        <label for="biologi">Biologi: </label>
        <input type="number" id="biologi" name="biologi" required><br><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
                            // Bagian Var
    if (isset($_POST['submit'])) {
        $dpk = $_POST['dpk'];
        $ips = $_POST['ips'];
        $biologi = $_POST['biologi'];

        $Rata_rata = ($dpk + $ips + $biologi) / 3;

                         // Bagian Var
        if ($Rata_rata >= 90) {
            $predikat = 'A (Sangat Baik)';
        } elseif ($Rata_rata >= 80) {
            $predikat = 'B (Baik)';
        } elseif ($Rata_rata >= 70) {
            $predikat = 'C (Mengulang)';
        } else {
            $predikat = 'D (Tidak Lulus)'; 
        }
                               // Bagian Print
        echo "<h3>Hasil:</h3>";
        echo "DPK: $dpk<br>";
        echo "IPS: $ips<br>";
        echo "Biologi : $biologi<br>";
        echo "<strong>Rata-rata: " . number_format($Rata_rata, 2) . "</strong><br>";
        echo "<strong>Predikat: $predikat</strong>"; 
    }
    ?>
</body>
</html>