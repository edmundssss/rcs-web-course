<?php


if (isset($_SESSION['flash']) && isset($_SESSION['flash']['success'])) { 
	foreach ($_SESSION['flash']['success'] as $success) {
		 echo "<li><b>$success<b></li>";
}
    unset($_SESSION['flash']['success']);
}

?>