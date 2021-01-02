<?php
$by_ip = $_SERVER['HTTP_HOST'] === '8.8.8.8';
$title = 'A';
$git_link = '';
$discord_link = '';
$tg_link = '';
$twitter_link = '';
$medium_link = '';
$app_link = '';
$news_link = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php /*
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PMD2PD4');</script>
	<!-- End Google Tag Manager -->
	*/ ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="<?=$title;?> - A fully decentralized protocol for next-gen liquidity providers.
"/>
    <title><?=$title;?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="custom.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body class="text-center">
<?php /*
	  <!-- Google Tag Manager (noscript) -->
	  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMD2PD4"
	  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	  <!-- End Google Tag Manager (noscript) -->
	  */ ?>
<div class="container d-flex flex-column">
<!--<div class="d-flex w-100 h-100 p-3 mx-auto flex-column">-->
    <header class="masthead mb-auto">
        <div class="inner">
            <div class="text-left" style="float: left;">
                <?php if ($by_ip): ?>
                <h4><?=$title;?></h4>
                <?php else: ?>
                <a href="/">
                    <img src="logo_header.png"/>
                </a>
                <?php endif; ?>
            </div>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link" target="_blank" href="<?=$news_link;?>">News</a>
                <a class="nav-link" href="<?=$app_link;?>">App</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover w-100" style="height: 400px; background: url('farmer_PNG63.png'); background-repeat: no-repeat; background-position: center; background-size: contain;">
    </main>
    <div class="mt-auto">
        <h4>A fully decentralized protocol for next-gen liquidity providers</h4>
    </div>
    <footer class="mt-auto mb-2" style="flex: 0 0 auto;">
        <div class="inner">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" target="_blank" href="<?=$git_link;?>">GitHub</a>
                </li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="<?=$discord_link;?>">Discord</a>
                </li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="<?=$tg_link;?>">Telegram</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank"
                                        href="<?=$twitter_link;?>">Twitter</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank"
                                        href="<?=$medium_link;?>">Medium</a></li>
                                       

            </ul>
            <br>
            <p>© 2020 <a href="/"><?=$title;?></a></p>
        </div>
    </footer>
<!--</div>-->
</div>
</body>
</html>