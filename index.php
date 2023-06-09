<?php
echo "\033[31m";
echo <<<P
 _____      _                 __  __       _      _ _     
|_   _|   _| |__   ___  ___  |  \/  | __ _| |_ __| (_)___ 
  | || | | | '_ \ / _ \/ __| | |\/| |/ _` | __/ _` | / __|
  | || |_| | |_) |  __/\__ \ | |  | | (_| | || (_| | \__ \
  |_| \__,_|_.__/ \___||___/ |_|  |_|\__,_|\__\__,_|_|___/  
P;
echo "\033[0m";
echo "\033[32m" . PHP_EOL;
echo <<<p
IVAN TANJAYA | MARIO ADITYA NUGROHO | ADISTI INTAN ADITIARA
p;
echo "\033[0m";
echo PHP_EOL . PHP_EOL;


$loop = true;

while ($loop) {
    echo <<<MENU
    Silahkan pilih menu dibawah ini:
    1. Decimal to Binary & Hexadecimal
    2. Binary to Decimal & Hexadecimal
    3. Hexadecimal to Binary & Decimal
    4. Keluar
    MENU . PHP_EOL;

    echo "Masukkan pilihan: ";
    $input = trim(fgets(STDIN));

    switch ($input) {
        case '1':
            echo "Masukkan Decimal: ";
            $decimal = trim(fgets(STDIN));

            if (!ctype_digit($decimal)) {
                echo "Error: Input harus berupa angka!" . PHP_EOL;
                break;
            }

            echo "Binary: " . decbin((int)$decimal) . PHP_EOL ;
            echo "Hexadecimal: " . dechex((int)$decimal) . PHP_EOL . PHP_EOL;
            break;

        case '2':
            echo "Masukkan Binary: ";
            $binary = trim(fgets(STDIN));

            if (!preg_match('/^[01]+$/', $binary)) {
                echo "Error: Input harus berupa angka biner!" . PHP_EOL;
                break;
            }

            echo "Decimal: " . bindec($binary) . PHP_EOL;
            echo "Hexadecimal: " . dechex(bindec($binary)) . PHP_EOL . PHP_EOL;
            break;

        case '3':
            echo "Masukkan Hexadecimal: ";
            $hex = trim(fgets(STDIN));

            if (!ctype_xdigit($hex)) {
                echo "Error: Input harus berupa angka heksadesimal!" . PHP_EOL;
                break;
            }

            echo "Binary: " . decbin(hexdec($hex)) . PHP_EOL;
            echo "Decimal: " . hexdec($hex) . PHP_EOL . PHP_EOL;
            break;

        case '4':
            $loop = false;
            echo "Terima kasih! Program berakhir." . PHP_EOL . PHP_EOL;
            break;

        default:
            echo "Error: Pilihan tidak valid!" . PHP_EOL . PHP_EOL;
            break;
    }
}
