-- Tampilkan seluruh data dari table book
SELECT * FROM book_tb;

-- Tampilkan seluruh data book, category dan penulis
SELECT a.*, b.*, c.* FROM 
book_tb a JOIN category_tb b ON a.category_id=b.id
JOIN writer_tb c ON a.writer_id=c.id;

-- Tampilkan seluruh data penulis
SELECT * FROM writer_tb;

--Tampilkan spesifik book beserta, category maupun penulis.
SELECT a.id, a.name, c.name as 'penulis', b.name as 'kategori',a.publication_year, a.img FROM 
book_tb a JOIN category_tb b ON a.category_id=b.id
JOIN writer_tb c ON a.writer_id=c.id;

-- Screen shootkan juga hasil query POST / menambah data.
INSERT INTO `book_tb` (`name`,`category_id`,`writer_id`,`publication_year`,`img`) VALUES 
('Data Mining untuk klasifikasi dan klasterisasi data', 3, 2, 2018, 'dm.jpg');