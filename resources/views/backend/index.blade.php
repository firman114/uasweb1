<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop"></i> <span>Febehshop</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="frontend"> <span>Home</span></a></li>
                
                
                <li><a href="#"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Customers</span></a></li>
                
                <li><a href="#"><i class="fa fa-file-pdf-o"></i> <span>Orders</span></a></li>
                
               
                
               
            </ul>
        </div>
    </section>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa fa-bars"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="images/user.jpg" class="img-responsive" />
                <h3>Febehshop</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content-info container">
            <div class="card">
                <h2 class="cus-num cus-h">0</h2>
                <p>Customers</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-pro">0</h2>
                <p>Proses</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">0</h2>
                <p>Order</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">10k</h2>
                <p>Income</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Pengiriman</h2>
                        
                        
                    </div>
                    <div class="see-all">
                        <button>List</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Customers Name</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                   
                    <tr>
                        <td>febeh</td>
                        <td>jember</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                </table>
            </div>
            <div class="pro-cus">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>All Customers</h2>
                    </div>
                    <div class="see-all">
                        <button>List</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Pic</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                    <tr>
                      
                        
                    <tr>
                        <td><img class="table-img" src="images/user10.jpg"/></td>
                        <td>Maula</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user11.jpg"/></td>
                        <td>Naila</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    
                </table>
            </div>
            <div class="clear"></div>
        </div>
    </Section>
    <div class="clear"></div>
  
   
    




    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/external.js"></script>
</body>

</html>
