<div class="container" style="height: 100%; background:#2981BA">
    <div class="logout-loader">
        <h2>Deconnexion</h2>
        <img src="pics/oie_4202226YBjYfubx.gif" style="height: 100px;border-radius:50%">
    </div>
</div>


<?php
    session_destroy();
    header('Refresh: 2; url=index.php');
    $est_connecte = false;
?>