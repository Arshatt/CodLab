<?php require('connectforcars.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">
    
     <link href="bootstrap.min.css" rel="stylesheet">
     
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="news.css">
	<title>Document</title>
</head>
<body class="bg-light">
	 <div class="container">
    

     <?php include "nav.php" ?>
     <div style="margin-bottom:120px;"></div>
      
     <!-- <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark ">

        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Would You Have Guessed These Were the Most Popular Cities in 2020?</h1>
          <p class="lead my-3">We found out which cities are the most interesting for moving.</p>

          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>-->


      <?php $flag2 = mysqli_query($conn, "SELECT * FROM news2"); 
        while ($result = mysqli_fetch_assoc($flag2)) 
          {
            ?>



      <div id="neew">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
          	<img class="card-img-right flex-auto d-none d-md-block" src="imgnews/<?php echo $result ['photo'] ; ?>.jpg" alt="Card image cap">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h1 class="mb-0">
             <?php echo $result['name']; ?>
              </h1>
              <div class="mb-1 text-muted"><?php echo $result['date']; ?></div>
              <p class="card-text mb-auto"><?php echo $result['descript']; ?></p>
              <p class="lead mb-0"><a href="<?php echo $result ['link']; ?>">Continue reading...</a></p>
            </div>
            
          </div>
        </div>

          <?php
          } 

          ?>


  

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                <a class="text-dark" href="https://www.moving.com/tips/moving-during-coronavirus-epidemic-heres-what-you-need-to-know/">Moving During the Coronavirus Pandemic</a>
              </h3>
              <div class="mb-1 text-muted">March 28</div>
              <p class="card-text mb-auto">The novel coronavirus (COVID-19) has put a stop to the normal routines of everyday life both in the U.S. and abroad.</p>
              <a href="https://www.moving.com/tips/moving-during-coronavirus-epidemic-heres-what-you-need-to-know/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="information-covid-9191919192.jpg" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              
              <h3 class="mb-0">
                <a class="text-dark" href="https://www.moving.com/tips/moving-during-coronavirus-epidemic-heres-what-you-need-to-know/">How Much Does a Hot Tub Weigh?</a>
              </h3>
              <div class="mb-1 text-muted">March 28</div>
              <p class="card-text mb-auto">There’s a lot of heavy lifting that goes into any move. That’s especially true if you have large and bulky...</p>
              <a href="https://www.moving.com/tips/moving-during-coronavirus-epidemic-heres-what-you-need-to-know/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="96096834_1_x.jpg" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4  border-bottom">
            <strong>Latest news</strong> 
          </h3>
          <?php $flag = mysqli_query($conn, "SELECT * FROM news"); ?>
          <?php while ($result = mysqli_fetch_assoc($flag)) 
          {
            ?>
          
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $result ['name'];?></h2>
                <p class="blog-post-meta"><?php  echo $result ['writer'];?></p>

                <?php echo $result ['text'];?>
                <p><a href="<?php echo $result ['link']; ?>">Read more...</a></p>
                </div>
                <h3 class="pb-3 mb-4 font-italic border-bottom">

                
              </h3>
            <?php
          } 

          ?>
         <!-- <div class="blog-post">
            <h2 class="blog-post-title">How to Provide Move Out Notice to Your Landlord</h2>
            <p class="blog-post-meta">July 14, 2017 by <a href="https://www.thebalancesmb.com/telling-your-landlord-you-are-moving-out-4158013">The balance small buisness</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>By its very nature, a rental isn’t meant to last forever. And when you’re ready to move on to the next place, providing your landlord or property management company with proper move out notice is good form—and, in many cases, a requirement of your lease.</p>
            <p><a href="https://www.moving.com/tips/how-to-move-a-piano-without-professional-movers/">Read more...</a></p>
            </div>
            <h3 class="pb-3 mb-4 font-italic border-bottom">

            
          </h3>
           <div class="blog-post">
            <h2 class="blog-post-title">A freight train collided with an SUV near Balkhash, two people were killed</h2>
            <p class="blog-post-meta">December 17, 2019 by <a href="https://ru.sputnik.kz/incidents/20191217/12315182/gruzovoy-poezd-vnedorozhnik-stolknovenie-balkhash.html">Sputnic Kazakhstan</a></p>

            <p><strong>In a collision at a crossing without a barrier, a driver and a passenger from a car were killed, and another person was hospitalized</strong></p>
            <blockquote>
              <p>The tragedy took place on Tuesday, December 17, 37 kilometers from the city of Balkhash, at the crossing of the railway line between Balkhash and Sayak, which was not equipped with a barrier. As a result of the accident, a 56-year-old driver of a Toyota Prado car and his 33-year-old passenger died on the spot from their injuries, and a 47-year-old passenger of this car was delivered to a medical facility with various injuries.</p>
            </blockquote>
            <p>On this fact, a pre-trial investigation has been started under Part 4 of Article 345 of the Criminal Code of the Republic of Kazakhstan (Violation of traffic rules, resulting in the death of two or more persons by negligence). Appropriate examinations have been appointed. During the pre-trial investigation, all the circumstances of the case will be established.</p>
            <p><a href="https://ru.sputnik.kz/incidents/20191217/12315182/gruzovoy-poezd-vnedorozhnik-stolknovenie-balkhash.html">Read more...</a></p>

          </div>
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            
          </h3><div class="blog-post">
            <h2 class="blog-post-title">Tips for moving to another city</h2>
            <p>So, you are faced with a choice - to move or not? What should you consider and what to look for before finally deciding on such a serious step? Since our recommendations are generalized in nature, in some specific cases, their priorities and relevance may change. Our goal is only to draw attention to their presence, and then everyone is free to determine for themselves where to place accents.</p>
            <ul>
              <li>Location selection.</li>
              <li>Employment in a new place.</li>
              <li>Housing problem.</li>
            </ul>
            <p>But the most important thing is people and you should think about.</p>
            <ol>
              <li>Children flowers of life.</li>
              <li>Mentality.</li>
              <li>Habitual lifestyle.</li>
            </ol>
            <p>If you want to know more about it, <a href="https://www.pereezd.ru/blog/Soveti-po-pereezdy-v-drugoy-gorod/"> go to this site</a></p>
          </div>
          <h3 class="pb-3 mb-4 font-italic border-top">
            
          </h3>
          <div class="blog-post">
                        <h2 class="blog-post-title">How To Do a Wyoming DMV Change of Address</h2><br>
            <p>If you’re planning on moving to, from, or within the state of Wyoming then you’re going to want to make sure that you know exactly what’s expected of you in terms of DMV paperwork. Like all states, you’ll be required to get your Wyoming DMV change of address forms in order before you can truly settle in as a resident—including your address on your driver’s license and an update to your vehicle’s registration documents, if applicable.</p>
            </div>
            
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            
          </h3>
          

          <div class="blog-post">
            <h2 class="blog-post-title">Is Spring a Good Time to Sell Your Home? Here Are the Pros and Cons</h2>
            <p>The flowers are blooming, the birds are singing, and the homes are selling: it must be spring! Peak home selling season for most of the country typically falls from March to May. This is when the inventory of homes for sale tends to be at its highest, and the buyer pool tends to be at its largest. With the weather warming up, and the school year coming to an end, many home buyers are ready to make a big purchase and a fresh start in a new abode. So, is spring a good time to sell your home? It depends on a number of considerations. Keep in mind that while the buyer pool is certainly larger, so is the competition. In addition, you’ll need to find a new house for yourself – and home prices may be higher during the spring months. If you’re wondering whether spring is really an ideal time to list your home, read our pros and cons list below.</p>
            </div>
            <h3 class="pb-3 mb-4 font-italic border-top">
            
          </h3>-->
          

          

         

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#neew">New</a>
            
          </nav>

        </div>

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-white rounded shadow-lg">
            <h4 class="font-italic">NeWs</h4>
            <p class="mb-0"><em> NeWS (Network extensible Window System) is a discontinued windowing system developed by Sun Microsystems in the mid-1980s.Originally known as "SunDew",[2] its primary authors were <a href="https://en.wikipedia.org/wiki/James_Gosling">James Gosling</a> <a href="https://en.wikipedia.org/wiki/David_S._H._Rosenthal">and David S. H. Rosenthal</a> .</em></p>
          </div>

          <div class="p-3">
            <h4>Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="previous.php">Yesterday</a></li>
              <li><a href="previous.php">Previous week</a></li>
              <li><a href="previous.php">Two weeks</a></li>
              <li><a href="previous.php">Three weeks</a></li>
              <li><a href="previous.php">Previous month</a></li>
              
            </ol>
          </div>

          <div class="p-3">
            <h4 >Popular sources</h4>
            <ol class="list-unstyled">
              <li><a href="https://en.wikipedia.org/wiki/Main_Page">Wikipedia</a></li>
              <li><a href="https://www.bbc.com/news">BBS News</a></li>
              <li><a href="https://edition.cnn.com/">CNN</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
</body>
</html>