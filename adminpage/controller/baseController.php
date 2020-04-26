<?php
    class baseController{
        protected $folder;
        public function render($file,$data){
            $view_file="view/{$this->folder}/{$file}.php";
            if (is_file($view_file)){
                extract($data);
                ob_start();
                include $view_file;
                $content=ob_get_clean();
                include "view/layout/application.php";
            }
            else{
                header("location:index.php?controller=page&action=error");
            }
        }
    }
?>