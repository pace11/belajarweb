<?php 
	if (isset ($_GET['page'])) {
		$page = $_GET['page'];
	}
	else $page = "home";

	if ($page == "home") include("home.php");
	elseif ($page == "article") include("article.php");
	elseif ($page == "about") include("about.php");
	elseif ($page == "contact") include("contact_us.php");

	else echo "halaman tidak ada";
 ?>