Database & Mysql

data itu Representasi fakta di dunia nyata,
contoh : nama, buku, foto, video, music, dll 
itu semua data, trs data itu ada yang saling terkait misal :
buku, ada judul, siapa penerbit ,kalo dijual harganya brp, dsb.

bnyak orang mengira database itu seperti 
- Oracle 
- Mysql
- SQL Server 
- PostgreSQL
- MongoDB
nah sebenerny itu semua bukan database itu semua adalah DBMS (DataBase Management System), database sendiri itu adalah data yang ada didalam DBMS itu sendiri


DBMS
- Relational DBMS
- Hierarchical DBMS
- Network DBMS
- NoSQL DBMS -> MongoDB


Database = kumpulan data yang dikelompokan ke dalam tabel dan disimpan di dalam DBMS
DBMS = software untuk mengelola database  ( MY SQL) 
Relational DBMS = keterhubungan antar data biasanya di dalam tabel

Field / column = judul yang berisi data data dibawahnya misalnya field "nama" = sandhika, dody, dll, field juga memiliki tipe data dengan aturan tertentu

Record/ baris = kumpulan data field yang disusun secara horizontal ( 1 record = 1 baris pada tabel data ) 

Primary key = sebuah data yang mereprentasikan satu baris record yang unik ( tidak boleh ada data yang sama )

CREATE DATABASE nama_db = Untuk membuat database
CREATE TABLE nama_tb = Untuk membuat table
SHOW TABLES = Untuk menampilkan table yang adalah
SELECT * FROM tbname = Menampilkan seluruh isi dalam tablenya
INSERT INTO tbname VALUES(val1, val2....); = Insert Data Baru
UPDATE tbname SET col=newvalue WHERE condition; = Update Data
DELETE FROM tbname WHERE condition ; = Delete Data
DROP TABLE tablename; = Drop Table
ALTER TABLE tablename ADD columnname datatype PRIMARY KEY AUTOINCREMENT; = Add Column
ALTER TABLE tablename DROP COLUMN columnname; = Remove Column
ALTER TABLE tablename RENAME TO newtablename; = Rename Table














