<?php
class Database{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh;
  private $error;

  private $stmt;
  public function __construct(){
    // Set DSN
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
    // SET options
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    // Create a new PDO instance
    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
    }
    // CAtch any errors
    catch (PDOException $e) {
      $this->error = $e->getMessage();
    }
  }

  public function close(){
    # code...
    if($this->dbh == null){
      return true;
    }

    return false;
  }

  // Create a new stmt from the query the stmt is a prepared one
  // To avoid SQL Injection
  public function query($query){
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = null){
    // Param is the placeholder value that we will be using in our SQL statement, example :name.
    // Value is the actual value that we want to bind to the placeholder, example “John Smith”.
    // Type is the datatype of the parameter, example string.
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value, $type);
  }

  // Execute the prepared statement
  public function execute(){
    return $this->stmt->execute();
  }

  // Return all the records
  public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Return a single record
  public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Return the Row count
  public function rowCount(){
    return $this->stmt->rowCount();
  }

  // Return the last inserted ID as a string
  public function lastInsertId(){
    return $this->dbh->lastInsertId();
  }

  // Start a Transaction to the database
  public function beginTransaction(){
    return $this->dbh->beginTransaction();
  }

  // End a successfull Transaction
  public function endTransaction(){
    return $this->dbh->commit();
  }

  // Cancel a Failed Transaction
  public function cancelTransaction(){
    return $this->dbh->rollBack();
  }

  // This method dump the data that's stored in the stmt
  public function debugDumpParams(){
    return $this->stmt->debugDumpParams();
  }
}
?>