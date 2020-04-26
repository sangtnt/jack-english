<?php
    class read{
        public $id;
        public $image;
        public $audio;
        public $bookid;
        function read($id,$image,$audio,$bookid){
            $this->id=$id;
            $this->audio=$audio;
            $this->bookid=$bookid;
            $this->image=$image;
        }
        public function find($id,$start,$end){
            $list = [];
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("select * from reading where bookID=$id limit $start,$end");
            foreach($res->fetchAll() as $item)
                $list[] = new read($item['ID'],$item["Image"], $item['Audio'],$item['bookID']);
            return $list;
        }
        public function count($id){
            $db=new DB();
            $cn = $db->getConnection();
            $number = $cn->query("select count(*) from reading where bookID=$id");
            $row= $number->fetchColumn();
            return $row;
        }
    }
?>