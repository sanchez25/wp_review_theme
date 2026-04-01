<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: " . home_url());
exit();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name='viewport' content='width=device-width,initial-scale=1'/>
		<?php wp_head(); ?>
		<title><?php wp_title(); ?></title>
    </head>
    <body class="error">
		<div class="error-block">
			<div class="error-block-content">
				<span>404</span>
				<p>Страница не найдена</p>
				<a class="error-btn" href="/">Перейти на главную</a>
			</div>
		</div>
    </body>
</html>