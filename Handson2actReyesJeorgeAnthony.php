<?php 

$table = array (
    "header"=> array(
        "StudentId",
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "Yearlevel"
    ),
    "body"=>array(
        array(
            "Firstname"=>"Jeorge Anthony",
            "Middlename"=>"Jayme",
            "Lastname"=> "Reyes",
            "Section"=>"3a",
            "Course0"=>"BSIT",
            "Yearlevel"=>"3rdyear"
        ),
        array(
            "Firstname"=>"Andrei",
            "Middlename"=>"Middlename",
            "Lastname"=> "Martin",
            "Section"=> "3A",
            "Course0"=> "BSIT",
            "Yearlevel" =>"3rdYear"

         ),
         array(

            "Firstname"=>"John Oswald",
            "Middlename"=>"Middlename",
            "Lastname"=> "Yap",
            "Section"=> "Section",
            "Course0"=> "Course",
            "Yearlevel" =>"Yearlevel" 
         ),
            array(
                "Firstname"=>"Firstname",
                "Middlename"=>"Middlename",
                "Lastname"=> "Lastname",
                "Section"=> "Section",
                "Course0"=> "Course",
                "Yearlevel" =>"Yearlevel" )
        ),
         
            );
?>
 <table border="1">
 <thead>
 <?php 
  for($i = 0; $i <= count ($table["header"] ) -1; $i++) {
    echo "<th>" .$table["header"][$i]."</th>";
  }
  ?>
  </thead>
  <tbody>
  <?php 

     for($i = 0; $i <= count($table["body"]) - 1; $i++) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$table["body"][$i]["Firstname"]."</td>";
        echo "<td>".$table["body"][$i]["Middlename"]."</td>";
        echo "<td>".$table["body"][$i]["Lastname"]."</td>";
        echo "<td>".$table["body"][$i]["Section"]."</td>";
        echo "<td>".$table["body"][$i]["Course0"]."</td>";
        echo "<td>".$table["body"][$i]["Yearlevel"]."</td>";
        echo "</tr>";

     }

     ?>
     </tbody>
    </table>
    

  

    


