<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cbd_shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav></nav>
    <h1>Nos Produits</h1>

    <section>

        <?php 
    
        // Je commence par la connexion avec la BDD
        $connexion = new mysqli('localhost:3306', 'root', '', 'cbd');
    
        //On vérifie si la connexion se fait sinon erreur et on stoppe l'éxecution du PHP
        if ($connexion->errno) {
            echo "Souci de connexion : " . $connexion->connect_error;
            exit();
        }
    
        // Définir la requete SQL pour lister nos produits
        $req = 'SELECT * FROM `cbd_shop`';
    
        // Éxecuter cette requete sql 
        $products = $connexion->query($req);
    
        // On parcourt le tableau en affichant chaque produit
        foreach($products as $product) :
        ?>
        

        <div class=first>
            <div class=img1 >
                <img src="./CBD SHOP/1c.png" alt="">
                <h3><?= $product['nom'] ?></h3>
                <h3><?= $product['prix']  ?></h3>
            </div>
                
            <div class=img2>
                <img src="./CBD SHOP/2c.jpg" alt="">
                <h3><?= $product['nom'] ?></h3>
                <h3><?= $product['prix']  ?></h3>
            </div>
        </div>
            
    
        <div class=second> 
            <div class="img3">
                <img src="./CBD SHOP/1h.jpg" alt="">
                <h3><?= $product['nom'] ?></h3>
                <h3><?= $product['prix']  ?></h3>
            </div>
            <div class="img4">
                <img src="./CBD SHOP/2h.png" alt="">
                <h3><?= $product['nom'] ?></h3>
                <h3><?= $product['prix']  ?></h3>
            </div>
            <div class= "img5">
                <img src="./CBD SHOP/1P.png" alt="">
                <h3><?= $product['nom'] ?></h3>
                <h3><?= $product['prix']  ?></h3>
            </div>
        </div>
    </section>

    <div class=box>
            <div class="img6">
                <img src="./CBD SHOP/2P.png" alt="">
                <h3><?= $product['nom'] ?></h3>
                <h3><?= $product['prix']  ?></h3>
            </div>
    </div>
        
    <?php endforeach ?>
    
    <a href="signup.php">Inscrivez-vous !</a>

</body>
</html>