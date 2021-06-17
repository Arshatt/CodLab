<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="style.css">
 -->  
	<title>Document</title>
	<style type="text/css">
  input,button{
        height: 50px;
        border: 1px solid grey;
      }
      .carousel-item{
        height: 32rem;
        background-color: grey;
        position: relative;
      }
      
      .for-left{
        text-align: left;
      }
      a{
        text-decoration: none;
      }
      .photo{
       background:url(Family-Moving-BigSteelBox-2100x1200.jpg) no-repeat center top / cover ;
        
      }
      .shrift{
        font-size: 40px; 
        font-weight: bold;
        text-transform: uppercase;
      }
     .overlay-image{
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top:0;
      background-position: center;
      background-size: cover;
      opacity: 0.6;
     }
     .overlay-image1{
      
      bottom: 0;
      left: 0;
      right: 0;
      top:0;
      background-position: center;
      background-size: cover;
      
     }
     
     .fig {
            display: block; 
            text-align: center; 
            font-style: italic; 
            margin-top: 0; 
            margin-bottom: 5px; 
            color: #666; 
           }
      .forcen{
        
        left: 0;
        right: 0;
        margin: 0 auto;
        top: 50;
      }

  </style>
		
	
</head>
<body>

  <nav  class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="PLS.png" alt="Logo" width="170" height="40" class="d-inline-block align-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="more.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cars.php">Transport</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Communication
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="prot.php">Contacts</a></li>
              <li><a class="dropdown-item" href="forhelp.php">Help</a></li>
              <li><a class="dropdown-item" href="aboutus.php">About us</a></li>
            </ul>
          </li>
         
            
           
        

        </ul>
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="singin.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>Sign up</a>
          </li>
         
         <li class="nav-item ms-auto">

            <a class="nav-link" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>Login</a>
          </li>
            
           
        

        </ul>
        
          
      </div>
    </div>
  </nav>


















<!-- 	<nav style="background-color: rgba(0,0,0,.8);" class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container-fluid ">
            <a class="navbar-brand text-warning fs-1" href="more.php"><img class="" src="PLS.png" alt="" width="250"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-warning fs-5" aria-current="page" href="register.php">Registration</a>
                </li>
               <li class="nav-item"><a class="nav-link active text-warning fs-5" aria-current="page" href="news.php">News</a></li>
               
                 <li class="nav-item text-end"><a class="nav-link active text-warning fs-5" aria-current="page" href="cars.php">Cars</a></li>



                  <li class="nav-item dropdown">
                                   
                    
                   <button class="btn  text-warning dropdown-toggle fs-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Communication
                   </button>
                   <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                     <li><a class="dropdown-item  text-warning fs-5" href="prot.php">Contacts</a></li>
                     <li><a class="dropdown-item text-warning fs-5" href="forhelp.php">Help</a></li>
                   </ul>
                 </div>
                                 </li>
              </ul>

              
           
            <form class="d-flex">
              
             <button class="btn btn-warning ms-2 fs-6" type="button"><a class="nav-link active text-dark" aria-current="page" href="login.php">Login</a></button>
          </form>
          </div>

        </nav> -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
          -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>