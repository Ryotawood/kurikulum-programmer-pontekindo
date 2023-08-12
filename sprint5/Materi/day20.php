ALTER TABLE produk ADD COLUMN id_kategori INT, ADD CONSTRAINT fk_produk_kategori FOREIGN KEY (id_kategori) REFERENCES kategori (id);

CREATE TABLE produk_detail ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, id_kategori INT,id_produk INT, CONSTRAINT fk_kategori_pk FOREIGN KEY (id_kategori) REFERENCES kategori(id), CONSTRAINT fk_produk_kp FOREIGN KEY (id_produk) REFERENCES produk(id));

SELECT * FROM penjual JOIN detail_penjual ON (detail_penjual.id = penjual.id_detail_penjual);
SELECT * FROM penjualan JOIN produk ON (penjualan.id_produk = produk.id) JOIN kategori ON (kategori.id = produk.id_kategori);


CREATE INDEX idx_produk ON produk(nama);

INNER JOIN
LEFT JOIN
RIGHT JOIN
CROSS JOIN

cara rename INDEX
ALTER TABLE penjual RENAME INDEX id_detail_penjual TO 'u_detail_penjual'