<?php
include('conectare.php');
if($conectare)
{
  if(isset($_POST['add'])) {
    $id=$_POST['id'];
      $nume=$_POST['nume'];
      $prenume=$_POST['prenume'];
      $email=$_POST['email'];
      $varsta=$_POST['varsta'];
      $clasa=$_POST['clasa'];
      $query="INSERT INTO participanti (id,nume,prenume,email,varsta,clasa)
      VALUES ('$id','$nume', '$prenume', '$email', '$varsta', '$clasa')";
      $result=mysqli_query($conectare,$query);
      header("Location:participanti.html");
  }
  else {
  echo "Datele nu au fost adaugate";
}
if(isset($_POST['modifica'])) {
  $id=$_POST['id'];
  $nume=$_POST['nume'];
  $prenume=$_POST['prenume'];
  $email=$_POST['email'];
  $varsta=$_POST['varsta'];
  $clasa=$_POST['clasa'];
 $query="UPDATE participanti SET nume='$nume',prenume='$prenume',email='$email',varsta='$varsta',clasa='$clasa' WHERE id='$id'";
  $result=mysqli_query($conectare,$query);
  header("Location:participanti.html");
}
else {
  echo "<script>alert('Nu s-au facut modificari!');</script>";
}
if(isset($_POST['sterge'])){
  $id=$_POST['id'];
  $nume=$_POST['nume'];
  $prenume=$_POST['prenume'];
  $email=$_POST['email'];
  $varsta=$_POST['varsta'];
  $clasa=$_POST['clasa'];
 $query="DELETE FROM participanti  WHERE id='$id'";
  $result=mysqli_query($conectare,$query);
  header("Location:participanti.html");
}
else {
  echo "<script>alert('Nu s-a putut sterge!');</script>";
}
}
else {
    echo "Conectare esuata";
}

?>