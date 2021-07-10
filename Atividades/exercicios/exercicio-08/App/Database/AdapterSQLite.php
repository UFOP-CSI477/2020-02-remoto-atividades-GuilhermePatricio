 <?php

 namespace App\Database;

 class AdapterSQLite implements AdapterInterface{

    public function open(){
        echo "abriu";
    }

    public function close(){

    }

    public function get(){

    }
 }