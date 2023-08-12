<!--
    4 CONTRAINTS
    FOREIGN KEY
    index
    check
    unique

    Sebenerny bisa gk pake contraint tapi yaa harus dipake biar ada identifikasi nya mirip kyayk variable
    keuntungan :
    foreign key memastikan bahwa dayta yang kita masukkkan ke kolom tersebut harus tersedia di tabel refernceny
    tidak asal asalan menghapus data, jika seperti itu nanti akan ada data yang terhapus juga
    
    behavior devaultny
    RESTRICT kalo mau delete maka di tolak kalo diupdate maka ditolak agar lebih aman dan tidak asal hapus
    misal pake
    CASCADE kalo pake ini nanti kalo ada table yang mau dihapus nanti table yang berrelasi dengan table
    yang ingin dihapus otomatis ikut terhapus
 -->