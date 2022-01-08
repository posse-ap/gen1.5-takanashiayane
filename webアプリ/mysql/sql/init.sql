DROP SCHEMA IF EXISTS webapp;
CREATE SCHEMA webapp;
USE webapp;
-- 学習コンテンツテーブル
DROP TABLE IF EXISTS contents;
CREATE TABLE contents(
    content_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    content_name VARCHAR(255) NOT NULL
);

INSERT INTO contents SET content_name='N';
INSERT INTO contents SET content_name='dotinstall';
INSERT INTO contents SET content_name='posse';
-- 学習言語テーブル
DROP TABLE IF EXISTS languages;
CREATE TABLE languages(
    language_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    language VARCHAR(255) NOT NULL
);

INSERT INTO languages SET language='HTML';
INSERT INTO languages SET language='CSS';
INSERT INTO languages SET language='PHP';
-- ログテーブル
DROP TABLE IF EXISTS logs;
CREATE TABLE logs(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    content_id INT NOT NULL,
    language_id INT NOT NULL,
    date DATE NOT NULL,
    hour INT NOT NULL,
    comment VARCHAR(255)
);
INSERT INTO `logs` (`id`, `content_id`, `language_id`, `date`, `hour`, `comment`) VALUES 
(NULL, '1', '1', '2022-01-01', '4', NULL), 
(NULL, '3', '2', '2022-01-03', '2', NULL), 
(NULL, '3', '3', '2022-01-01', '3', NULL), 
(NULL, '2', '3', '2022-01-05', '4', NULL);