<br><br>
<h3>STATISTIQUES DE L'ENTREPRISE</h3>
<br>

<table border="1" style="
    background: #fff;
    box-shadow: 0 10px 100px rgba(0, 0, 0, 0.5);
">
    <tr>
        <td></td>
        <td>ID Produits</td>
        <td>Nom produit</td> 
        <td>Quantite en stock</td> 
    </tr>

    <?php
        foreach($les_produits as $un_produit){
            echo"<form method='post'><tr>";
            echo"<td><img src='img/".$un_produit['nomProduit'].".jpeg'  style='width: 100px; height: 100px; margin-right: 10px;'></td>";
            echo"<td>".$un_produit['idProduit']."</td>";
            echo"<td>".$un_produit['nomProduit']."</td>";
            echo"<td>".$un_produit['quantite']."</td>";
            echo '<input type="hidden" name="idproduit" value="'.$un_produit['idProduit'].'">';
            echo"<td><input type='submit' name='delete_user' value='Supprimer'>
                        <input type='submit' name='edit_user' value='Modifier'></td>";
            echo "<tr></form>";
        }
    ?>

</table>
