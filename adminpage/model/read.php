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
                $list[] = new read($item['ID'],$item["Image"] ,$item['Audio'],$item['bookID']);
            return $list;
        }
        public function count($id){
            $db=new DB();
            $cn = $db->getConnection();
            $number = $cn->query("select count(*) from reading where bookID=$id");
            $row= $number->fetchColumn();
            return $row;
        }
        public function delete($id)
        {
            include "../connection.php";
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("delete from reading where ID=$id");
        }
        public function add($image,$audio,$bookid)
        {
            include "../connection.php";
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("insert into reading (ID,Image,Audio,bookID) values (null,'$image','$audio','$bookid')");
        }
        public function update($id,$image,$audio)
        {
            include "../connection.php";
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("update reading set Audio='$audio',Image='$image' where ID=$id");
        }
    }
?>