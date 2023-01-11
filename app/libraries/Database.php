<?php
    class Database{
        private $con;
        private  $query;
        private  $sql_str;
        protected $table_name;
        public $arr = [];
	   
	    public function __construct(){
            $this->con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            mysqli_set_charset($this->con, 'utf8');
            if ($this->con->connect_errno) {
                echo "Failed to connect to MySQL: " . $this->con->connect_error;
                exit();
            }
        }
	

        //---------- INSERT QUERY -----------//

        public function insert($data,$edit = false){
            $fields_name = '';
            $values = '';

            if($edit != false){
                if(gettype($data) != 'array'){
                    $fields_name = 'edit_id';
                    $this -> sql_str = "INSERT INTO ".$this->table_name." (".$fields_name.") VALUES (".$data.")";
                    $insert = $this->execute();
                }
            }
                else{
                    foreach ($data as $key => $value){
                        if($key == 'password'){
                            $values .= "'".md5($value)."'".',';
                        }else {
                            $values .= "'".$value."'".',';
                        }
                        $fields_name .= $key.',';
                    }
                    $fields_name = substr($fields_name, 0, -1);
                    $values = substr($values, 0, -1);
                    $this -> sql_str = "INSERT INTO ".$this->table_name." (".$fields_name.") VALUES (".$values.")";

                    $insert = $this->execute();
                }

			return $this->query;
		}
		
		
		//------- Select Query --------//

		public function select($limit = false,$table = false,$columnName = false){
	        if($table != false && $columnName != false){
                $this->sql_str = 'SELECT '.$table.'.'.$columnName.' FROM '.$table;
            }
	            else{
                    $this->sql_str = 'SELECT * FROM '.$this->table_name.' '.$limit;
                }

            return $this;
        }

        //------- Join --------//

        public function join($type,$table1,$table2,$columnName1,$columnName2){
            if (strpos($this->sql_str, $type)) {
                $this->sql_str .= ' '.$type.' '.$table2.' ON '.$table1.'.'.$columnName1.' = '.$table2.'.'.$columnName2;
            } else{
                $this->sql_str .= ' '.$type.' '.$table2.' ON '.$table1.'.'.$columnName1.' = '.$table2.'.'.$columnName2;
            }

            return $this;
        }

        public function where($field_name,$operator,$value,$table = false,$columnName = false){ //----false with join
            if($table == false && $columnName == false){
                if (strpos($this->sql_str, 'WHERE')) {
                    $this->sql_str .= ' AND '.$field_name.$operator."'".$value."'";
                } else{
                    $this->sql_str .= " WHERE ".$field_name.$operator."'".$value."'";
                }

            }
                else{
                    if (strpos($this->sql_str, 'WHERE')) {
                        $this->sql_str .= ' AND '.$table.'.'.$columnName.' = '.$value;
                    } else{
                        $this->sql_str .= ' WHERE '.$table.'.'.$columnName.' = '.$value;
                    }
                }

            return $this;
        }

        public function update(){
            $this->sql_str = 'UPDATE '.$this->table_name;
            return $this;
        }

        public function set($field_name,$operator,$value){
            if (strpos($this->sql_str, 'SET')) {
                $this->sql_str .= $field_name.' '.$operator." '".$value."',";
            } else{
                $this->sql_str .= " SET ".$field_name.' '.$operator." '".$value."',";
            }

            $this->sql_str = rtrim($this->sql_str,',');

            return $this;
        }

		public function remove(){
            $this->sql_str = 'DELETE FROM '.$this->table_name;
            return $this;
        }


		//-------- Get Row -----------//
		
		public function fetch(){
			$fetch = mysqli_fetch_assoc($this->query);
            return $fetch;
		}
		
		//--------- Get Rows ------------//
		
		public function fetchAll(){
			while($fecth = mysqli_fetch_assoc($this->query)){
				array_push($this->arr, $fecth);
			}
			
			return $this->arr;
		}
		
		public function rowCount(){
            $count = mysqli_num_rows($this->query);
            return $count;
        }
		
		
		
		//---------- Exequte Query ----------//
		
		public function execute(){
            $this->query = mysqli_query($this->con, $this->sql_str);
            return $this;
        }
	
		public function cleanPosts($data){
			$data = trim($data);
			$data = htmlspecialchars($data);
			$data = mysqli_real_escape_string($this->con,$data);

			return $data;
		}
		
    }
?>