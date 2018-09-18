<?php  

class Auto {
	protected static $db_table = "auto";
	protected static $db_table_fields = ['auto_name', 'first_name', 'last_name', 'number', 'content', 'email'];
	public $id;
	public $auto_name;
	public $first_name;
	public $last_name;
	public $number;
	public $content;
	public $email;

	public static function find_all_auto() {
		return self::find_this_query("SELECT * FROM " . self::$db_table . " ");
	}

	public static function find_auto_by_id($auto_id) {
		global $database;
		$the_result_array = self::find_this_query("SELECT * FROM " . self::$db_table . " WHERE id=$auto_id LIMIT 1");

		return !empty($the_result_array) ? array_shift($the_result_array) : false;
	}

	public static function find_this_query($sql){
		global $database;
		$result_set = $database->query($sql);
		$the_object_array = [];
		while($row = mysqli_fetch_array($result_set)){
			$the_object_array[] = self::instantation($row);
		}
		return $the_object_array;
	}

	public static function instantation($the_record){
		$the_object = new self;

		foreach ($the_record as $the_attribute => $value) {
			if($the_object->has_the_attribute($the_attribute)){
				$the_object->$the_attribute = $value;
			}
		}

		return $the_object;
	}

	private function has_the_attribute($the_attribute){
		$object_properties = get_object_vars($this);
		return array_key_exists($the_attribute, $object_properties);
	}

	protected function properties() {
		$properties = [];

		foreach (self::$db_table_fields as $db_field) {
			if(property_exists($this, $db_field)){
				$properties[$db_field] = $this->$db_field;
			}
		}

		return $properties;
	}

	protected function clean_properties(){
		global $database;

		$clean_properties = [];

		foreach ($this->properties() as $key => $value) {
			$clean_properties[$key] = $database->escape_string($value);
		}

		return $clean_properties;
	}

	public function save() {
		return isset($this->id) ? $this->update() : $this->create();
	}

	// CREATE Method
	public function create(){
		global $database;

		$properties = $this->clean_properties();

		$sql = "INSERT INTO " . self::$db_table . "(" . implode(",", array_keys($properties)) . ")";
		$sql .= "VALUES ('" . implode("','", array_values($properties)) . "')";

		if($database->query($sql)) {
			$this->id = $database->the_insert_id();
			return true;
		} else {
			return false;
		}
	} // CREATE Method END

	// UPDATE Method
	public function update() {
		global $database;

		$properties = $this->clean_properties();

		$properties_pairs = [];

		foreach ($properties as $key => $value) {
			$properties_pairs[] = "{$key}='{$value}' ";
		}

		$sql = "UPDATE " . self::$db_table . " SET ";
		$sql .= implode(", ", $properties_pairs);
		$sql .= " WHERE id= " . $database->escape_string($this->id);

		$database->query($sql);

		return (mysqli_affected_rows($database->connection) == 1) ? true : false;

	} // UPDATE Method END

	// DELETE Method
	public function delete() {
		global $database;
		$sql = "DELETE FROM " . self::$db_table . " ";
		$sql .= "WHERE id=" . $database->escape_string($this->id);
		$sql .= " LIMIT 1";

		$database->query($sql);

		return (mysqli_affected_rows($database->connection) == 1) ? true : false;

	} // DELETE Method END

	public function count_all(){
		global $database;

		$sql = "SELECT COUNT(*) FROM " . self::$db_table . " ";
		$result_set = $database->query($sql);
		$row = $result_set->fetch_array();

		return  array_shift($row);
	}

	public function search($search){
		$sql = "SELECT * FROM " . self::$db_table . " ";
		$sql .= "WHERE auto_name LIKE '%$search%'";
		$result_set = $database->query($sql);
	}

	public function sort_asc(){
		return self::find_this_query("SELECT * FROM " . self::$db_table . " ORDERD by auto_name ASC");
	}

} // End of Class Auto


?>