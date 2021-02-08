<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>evangelion</title>
  <link rel="stylesheet" href="../css/eva.css">
</head>
<body>
  
  <div id="header">
    <h1>エヴァンゲリオンを自分なりにまとめてみる</h1>
    <img src="../img/head.png" alt="見出し">

    <nav>
      <ul id="menu">
        <li><a href="evangelion.php">Top</a></li>
        <li class="current"><a href="evaNews.php">News</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Access</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
  </div>
  <!-- header -->


  <div id="wrapper">

  </div>
  <!-- wrapper -->

  <div id="footer">
    <div id="photoSt">
      <img src="../img/spin1.png" alt="回す" class="photstudio">
      <img src="../img/spin1.png" alt="回す" class="photstudio">
    </div>
    <!-- photoSt -->

    <div id="line">
      <p>eva.matome copylight @2021</p>
    </div>
    <!-- line -->
  </div>
  <!-- footer -->

  
  <script src="../jquery.min.js"></script>
  <script>
    $(function(){
      $("h1").on("click", function(){
        $("h1").hide();
      });

      $(".comment").hide();
      $(".chara-phot").hide();
      $("#shokai li").on("click" ,function(){
        $(this).next().slideToggle();
        $(this).next().next().fadeToggle();
      });
    });
  </script>
</body>
</html> 