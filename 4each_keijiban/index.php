<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="UTF-8">
    <title>4each_keijiban</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>   
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
$stmt = $pdo->query("select*from 4each_keijiban");

    
    
?>    
    
 <header>
  <img src="4eachblog_logo.jpg" width="15%" height="15%">     
  <div class="ber"> 
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>お問い合わせ</li>
        <li>その他</li>
    </ul> 
  </div>    
 </header>    
 <main>
     <div class="main-container">
      <div class="left">
         
        <form method="post" action="insert.php">
        
        <h1>入力フォーム</h1>    
            
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text"　class="text" size="35" name="handlename">
            <br>
        </div>
        
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" name="title">
            <br>
        </div>
        
        <div>
            <label>コメント</label>
            <br>
            <textarea name="comments" rows="8" cols="40">    </textarea>
        </div>    
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    
    </form>
          
<?php          
          
while($row=$stmt->fetch()){
    
    echo"<div class='kiji'>";
    echo"<h3>".$row['title']."</h3>";
    echo"<div class='contents'>";
    echo $row['comments'];
    echo"<div class='handlename'>posted by".$row['handlename']."</div>";
    echo"</div>";
    echo"</div>";
}
          
?>
          
    </div>      
          
      </div>
      <div class="right">
          <h2>人気の記事</h2>
              PHP オススメ本<br>
              PHP MyAdminの使い方<br>
              今人気のエディタ　Top5<br>
              HTMLの基礎<br>
          
          <h2>オススメリンク</h2>
          
              インターノウス株式会社<br>
              XAMPPのダウンロード<br>
              Eclipseのダウンロード<br>
              Bracketsのダウンロード<br>
        
          <h2>カテゴリ</h2>
              HTML<br>
              PHP<br>
              MySQL<br>
              JavaScript<br>
          
          
      </div>
    
    
     
     
 </main>
<footer>copyright ©︎ internous | 4each blog is the one which provides A to Z about programming.</footer> 
     
    
    
    
</body>
</html>