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
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}

.select:hover{
  border-color: #9b59b6;
}
 form .cat-details .cat-title{
  font-size: 19px;
  font-weight: 500;
 }
 form .format-details .format-title{
  font-size: 19px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 10px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
   margin-right: 160px;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 #dot-3:checked ~ .category label .tree,
 #dot-4:checked ~ .category label .foor{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
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
 .cat , .format{
    font-size: 15px;
 }
.buttons input:hover{
  background: 3c90ba;
   color: black;
   transition: 0.5s;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
.select{
  height: 45px;
  width: 100%;
  background:white;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
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
    <div class="title">Ajouter une machine</div>
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
          <div class="input-box">
            <span class="details">Documentation</span>
            <input type="file" placeholder="lien de document" name="doc" required>
          </div> 
          <!-- debut -->
        <div class="input-box">
       <span class="details">Marque</span>
          <select name="marque"  required class="select">
          <option selected>Ouvrir pour choiser</option>
        <!-- traitement php pour afficher les filiere qui sont dans la base de donnee -->
            <?php
              
                 require("config.php");
                 $sql="SELECT * FROM `marque`";
                 $resultat=$con-> query($sql);
                 if($resultat){
                  while($tabFiliere=$resultat->fetch_assoc()){    
       
               ?>
                  <option value="<?= $tabFiliere['idMarque'] ?>"><?= $tabFiliere['designationMar'] ?></option>
                      <?php }   }  ?></select>   </div>
      <!-- filire fin -->
 
           <!-- debut -->
           <div class="input-box">
       <span class="details">Detail1</span>
          <select name="det1"  required class="select">
          <option selected>Ouvrir pour choiser</option>
        <!-- traitement php pour afficher les filiere qui sont dans la base de donnee -->
                  <option >A3</option>
                  <option >A4</option>
                      </select>   </div>
      <!-- filire fin -->
      <!-- debut -->
      <div class="input-box">
       <span class="details">Detail2</span>
          <select name="det2"  required class="select">
          <option selected>Ouvrir pour choiser</option>
        <!-- traitement php pour afficher les filiere qui sont dans la base de donnee -->
                  <option >Couleur</option>
                  <option >Noir et blanc</option>
                      </select>   </div>
      <!-- filire fin --><!-- debut -->
           <div class="input-box">
       <span class="details">Detail3</span>
          <select name="det3"  required class="select">
          <option selected>Ouvrir pour choiser</option>
        <!-- traitement php pour afficher les filiere qui sont dans la base de donnee -->
                  <option >Manuel service</option>
                  <option >Manuel parts</option>
                  <option >Firmware</option>
                      </select>   </div>
      <!-- filire fin -->
            <!-- cat -->
            <div class="cat-details">
          <input type="radio" name="cat" value="1" id="dot-1">
          <input type="radio" name="cat" value="2" id="dot-2">
          <span class="cat-title">Format</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="cat">Petit</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="cat">Grand</span>
          </label>
          </div>
        </div>
         
        <!-- format -->
        <div class="format-details">
          <input type="radio" name="format" value="1" id="dot-3">
          <input type="radio" name="format" value="2" id="dot-4">
          <span class="format-title">la machine est:</span>
          <div class="category">
            <label for="dot-3">
            <span class="dot tree"></span>
            <span class="format">office</span>
          </label>
          <label for="dot-4">
            <span class="dot foor"></span>
            <span class="format">Graphique</span>
          </label>
          </div>
        </div>
          <!-- <div class="input-box"> -->
            <!-- <span class="details">description</span> -->
            <!-- <textarea name='des' row="20px" cols="20px"></textarea> -->
            <!-- <input type="text" name="des" placeholder="" required> -->

          <!-- </div> -->
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
    //   1 office 2 graphique
      $format=$_POST['format'];
    //   1 petit 2 grand
      $catPG=$_POST['cat'];
      $marque=$_POST['marque'];
      // $doc=$_POST['doc'];
      $det1=$_POST['det1'];
      $det2=$_POST['det2'];
      $det3=$_POST['det3'];
      $date=$_POST['date'];
      $vig=basename($_FILES['vign']['name']) ;
      $doc=basename($_FILES['doc']['name']) ;
      // echo $marque;
    
    $sql="INSERT INTO machine VALUES (NULL, '$des', '$date','$marque','$format','$vig','$doc','$catPG','$det1','$det2','$det3')";
      // $sql=INSERT INTO machine VALUES (NULL, '$des', '$date', '$marque', '$format', '$vig', '$doc', '$catPG', '$det1', '$det2', '$det3'); 
    $con->Query($sql) or die("erreur");
    echo " <script type='text/javascript'>
                alert('la machine a ete enregistré, id de machine est ". mysqli_insert_id($con)."')
                window.location = 'accueilPageAdmin';
                </script>";
  }
?>
</body>
</html>
