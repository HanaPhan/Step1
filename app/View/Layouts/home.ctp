<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vocabulary</title>
  	<?php
		echo $this->element('meta');
		echo $this->element('css');
		echo $this->element('js');
	?>
</head>
<body>
	<?php echo $this->element('header'); ?>
	<?php echo $this->fetch('content'); ?>
</body>
</html>
