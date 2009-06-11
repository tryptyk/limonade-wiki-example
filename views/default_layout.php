<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Wikir | Limonde PHP example</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Fabrice Luraine">
	<link rel="stylesheet" href="http://www.sofa-design.net/limonade/css/blueprint/screen.css" type="text/css" media="screen, projection">
  	<link rel="stylesheet" href="http://www.sofa-design.net/limonade/css/blueprint/print.css" type="text/css" media="print"> 
  <!--[if IE]>
    <link rel="stylesheet" href="http://www.sofa-design.net/limonade/css/blueprint/ie.css" type="text/css" media="screen, projection">
  <![endif]-->
  <link rel="stylesheet" href="http://www.sofa-design.net/limonade/css/screen.css" type="text/css" media="screen, projection">
  <link rel="stylesheet" href="./public/screen.css" type="text/css" media="screen, projection">
	<!-- Date: 2009-06-03 -->
</head>
<body>
<div id="header">
  <h1>Wikir</h1>
  <p>Limonade PHP Example (with raspberry syrup)</p>
</div>
  <div id="content">
    <?= $content; ?>
  </div>
  <div id="page_name_cloud">
    <h5>Tag Cloud</h5>
    <p><?=html_pages_cloud(); ?></p>
  </div>
  <div id="footer">
		&nbsp;
	</div>
</body>
</html>
