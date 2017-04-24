<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
        <title> Index page </title>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <script src="bs/vendor/bootstrap.js" type="text/javascript"></script>
        <link href="bs/vendor/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="bs/vendor/jquery.easing.min.js" type="text/javascript"></script>
        <link href="bs/1.css" rel="stylesheet" type="text/css"/>
        <script src="bs/1.js" type="text/javascript"></script>
        <link href="bs/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="bs/jquery-ui.js" type="text/javascript"></script>
    </head>
    <body >
        <div class="menutop">
            <div class="container">
                <i class="fa fa-car">FREE DELIVERY FOR BILL OVER 500k</i>
                <i class="fa fa-heart">24x7 ONLINE SUPPORT</i>
                <b class="navbar-right"><a href="">TIẾNG VIỆT</a> | <a href="">ENGLISH</a></b>
            </div>
        </div>
        <div class="menu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">SMARTPHONE</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" name="search" class="btn btn-default">SEARCH</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if (isset($_SESSION['username'])) {
                                ?>  
                                <li><a href="#"><span class="fa fa-user"></span>WELCOME - <?php echo $_SESSION['username']; ?></a></li>
                                <li>
                                    <form method="post" action="UserServlet.php">
                                        <button class="btn btn-link bt" name="method" value="logout"><span class="fa fa-sign-out"></span>LOGOUT</button>
                                    </form>
                                </li>
                                <?php
                            } else {
                                ?>  
                                <li> <a href="loginPage.php"><span class="fa fa-sign-in"></span>LOGIN</a></li>
                                <?php
                            }
                            ?>  


                            <li><a href="cartPage.php"><span class="fa fa-shopping-cart"></span>CART</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div><!-- end menu -->

        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">REGISTER FORM</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" role="form">

                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Username" required name="username">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="" placeholder="Password" required name="password">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="" placeholder="Confirm Password" required name="confirmpass">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="" placeholder="Your email" required name="email">
                            </div>

                            <div class="form-group">
                                <input type="phone" class="form-control" id="" placeholder="Your Phone Number" required name="phone">
                            </div>



                            <button type="submit" class="btn btn-primary">REGISTER</button>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- end modal register -->


        <div class="slideTop">
            <div class="container">
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img alt="slide1" src="bs/img/slide1.png">
                            <div class="container">
                                <div class="carousel-caption">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="slide2" src="bs/img/slide2.jpg">
                            <div class="container">
                                <div class="carousel-caption">

                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <img alt="slide3" src="bs/img/slide3.jpg">
                            <div class="container">
                                <div class="carousel-caption">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img  alt="slide4" src="bs/img/slide4.jpg">
                            <div class="container">
                                <div class="carousel-caption">

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div><!-- end container -->
        </div><!-- end slidetop -->

        <div class="noidung">
            <div class="container">
                <div class="col-md-3"> <!-- Sidebar -->

                    <div class="row">
<?php
include_once 'C:\xampp\htdocs\store\DAO\ProductDAO.php';
include_once 'C:\xampp\htdocs\store\model\ProductModel.php';
$product = new ProductDAO();
$categoryINFO = $product->getAllBrand();
?>
                        <div class="sidebar2">
                            <h3>SEARCH BY BRANDS</h3>
                        <?php
                        foreach ($categoryINFO as $category) {
                            ?>
                                <div class="checkbox">
                                    <label><input type="checkbox" value="apple"><?php echo $category->categoryName; ?></label>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div><!-- end row2 -->
                    <div class="row">
                        <div class="pricefilter">
                            <h3> PRICE FILTER</h3>
                            <form action="" id="price">
                                <table>
                                    <tr>
                                        <th>Price:</th>
                                        <td><span id="spanOutput"></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><div id="slider"></div></td>
                                    </tr>	
                                    <tr>
                                        <th><label for="txtMinPrice">Min Price</label></th>
                                        <td><input type="text" id="txtMinPrice"></td>
                                    </tr>

                                    <tr>
                                        <th><label for="txtMaxPrice"> Max Price</label></th>
                                        <td><input type="text" id="txtMaxPrice"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="row comment">
                        <h3>COMMENT</h3>
                        <!-- not yet -->
                    </div>
                </div>
                <div class="col-md-9"><!-- content -->
                    <div class="row">
                        <div class="separeateMenu">
                            <div class="col-sm-12 col-md-2">
                                <h4>Sort by:</h4>
                                <select name="" id="input" class="form-control" required="required">
                                    <option value="">Lowest Price</option>
                                    <option value="">Highest Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr class="line">
<?php
$productINFO = $product->getAllProduct();
foreach ($productINFO as $product) {
    ?>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                                <div class="thumbnail picture">
                            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($product->image) . '"/>'; ?>
                                    <div class="caption">
                                        <h4><?php echo $product->productName; ?></h4>
                                        <h4><?php echo '$ ' . $product->price; ?> </h4>

                                    </div>
                                    <div class="che">
                                        <input type="text" name="quantity" id="quantity<?php echo $row["Product_ID"]; ?>" class="form-control" value="1" />  
                                        <input type="hidden" name="hidden_name" id="name<?php echo $row["Product_ID"]; ?>" value="<?php echo $row["Product_Name"]; ?>" />  
                                        <input type="hidden" name="hidden_price" id="price<?php echo $row["Product_ID"]; ?>" value="<?php echo $row["Price"]; ?>" />  
                                        <input type="button" name="method" id="<?php echo $row["Product_ID"]; ?>" style="margin-top:5px;" class="btn btn-info form-control add_to_cart" value="Add to Cart" />  
                                    </div>
                                </div> 		       
                            </div>
    <?php
}
?>

                    </div><!--  end row 1 -->
                    <div class="row">
                        <div class="popularProduct">
                            <div class="col-md-12">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Featured</a></li>
                                    <li><a data-toggle="tab" href="#menu1">New Arrivals</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Top Sales</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">									
                                            <div class="thumbnail picture">
                                                <img src="bs/img/ip7.jpg" alt="ip7.jpg">
                                                <div class="caption">
                                                    <h3>Title</h3>
                                                    <p>
                                                        SupperStar
                                                    </p>
                                                    <p>
                                                        <a href="#" class="btn btn-primary"><span class="fa fa-shopping-cart"></span>ADD</a>
                                                        <a href="#" class="btn btn-default"><span class="fa fa-money"></span>Buy</a>
                                                    </p>
                                                </div>
                                                <div class="che">
                                                    <h4>This is made by professional</h4>
                                                </div>
                                            </div> <!-- end picture -->								
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">									
                                            <div class="thumbnail picture">
                                                <img src="bs/img/ip7.jpg" alt="ip7.jpg">
                                                <div class="caption">
                                                    <h3>Title</h3>
                                                    <p>
                                                        SupperStar
                                                    </p>
                                                    <p>
                                                        <a href="#" class="btn btn-primary"><span class="fa fa-shopping-cart"></span>ADD</a>
                                                        <a href="#" class="btn btn-default"><span class="fa fa-money"></span>Buy</a>
                                                    </p>
                                                </div>
                                                <div class="che">
                                                    <h4>This is made by professional</h4>
                                                </div>
                                            </div> <!-- end picture -->								
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">									
                                            <div class="thumbnail picture">
                                                <img src="bs/img/ip7.jpg" alt="ip7.jpg">
                                                <div class="caption">
                                                    <h3>Title</h3>
                                                    <p>
                                                        SupperStar
                                                    </p>
                                                    <p>
                                                        <a href="#" class="btn btn-primary"><span class="fa fa-shopping-cart"></span>ADD</a>
                                                        <a href="#" class="btn btn-default"><span class="fa fa-money"></span>Buy</a>
                                                    </p>
                                                </div>
                                                <div class="che">
                                                    <h4>This is made by professional</h4>
                                                </div>
                                            </div> <!-- end picture -->								
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">									
                                            <div class="thumbnail picture">
                                                <img src="bs/img/ip7.jpg" alt="ip7.jpg">
                                                <div class="caption">
                                                    <h3>Title</h3>
                                                    <p>
                                                        SupperStar
                                                    </p>
                                                    <p>
                                                        <a href="#" class="btn btn-primary"><span class="fa fa-shopping-cart"></span>ADD</a>
                                                        <a href="#" class="btn btn-default"><span class="fa fa-money"></span>Buy</a>
                                                    </p>
                                                </div>
                                                <div class="che">
                                                    <h4>This is made by professional</h4>
                                                </div>
                                            </div> <!-- end picture -->								
                                        </div>

                                    </div> <!-- end home tab -->
                                    <div id="menu1" class="tab-pane fade">
                                        <h3>New Arrivals</h3>
                                        <p>Some content in menu 1.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Top Sales</h3>
                                        <p>Some content in menu 2.</p>
                                    </div>
                                </div><!-- end nav-tabs -->
                            </div>
                        </div> <!-- end popular -->
                    </div>
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>

                    <div class="topbutton">
                        <div class="fa fa-arrow-up"></div>
                    </div>
                </div><!-- end 9cot -->
            </div>
        </div><!-- end noidung -->
        <div class="footer">
            <div class="container text-center">
                <h4>Create by BEAST TEAM &copy Freelancer at VietNam</h4>
            </div>
        </div><!-- end footer -->
    </body>
</html>