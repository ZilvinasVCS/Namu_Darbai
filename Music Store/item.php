<?php include('includes/header.php');?>
<title>Item</title>
</head>
<body>

    <?php include('includes/navigation.php');?>
    <!--Item Section-->
    <section id="item" class="start">
        <div class="container">
        <h1 class="item-header text-center">Sheet Music Title</h1>
           <div class="row">
                <!--Item Image-->
                <div class="col-sm-6 col-12">
                 <div class="carousel-container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/black-and-white-blur-book-164821-min.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/black-and-white-blur-book-164821-min.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/black-and-white-blur-book-164821-min.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  </div>
                 </div>
                </div>

                <!--End Item Image-->
                    
                <!--Item Info-->    
                <div class="col-sm-6 col-12">
                  <div class="item-container"> 
                    <h2 class="item-title" id="itemTitle">Sheet Music Title</h2>
                    <h3 class="item-price" id="itemPrice">$18.99</h3>
                    <p class="item-description" id="itemDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>     
                    <h3 class="item-quantity" id="itemQuantity">Quantity:</h3>
                    <select class="custom-select mr-sm-2" id="itemQuantitySelect">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="3">Four</option>
                    </select>       
                    <button type="button" class="btn btn-primary addToCart" >Add to Cart</button>
                   </div>       
                </div>
                <!--End Item Info--> 
           </div>    
        </div>
    </section>
    <!--End of Item Section-->        
    <?php include('includes/newsletter.php');?>     
    <?php include('includes/footer.php');?>      