<html lang"ja">
    <head>
     <meta charset=utf-8">
     <title>sample</title>
    </head>
    <body>
        <?php
        //↓uploadファイルの有り無し確認
        if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
        //↓有効なファイルかどうかを検証し、問題なければ名前を変更しアップロード完了
            if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "picture/" . $_FILES["upfile"]["name"])) {
            chmod("picture/" . $_FILES["upfile"]["name"], 0644);   //パーミッション設定
            echo $_FILES["upfile"]["name"] . "をアップロードしました。";
            } 
            else {
            echo "ファイルをアップロードできません。";
            }   
            } else {
            echo "ファイルが選択されていません。";
            }
        ?>
    </body>
</html>
