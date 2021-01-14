<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
</head>
<body>
    <header>
            <div>
                <a href="" title="Mon site">MonSite.com</a>
            </div>
        <nav>
<?php
if(internauteEstConnecteEtEstAdmin())
{
echo '<a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>';
echo '<a href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>';
echo '<a href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a>';
}
if(internauteEstConnecte())
{
echo '<a href="' . RACINE_SITE . 'profil.php">Voir votre profil</a>';
echo '<a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a>';
echo '<a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>';
echo '<a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a>';
}
else
{
echo '<a href="' . RACINE_SITE . 'inscription.php">Inscription</a>';
echo '<a href="' . RACINE_SITE . 'connexion.php">Connexion</a>';
echo '<a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a>';
echo '<a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>';
}
?>
        </nav>
    </header>
