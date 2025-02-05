<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_styles/style.css">
    <link rel="stylesheet" href="../_styles/apropos.css">
    <link rel="stylesheet" href="../_styles/generic.css">
    <title>A propos</title>
</head>
<body>
    <header>
        <div class="headerbar flex flexrow">
            <div class="headerImg">
                <a href="../index.html"><img src="../_imgs/logo.png" alt=""></a>
            </div>
            <div class="headerNavBar">
                <nav>
                    <a href="#">Accueil</a>
                    <a href="#">À propos</a>
                    <a href="#">Nos Gîtes</a>
                    <a href="contact.html">Nous Contacter</a>
                </nav>
            </div>
            <div class="BtnConnexion">
                <a href="connexion.html"><button>Connexion</button></a>
            </div>
        </div>
        <div class="affiche_burger">
            <div class="burger flexCol spaceCenter">
                <label class="hamburger-menu">
                    <input type="checkbox">
                </label>
                <aside class="sidebar">
                    <img src="../_imgs/logo_blanc.png" alt="logo">

                    <div class="flexCol">

                        <li class="a" id="menu_links">Accueil</a></li>
                        <li class="a" id="menu_links">A propos</a></li>
                        <li class="a" id="menu_links">Nos gîtes</a></li>
                        <li class="a" id="menu_links">Contact</a></li>
                        <li class="a" id="menu_links">Connexion</a></li>
                        
                    </div>
                </aside>
            </div>
        </div>
    </header>

    <section class="aPropos flex flexCol spaceCenter textCenter">
        <h1>À PROPOS</h1>
        <div class="Desc flex spaceCenter">
            <p>Nous avons commencé notre aventure en proposant une gamme exceptionnelle de gîtes chaleureux et conviviale dans le département d'Eure-et-loir. 
                Nous souhaitions offrir l'endroit parfait pour des vacances en famille ou entre amis.</p>
        </div>

        <div class="DescVideo">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1oHHrM9jL4Q?si=9jLQUaPUgdhCIqkv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

    </section>

    <section class="Pictures flex spaceCenter">
        <div class="pictureLogo">
            <img src="../_imgs/logo.png" alt="">
        </div>
    </section>

    <footer>
        <div class="allFooter">
            <div class="reserver flex flexrow">
                <p>&copy;2025 Gites en Folie, Tous droits réservés</p>
            </div>
            <div class="infoPolitique flex flexrow">
                <p>Politique de confidentialité</p>
                <p>Conditions d'utilisation</p>
                <p>Paramètres des cookies</p>
            </div>
        </div>
    </footer>
</body>
</html>