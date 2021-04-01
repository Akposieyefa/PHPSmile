<?php 

namespace App\Core;

use Exception;

class Model extends DB
{
    protected $action;
    protected $rowCount;
    protected $stmt;
    protected $queryString;
    protected $fetchQuery;

    public  function create($tableName, $request) 
    {
        if(is_array($request)):
            try {
                $array_ks = array_keys($request);
                $array_ks_1 = implode(", ", $array_ks);
                $i=0;
                foreach ($request as $key => $value) {
                    $stmt_Val[$i] = $value;
                    $stmt_Param[$i] = ":".$key;
                    $i++;
                }
                $stmtParam_1 = implode(", ", $stmt_Param);
                $this->queryString = "INSERT INTO $tableName ($array_ks_1) VALUES ($stmtParam_1)";
                $this->stmt = parent::pdoConnect()->prepare($this->queryString);
                foreach ($stmt_Param as $key => $value) {
                    $this->stmt->bindParam($value,$stmt_Val[$key]);
                }
                $this->action = $this->stmt->execute() or
                die(parent::$error . __LINE__);
                $this->rowCount = $this->stmt->rowCount();
                if ($this->rowCount > 0) {
                    return $this->rowCount;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                throw new Exception("Create Query Error: ".$e->getMessage());
            }
        endif;
    }

    public function all($tableName, $limit = NULL) 
    {
        try {
            if ($limit == NULL) {
                $this->queryString = "SELECT * FROM $tableName ORDER BY id DESC";
            } else {
                $this->queryString = "SELECT * FROM $tableName ORDER BY id DESC lIMIT $limit ";
            }
            $this->stmt = parent::pdoConnect()->prepare($this->queryString);
            $this->action = $this->stmt->execute() or
            die(parent::$error . __LINE__);
            $this->rowCount = $this->stmt->rowCount();
            if ($this->rowCount > 0) {
                $this->fetchQuery = $this->stmt->fetchAll();
                return $this->fetchQuery;
            } else {
                return false;
            }
        } catch (Exception $e) {
            throw new Exception("All Query Error: ".$e->getMessage());
        }
    }

    public function get($tableName, $dbField, $request)
    {
        try {
            $this->queryString ="SELECT * FROM $tableName WHERE $dbField = ?";
            $this->stmt = parent::pdoConnect()->prepare($this->queryString);
            $this->stmt->bindValue(1, $request);
            $this->action = $this->stmt->execute() or
            die(parent::$error . __LINE__);
            $this->rowCount = $this->stmt->rowCount();
            if ($this->rowCount > 0) {
                $this->fetchQuery = $this->stmt->fetchAll();
                return $this->fetchQuery;
            } else {
                return false;
            }
        }catch (Exception $e) {
            throw new Exception("Get Query  Error: ".$e->getMessage());
        }

    }

    public function update($tableName,$request,$condition,$true_value)  
    {

        try {
            $i = 0;
            foreach ($request as $key => $value) {
                $set_value[$i] = $key."='".$value."'";
                $i++;
            }
            $set_value = implode(", ", $set_value);
            $this->queryString = "UPDATE $tableName SET $set_value WHERE $condition = $true_value";
            $this->stmt = parent::pdoConnect()->prepare($this->queryString);
            $this->action = $this->stmt->execute() or
            die(parent::$error . __LINE__);
            $this->rowCount = $this->stmt->rowCount();
            if ($this->rowCount > 0) {
                return $this->rowCount;
            } else {
                return false;
            }
        } catch (Exception $e) {
            throw new Exception("Update Query Error: ".$e->getMessage());
        }
    }

    public function delete($tableName,$dbField,$request)    
    {
        try {
            $this->queryString = "DELETE FROM $tableName WHERE $dbField = ?";
            $this->stmt = parent::pdoConnect()->prepare($this->queryString);
            $this->stmt->bindValue(1, $request);
            $this->action = $this->stmt->execute() or
            die(parent::$error . __LINE__);
            $this->rowCount = $this->stmt->rowCount();
            if ($this->rowCount > 0) {
                return $this->rowCount;
            } else {
                return false;
            }
        } catch (Exception $e) {
            throw new Exception("Delete Query Error: ".$e->getMessage());
        }
    }
}