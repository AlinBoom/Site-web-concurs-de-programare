<?php
include('conectare.php');
if($conectare)
{
  if(isset($_POST['adauga'])) {
    $id=$_POST['id'];
      $nume=$_POST['nume'];
      $continut=$_POST['continut'];
      $data=$_POST['dates'];
      $query="INSERT INTO anunturi(id,nume,continut,dates) VALUES('$id','$nume','$continut','$data')";
      $result=mysqli_query($conectare,$query);
      header("Location:noutati.html");
    }
    else {
      echo "Datele nu au fost adaugate";
    }
    if(isset($_POST['modifica'])) {
      $id=$_POST['id'];
      $nume=$_POST['nume'];
      $continut=$_POST['continut'];
      $data=$_POST['dates'];
     $query="UPDATE anunturi SET nume='$nume',continut='$continut' WHERE id='$id'";
      $result=mysqli_query($conectare,$query);
      header("Location:noutati.html");
    }
    else {
      echo "<script>alert('Nu s-au facut modificari!');</script>";
    }
    if(isset($_POST['sterge'])){
      $id=$_POST['id'];
      $nume=$_POST['nume'];
      $continut=$_POST['continut'];
      $data=$_POST['dates'];
     $query="DELETE FROM anunturi  WHERE id='$id'";
      $result=mysqli_query($conectare,$query);
      header("Location:noutati.html");
    }
    else {
      echo "<script>alert('Nu s-a putut sterge!');</script>";
    }
    }
    else {
    echo "Conectare esuata";
    }

      ?>