<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EvenZone</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Gallery</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/g1.jpg" class="img-responsive">
                        </div>
            </div>
            <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/g2.jpg" class="img-responsive">
                        </div>
            </div> 
            <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/g3.jpg" class="img-responsive">
                        </div>
            </div> 
            <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/g4.jpg" class="img-responsive">
                        </div>
            </div> 
            <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/g5.jpg" class="img-responsive">
                        </div>
            </div> 
            <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/g6.jpg" class="img-responsive">
                        </div>
            </div>           
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
