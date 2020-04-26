<?php
    class book{
        public $id;
        public $namebook;
        public $image;
        function book($id,$namebook,$image){
            $this->id=$id;
            $this->namebook=$namebook;
            $this->image=$image;
        }
        public function all()
        {
            $list = [];
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("select * from book");
            foreach($res->fetchAll() as $item)
                $list[] = new book($item['ID'], $item['Name'],$item['Image']);
            return $list;
        }
    }
?>