CREATE DATABASE IF NOT EXISTS `file_upload_db`;

USE `file_upload_db`;

CREATE TABLE IF NOT EXISTS `student` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `st_name` VARCHAR(100) NOT NULL,
    `st_dept` VARCHAR(100) NOT NULL,
    `image` LONGBLOB NOT NULL
);
