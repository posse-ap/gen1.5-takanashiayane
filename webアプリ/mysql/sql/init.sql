DROP SCHEMA IF EXISTS webapp;
CREATE SCHEMA webapp;
USE webapp;

DROP TABLE IF EXISTS contents;
CREATE TABLE contents(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    content_name VARCHAR(255) NOT NULL
);

INSERT INTO contents SET content_name='N';
INSERT INTO contents SET content_name='dotinstall';

DROP TABLE IF EXISTS languages;
CREATE TABLE languages(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    language VARCHAR(255) NOT NULL
);

INSERT INTO languages SET language='HTML';
INSERT INTO languages SET language='CSS';
INSERT INTO languages SET language='PHP';

DROP TABLE IF EXISTS logs;
CREATE TABLE logs(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    content VARCHAR(255) NOT NULL,
    language VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    hour INT NOT NULL,
    comment VARCHAR(255)
);