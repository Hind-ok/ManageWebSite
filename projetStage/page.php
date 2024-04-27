<?php 
     session_start();
	 require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
          <link rel="stylesheet" href="assets/css/style.scss">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        
		<title>Groupe Arkeos Local web site</title>
		<link rel="icon" type="image/png" href="images/logoHeader.png">
       <style>

     	.row.gtr-200 span{
			
			display: inline-block;
		}
			.row.gtr-200 > * {
				padding: 90px 0 0 40px;
			}			
		#main-wrapper{
				margin:100px 150px;
			}
		#main-wrapper .container .row {
		background-color: #c8e8f8 ;
		border-radius: 10px;
		width: 940px;
		box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.05);
		padding: 80px;
		margin-left:10px ;
		margin-top: 10px;
		margin-bottom:10px ;

	}
	#a1 , #a2 , #a3{   
     border-radius: 8px;
     box-shadow: 2px 2px 2px 1px rgb(131, 131, 219) ;
     border: 1px solid gray;
	 padding:20px 40px 20px 40px;
     font-size: 20px;
     margin-top:10px;
     margin-left:10px;
  
}
#a1:hover , #a2:hover, #a3:hover{
  box-shadow: 2px 2px 2px 1px rgb(125, 178, 228) ;
  border: 1px solid gray;
  background-color: #61a2c2;
  color: #1a0d63;
}
           .home__img img{
             border-radius: .3rem;
             box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);
             transition: 1s;
           }
           .home__img{
             width:600px;
             position: absolute;
             top: 190px;
           }
           .home__img img:hover{
              transform: scale(1.1);
           }

 .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}
.row.gtr-200 {
			margin-top: -80px;
			margin-left: -80px;
		}
.box-container .box{
    flex:1 1 30rem;
    text-align: center;
    background:#fff;
    border-radius: 1rem;
    width: 400px;
    height: 160px;
    box-shadow:0 .4rem 1rem rgba(0,0,0,.1);
}

.box-container .box h3{
    color:#444;
    font-size: 20px;
    padding-top: 1rem;
}
 .box-container .box a{
   color: var(--first-color);
    font-size: 1.4rem;
    padding-top: .5rem;
}
       </style> 
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index.html"  ><img src="images/logoA.png" width="130px"></a>
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index1.html#home" class="nav__link active">Acceille</a></li>
                        <li class="nav__item"><a href="index1.html#work333" class="nav__link">Produits</a></li>
                        <li class="nav__item"><a href="index1.html" class="nav__link">About us</a></li>
                        <li class="nav__item"><a href="index1.html#contact" class="nav__link">Contact us</a></li>
                        <li class="nav__item"><a href="index.php">Deconnexion</a></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        <main class="l-main">
          
			<!-- container 1 -->
				<?php 
				 if (isset($_GET['id'])){
					$_SESSION['idCategory']=$_GET['id'];
				 ?>
            
			<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<!-- extraire les marques -->
							<?php 
							$result=$con->query("SELECT * FROM marque");
							while($tabMarque=$result->fetch_assoc()){
				            ?>
						            <span>
										<a href="page.php?idMarque=<?= $tabMarque['idMarque']?>"><img src="images/<?= $tabMarque['logoImage'] ?>" width="120px"></a>						
											</span>
							<?php 
							}
							?>
					    </div>
					</div>
			</div>
			<?php 
							}
							?>
			 <!-- Fin container 1 -->
			 <!-- container 2 -->
			 <?php 
				 if (isset($_GET['idMarque'])){
					$_SESSION['idMarque']=$_GET['idMarque'];
				 ?>
            
			<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<!-- Classement par MFP A4 OU MFP A3 -->							
							<form method="post"style="margin-left:180px ; margin-top:-50px">
							 <a href="page.php?idDetail1=A3">  <input id="a1" class="" type="button" value="MFP A3" name="port1"></a>
							 <a href="page.php?idDetail1=A4">   <input id="a2" class="" type="button" value="MFP A4" name="port2"></a>
                             </form>
							</div>
					</div>
			</div>
			<?php 
							}
							?>
							
			 <!-- Fin container 2 -->
			  <!-- container 3 -->
			  <?php 
				 if (isset($_GET['idDetail1'])){
					$_SESSION['idDetail1']=$_GET['idDetail1'];
				 ?>
            
			<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<!-- Classement par avec couleur OU avec b et n -->							
							<form method="post"style="margin-left:180px ; margin-top:-50px">
							 <a href="page.php?idDetail2=Couleur">  <input id="a1" class="" type="button" value="Couleur" name="port1"></a>
							 <a href="page.php?idDetail2=Noir et blanc">   <input id="a2" class="" type="button" value="Noir et Blanc" name="port2"></a>
                             </form>
							</div>
					</div>
			</div>
			<?php 
							}
							?>
							
			 <!-- Fin container 3 -->
			  <!-- container 4 -->
			  <?php 
				 if (isset($_GET['idDetail2'])){
					$_SESSION['idDetail2']=$_GET['idDetail2'];
				 ?>
            
			<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<!-- Classement par mS OU Mp ou F  -->							
							<form method="post"style="margin-left:180px ; margin-top:-50px">
							 <a href="page.php?idDetail3=Manuel service">  <input id="a1" class="" type="button" value="Manuel Service" name="port1" style="margin-left:-130px"></a>
							 <a href="page.php?idDetail3=Manuel parts">   <input id="a2" class="" type="button" value="Manuel Parts" name="port2"></a>
							 <a href="page.php?idDetail3=Firmware">   <input id="a3" class="" type="button" value="Firmware" name="port3"></a>
                             </form>
							</div>
					</div>
			</div>
			<?php 
							}
							?>
							
			 <!-- Fin container 4 -->
			 <!-- container 5 -->
			 <?php 
				 if (isset($_GET['idDetail3'])){
					$_SESSION['idDetail3']=$_GET['idDetail3'];
					// echo $_SESSION['idCategory'];
					// echo $_SESSION['idMarque'];
					// echo $_SESSION['idDetail1'];
					// echo $_SESSION['idDetail2'];
					// echo $_SESSION['idDetail3'];?>

  

  <div class="container" style="margin:150px 150px;">
  <table id="bootstrap-table" class="table table-hover">
	  <tbody>
					 <?php
			$result=$con->query("SELECT vignette,designation,dateCreation,designationMar ,lienDeTelechargement
            FROM `machine` NATURAL JOIN marque
            WHERE idMarque={$_SESSION['idMarque']} AND formatOffiGraph={$_SESSION['idCategory']} AND detai1='{$_SESSION['idDetail1']}'
			 AND detai2='{$_SESSION['idDetail2']}' AND detai3='{$_SESSION['idDetail3']}'")	;
			 if($result->num_rows<=0)
			 echo '<h3 style=" color:orange ;margin:200px 200px;">aucun machine trovable dans cette conditions</h2>';
			 else{
			while ($tab=$result->fetch_assoc()) {
	
				 ?>
			<tr style="display: table-row; border-bottom:1px solid grey; ">
            <td style="text-align: center; ;padding-right:30px;"> <img src='images/<?php echo $tab["vignette"]; ?>' width="180px"> </td>
            <td style="text-align: center; vertical-align:middle ;padding:10px 10px;padding-right:30px;"> <?php echo $tab["designation"]; ?> </td>
            <td style="text-align: center; vertical-align:middl;padding:10px 10px;padding-right:30px;"> <?php echo $tab["dateCreation"]; ?> </td>
            <td style="text-align: center; vertical-align:middle;padding:10px 10px;padding-right:30px;"> <?php echo $tab["designationMar"]; ?> </td>
			<td style="text-align: center; vertical-align:middle;padding:10px 10px;">
			<a class="btn btn-primary btn-sm" href="assets/doc/<?php echo $tab["lienDeTelechargement"]; ?>" style="text-decoration:none ;vertical-align:middle" role="button">Télécharger</a>
			
			</td>
        </tr>
			<?php 
							}}}
							?>
								</tbody>
    </table>
</div>

    <script type="text/javascript">
    $(document).ready( function () {
       $('#bootstrap-table').bdt({
		    showSearchForm: 1,
            showEntriesPerPageField: 1
	   });
    });
    </script>
<!-- Scripts -->
							
			 <!-- Fin container 5 -->
			 
							
	   <!--===== FOOTER =====-->
	   <footer class="footer">
            <p class="footer__title">Groupe ARKEOS</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
           
            <p class="footer__copy">290 Bd Mohammed V Casablanca 20250 <br>
                                  +212 522 444 270 <br>
                                  +212 522 444 272</p>
								  <p>&#169; 2023 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
</body>
</html>