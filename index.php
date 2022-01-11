<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input type="text" name="name" id="name"><br><br>
        Reg No: <input type="text" name="regnum" id="regnum"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    class StudentParent{
        public $stdName;
        public $stdRegNum;

        public function __construct($Name, $regnum){
               $this->stdName = $Name;
               $this->stdRegNum = $regnum;
        }
    }


    class StudentChild extends StudentParent{
        public function display(){
            echo "</br>";
            echo $this->stdName;
            echo "</br>";
            echo $this->stdRegNum;
        }
    }

    if(isset($_POST["submit"])){
        $Name = $_POST["name"];
        $regnum = $_POST["regnum"];

        $obj = new StudentChild($Name,$regnum);
        $obj->display();
    }

    ?>

</body>
</html>