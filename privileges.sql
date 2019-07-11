use mysql
CREATE DATABASE doki DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL ON doki.* TO 'ccuser'@'localhost' IDENTIFIED BY '123';
-- 这一条命令一定要有：
flush privileges;
