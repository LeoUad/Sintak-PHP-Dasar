<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji Bersih</title>
    <style>
        form {
            margin: 20px 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Perhitungan Gaji Bersih</h1>
    <form method="post">
        <label for="gaji">Gaji (Rp):</label>
        <input type="number" id="gaji" name="gaji" required>
        
        <label for="pajak">Pajak (%):</label>
        <input type="number" id="pajak" name="pajak" step="0.01" required>
        
        <input type="submit" value="Hitung">
    </form>
    <form method="post">
        <label for="a">Nilai A:</label>
        <input type="number" id="a" name="a" required>
        
        <label for="b">Nilai B:</label>
        <input type="number" id="b" name="b" required>
        
        <input type="submit" value="Bandingkan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gaji = $_POST["gaji"];
        $pajak = $_POST["pajak"] / 100;
        $thp = $gaji - ($gaji * $pajak);

        echo "<div class='result'>";
        echo "<p><strong>Gaji sebelum pajak:</strong> Rp. " . number_format($gaji, 2, ',', '.') . "</p>";
        echo "<p><strong>Gaji yang dibawa pulang:</strong> Rp. " . number_format($thp, 2, ',', '.') . "</p>";
        echo "</div>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

        echo "<div class='result'>";
        echo "<p>$a == $b : " . var_export($a == $b, true) . "</p>";
        echo "<p>$a != $b : " . var_export($a != $b, true) . "</p>";
        echo "<p>$a > $b : " . var_export($a > $b, true) . "</p>";
        echo "<p>$a < $b : " . var_export($a < $b, true) . "</p>";
        echo "<p>($a != $b) && ($a > $b) : " . var_export(($a != $b) && ($a > $b), true) . "</p>";
        echo "<p>($a != $b) || ($a > $b) : " . var_export(($a != $b) || ($a > $b), true) . "</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
