<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
	  all users
	</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
  <body>
  <?php if($users): ?>
	<ul>
	<?php foreach($users as $user): ?>
		<li><a href="?id=<?= $user->id ?>">user <?= $user->id ?></a></li>
	<?php endforeach; ?>
	</ul>
  <?php endif; ?>
  </body>
</html>