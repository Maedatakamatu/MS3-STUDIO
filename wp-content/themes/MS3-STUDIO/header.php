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
  
    <!-- ブートストラップ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" crossorigin="anonymous">

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
    <!--header-->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 mx-auto">
                    <a herf="#">
                        <img src="<?php echo get_template_directory_uri(); ?>./img/logo.png"  width="120" height="30" alt="logo" class="logo"/>
                    </a>
                </div>
            </div>
        </div>
    </div> 
    <!--//header-->