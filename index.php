<html>
<head>
  <title>アクセスカウンタ</title>
</head>
<body>
  <?php
    $count = 0;
    if(file_exists("counter.dat")){
      $fp = fopen("counter.dat","r");
      $count = fgets($fp);
      fclose($fp);
    }
    $count++;
    print sprintf("<center>あなたが%05d人目のお客さんです。</center>", $count);
    $fp = fopen("counter.dat", "w");
    fwrite($fp, $count);
    fclose($fp);
   ?>
</body>
</html>
