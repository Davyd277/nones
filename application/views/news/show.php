<!DOCTYPE html>
<html >
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<p>News Seite</p>

<?php foreach ($news as  $val) : ?>
<h3><?php echo $val['title'];?></h3>
<p><?php echo $val['decription'];?></p>
<hr>
<?php endforeach?>
</body>
</html>

