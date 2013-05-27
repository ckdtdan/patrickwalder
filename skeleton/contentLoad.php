<?php 
switch($_GET['id'])
	{
		case 1:
			include("content/home.php");
			break;
                case 2:
			include("content/lebenslauf.php");
			break;
                case 3:
			include("content/positionen.php");
			break;
		case 4:
			include("content/dokumente.php");
			break;
		case 5:
			include("content/kontakt.php");
			break;
		case 6:
			include("content/impressum.php");
			break;
		default:
			include("content/home.php");
			break;
	}
?>
