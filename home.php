<?php
include 'includes/header.php';
?>
<!--Header page Home-->
<div class="container home">

    <div class="row header_home">
        <div class="col-xs-3 logoteam">
            <img src="assets/img/logo_blanc_pastille.png" alt="logo team"/>
        </div>
            <div class="col-xs-9 titleteam">
                <h2>TEAM CHAUSSETTES</h2>
            </div>
    </div>
    

<!--Tab members Team-->
    <div class="container-fluid">
        <div class="row tab_team">
            <div class="col-xs-6 box">
                <h3>Guillaume</h3>
            </div>
            <div class="col-xs-6 box">
                <h3>Jeremy</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 box">
                <h3>Charly</h3>
            </div>
            <div class="col-xs-6 box">
                    <h3>Null</h3>
            </div>
        </div>
    </div>
<br/>


<!--Btn Challenges-->
    <div class="row btn_challenges">
        <div class="col-xs-8 col-xs-offset-2">
    		  <a href="challenges.php"><input id="btn_challenges" type="submit" name="challenges" value="CHALLENGES"/></a>
        </div>
    </div>

<!--Results. Tab-->
     <table class="table table-scores">
        <h2 id="title_tab"> Classement par Equipes</h2>
            <thead>
                <tr>
                    <th>Positions</th>
                    <th>Teams</th>
                    <th>Scores</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Team Chaussettes</td>
                    <td>11000</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Team Cerf</td>
                    <td>9500</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Team Licorne</td>
                    <td>9000</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Team Licorne</td>
                    <td>9000</td>
                </tr>
            </tbody>
    </table>
<!--Btn Rules-->
    <div class="row btn_team">
        <div class="col-xs-6 col-xs-offset-3">
    		  <a href="rules_of_game.php"><input id="btn_rules" type="submit" name="btn_rules" value="Règles du Jeu"/></a>
        </div>
    </div>
<!-- Btn deconnexion -->
    <div class="row btn_footer">
        <div class="col-xs-1">
            <a href="https://www.facebook.com/Wild-Code-School-1571738596452522/?fref=ts" target="blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
            </a>
        </div> 
        <div class="col-xs-offset-9 col-xs-1 logout">
            <a href="index.php"><i class="fa fa-power-off fa-2x" aria-hidden="true"></i>
            </i></a>
        </div> 
        
    </div>
</div>

<?php include 'includes/footer.php' ?>
