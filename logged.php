<div class="menu-aside" style="height:127.7vh">
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
        
        <div class="profile-pic" style="overflow: hidden">
            <a href="index.php?page=logged.php">
                <img src="pics/Bernard_Claude.jpg" style="height: 120px">
            </a>
        </div>
        <div class="profile-info">
            <span><?= NOM.' '.PRENOM ?></span><br>
            <span><?= USER ?></span>
        </div>
        
        <div class="menu-aside-options">
            <a href="index.php?page=logged.php"><li>Accueil</li></a>
            <hr>
            <a href=""><li>Emploi du temps</li></a>
            <a href="index.php?page=notes.php"><li>Notes</li></a>
            <a href=""><li>Absence</li></a>
            <a href=""><li>Tutorat</li></a>
            <a href=""><li>Messagerie</li></a>
            <hr>
            <a href=""><li>Annonces</li></a>
            <a href=""><li>Stage / Emploi</li></a>
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

<div class="container">
    <div class="nav-bar" >
        <div class="nav-menu-button">
            <div class="nav-button-bar" id=""></div>
            <div class="nav-button-bar" id=""></div>
            <div class="nav-button-bar" id=""></div>
        </div>

        <h2>Accueil</h2>

        <a href="index.php?page=logout.php">
            <div class="nav-logout-button"></div>
        </a>
    </div>

    <div class="actu-flash">
        <div class="actu-flash-info">
            <div class="actu-flash-title">
                <span>Lyon 1</span><br>
                <h3>T'accompagne</h3>
            </div>
            
            <p>Occaecat multos excepteur vidisse.<br> O quorum cernantur praesentibus do aute ut 
            singulis ut doctrina magna amet eu amet, non si anim varias esse. Ullamco cillum</p>
        </div>
    </div>
    
    <div class="actu-container">
        <!-- Actu 1 -->
        <div class="actu">
            <div class="actu-pic">
                <img src="pics/pic_info_1.png">
            </div>
            <div class="actu-info">
                <h2>Cuisine et Chimie</h2>
                <p>Découvrez le Festival Science & Manga du 2 février au 9 mars : expo, conférence-débat et ateliers !</p>
            </div>
            <button class="read-more">LIRE PLUS</button>
        </div>

        <!-- Actu 2 -->
        <div class="actu">
            <div class="actu-pic">
                <img src="pics/pic_info_1.png">
            </div>
            <div class="actu-info">
                <h2>Cuisine et Chimie</h2>
                <p>Découvrez le Festival Science & Manga du 2 février au 9 mars : expo, conférence-débat et ateliers !</p>
            </div>
            <button class="read-more">LIRE PLUS</button>
        </div>
    </div>
</div>