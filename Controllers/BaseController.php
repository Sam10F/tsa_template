<?php
class BaseController
{
	private static $extracss;
	private static $extrascripts;

	static public function construct($extracss, $extrascripts){
		self::$extracss = $extracss;
		self::$extrascripts = $extrascripts;
	}

	public static function renderPage(){
		ob_start(); // ensures anything dumped out will be caught

		// do stuff here
		$url = 'http://localhost/samuel10f/master.php?extrascripts=' . implode(',', self::$extracss);

		// clear out the output buffer
		while (ob_get_status()) 
		{
		    ob_end_clean();
		}

		// no redirect
		echo("<script>location.href='{$url}'</script>");
		exit();
	}
}
?>