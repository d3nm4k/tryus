<?

	session_start();
	require_once(__DIR__."/php/custom.php");

	require_once(__DIR__."/html/top.php");
	require_once(__DIR__."/html/mid.php");
	require_once(__DIR__."/html/bot.php");

	mysqli_close($dbconn);

?>