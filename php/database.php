<?php
		class DB {
		private $dbn  = "";
		private $host = "";
		private $pwd  = "";
		private $usr  = "";
		private $link  = NULL;
		/* You must set all the fields above, on your local server running MySQL */

		function opendb()
		{
			$this->link = mysql_connect($this->host, $this->usr, $this->pwd) or die("Could not connect to DB");

			mysql_select_db($this->dbn);
		}

		function q($str)
		{
			$s = mysql_query($str);

			if(!$s){
				return NULL;
			}
			else {
				return $s;
			}
		}

		function closedb()
		{
			mysql_close($this->link);
		}

	}

?>
