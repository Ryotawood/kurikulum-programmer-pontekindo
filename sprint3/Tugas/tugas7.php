<?php
$list =[];

do {

echo "<><><TO DO LIST><><>\n";
echo "1.Masukkan Data\n";
echo "2.Edit Data\n";
echo "3.Hapus Data\n";
echo "4.Lihat Data\n";
echo "PIlih : ";

    $masuk=trim(fgets(STDIN));
    if($masuk == 1){
            
        echo "<><><> Masukkan Data <><><>\n";
        echo "Masuk : ";
        $tmbh = trim(fgets(STDIN));
        $index = count($list) + 1;
        $list[$index] = $tmbh;
        foreach ($list as $key => $value) {
            echo "$key. $value\n";
        }
    }if($masuk ==2 ){
        echo "<><><> Edit Data <><><>\n";
        foreach ($list as $key => $value) {
            echo "$key. $value\n";
        }
        echo "PILih Data : ";
        $edit = trim(fgets(STDIN));
        echo "Edit $edit.$list[$edit]\n";
        echo "Hountouni ?? (Y/N) : ";
        $yes = strtoupper(trim(fgets(STDIN)));
        if($yes == "Y"){
            echo "Masukkan yang baru : ";
            $update = trim(fgets(STDIN));
            $list[$edit] = $update;
            foreach ($list as $key => $value) {
                echo "$key. $value\n";
            }
        }else if ($yes == "N"){
            continue;
        }
    }if ($masuk==3){
        echo "<><><> Hapus Data <><><>\n";
        foreach ($list as $key => $value) {
            echo "$key. $value\n";
        }
        echo "Choose Data : ";
        $hapus = trim(fgets(STDIN));
        echo "Menghapus $hapus.$list[$hapus]\n";
        echo "Hountouni ?? (Y/N) : ";
        $yes1 = strtoupper(trim(fgets(STDIN)));
        if($yes1 == "Y"){
            unset($list[count($list)]);
        }else if ($yes1 =="N"){
            continue;
        }
    }if ($masuk==4){
        echo "Yakin Mau Lihat Data ?? \n";
        echo "(Y/N)";
        $yes2 = strtoupper(trim(fgets(STDIN)));
    if ($yes2 == "Y"){
            back:
            echo "<><><> DATA YANG ADA <><><>\n";
            foreach ($list as $key => $value) {
                echo "$key. $value\n";
            }
            echo "Cukup ??\n";
            echo "Balik Menu (Y) : ";
            $yes3 = strtoupper(trim(fgets(STDIN)));
        }if ($yes3 == "Y"){
            continue;
        }else {
            goto back;
        }
    }
        
    

}while(true);











