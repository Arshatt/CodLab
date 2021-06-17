<?php require('connectforcars.php'); 
$flag = mysqli_query($conn, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style type="text/css">

		:root {
  --jumbotron-padding-y: 3rem;
}

.jumbotron {
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: calc(var(--jumbotron-padding-y) * 2);
    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}

div>img{
	height: 190px;
}


	</style>

</head>
<body>
	<?php include "nav.php" ?>
	<!--<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>-->

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album of cars</h1>
          <p class="lead text-muted">See what we have in the catalog for the selection of machines. We want your things to be safe and comfortable.</p>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php while ($result = mysqli_fetch_assoc($flag)) 
      {
        ?>
      
        <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="imgcars/<?php echo $result ['img'] ; ?>.jpg" alt="Card image cap">
                <div class="card-body ">
                  <h4>Ford E-Series Cutaway</h4>
                  <p class="card-text"> <?php echo $result ['description'];?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.ford.com/commercial-trucks/e-series-cutaway/">View</a> </button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
      } 

      ?>
            <!--<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Ford-E-Series-Box-Truck.png" alt="Card image cap">
                <div class="card-body ">
                	<h4>Ford E-Series Cutaway</h4>
                  <p class="card-text">Ford commercial vehicles are one of the most used in North America. Besides cargo vans, passenger vans, and pickup trucks, Ford Cutaway trucks are favorite fleet managers weapons of choice.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.ford.com/commercial-trucks/e-series-cutaway/">View</a> </button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img  class="card-img-top" src="Ford-Transit-Box-Truck.png" alt="Card image cap">
                <div class="card-body">
                	<h4>Ford Transit Cutaway</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.With so many official upfitters, Ford vehicles are easy to upfit with many  packages.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.ford.com/commercial-trucks/transit-chassis/models/cutaway/">View</a> </button>
                                          </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Chevrolet-Express-Cutaway.jpg" alt="Card image cap">
                <div class="card-body">
                	<h4>Chevrolet Express Cutaway</h4>
                  <p class="card-text">Chevy small box trucks are for years bestselling units across the US. With so many engines and wheelbase combinations, Chevrolet’s engineers know how to touch hart and needs of the business owner.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.chevrolet.com/commercial/express/cutaway">View</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="GMC-Savana-Cutaway-Box-Truck.png" alt="Card image cap">
                <div class="card-body">
                	<h4>GMC Savana Cutaway</h4>
                  <p class="card-text">This is a very similar vehicle to Chevy Express Cutaway van. They share and have in common chases and engines. Savana is offered as 3500 and 4500, has the same dimensions of wheelbase like Chevy siblings. 139", 159" (extended) and 177" (long).</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.gmc.com/vans/savana/cutaway">View</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Mitsubishi-Fuso-Box-Truck.jpg" alt="Card image cap">
                <div class="card-body">
                	<h4>Mitsubishi FUSO</h4>
                  <p class="card-text">Mitsubishi has a very successful strategy in the truck market. They produce quality and reliable vehicle, offer them in several cabs and engine configurations, under affordable price. This proven to be the right recipe for success.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.mitfuso.com/en-us">View</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Isuzu-NPR-Box-Truck.jpg" alt="Card image cap">
                <div class="card-body">
                	<h4>Isuzu N Series</h4>
                  <p class="card-text">Another Japanese car maker in the list of the best box trucks, Isuzu. They may not be award winners in design, but Isuzu produces reliable, fuel efficient, simple, made to last-for-years and easy to maintain trucks for decades. </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.isuzucv.com/en/nseries/nseries_diesel">View</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Hino-155-Delivery-Truck.jpg" alt="Card image cap">
                <div class="card-body">
                	<h4>Hino 155 Cab-Over</h4>
                  <p class="card-text">Hino is a truck company owned by Toyota corporation. First medium-duty truck was produced in 1964 and was called Ranger KM. Hino is present in the US from 1990. Kdusdjfh asfye sfasw yer asdj iysg aswe tsfd auw rbsf wtf stdf</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.hino.com/hino-trucks-hino-155.html">View</a> </button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Chevy-Low-Cab-Forward.png" alt="Card image cap">
                <div class="card-body">
                	<h4>Chevrolet LCF (Low Cab Forward)</h4>
                  <p class="card-text">If you are looking for a truck that can accommodate 24-ft body Chevy has the solution. With the longest LCF6500 XD, you can haul a massive amount of load 25,950 lbs. (GVWR).</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://www.chevrolet.com/commercial/low-cab-forward-cab-over-truck">View</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="Freightliner-M2-106.png" alt="Card image cap">
                <div class="card-body">
                	<h4>Freightliner Business Class M2</h4>
                  <p class="card-text">If it’s good for fire departments across the US than it is good for business too, right? All Freightliner trucks are known for their toughness, wide cabs, maneuverability and reliability.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://freightliner.com/trucks/m2-106/specifications/">View</a> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>

    </main>

    <!--<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>-->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
</body>
</html>