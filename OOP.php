<?php

	class BasicCommand 
	{

		function __construct() {
	       print "Contruct BasicCommand\n";
	   }

		public function command1()
		{
			echo 'Command 1\n';
		}

		public function command2()
		{
			echo 'Command 2\n';
		}
	}
	
	class Command extends BasicCommand
	{

		function __construct() {
		 	parent::__construct();
	        echo "Contruct Command\n";
	   }

		public function command3()
		{
			echo 'Command 3\n';
		}

	}

	$varParent = new BasicCommand();
	$varChild = new Command();

	$varChild->command1();
	$varChild->command2();
	$varChild->command3();

?>