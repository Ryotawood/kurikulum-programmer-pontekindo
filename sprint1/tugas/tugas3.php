<?php
$tatol = 0;
$fruit = 15000;
$marimas = 25000;
$mixue = 10000;
$disc1= 2500;
$disc2= 1000;
$disc3= 500;

echo "==== Cashier ====\n";
echo "1. Beli\n";
echo "2. Gak jadi beli\n";
$menu = trim(fgets(STDIN));

if ($menu == 1) {
    echo "=== Beli apa aja ===\n";
    echo "=== Kami Hanya Menjual ===\n";
    echo "1.Fruit\n";
    echo "2.Marimas\n";
    echo "3.Mixue\n";
    echo "Pilih Urutan Barang : ";
    $barang1 = trim(fgets(STDIN));
switch ($barang1){
    case 1 :
        $total = $tatol +=$fruit ;
        echo "=== Beli apa lagi===\n";
        echo "=== Kami Hanya Menjual ===\n";
        echo " Total : $total\n";
        echo "1.Marimas\n";
        echo "2.Mixue\n";
        echo "3.Bayar\n";
        echo "Pilih Urutan Barang : ";
        $barang2 = trim(fgets(STDIN));
            switch ($barang2){
                case 1 :
                    $total =$total += $marimas;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Mixue\n";
                    echo "2.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $barang3 = trim(fgets(STDIN));
                switch ($barang3){
                    case 1 :
                        $total =$total += $mixue;
                        echo "=== Beli apa lagi===\n";
                        echo "=== Kami Hanya Menjual ===\n";
                        echo " Total : $total\n";
                        echo "1.Bayar\n";
                        echo "Bayar Oyy : ";
                        $bayar = trim(fgets(STDIN));
                            switch ($bayar){
                                case 1 :
                                    echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                            }
                        break;
                    case 2 :
                        echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                        }
                    break;
                case 2 :
                    $total =$total +=$mixue ;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Marimas\n";
                    echo "2.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $barang3 = trim(fgets(STDIN));
                        switch ($barang3){
                            case 1 :
                                $total =$total += $marimas;
                                echo "=== Beli apa lagi===\n";
                                echo "=== Kami Hanya Menjual ===\n";
                                echo " Total : $total\n";
                                echo "1.Bayar\n";
                                echo "Bayar Oyy : ";
                                $bayar = trim(fgets(STDIN));
                                break;
                            case 2 :
                                echo "=== Bayar ===\n";
                                echo "$total\n";
                                    switch ($total){
                                        case $total >= 40000;
                                        echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                            $total -= $disc1;
                                            echo "$total\n";
                                            break;
                                        case $total >= 30000;
                                        echo "Selamat kamu dapat discount sebesar 100\n";
                                            echo "Jadi Total ny segini ya\n";
                                            $total -= $disc2;
                                            echo "$total\n";
                                            break;
                                        case $total >= 20000;
                                        echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                            $total -= $disc3;
                                            echo "$total\n";
                                        }
                            }
                            break;
                case 3 :
                    echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                    
                }
        break;
    case 2 :
        $total = $tatol += $marimas ;
        echo "=== Beli apa lagi===\n";
        echo "=== Kami Hanya Menjual ===\n";
        echo " Total : $total\n";
        echo "1.Fruit\n";
        echo "2.Mixue\n";
        echo "3.Bayar\n";
        echo "Pilih Urutan Barang : ";
        $barang2 = trim(fgets(STDIN));
            switch ($barang2){
                case 1 :
                    $total =$total += $fruit ;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Mixue\n";
                    echo "2.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $barang3 = trim(fgets(STDIN));
                    switch ($barang3){
                        case 1 :
                            $total = $total += $mixue;
                            echo "=== Beli apa lagi===\n";
                            echo "=== Kami Hanya Menjual ===\n";
                            echo " Total : $total\n";
                            echo "1.Bayar\n";
                            echo "Pilih Urutan Barang : ";
                            $bayar = trim(fgets(STDIN));
                            switch ($bayar) {
                                case 1 :
                                    echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                            }
                            break;
                        case 2 :
                            echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                        }
                        break;
                case 2 :
                    $total =$total += $mixue ;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Fruit\n";
                    echo "2.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $barang3 = trim(fgets(STDIN));
            switch ($barang3){
                case 1 :
                    $total = $total += $fruit;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $bayar = trim(fgets(STDIN));
                    break;
                case 2 :
                    echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                }
                break;
                case 3 :
                    echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                
            }
    break;
    case 3 :
        $total = $tatol += $mixue ;
        echo "=== Beli apa lagi===\n";
        echo "=== Kami Hanya Menjual ===\n";
        echo " Total : $total\n";
        echo "1.Fruit\n";
        echo "2.Marimas\n";
        echo "3.Bayar\n";
        echo "Pilih Urutan Barang : ";
        $barang2 = trim(fgets(STDIN));
            switch ($barang2) {
                case 1 :
                    $total = $total += $fruit ;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Marimas\n";
                    echo "2.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $barang3 = trim(fgets(STDIN));
                        switch ($barang3){
                            case 1 :
                                $total = $total += $marimas ;
                                echo "=== Beli apa lagi===\n";
                                echo "=== Kami Hanya Menjual ===\n";
                                echo " Total : $total\n";
                                echo "1.Bayar\n";
                                echo "Pilih Urutan Barang : ";
                                $bayar= trim(fgets(STDIN));
                            case 2 :
                                echo "=== Bayar ===\n";
                                    echo "$total\n";
                                        switch ($total){
                                            case $total >= 40000;
                                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc1;
                                                echo "$total\n";
                                                break;
                                            case $total >= 30000;
                                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc2;
                                                echo "$total\n";
                                                break;
                                            case $total >= 20000;
                                            echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                                $total -= $disc3;
                                                echo "$total\n";
                                                break;
                                            }
                    
                                
                        }
                        break;
                case 2 :
                    $total = $total += $marimas ;
                    echo "=== Beli apa lagi===\n";
                    echo "=== Kami Hanya Menjual ===\n";
                    echo " Total : $total\n";
                    echo "1.Fruit\n";
                    echo "2.Bayar\n";
                    echo "Pilih Urutan Barang : ";
                    $barang3 = trim(fgets(STDIN));
                        switch ($barang3){
                            case 1 :
                                $total = $total += $fruit ;
                                echo "=== Beli apa lagi===\n";
                                echo "=== Kami Hanya Menjual ===\n";
                                echo " Total : $total\n";
                                echo "1.Bayar\n";
                                echo "Pilih Urutan Barang : ";
                                $bayar= trim(fgets(STDIN));
                            case 2 :
                                    echo "=== Bayar ===\n";
                                    echo "$total\n";
                                    switch ($total){
                                        case $total >= 40000;
                                        echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                            $total -= $disc1;
                                            echo "$total\n";
                                            break;
                                        case $total >= 30000;
                                        echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                            $total -= $disc2;
                                            echo "$total\n";
                                            break;
                                        case $total >=20000:
                                        echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                            $total -= $disk3;
                                            echo "$total\n";
                                    }
                            
                    }
                    break;
                    case 3 :
                        echo "=== Bayar ===\n";
                        echo "$total\n";
                        switch ($total){
                            case $total >= 40000;
                            echo "Selamat kamu dapat discount sebesar 2500\n";
                                            echo "Jadi Total ny segini ya\n";
                                $total -= $disc1;
                                echo "$total\n";
                                break;
                            case $total >= 30000;
                            echo "Selamat kamu dapat discount sebesar 1000\n";
                                            echo "Jadi Total ny segini ya\n";
                                $total -= $disc2;
                                echo "$total\n";
                                break;
                            case $total >=20000:
                                echo "Selamat kamu dapat discount sebesar 500\n";
                                            echo "Jadi Total ny segini ya\n";
                                $total -= $disk3;
                                echo "$total\n";
                        }
                        
            }

    }
}else if ($menu == 2) {
    Echo "Ngapain Kesini Dah\n";
    exit;
} 
else {
    echo "Eror Masbro\n";
}