<?php

  class Db_Connect
  {

    function __construct()
    {
      $connection=mysql_connect('localhost','xgarbage_maddy','ms_2010');
      mysql_select_db('xgarbage_lab',$connection);
      if(!$connection)
        {
            die("Cannot connect to the database");
        }
            return $connection;
    }

    public function close()
    {
        mysql_close();
    }
  }
  
 
?>