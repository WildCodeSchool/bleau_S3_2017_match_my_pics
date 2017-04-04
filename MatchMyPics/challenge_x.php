<?php
include 'includes/header.php';
include 'includes/header_return.php';
?>

    <div class="container challenge_x">

        <!--Container Title Challenge_x-->
        <div class="row title_challenge_x">
            <div class="col-xs-offset-3 col-xs-6">
                <p>Challenge_x</p>    
            </div>
        </div>

        <!--Container Polaroid Pics-->  
        <div class="row pics">
            <div class="col-xs-offset-2 col-xs-8 polaroid-images">
                <a href="" title=""><img src="MatchMyPics/web/bundles/MatchMyPicsBundle/img/fbleau.jpg" alt="img_polaroid"/>
                </a>
            </div>
        </div>

        <!--Container teaser_indices-->    
        <div class="row teaser_indices">
            <div class="col-xs-offset-2 col-xs-10 row_indice">
                <p>------->petit indice--------------></p>  
            </div>
        </div>

        <!--Btn indices + add_soluce-->
        <div class="row btn">
            <div class="col-xs-offset-1 col-xs-4 ">
                <a href="indice.php"><input id="indices" type="submit" name="Indices" value="indices"/>
                </a>
            </div>
            <div class="col-xs-offset-2 col-xs-4 ">
                      <a href="add_your_pics.php"><input id="add_soluce" type="submit" name="add_soluce" value="Solution"/>
                      </a>
            </div>
            <div class="col-xs-offset-4 col-xs-4">
                      <a href="challenges.php"><input id="abandonment" type="submit" name="abandonment" value="Abandon"/>
                      </a>
            </div>
        </div>         
    </div>

<?php include 'includes/footer.php' ?>