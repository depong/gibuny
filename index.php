<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CyphersGibunyClan</title>
    <link rel="stylesheet" type="text/css" href="http://list.txt/style.css">
  </head>
  <body>

    <div class="profile_banner">
    <!---프로필 및 로그인--->
    <div class="profile">
      <div class="profile_line">
        <img src="http://list.txt/profileEX.jpg" id="profileIMG">
      </div>
      <div class="profile_text">
        닉네임 :<br>
        급수 :<br>
      </div>
    </div>
    <header>
    <img src="http://list.txt/gibuny_icon.png" alt="gibuny_icon" id="icon">
    <h1 class="header"><a href="http://list.txt/index.php">Cyphers Gibuny Clan</a></h1>
    </header>
  </div>
  <!---헤더--->

  <nav>
    <ol>
      <?php
        echo file_get_contents("list.txt")
       ?>
    </ol>
  </nav>
  <article>
    <?php
    if(empty($_GET['id'])==false) {
        echo file_get_contents($_GET['id'].".html");
    }
     ?>
     <iframe src="https://discordapp.com/widget?id=474532404770635786&theme=light" width="400" height="700" allowtransparency="true" frameborder="0" id="discord">   </iframe>

  </article>
  </body>
</html>
