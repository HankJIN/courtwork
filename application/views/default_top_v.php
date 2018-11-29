<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>:: Court Work ::</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/assets/css/components.css">
    <link rel="stylesheet" href="static/assets/css/icons.css">
    <link rel="stylesheet" href="static/assets/css/responsee.css">
    <link rel="stylesheet" href="static/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="static/assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="static/assets/css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="static/assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="static/assets/js/jquery-ui.min.js"></script>


    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="size-1140">

    <!-- HEADER -->
    <header role="banner" class="position-absolute">
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.php" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="static/assets/images/logo-dark2.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="static/assets/images/logo-dark1.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="<?php echo BASEURL ?>Main">홈</a></li>
            <li><a href="<?php echo BASEURL ?>userApp/gameBoard.php">경기 검색</a></li>
            <li><a href="<?php echo BASEURL ?>userApp/mercenaryBoard.php">용병 검색</a></li>
            <li><a href="application/views/score.php">전적 확인</a></li>
            <li><a href="application/views/myPage.php">내 정보 관리</a></li>
            <li><a href="application/views/login.php">로그인</a></li>
          </ul>
        </div>
      </nav>
    </header>
