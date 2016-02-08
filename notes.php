<!-- menu aside -->
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
            <a href=""><li>Notes</li></a>
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

<!-- reste -->

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
    
    <div class="note-container">
        <div class="semester-selection">
            <label><h2>Semestre</h2>
                <select id="semester" onchange="semestreSelection()">
                    <option value="automn-2016">Automn 2016</option>
                    <option value="printemps-2016">Printemps 2016</option>
                </select>
            </label>
        </div>
        
        <div class="note-content" id="automn-2016">
            <div class="ue">
                <div class="ue-name">
                    <p>LIF8</p>
                </div>
                <div class="note-ue">
                    <div class="note green">
                        <h6>CC1</h6>
                        <h3>15.00 <span>/19</span></h3>
                    </div>

                    <div class="note dark-green">
                        <h6>CC2</h6>
                        <h3>20.00 <span>/20</span></h3>
                    </div>

                    <div class="note light-green">
                        <h6>CC3</h6>
                        <h3>7.00 <span>/20</span></h3>
                    </div>

                    <div class="note light-red">
                        <h6>CC2</h6>
                        <h3>12.00 <span>/20</span></h3>
                    </div>
                </div>
            </div>
            
            <div class="ue">
                <div class="ue-name">
                    <p>LIF10</p>
                </div>
                <div class="note-ue">
                    <div class="note red">
                        <h6>CC1</h6>
                        <h3>13.25 <span>/20</span></h3>
                    </div>

                    <div class="note dark-red">
                        <h6>CC2</h6>
                        <h3>5.00 <span>/15</span></h3>
                    </div>
                </div>
            </div>        
        </div>
        
        <div class="note-content" id="printemps-2016">
            <div class="ue">
                <div class="ue-name">
                    <p>LIF14</p>
                </div>
                <div class="note-ue">
                    <div class="note dark-green">
                        <h6>CC1</h6>
                        <h3>20.00 <span>/20</span></h3>
                    </div>

                    <div class="note dark-green">
                        <h6>CC2</h6>
                        <h3>20.00 <span>/20</span></h3>
                    </div>
                </div>
            </div>
            
            <div class="ue">
                <div class="ue-name">
                    <p>LIF13</p>
                </div>
                <div class="note-ue">
                    <div class="note green">
                        <h6>CC1</h6>
                        <h3>15.25 <span>/20</span></h3>
                    </div>

                    <div class="note light-green">
                        <h6>CC2</h6>
                        <h3>8.00 <span>/15</span></h3>
                    </div>
                </div>
            </div>        
        </div>
    
    </div>

</div>