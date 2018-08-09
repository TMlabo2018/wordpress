<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<form action="" method="post">
  コメント：<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="登録する" name="action" />
</form>
<?php
  $ecnt=1;
  /*全角スペースを半角スペースに置換して出力する。*/
  $sentence = mb_convert_kana($_POST["comment"], "s", 'UTF-8');
  echo $sentence;
  echo "<br>";
  echo mb_strlen($sentence,"UTF-8");  /*文字数をカウント（日本語）*/
  $str = str_split ($sentence);       /*1字ずつ配列に格納する*/
  $loop = count($str);                /*配列の個数を数える*/
  echo "<br>";
  /*空白をカウントすることで*/
  for($i=0;$i<$loop;$i++){
    if($str[$i]==" "){
      $ecnt++;
    }
  }
  echo "送信された文章は";
  echo $ecnt;
  $emoney=$ecnt*3;
  echo "wordなので";
  echo $emoney;
  echo "円になります。";

?>
</body>
</html>
