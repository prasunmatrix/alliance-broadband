<?php
class DB {
    private $dbHost     = "localhost";
    private $dbUsername = "alliance_dbadmin";
    private $dbPassword = 'Mm@B$Pl#2021';
    private $dbName     = "alliancewp_db";
      
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
  
    public function is_table_empty() {
        $result = $this->db->query("SELECT id FROM g_token");
        if($result->num_rows) {
            return false;
        }
  
        return true;
    }
  
    public function get_access_token() {
        $sql = $this->db->query("SELECT access_token FROM g_token");
        $result = $sql->fetch_assoc();
        return json_decode($result['access_token']);
    }
  
    public function get_refersh_token() {
        $result = $this->get_access_token();
        return $result->refresh_token;
    }
  
    public function update_access_token($token) {
        if($this->is_table_empty()) {
            $this->db->query("INSERT INTO g_token(access_token) VALUES('$token')");
        } else {
            $this->db->query("DELETE FROM g_token");
            $this->db->query("INSERT INTO g_token(access_token) VALUES('$token')");
            // $this->db->query("UPDATE g_token SET access_token = '$token' WHERE id = (SELECT id FROM g_token)");
        }
    }

    public function __destruct() {
        //Close the connection
        $this->db->close();
    }
}