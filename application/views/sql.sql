SELECT t.nama_mesin, t.date, t.OEE
FROM oee_data t
INNER JOIN (SELECT nama_mesin, MAX(date) AS MaxDate
            FROM oee_data
            GROUP BY nama_mesin)
            tm ON t.nama_mesin = tm.nama_mesin AND t.date = tm.MaxDate


SELECT t.nama_mesin, t.date, t.OEE
FROM oee_data_daily t
INNER JOIN (SELECT nama_mesin, MAX(date) AS MaxDate
            FROM oee_data_daily
            GROUP BY nama_mesin)
            tm ON t.nama_mesin = tm.nama_mesin AND t.date = tm.MaxDate


SELECT t.date, t.kode_barang, t.nama_barang, t.merek, t.tipe, t.jumlah_masuk, t.keterangan
FROM spmasuk t
INNER JOIN (SELECT nama_barang, MAX(date) AS MaxDate
            FROM spmasuk
            GROUP BY nama_barang)
            tm ON t.nama_barang = tm.nama_barang AND t.date = tm.MaxDate


SELECT nama_barang, date
FROM sparepart
WHERE date=(SELECT MAX(date) FROM sparepart);


SELECT kode_barang, nama_barang, merek, tipe, stok, date, keterangan
FROM sparepart
WHERE date=(SELECT MAX(date) FROM sparepart);


SELECT supplier, date, nama_barang, pengiriman, kualitas, pelayanan_pumajual, pelayanan_keluhan, total_nilai, rata2, keterangan
FROM evaluasisup
WHERE date=(SELECT MAX(date) FROM evaluasisup);