CREATE DATABASE IF NOT EXISTS Team8db;
USE Team8db;

CREATE TABLE IF NOT EXISTS PlayerInfo(
'id' int,
'name' varchar(32),
'count' int,
'claer' boolean,
'item_id' int
);

ENGINE=InnoDB;
CHARSET=utf8;

TRUNCATE TABLE PlayerInfo;
