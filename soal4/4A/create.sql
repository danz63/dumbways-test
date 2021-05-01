CREATE TABLE `book_tb` (
  `id` int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `publication_year` int(4) NOT NULL,
  `img` varchar(255) NOT NULL
);

CREATE TABLE `category_tb` (
  `id` int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `writer_tb` (
  `id` int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL
);

INSERT INTO `category_tb` (`id`,`name`) VALUES
(1,'PHP'),
(2,'Software Engineering'),
(3,'Kecerdasan Buatan'),
(4,'Matematika'),
(5,'Algoritma');

INSERT INTO `writer_tb` (`id`,`name`) VALUES 
(1,'Rosa A.S'),
(2,'Suyanto'),
(3,'Wikaria G.'),
(4,'Awan P.B'),
(5,'Sandi F.R'),
(6,'Rinaldi M.');

INSERT INTO `book_tb` (`name`,`category_id`,`writer_id`,`publication_year`,`img`) VALUES 
('Rekayasa perangkat lunak',2,1,2018,'rpl.jpg'),
('Buku Machine Learning Tingkat Dasar Dan Lanjut',3,2,2018,'ml.jpg'),
('Matriks & Transformasi Linear',4,1,2017,'mt.jpg'),
('Konsep Dan Implementasi Pemrograman Laravel 5',1,4,2018,'lv.jpg'),
('Algoritma dan Pemrograman dalam bahasa Pascal C dan C++',5,6,2019,'al.jpg'),
('Membangun Aplikasi dengan PHP, Codeigniter, dan AJAX',1,5,2018,'ci.jpg');