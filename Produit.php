<?php include 'header.php';
session_start();
?>

<div class="container">
    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>Acheter des machines virtuelles en s'amusant</h1>
            <p class="lead">Windows, Mac OS, Ubuntu, on a tout</p>
        </div>
    </div>
</div>

<hr>

<div class="container">
<!--/Machine1-->
     <div class="row">
       <div class="col-sm-3">
         <a href="#">
           <br>
           <img class="img-responsive" src="assets/image/windows_logo.png" data-alt="" data-title="">
         </a>
         <br>
        </div>
        <div class="col-sm-9">
          <h2><a class="url" href="#"> Windows 10</a></h2>
          <ul class="list-group ticketView">
              <li class="list-group-item ticketView">
                  <span class="label label-default">Version</span>
                  10.1.2.24
              </li>
              <li class="list-group-item ticketView">
                  <span class="label label-default">Poids</span>
                  10 Go
              </li>
              <li class="list-group-item ticketView">
                  <span class="label label-default">Prix</span>
                  <label> 1000€ </label>
              </li>
              <li class="list-group-item ticketView">
                  <a href="produit_ajout.php" id="32_bit_Windows"  class="btn btn-primary achat">VM Windows</a>
              </li>
          </ul>
        </div><!--/col-->
    </div><!--/row-->
    <!--/Machine2-->
    <div class="row">
       <div class="col-sm-3">
         <a href="#">
           <br>
           <img class="img-responsive" src="assets/image/macos_logo.png" data-alt="" data-title="">
         </a>
         <br>
        </div>
        <div class="col-sm-9">
        <h2><a class="url" href="#"> Mac OS Sierra</a></h2>
         <ul class="list-group ticketView">
              <li class="list-group-item ticketView">
                  <span class="label label-default">Version</span>
                  10.1.2.24
              </li>
              <li class="list-group-item ticketView">
                  <span class="label label-default">Poids</span>
                  10 Go
              </li>
              <li class="list-group-item ticketView">
                  <span class="label label-default">Prix</span>
                  <label> 1000€ </label>
              </li>
              <li class="list-group-item ticketView">
                  <a href="produit_ajout.php" id="32_bit_Mac"  class="btn btn-primary achat">VM Mac</a>
              </li>
          </ul>
        </div><!--/col-->
    </div><!--/row-->

<!--/Machine3-->
    <div class="row">
       <div class="col-sm-3">
         <a href="#">
           <br>
           <img class="img-responsive" src="assets/image/ubuntu_logo.png" data-alt="" data-title="">
         </a>
         <br>
        </div>
        <div class="col-sm-9">
          <h2><a class="url" href="#"> Ubuntu</a></h2>
          <ul class="list-group ticketView">
              <li class="list-group-item ticketView">
                  <span class="label label-default">Version</span>
                  10.1.2.24
              </li>
              <li class="list-group-item ticketView">
                  <span class="label label-default">Poids</span>
                  10 Go
              </li>
              <li class="list-group-item ticketView">
                  <span class="label label-default">Prix</span>
                  <label> 1000€ </label>
              </li>
              <li class="list-group-item ticketView">
                <a href="produit_ajout.php" id="32_bit_Ubuntu"  class="btn btn-primary achat">VM Ubuntu</a>
              </li>
          </ul>

        </div><!--/col-->
    </div><!--/row-->

  <!--/Machine4-->


<?php for ($i = 1; $i < 2; $i++)
          {
            ?>
    <div class="row">
      <div class="col-sm-3">
        <a href="#">
          <br>
          <img class="img-responsive" src="assets/image/<?php echo $_SESSION["Image"]; ?>" data-alt="" data-title="">
        </a>
        <br>
       </div>
       <div class="col-sm-9">
         <h2><a class="url" href="#"><?php echo $_SESSION["Nom"]; ?></a></h2>
         <ul class="list-group ticketView">
             <li class="list-group-item ticketView">
                 <span class="label label-default">Version</span>
                 <?php echo $_SESSION["Version"]; ?>
             </li>
             <li class="list-group-item ticketView">
                 <span class="label label-default">Poids</span>
                 <?php echo $_SESSION["Poids"]; ?>
             </li>
             <li class="list-group-item ticketView">
                 <span class="label label-default">Prix</span>
                 <label> <?php echo $_SESSION["Prix"] . "€"; ?></label>
             </li>
             <li class="list-group-item ticketView">
                 <a href="produit_ajout.php" id="32_bit_Windows"  class="btn btn-primary achat"><?php echo $_SESSION["Nom"];?></a>
             </li>
         </ul>
       </div><!--/col-->
   </div><!--/row-->
   <?php  }  ?>
  <hr>
</div><!--/container-->
<?php include 'footer.php'; ?>
