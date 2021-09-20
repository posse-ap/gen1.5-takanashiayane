DROP SCHEMA IF EXISTS ayane;
CREATE SCHEMA ayane;
USE ayane;

DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    choice1 VARCHAR(255) NOT NULL,
    choice2 VARCHAR(255) NOT NULL,
    choice3 VARCHAR(255) NOT NULL
);

INSERT INTO questions SET choice1='takanawa',choice2='takawa',choice3='kouwa';
INSERT INTO questions SET choice1='kameido',choice2='kameto',choice3='kamedo';
