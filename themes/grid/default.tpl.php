    <!doctype html>
    <html lang="sv">
    <head>
      <meta charset="utf-8">
      <title><?=$title?></title>
      <link rel="stylesheet" href="<?=$stylesheet?>">
    </head>
    <body>
      <div id="header">
        <a href='<?=base_url()?>'><?=$header?></a>
	  <div id='login-menu'>
       <?=login_menu()?>
	 </div>
     </div>
	  <div id='wrap-main'>
      <div id="main" role="main">
	    <?=get_messages_from_session()?>
        <?=@$main?>
        <?=render_views()?>
      </div>
	  </div>
      <div id="footer">
        <?=$footer?>
		<?=get_debug()?>
      </div>
    </body>
    </html>