<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
          <!-- =====BOX ICONS===== -->
          <title>Groupe Arkeos Local web site</title>
		<link rel="icon" type="image/png" href="images/logoHeader.png">
          <style >
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  position: absolute;
  left: 290px;
  top: 100px;
}

.container .title{
  font-size: 27px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: #5b4f95;
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
  font-size: 16px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

 
 form .button{
   height: 45px;
   margin: 35px 0
 }
.buttons input{
   height: 60px;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 19px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   font-weight:bold;
   transition: all 0.3s ease;
   background: #5b4f95;
 }

.buttons input:hover{
  background: 3c90ba;
   color: black;
   transition: 0.5s;
  }


    </style>
    </head>
    <body>
          <!--===== HEADER =====-->
          <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index3.html"  ><img src="images/logoA.png" width="130px"></a>
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index3.html#home" class="nav__link active">Acceille</a></li>
                        <li class="nav__item"><a href="index3.html#work333" class="nav__link"></b>+</b>Ajouter</a></li>
                        <li class="nav__item"><a href="index3.html#work333" class="nav__link">✓ Afficher</a></li>
                        <li class="nav__item"><a href="log/" class="nav__link">Gestion emploiyées</a></li>
                        <li class="nav__item"><a href="index.php">Deconnexion</a></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <!-- Formulaire  -->
<div class="container">
    <div class="title">Ajouter une marque</div>
    <div class="content">
      <form method="post" enctype='multipart/form-data' >
        <div class="user-details">
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" placeholder="Entrer le designation de la marque" name="des" required>
          </div> 
          <div class="input-box">
            <span class="details">Date de creation</span>
            <input type="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">vignette</span>
            <input type="file" name="vign" placeholder="la vignette de la marque" required>
          </div>
        
      
        </div>
        <div class="buttons">
          <input type="submit" name="ajout" value="Ajouter">
        </div>
      </form>
    </div>
  </div>
  <?php
 require('config.php');
 
  if(isset($_POST['ajout'])){
      $des=$_POST['des'];
    $date=$_POST['date'];
    $vig=basename($_FILES['vign']['name']) ;
    
    //$sql="INSERT into athletes VALUES(NULL,'$nom','$prenom','$sexe',$age,'$pays',$meilleurChrono,$chronoRealise,'$passWord')";
    $sql="INSERT INTO marque VALUES (NULL, '$des', '$date', '$vig')";
    $con->Query($sql) or die("erreur");
    echo " <script type='text/javascript'>
                alert('la marque a ete enregistré, id de marque est ". mysqli_insert_id($con)."')
                window.location = 'accueilPageAdmin';
                </script>";
  }
?>