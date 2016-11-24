<?php include 'header.php'; ?>

<head>

</head>

<body>
    <div class="container-fluid" id="blocCommand">
      <div class="dialog">
        <div class="content">
          <div class="header">
            <h4 class="title">Votre commande</h4>
          </div>
          <div class="body">
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
                          <button type="button" class="btn btn-primary achat" onclick="Windows_32()">32 bits</button>
                          <button type="button" class="btn btn-primary achat" onclick="Windows_64()">64 bits</button>
                      </li>
                  </ul>

                </div><!--/col-->
            </div><!--/row-->
          </div>
        </div>
      </div>
      <hr>
    </div><!--/container-fluid blocCommand-->
</body>
<?php include 'footer.php'; ?>
