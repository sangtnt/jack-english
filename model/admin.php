<?php
    class admin{
        public $username;
        public $password;
        public $fullname;
        public $address;
        public $image;
        public $phone;
        function admin($username,$password,$fullname,$image,$address,$phone){
            $this->username=$username;
            $this->password=$password;
            $this->fullname=$fullname;
            $this->address=$address;
            $this->image=$image;
            $this->phone=$phone;
        }
        public function all()
        {
            $list = [];
            $db=new DB();
            $cn = $db->getConnection();
            $res = $cn->query("select * from admin");
            foreach($res->fetchAll() as $item)
                $list[] = new admin($item['Username'], $item['Password'], $item['Fullname'], $item['Image'], $item['Address'],$item['Phone']);
            return $list;
        }
    }
?>