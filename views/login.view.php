<div class="menu-aside">
    <div class="menu-aside-bar">
        <div class="close-menu-button">
            <div class="close-menu-bar" id="cl-bar-1"></div>
            <div class="close-menu-bar" id="cl-bar-2"></div>
        </div>
    </div>
    <div class="menu-aside-content">
        <p>
            <span class="h3">Universite</span><br>
            <span class="h1">Claude Bernard</span><br>
            <span class="h2">Lyon 1</span>
        </p>
        
        <div class="profile-pic">
            <a href="index.php?page=login.php">
                <img src="pics/icon-login_blue.png" style="margin: 22px 0 0 18px">
            </a>
        </div>
        
        <div class="menu-aside-options">
            <a href="<?= WSITE_URL; ?>"><li>Accueil</li></a>
            <hr>
            <a href=""><li>Enseignement</li></a>
            <a href=""><li>Plan</li></a>
            <a href=""><li>Restaurant</li></a>
            <a href=""><li>Contact</li></a>
            <a href=""><li>Partenariat</li></a>
            <hr>
            <!-- <a><li></li></a> -->
        </div>
    
    
    
    </div>
</div>

<div class="container" style="overflow: hidden">
    <div class="nav-bar">
        <div class="nav-menu-button">
            <div class="nav-button-bar" id=""></div>
            <div class="nav-button-bar" id=""></div>
            <div class="nav-button-bar" id=""></div>
        </div>

        <h2 style="left: 95px">Connexion</h2>

    </div>
    
    <div class="login-logo">
        <img src="pics/pic_login_ucbl.png">
    </div>
    
    <div class="login-container">
                <div class="help-login">
                    N° etudiant / N° professeur
                </div>
        <div class="login_content">
            <button class="btn-help">?</button>
            <form method="post" action="#">
                <div for="etu" class="l-etu"> <h3>Utilisateur</h3>
                    <input type="text" name="N_etudiant" id="etu">
                </div>
                <br>
                <div for="mdp" class="l-mdp"> <h3>Mot de passe</h3>
                    <input type="password" name="password" id="mdp">
                </div>
                    <input type="submit" name="btn-login" class="btn-login" value="connexion">
                
            </form>
        </div>
    </div>

</div>