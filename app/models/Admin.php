<?php
	class Admin extends Database{
		protected $table_name = 'admin';
		public function __construct(){
			parent::__construct();
		}
	}
?>