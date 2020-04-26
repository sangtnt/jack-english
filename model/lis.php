<?php
    class lis{
        public $id;
        public $audio;
        public $bookid;
        function lis($id,$audio,$bookid){
            $this->id=$id;
            $this->audio=$audio;
            $this->bookid=$bookid;
        }
        public function find($id,$start,$end){
            $list = [];
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("select * from listening where bookID=$id limit $start,$end");
            foreach($res->fetchAll() as $item)
                $list[] = new lis($item['ID'], $item['Audio'],$item['bookID']);
            return $list;
        }
        public function count($id){
            $db=new DB();
            $cn = $db->getConnection();
            $number = $cn->query("select count(*) from listening where bookID=$id");
            $row= $number->fetchColumn();
            return $row;
        }
    }
?>