<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="homePageLW.php">Live W.O.W.</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="homePageLW.php">Home</a></li>
                <li><a href="#">Trainers</a></li>
                <li><a href="#">Nutrionist</a></li>
                <li><a href="#">Physical Therapist</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="viewCartLW.php"><span class="glyphicon glyphicon-shopping-cart"></span>Booking</a></li> -->
                <li class="dropdown">
            <a href="viewCartLW.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-gift bigicon"></span> Booking<span class="caret"></span></a>
                <ul id="dropBox" class="dropdown-menu dropdown-cart" role="menu">
                    <li class="divider"></li>
                    <li><a class="text-center" href="#">View Cart</a></li>
                </ul>
        </li>
                <li><a href="clientProfilePage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="clientSignInPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>