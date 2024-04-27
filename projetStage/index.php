<?php
     session_start();
 ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="images/logoHeader.png" >
  <script src="https://kit.fontawesome.com/a076d05399.js"> </script>
  <script src="script.js" defer></script>
  <title>Groupe Arkeos Local web site</title>
</head>

<body>
  <div class="container">
    <div class="logo">
    <a href="#"><img src="images/logof.png " width="120px" ></a>
    </div>

    <div class="tab-body" data-id="connexion">
      <form method="post">
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail" name="login" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input placeholder="Mot de Passe" type="password" class="input" name="pw" required>
        </div>
        <a href="#" class="link">Mot de passe oublié ?</a>
        <input id="plz" class="btn" type="submit" value="Connexion" name="con">
      </form>
    </div>
<!-- form  inscription -->
    <div class="tab-body" data-id="inscription">
      <form method='post'>
      <div class="row">
          <i class="far fa-user"></i>
          <input type="text" class="input" placeholder="Nom" name="nom" required>
        </div>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="text" class="input" placeholder="Prenom" name="prenom" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="tel" class="input" placeholder="numéro de telephone" name="tel" required>
        </div>
        <div class="row">
          <i class="far fa-user"></i>
          <input type="email" class="input" placeholder="Adresse Mail" name="mail" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Mot de Passe" name="pw" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" class="input" placeholder="Confirmer Mot de Passe" name="pw1" required>
        </div>
        <!-- <div class="row">
          <i class="fas fa-lock"></i>
            <select class="win" name="fonction">
            <option  value="choix votre fonction" >choix votre fonction</option> 
            <option  value="1">directeur</option> 
            <option  value="2">technique</option> 
            </select>   
        </div> -->
        
        <input class="btn" type="submit" value="Inscription" name="inscription">
      </form>
    </div>

    <div class="tab-footer">
      <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
      <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
    </div>
  </div>
 
</body>

</html>
<?php
     include("config.php");
     if(isset($_POST['con'])){
        // connexion 
        $login=$_POST['login'];
        $pw=$_POST['pw'];
        $sql="SELECT * FROM tbl_users WHERE email='$login' AND password='$pw' ";
        $result=$con->query($sql) or die("erreur");
        $element=$result->fetch_assoc();
        if($result->num_rows ==1){
          if($element['isActive']==0) {
               if($element['roleid']==1){
               $_SESSION['idUser']=$element['id'];
               header('Location:index3.html');
          // echo $_SESSION['idUser'];
                                      }
               if($element['roleid']==3)
               header('Location:index1.html');
             
	       
                  else {
                  echo '<h3 style=" color:red">email ou mot de passe incorrect veuillez réessayer</h3>';}  
 ?>
 <!-- <div id="notification"> email ou mot de passe incorrect veuillez réessayer </div> -->
            <!-- script -->
    <!-- <script>
        const input=document.querySelector('#plz');
        const notification=document.querySelector('#notification');

        input.addEventListener('click', () => {notification.classList.add('show');
        setTimeout(() =>{ notification.classList.remove('show');},90000);});
    </script>  -->
<?php
}
  else echo '<h2 style=" color:orange">compte desactiver</h2>'; 
         

 } }
 
//  insertion sur bd
if(isset($_POST['inscription'])){
  // connexion 
  $nom=$_POST['nom'];
  // echo $nom;
  $prenom=$_POST['prenom'];
  // echo $prenom;

  $email=$_POST['mail'];
  // echo $email;

  $mobile=$_POST['tel'];
  // echo $mobile;

  if ($_POST['pw']!=$_POST['pw1'])  echo '<h3 style=" color:orangered">Vérifier le mot de passe</h2>';
 else{
  $pw=$_POST['pw'];
  // echo $pw;

  $sql2="SELECT * FROM tbl_users WHERE email='$email' AND password='$pw'";
  $result2=$con->query($sql2) or die("erreur 1");
  if($result2->num_rows <=0){
     
   $sql3="INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) 
   VALUES (NULL, '$nom', '$prenom', '$email', '$pw', '$mobile', '3', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
   $result3=$con->query($sql3) or die("erreur 2");
  //  header('Location:accueil');
  echo '<h2 style=" color:green">vous pouver vous connécter aprés avoir été accepté par admin</h2>';
}
   else  echo '<h2 style=" color:orange">Exixte déja</h2>';
  
  } 
 }
 ?>
