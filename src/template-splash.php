<?php /* Template Name: Splash Page */ ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<style>
html, body {
background: #DBD7D2;
font-family: Helvetica, Arial, sans-serif;
height: 100%;
overflow: hidden;
}

a {
	text-decoration: none;
}

.instagram-link {
	color: #333;
	display: inline-flex;
	text-decoration: none;
}

.instagram-link:hover {
	color: #999;
}

.instagram-link:before {
	content:'';
	background: url('<?php echo get_template_directory_uri(); ?>/img/instagram-outline.svg') no-repeat;
	height: 20px;
	width: 20px;

}

#splash-container {
	align-items: center;
	display: flex;
	flex-direction: column;
	height: 100%;
	justify-content: center;
}

#logo-container {
	height: 100px;
	margin: 2rem;
	width: 100px;
}

#logo-container img {
	height: 100px;
}

#splash-tagline {
	font-weight: normal;
	color: #eee;
}
</style>
</head>
<body>
	<div id="splash-container">
		<div id="logo-container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/jwik_logo.svg" alt="Just What I Kneaded" class="logo-img">
		</div>
		<a href="http://instagram.com/justwhatikneaded.la"><div class="instagram-link">: @justwhatikneaded.la</div></a>
		<h2 id="splash-tagline">COMING SOON</h2>
	</div>
</body>
</html>

