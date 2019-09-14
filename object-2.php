<?php
$title = 'Programming Question #2';
$question = 'I\'m having trouble displaying a Javascript alert.';
$description = 'I think I\'m using the correct function, but I can\'t figure out what\'s wrong. Could you point me in the right direction?';
$code = '&lt;ul&gt;
				item 1
				item 2
				item 3
			&lt;/ul&gt;';
$date = 'June 16, 2015';

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>

		<?php echo $_REQUEST['the_variable']; ?>

		<h1><?php echo $question; ?></h1>
		<p><?php echo $description; ?></p>
		<pre>
			<?php echo $code; ?>
		</pre>
		<p>Question Date: <?php echo $date; ?></p>
	</body>
</html>
