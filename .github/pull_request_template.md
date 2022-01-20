## 関連リンク

* #2

## やったこと

* 1.学習コンテンツテーブルと学習言語テーブルのidカラム名について対応しました。2.外部キーを設定しました

## このプルリクでやらないこと

<!-- * レビュワーにこのプルリクでやらないことを知ってもらいたいことがあれば記述してください
* 例) ○○は後続のプルリクエストで実施します、など -->

## UIに対する変更

<!-- * 変更前のスクリーンショット（任意）
* 変更後のスクリーンショット -->

## 変更時の動作確認内容

* 外部キーを設定したのですが、dbコンテナが立ち上がった後すぐに落ちてしまいます。dbコンテナのログを見ると
「ERROR 1064 (42000) at line 6: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '--id:自動生成
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY' at line 2」
というエラーが出てしまっています。しかし、どこの記述が違うのかわからず困っています。
<!-- どのような動作確認を行ったのか？結果はどうか？ -->