CREATE DATABASE IF NOT EXISTS `product_management` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `product_management`;
GO

CREATE TABLE `user` (
    `TaiKhoan` varchar(25) PRIMARY KEY NOT NULL,
    `MatKhau` varchar(100) NOT NULL,
    `HoTen` varchar(50) NOT NULL,
    `MaChucVu` int NOT NULL,
    `MaPhongBan` int NOT NULL
);
GO

INSERT INTO `user` (`TaiKhoan`, `MatKhau`, `HoTen`, `MaChucVu`, `MaPhongBan`) VALUES
('admin', 'admin', 'admin', '1', '0');