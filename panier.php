<?php 
require_once("vue/vue_panier.php");

if (isset($_POST['valider_panier']))
{
    if (isset($_SESSION['email'])){
    $unControleur->setTable('panier');
    $idpanier = $unControleur->idpanier();
    if ($idpanier[0] == NULL){
        $idpanier[0] = 1 ;
    }
    foreach($produits as $produit){   
        $montantHT = number_format($unControleur->total(),2,',');
        $montantTTC = number_format($unControleur->total()*1.2,2,',');
        $unControleur->insert_panier($idpanier[0],$_SESSION['iduser'], $produit->idProduit, $_SESSION['panier'][$produit->idProduit]);
    }
    unset($_SESSION['panier']);
    echo '<script language="Javascript">
    <!--
    document.location.replace("index.php?page=3");
    // -->
    </script>';
    }else {
        echo '<script language="Javascript">
        <!--
        document.location.replace("index.php?page=2");
        // -->
        </script>'; 
    }
}



?>

