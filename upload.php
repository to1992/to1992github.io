<?php 
  //ファイルの保存先
  $upload = 'https://github.com/to1992/to1992github.io/tree/master/picture/'.$_FILES['file_upload']['name']; 
  //アップロードが正しく完了したかチェック
  if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload)){
    echo 'アップロード完了';
  }else{
    echo 'アップロード失敗'; 
  }
?>
