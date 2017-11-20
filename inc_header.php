<?php 
if (stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')) {
	$local = TRUE;
} else {
	$local = FALSE;
}
// Allow for development on different servers.
if ($local) {
	// Always debug when running locally:
	$debug = TRUE;
	// Define the constants:
	define ('BASE_URI', ''.$_SERVER['DOCUMENT_ROOT'].'/soren_studio');
	define ('BASE_URL',	'http://localhost:8888/soren_studio');	
} else {
	define ('BASE_URI', ''.$_SERVER['DOCUMENT_ROOT'].'');
	define ('BASE_URL',	'http://sorenwest.com');
}
$uri_link =  BASE_URL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Soren">
    <meta name="author" content="">
    <title>Soren West</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6954596/7114992/css/fonts.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $uri_link;?>/dist/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
