<?php
class Dbh {

    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO(mysql:host=localhost;dbname=ooplogin',$email, $password);
        }
        catch(PDOException $e)
        {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
    }
}