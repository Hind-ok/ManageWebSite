<?php
  //connexion à la base de données
  require('config.php');
  //supression de l'empl + récupération de l'id dans le lien 
   if (isset($_GET['idMarqueloyee'])) {
       $id= $_GET['idMarqueloyee'];
       //requête de suppression
       $sql = "DELETE FROM utilisateur WHERE idUtilisateur='$id'";
       $con->query($sql) or die("erreur");
        echo "  <script type='text/javascript'>
                alert('supprimeé avec succes ')
                window.location = 'ListeT@Workers';
                </script>";}
  // supression marque
    if (isset($_GET['idMarque'])) {
       $id= $_GET['idMarque'];
        //requête de suppression
        $sql = "DELETE FROM marque WHERE idMarque='$id'";
        $con->query($sql) or die("erreur");
        echo "  <script type='text/javascript'>
                                  alert('supprimeé avec succes ')
                                  window.location = 'ListeT@Brands';
                                  </script>";}
  //  supression machine
  if (isset($_GET['idMachine'])) {
    $id= $_GET['idMachine'];
     //requête de suppression
     $sql = "DELETE FROM machine WHERE idMachine='$id'";
     $con->query($sql) or die("erreur");
     echo "  <script type='text/javascript'>
                               alert('supprimeé avec succes ')
                               window.location = 'ListeT@Machines';
                               </script>";}

                                  

?>