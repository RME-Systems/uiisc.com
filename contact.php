<?php
	require_once ("core.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title?> - News</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>">
    <link href="favicon.ico?_=<?=$static_release?>" rel="icon">
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css?_=<?=$static_release?>" rel="stylesheet"><!--[if lt IE 9]>
    <script src="./js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script><!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<?php include ("nav.php"); ?>
<div class="container">
    <div class="row">
        <section class="section-wrap">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-12 col-md-12 termsHead"><h1>Contact Us</h1></div>
                    <div class="col-sm-12 col-md-12">
                        <h2>Contact</h2>
                        <p>If you have any problems or have the need to contact us to ask a question, 
                        you can use the <span>integrated support system</span> in your control panel to create a support ticket.</p>
                        <p>We will reply to your question as soon as possible.</p>
                        <p>For technical support please look at the <a href="http://byet.net/forumdisplay.php?f=28">Knowledge Base</a></p>
                        <p>This Privacy Policy governs the manner in which IFastNet LTD collects, uses, maintains and
                            discloses information collected from users of this Web site (each, a "User").</p>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <h2>Address</h2>
                        <p>Shanghai China.</p>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <h2>Others</h2>
                        <p class="alert alert-warning"><i class="glyphicon glyphicon-info-sign"></i> Crogram Inc.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include ("footer.php"); ?>
</body>
</html>