<?php
// This class is used to collect all function which are used in many other classes

class DatabaseObject{

		public static function find_all(){
		//This function finds all details from the class.
		global $database;
		$result = $database->query("SELECT * FROM" .self::$table_name);
		return $result;
	}

	public static function find_by_id($id=0){
		//This function finds detail by provide id
		global $database;
		$result = $database->query("SELECT * FROM ".static::$table_name." WHERE id = {$id} LIMIT=1");
		return $result;
	}

	public static function find_by_sql($sql=""){
		//This function finds object by some other identified method
		global $database;
		$result = $database->query($sql);
		$result_array = array();
		while($detail =$database->fetch_array($result)){
		$result_array[]= self::instantiate($detail);
		}
		return !empty($result_array) ? array_shift($result_array) : false;
	}

	private static function instantiate($detail){
		//Could check that the result is array or not
		$class_name = get_called_class();
		$object = new $class_name;
		foreach($detail as $attribute=>$value){
			if($object->has_attribute($attribute)){
				$object->attribute = $value;
			}
		}
			// This is used to save writing manualy like
		//$object->id = $detail['id'];
		//$object->name = $deatil['name']; etc;
		return $object;
	}

	private  function has_attribute(){
		//Get object variable or say columns in a table and return them as associative array
		$object_variables = get_object_vars($this);
		//This will return true or false
		return array_key_exists($attribute, $object_variables);
	}

}
?>