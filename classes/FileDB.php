<?php

require 'functions/file.php';

class FileDB {

    private $file_name;
    private $data;

    public function __construct($file_name) {
        $this->file_name = $file_name;
        $this->load();
    }

    public function load() {
        $this->data = file_to_array($this->file_name);
    }

    public function setData($data_array) {
        $this->data = $data_array;
    }

    public function save() {
        return array_to_file($this->data, $this->file_name);
    }

    public function getRow($table_name, $row_id) {
        if (isset($this->data[$table_name])) {
            return $this->data[$table_name][$row_id];
        }

        return false;
    }

    public function insertRow($table_name, $row, $row_id = null) {
        if ($row_id !== null) {

            if (!isset($this->data[$table_name][$row_id])) {
                $this->data[$table_name][$row_id] = $row;
                return $row_id;
            }

            return false;
        } else {
            $this->data[$table_name][] = $row;

            // surandame pask. indeksa
            end($this->data[$table_name]);
            $row_id = key($this->data[$table_name]);

            return $row_id;
        }
    }

    public function replaceRow($table_name, $row, $row_id) {
        $this->data[$table_name][$row_id] = $this->row;
    }

    public function tableExists($table_name) {
        if (isset($this->data[$table_name])) {
            return true;
        }
        return false;
    }

    public function createTable($table_name) {
        if (!$this->tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        }
        return false;
    }

    public function dropTable($table_name) {
        unset($this->data[$table_name]);
    }

    public function truncateTable($table_name) {
        if ((isset($this->data[$table_name]))) {
            $this->data[$table_name] = [];
            return true;
        }
        return false;
    }

    public function rowExists($table_name, $row_id) {
        if (isset($this->data[$table_name][$row_id])) {
            return true;
        }

        return false;
    }

    public function insertRowIfNotExists($table_name, $row, $row_id) {
        if (!$this->rowExists($table_name, $row_id)) {
            $this->data[$table_name][$row_id] = $row;
            return $row_id;
        }

        return false;
    }

    public function updateRow($table_name, $row, $row_id) {
        if ($this->rowExists($table_name, $row_id)) {
            $this->data[$table_name][$row_id] = $row;
            return true;
        }

        return false;
    }

    public function deleteRow($table_name, $row_id) {
        if (isset($this->data[$table_name][$row_id])) {
            unset($this->data[$table_name][$row_id]);
            return true;
        }

        return false;
    }
    
    public function getRowWhere($table, $conditions) {
        $rows = [];
        
        foreach ($this->data[$table] as $row_id => $row) {
            $success = true;
            
            foreach ($conditions as $condition_id => $condition) {
                if ($row[$condition_id] !== $condition) {
                    $success = false;
                    break;
                }
            }
            
            if ($success) {
                $row['row_id'] = $row_id;
                $rows[$row_id] = $row;
            }
        }
        
        return $rows;
    }
    
    public function __destruct() {
        $this->save();
    }
}