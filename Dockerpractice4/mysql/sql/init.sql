DROP SCHEMA IF EXISTS ayane;
CREATE SCHEMA ayane;
USE ayane;

DROP TABLE IF EXISTS tokyo_questions;
CREATE TABLE tokyo_questions(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    choice1 VARCHAR(255) NOT NULL,
    choice2 VARCHAR(255) NOT NULL,
    choice3 VARCHAR(255) NOT NULL
);

INSERT INTO tokyo_questions SET choice1='takanawa',choice2='takawa',choice3='kouwa';
INSERT INTO tokyo_questions SET choice1='kameido',choice2='kameto',choice3='kamedo';

DROP TABLE IF EXISTS hiroshima_questions;
CREATE TABLE hiroshima_questions (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    choice1 VARCHAR(255) NOT NULL,
    choice2 VARCHAR(255) NOT NULL,
    choice3 VARCHAR(255) NOT NULL
);
INSERT INTO hiroshima_questions SET choice1='mukainada',choice2='mukouhira',choice3='mukihira';
INSERT INTO hiroshima_questions SET choice1='mitugi',choice2='miyoshi',choice3='oshirabe';

