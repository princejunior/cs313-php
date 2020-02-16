<nav class="navbar navbar-inverse" style="margin-bottom: 0px" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="https://polar-waters-71288.herokuapp.com/week05/assignment/newLW/homePageLW.php">Live W.O.W.</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <!-- ../homePageLW.php -->
                <li class="active"><a href="https://polar-waters-71288.herokuapp.com/week05/assignment/newLW/homePageLW.php">Home</a></li>
                <li><a href="#">Trainers</a></li>
                <li><a href="#">Nutrionist</a></li>
                <li><a href="#">Physical Therapist</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="viewCartLW.php"><span class="glyphicon glyphicon-shopping-cart"></span>Booking</a></li> -->
                <li class="dropdown">
                    <a href="viewCartLW.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-gift bigicon"></span> Booking<span class="caret"></span></a>
                    <ul id="dropBox" class="dropdown-menu dropdown-cart" role="menu">
                        <span class="item">
                            <span class="item-left">
                                <img src="http://www.prepbootstrap.com/Content/images/template/menucartdropdown/item_3.jpeg" alt="" />
                                <span class="item-info">
                                    <span>Item name</span>
                                    <span>price: 12$</span>
                                </span>
                            </span>
                            <span class="item-right">
                                <button class="btn btn-danger  fa fa-close"></button>
                            </span>
                        </span>
                        <li class="divider">
                        </li>
                        <li><a class="text-center" href="viewCartLW.php">View Cart</a>
                        </li>
                    </ul>
                </li>
                <?php if($_SESSION['customer_type'] == 'trainer'){?>
                    <li><a href="trainerProfilePage.php/?id=<?php echo $_SESSION['id'];?>"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <?php 
                    } else if ($_SESSION['customer_type'] == 'client') { ?>
                        <li><a href="clientProfilePage.php/?id=<?php echo $_SESSION['id'];?>"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <?php
                    } else { ?>
                        <li><a href="loginPage.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <?php
                    }
                ?>
                <li><a href="loginPage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>