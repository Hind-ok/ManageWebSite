<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
          <!-- =====BOX ICONS===== -->
          <title>Groupe Arkeos Local web site</title>
		<link rel="icon" type="image/png" href="images/logoHeader.png">
       <style>
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

     <style>

table{
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
 width: 90%; 
 border-collapse: collapse;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;
}
td , th{
 padding: 15px 20px;
 text-align: center;
 text-transform: capitalize;
}
th{
 background-color: var(--first-color);
 color: white;
 font-family: 'Open Sans',Sans-serif;
 font-weight: bold;
font-size: 18px;
}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
 font-size: 15px;
}
tr:nth-child(even){
 background-color: white;
}
  .aa{
font-size: 25px;
 border-radius: 4px ;
 margin-left:20px ;
  box-shadow: 2px 2px 1px white;
  position: relative;
  left: 560px;
  top: 590px;
  text-decoration: none;
  color: var(--first-color);
  /*background-color: blue;*/
  transition: 0.5s;
}
.aa:hover{
color: black;
  /*background-color: skyblue;*/
  }


     </style>
    </head>
    <body>
        <!--===== HEADER =====-->
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

        <!-- tab affichage -->
                <table>
                        <tr>
                            <th class="column1">vignette</th>
                            <th class="column2">Date de Creation</th>
                            <th class="column3">designation</th>
                            <th class="column5">Supprimer</th>
                            <th class="column6">Modifier</th>
                        </tr>
                        <?php
                          require('config.php');
        //nombre d'enregistrement a afficher par page :
        $nombreMarqueParPage=6;
        //nombre de page dans cette categorie :
        $sql="SELECT * FROM `marque`";
        $resultat= $con ->Query($sql) or die("error!!!") ;
        $totalMarques = $resultat-> num_rows;
        // echo $totalMarques;
            $nombrePage=ceil($totalMarques/$nombreMarqueParPage);
        //Afficher la page courant :
        if (!isset($_GET['page'])) 
            $numPage=1;
        else 
        $numPage=$_GET['page'];
        $debut=($numPage-1)*$nombreMarqueParPage;
        $sql2="SELECT * FROM `marque`  LIMIT $debut, 6";
        $resultat2 = $con ->Query($sql2) ;

        while ($tabMarques= $resultat2->fetch_assoc()) {
            //Affichage
?>
            <tr>
                            <td class='column1'><img src='images/<?=$tabMarques['logoImage'] ?>' width="70px" ></td>
            <td class='column2'><?=$tabMarques['dateDeCreation'] ?></td>
            <td class='column3'><?=$tabMarques['designationMar'] ?></td>
            <!-- <td class='column4'></td> -->
            <td class='column5'><a href="ControleOfDELET?idMarque=<?=$tabMarques['idMarque']?>"><center><img src='images/trash.png' width='20' height='20'></center></a></td>
            <td class='column6'><a href="modifierMarque.php?idMarque=<?=$tabMarques['idMarque']?>"><center><img src='images/pen.png' width='20' height='20'></center></a></td>
                           </tr>
                           <?php   
}
//Affichage des liens vers la page :
        for ($i=1; $i <= $nombrePage ; $i++) { 
             ?>

 <a class="aa" href="ListeT@Brands?page=<?= $i ?>"><?= ".$i." ?></a>

        <?php   
        } 
    ?>
   
  