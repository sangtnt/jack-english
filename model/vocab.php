<?php
    class vocab{
        public $id;
        public $content;
        public $meaning;
        public $example;
        public $bookid;
        function vocab($id,$content,$example,$meaning,$bookid){
            $this->id=$id;
            $this->meaning=$meaning;
            $this->example=$example;
            $this->bookid=$bookid;
            $this->content=$content;
        }
        public function count($id){
            $db=new DB();
            $cn = $db->getConnection();
            $number = $cn->query("select count(*) from vocabulary where bookID=$id");
            $row= $number->fetchColumn();
            return $row;
        }
        public function find($id,$start,$end){
            $list = null;
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("select * from vocabulary where bookID=$id limit $start,$end");
            foreach($res->fetchAll() as $item)
                $list = new vocab($item['ID'],$item["Content"] ,$item['Example'],$item['Meaning'],$item['bookID']);
            return $list;
        }
    }
?>