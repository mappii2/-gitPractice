<?php

//   // メッセージのパス設定
//   define( 'FILENAME', 'message.txt');

//   // タイムゾーン設定
//   date_default_timezone_set('Asia/Tokyo');

//   // 変数の初期化
//   $now_date = null;
//   $data = null;
//   $file_handle = null;
//   $split_data = null;
//   $message = array();
//   $message_array = array();

//   if( !empty($_POST['btn_submit']) ) {
//     if( $file_handle = fopen( FILENAME, "a") ) {

//       // 書き込み日時を取得
//       $now_date = date("Y-m-d H:i:s");

//       // 書き込むデータを作成
//       $data = "'".$_POST['view_name']."','".$_POST['message']."','".$now_date."'\n";

//       // 書き込み
//       fwrite( $file_handle, $data);

//       // ファイルを閉じる
//       fclose( $file_handle);
//     }
//   }

//   if( $file_handle = fopen( FILENAME,'r') ) {

//     while( $data = fgets($file_handle) ){

//         $split_data = preg_split( '/\'/', $data);

//         $message = array(
//             'view_name' => $split_data[1],
//             'message' => $split_data[3],
//             'post_date' => $split_data[5]
//         );
//         array_unshift( $message_array, $message);
//     }

//     // ファイルを閉じる
//     fclose( $file_handle);
// }
?>

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
        <li class="current"><a href="evangelion.php">Top</a></li>
        <li><a href="evaNews.php">News</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Access</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
  </div>
  <!-- #header -->


  <div id="wrapper">

    <p class="comment1">シン・エヴァンゲリオン劇場版が公開されるにあたり、これまで見てきたエヴァンゲリオンの情報をまとめておきたいと思う。</p>

    <div id="charactor">
      <h3>キャラクター</h3>
      <ul id="shokai">
        <li class="charactor1">碇シンジ</li>
          <p class="comment">初号機パイロット。運命を仕組まれた14歳の少年。NERVの最高司令である碇ゲンドウを父に持つ。母を幼い頃に亡くし、父には捨てられ、周りからの愛情を受けずに育つ。
            <br>初号機と初めてのシンクロにも関わらず、42％ものシンクロ率を出す。</p>
          <img src="../img/shinji.png" alt="shinji" class="chara-phot">

        <li class="charactor2">綾波レイ</li>
          <p class="comment">零号機パイロット。シンジの母、碇ユイのクローン。第二使徒リリスの魂を持っている。当初のレイは二人目のレイである。
            <br>ゲンドウに絶対的信頼を持ち、ゲンドウが使っていたメガネを大事に持っている。</p>
          <img src="../img/rei.png" alt="rei" class="chara-phot">

        <li class="charactor3">惣流・（式波）アスカ・ラングレー</li>
          <p class="comment">二号機パイロット。ドイツ人と日本人のハーフで、頭脳、運動神経ともに優秀。ドイツでは飛び級をし大学も出ている。
            <br>母に愛されるためだけに努力し、二号機パイロットになる。</p>
          <img src="../img/asuka.png" alt="asuka" class="chara-phot">

        <li class="charactor">渚カヲル</li>
          <p class="comment">Mark．6、第13号機パイロット。ゼーレから送られた少年。情報は抹殺済み。実は、アダムの魂が入っており、旧作では使徒として登場した。</p>
          <img src="../img/kaworu.png" alt="kaworu" class="chara-phot">

        <li class="charactor">葛城ミサト</li>
          <p class="comment">NERVの偉い人。作戦を立てたり、パイロットに指示を出したりする。住むあてのないシンジと同居している。</p>
          <img src="../img/misato.png" alt="misato" class="chara-phot">
      </ul>
    </div>
    <!-- #charactor -->

    <!-- <div id="keijiban">

      <h3>掲示板</h3>
      <p>雑談等にどうぞ</p>
      <form method="post">
        <div>
          <label for="view_name">表示名</label>
          <input id="view_name" type="text" name="view_name" value="">
        </div>
        <div>
          <label for="message">ひと言メッセージ</label>
          <textarea id="message" name="message"></textarea>
        </div>
          <input type="submit" name="btn_submit" value="書き込む">
      </form>
      <section>
        <?php if( !empty($message_array) ): ?>
        <?php foreach( $message_array as $value ): ?>
        <article>
            <div class="info">
                <h4><?php echo $value['view_name']; ?></h4>
                <time><?php echo date('Y年m月d日 H:i', strtotime($value['post_date'])); ?></time>
            </div>
            <p><?php echo $value['message']; ?></p>
        </article>
        <?php endforeach; ?>
        <?php endif; ?>
      </section>
    </div> -->
    <!-- keijiban -->
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
