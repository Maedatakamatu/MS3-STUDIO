<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="キーワードでサイトを説明">
    <meta name="description" content="どんなサイトか短い文章で説明">
    <title>サイトのタイトル</title>

    <link rel="shortcut icon" href="favicon.ico">
  
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- jquery & iScroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.fadethis.min.js"></script> -->

    
<?php wp_head(); ?>
</head>

<body class="drawer drawer--right">
    <header>
        <nav class="header header-menu">
            <ul class="flex">
                <li><a href="<?php echo home_url();?>" class="menu-items">TOP</a></li>
                <li><a href="#sec2-profile" id="sec2" class="menu-items">プロフィール</a></li>
                <li><a href="#sec3-portfolio" id="sec3" class="menu-items">制作実績</a></li>
                <li><a href="#sec4-newblog" id="sec4" class="menu-items">新着記事</a></li>
                <li><a href="#sec5-contactform" id="sec5" class="menu-items">お問い合わせ</a></li>
                <li><a href="#" id="jp-menu" class="menu-items">日本語</a></li>
                <li><a href="#" id="en-menu" class="menu-items">English</a></li>
            </ul>
        </nav>
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
        </button>
        <nav class="drawer-nav" role="navigation">
            <ul class="drawe-menu">
                <li><a href="<?php echo home_url();?>" class="menu-items">TOP</a></li>
                <li><a href="#sec2-profile" id="sec2" class="menu-items drawer-menu-item">プロフィール</a></li>
                <li><a href="#sec3-portfolio" id="sec3" class="menu-items drawer-menu-item">制作実績</a></li>
                <li><a href="#sec4-newblog" id="sec4" class="menu-items drawer-menu-item">新着記事</a></li>
                <li><a href="#sec5-contactform" id="sec5" class="menu-items drawer-menu-item">お問い合わせ</a></li>
                <li><a href="#" id="jp-menu" class="menu-items drawer-menu-item">日本語</a></li>
                <li><a href="#" id="en-menu" class="menu-items drawer-menu-item">English</a></li>

            </ul>
        </nav>


    </header>