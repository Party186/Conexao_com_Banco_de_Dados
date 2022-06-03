<?php 
require "config.php";
include TEMPLATE_PATH."/header.php";
require TEMPLATE_PATH."/nav.php";
?>
<h2>DISCIPLINAS</h2>
<?php
$connect = mysqli_connect("localhost:33", "root", "");
$db = mysqli_select_db($connect, "db_turma63b");
$sql = mysqli_query($connect, "SELECT * FROM disciplinas");
$databases = mysqli_query($connect, "SHOW DATABASES");
while($row = mysqli_fetch_array($sql)) { 
  echo "Disciplina:".$row["disciplina"]."<br>"; 
  echo "Professor:".$row["professor"]."<br>";
  echo "Informacoes:".$row["informacoes"]."<br>";
  echo "Criada em:".$row["criada"]."<br>"; 
  echo "-----------------------------------------------"."<br>";
};
while($data = mysqli_fetch_array($databases)) {
  echo "Databases:".$data["Database"]."<br>";
}
?>