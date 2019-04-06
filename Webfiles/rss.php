<head>
  <meta charset="UTF-8">
  <title>News</title>
  <link rel="stylesheet" href="status/css/style_.css">
</head>
<?php $ticim=include('status/inc/rssConfig.php'); ?>

<body>
  <div class="newsblock">
              <?php
				/*------------------------------------------------------*/
				/*--------------------CONFIG TIMEZONE-------------------*/
				/*------------------------------------------------------*/
              		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
					date_default_timezone_set('America/Sao_Paulo');
				/*------------------------------------------------------*/
				/*------------------------------------------------------*/
					require_once("status/inc/rsslib.php");
					echo RSS_Display ( $ticim['RSSall'], 6 );
					echo NO_EDIT ( $ticim['RSS_SIG']);
			  ?>
</div>
</body>