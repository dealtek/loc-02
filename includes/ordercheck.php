<?php if(!session_id()) session_start();if ((isset($_SESSION['now_poid'])) && ($_SESSION['now_poid'] > 0)) {} else {//header(sprintf("Location: %s", $updateGoTo));echo '<meta http-equiv="refresh" content="0; url=list_po.php">';//echo '<meta http-equiv="refresh" content="0; url=index.php">';flush();exit(0);//$_SESSION['now_ven']}?>