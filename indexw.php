<!DOCTYPE html>
<html>
<head>
    <title>Konversi Bilangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        input[type="submit"], button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: salmon;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            
        }

        a{
            text-decoration: none;
        }
        
        .result {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Konversi Bilangan</h1>
        
        <form method="post">
            <label>Masukkan Bilangan:</label>
            <input type="text" name="number" required>
            
            <label>Pilih Konversi:</label>
            <select name="conversion" required>
                <option value="1">Decimal to Binary & Hexadecimal</option>
                <option value="2">Binary to Decimal & Hexadecimal</option>
                <option value="3">Hexadecimal to Binary & Decimal</option>
            </select>
            
            <input type="submit" name="submit" value="Konversi">
            
        </form>
        
        <?php
        if (isset($_POST['submit'])) {
            $number = $_POST['number'];
            $conversion = $_POST['conversion'];
            
            if ($conversion == '1') {
                // Decimal to Binary & Hexadecimal
                if (!ctype_digit($number)) {
                    echo '<div class="result">Error: Input harus berupa angka!</div>';
                } else {
                    $binary = decbin((int)$number);
                    $hexadecimal = dechex((int)$number);
                    
                    echo '<div class="result">';
                    echo 'Binary: ' . $binary . '<br>';
                    echo 'Hexadecimal: ' . $hexadecimal . '<br>';
                    echo '</div>';
                }
            } elseif ($conversion == '2') {
                // Binary to Decimal & Hexadecimal
                if (!preg_match('/^[01]+$/', $number)) {
                    echo '<div class="result">Error: Input harus berupa angka biner!</div>';
                } else {
                    $decimal = bindec($number);
                    $hexadecimal = dechex(bindec($number));
                    
                    echo '<div class="result">';
                    echo 'Decimal: ' . $decimal . '<br>';
                    echo 'Hexadecimal: ' . $hexadecimal . '<br>';
                    echo '</div>';
                }
            } elseif ($conversion == '3') {
                // Hexadecimal to Binary & Decimal
                if (!ctype_xdigit($number)) {
                    echo '<div class="result">Error: Input harus berupa angka heksadesimal!</div>';
                } else {
                    $binary = decbin(hexdec($number));
                    $decimal = hexdec($number);
                    
                    echo '<div class="result">';
                    echo 'Binary: ' . $binary . '<br>';
                    echo 'Decimal: ' . $decimal . '<br>';
                    echo '</div>';
                }
            } else {
                echo '<div class="result">Error: Pilihan tidak valid!</div>';
            }
        }
        ?>
        <a href="https://github.com/ivantans/TUBES-MATEMATIKA-DISKRIT" target="_blank"><button>Source code | Versi terminal</button></a>
    </div>
</body>
</html>
