CREATE DATABASE IF NOT EXISTS Redlock;

USE Redlock;

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`ID`, `Nama`, `Alamat`, `Jabatan`) VALUES
(1, 'Ahmad Bandot', 'Jalan Sudirman 123', 'Ketua'),
(2, 'Paul bin Paang', 'Jalan Thamrin 456', 'Staff'),
(3, 'Radit Medit', 'Jalan Gatot Subroto 789', 'Koordinator');

