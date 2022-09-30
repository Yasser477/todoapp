<?php
include "connection.php";
class tasks {

    //properties
    public $taskname;
    public $ID;


    function __construct($taskname,$ID){
        $this->taskname=$taskname;
        $this->ID=$ID;
    }

    //method
    function set_name($taskname){

    $this->taskname= $taskname;
    }

    function get_name(){
        return $this->taskname;
    }

    function insert(){

        $todo =$GLOBALS["conn"]->query("INSERT INTO tasks(tasksT) VALUES ('$this->taskname')");

    }

    function getdata(){
        $todo = $GLOBALS["conn"]->query("SELECT *  FROM tasks");
        $rows=[];
        if($todo ->num_rows > 0){
            while($row =$todo->fetch_assoc()){
                $rows[]=$row;
            }
            return $rows;
        }
    }

    function delete(){
        $delete =$GLOBALS["conn"]->querry("DELETE FROM `tasks` WHERE `ID`=$this->ID");
    }

}

    if(isset($_POST["add"])){
    $todo = new tasks($_POST["task"],0);
    $todo->insert();
    }


    if(isset($_POST["delete"])){
        $todo = new tasks($_POST["task"],$_POST["delete"]);
        $todo->insert();
        }



?>