<?php

namespace App\Participants;

use \App\App;

class Model {

    private $table_name = 'Coments';

    public function __construct() {
        App::$db->createTable($this->table_name);
    }

    /**
     * Inserts $coment in to database
     * @param Participant $coment
     * @return bool
     */
    public function insert(Participant $coment) {
        return App::$db->insertRow($this->table_name, $coment->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = []) {
        $coments = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $coments[] = new Participant($row_data);
        }
        
        return $coments;
    }

    /**
     * @param Participant $coment
     * @return bool
     */
    public function update(Participant $coment) {
        return App::$db->updateRow($this->table_name, $coment->getId(), $coment->getData());
    }

    /**
     * deletes coments from database
     * @param Participant $coment
     * @return bool
     */
    public function delete(Participant $coment) {
        return App::$db->deleteRow($this->table_name, $coment->getId());
    }

    public function __destruct() {
        App::$db->save();
    }

}
