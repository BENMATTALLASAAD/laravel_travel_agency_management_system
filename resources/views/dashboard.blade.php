<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <title>Travel agency | Dashboard</title>
</head>
<body>
    
    <div class="container">
        <!------------   ASIDE      --------------->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{asset('images/logo.png')}}" >
                    <h2> Espace<span class="danger">Employé</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">
                        close
                    </span>

                </div>
            </div>
            <div class="sidebar" >
                <a href="#" class="navLinks active" >
                    <span class="material-symbols-outlined">
                        grid_view
                    </span>
                    <h3>Dashboard</h3>
                </a>
            </div>
            <div class="sidebar" >
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <h3>Customers</h3>
                </a>
            </div>
            <div class="sidebar">
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        receipt_long
                    </span>
                    <h3>Orders</h3>
                </a>
            </div>
            <div class="sidebar">
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        insights
                    </span>
                    <h3>Analytics</h3>
                </a>
            </div>
            <div class="sidebar" >
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
            </div>
            <div class="sidebar">
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        inventory
                    </span>
                    <h3>Products</h3>
                </a>
            </div>
            <div class="sidebar">
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        report
                    </span>
                    <h3>Reports</h3>
                </a>
            </div>
            <div class="sidebar" >
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
            </div>
            <div class="sidebar" >
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                    <h3>Add Product</h3>
                </a>
            </div>
            <div class="sidebar" >
                <a href="#" class="navLinks">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
            <!------------   END OF ASIDE      --------------->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date" >
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">
                        analytics
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total sales </h3>
                            <h1>$25,024</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                                <!------------- END OF SALES --------------->
                <div class="expenses">
                    <span class="material-symbols-outlined">
                        bar_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses </h3>
                            <h1>$14,160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!------------- END OF EXPENSES --------------->
                <div class="income">
                    <span class="material-symbols-outlined">
                        stacked_line_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total income</h3>
                            <h1>$10,864</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!------------- END OF INCOME --------------->

            </div>
            <!------------- END OF INSIGHTS --------------->
            <div class="recent-orders">
                <h2>Recent orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drone</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>

        </main>
        
        <!-- ========== End OF MAIN ========== -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">
                        menu
                    </span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">
                        light_mode
                    </span>
                    <span class="material-symbols-outlined">
                        dark_mode
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Daniel</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="{{asset('images/profile-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            
            <!-- ========== End OF TOP ========== -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="{{asset('images/profile-2.jpg')}}" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike tyson</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="{{asset('images/profile-3.jpg')}}" alt="">
                        </div>
                        <div class="message">
                            <p><b>Mike tyson</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                    <div class="profile-photo">
                        <img src="{{asset('images/profile-4.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <p><b>Mike tyson</b> received his order of Night lion tech GPS drone.</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                </div>
                
                    
            </div>
            <!------------------------END OF UPDATES---------------------->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                   
                    <div class="right">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                shopping_cart
                            </span>
                        </div>
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 HOURS</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="right">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                local_mall
                            </span>
                        </div>
                        <div class="info">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 HOURS</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="right">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="info">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 HOURS</small>
                        </div>
                        <h5 class="danger">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                    
                <div class="right">
                    <div class="item add-product">
                        <div>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                            <h3>Add Product</h3>
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
  
  
    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>