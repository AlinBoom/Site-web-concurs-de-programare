<?php
include('conectare.php');
if($conectare)
{
  if(isset($_POST['add'])) {
    $id=$_POST['id'];
      $nume=$_POST['nume'];
      $prenume=$_POST['prenume'];
      $nota=$_POST['nota'];
      $query="INSERT INTO rezultate (id,nume,prenume,nota)
      VALUES ('$id','$nume', '$prenume', '$nota')";
      $result=mysqli_query($conectare,$query);
      header("Location:rezultate.html");
  }
  else {
  echo "Datele nu au fost adaugate";
}
if(isset($_POST['modifica'])) {
  $id=$_POST['id'];
  $nume=$_POST['nume'];
  $prenume=$_POST['prenume'];
  $nota=$_POST['nota'];
 $query="UPDATE rezultate SET nume='$nume',prenume='$prenume',nota='$nota' WHERE id='$id'";
  $result=mysqli_query($conectare,$query);
  header("Location:rezultate.html");
}
else {
  echo "<script>alert('Nu s-au facut modificari!');</script>";
}
if(isset($_POST['sterge'])){
  $id=$_POST['id'];
  $nume=$_POST['nume'];
  $prenume=$_POST['prenume'];
  $nota=$_POST['nota'];
 $query="DELETE FROM rezultate  WHERE id='$id'";
  $result=mysqli_query($conectare,$query);
  header("Location:rezultate.html");
}
else {
  echo "<script>alert('Nu s-a putut sterge!');</script>";
}
}
else {
    echo "Conectare esuata";
}

?>