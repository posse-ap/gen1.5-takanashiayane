DROP SCHEMA IF EXISTS webapp;
CREATE SCHEMA webapp;
USE webapp;

DROP TABLE IF EXISTS contents;
CREATE TABLE contents(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY comment 'id:自動生成',
    content_name VARCHAR(255) NOT NULL comment '学習コンテンツ名'
)COMMENT='学習コンテンツテーブル';
-- 学習コンテンツテーブルのデータ
INSERT INTO `contents` (`id`, `content_name`) VALUES (NULL, 'N'),(NULL, 'dotinstall'),(NULL, 'posse');


DROP TABLE IF EXISTS languages;
CREATE TABLE languages(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY comment 'id:自動生成',
    language VARCHAR(255) NOT NULL comment 'プログラミング言語の種類'
)COMMENT='学習言語テーブル';

-- 学習言語テーブルのデータ
INSERT INTO `languages` (`id`, `language`) VALUES (NULL, 'HTML'), (NULL, 'CSS'), (NULL, 'PHP'),(NULL, 'Laravel');

DROP TABLE IF EXISTS logs;
CREATE TABLE logs(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY comment 'id:自動生成',
    content_id INT NOT NULL comment 'コンテンツテーブルのidがあるかどうか',
    language_id INT NOT NULL comment 'languageテーブルのidがあるかどうか',
    date DATE NOT NULL comment '勉強した日時',
    hour INT NOT NULL comment '勉強した時間',
    comment VARCHAR(255) comment 'Twitter用コメント',

    -- content_id外部キー設定(学習コンテンツテーブルのidを参照),親テーブル(学習コンテンツテーブル)で削除されたものをログテーブルでも削除
    FOREIGN KEY (content_id) 
            REFERENCES id(contents)
            ON UPDATE CASCADE ON DELETE RESTRICT,
    -- language_id外部キー設定(学習言語テーブルのidを参照),親テーブル(学習言語テーブル)で削除されたものをログテーブルでも削除
    FOREIGN KEY (language_id)
            REFERENCES id(languages)
            ON UPDATE CASCADE ON DELETE RESTRICT
)COMMENT='ログテーブル';

-- ログテーブルのデータ
INSERT INTO `logs` (`id`, `content_id`, `language_id`, `date`, `hour`, `comment`) VALUES 
(NULL, '1', '1', '2022-01-01', '4', NULL), 
(NULL, '3', '2', '2022-01-03', '2', NULL), 
(NULL, '3', '3', '2022-01-01', '3', NULL), 
(NULL, '2', '3', '2022-01-05', '4', NULL);