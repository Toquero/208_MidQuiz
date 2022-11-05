<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./src/logo.png">
    <link rel="stylesheet" href="./Css//dashboard.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="icon"><b>TMY | Web App</b></span>
                    </a>
                </li>
                <li>
                    <a href="AdminDash.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="icon">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./public/about.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="icon">About Us</span>
                    </a>
                </li>
                <li>
                    <a href="Indexcomment.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </span>
                        <span class="icon">Comments</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="icon">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <a href="admin_page.php">
                    <div class="user">
                        <img src="./src/logo.png" alt="">
                    </div>
                </a>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,000</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">200</div>
                        <div class="cardName">Shares</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">300</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">800</div>
                        <div class="cardName">Subscribers</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2><b>Recently Viewed</b></h2>
                        <a href="admin_page.php" class="btn"><b>Edit here</b></a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Type of Food</td>
                                <td>Title</td>
                                <td>Comments</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Pizza</td>
                                <td>Albertos</td>
                                <td><span class="status delivered">Sent</span></td>
                            </tr>

                            <tr>
                                <td>Doughnut</td>
                                <td>Dunkin' Doughnut</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Softdrinks</td>
                                <td>RC Coca-Cola</td>
                                <td><span class="status return">Sent</span></td>
                            </tr>

                            <tr>
                                <td>Fries</td>
                                <td>French Fries</td>
                                <td><span class="status inProgress">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Burger</td>
                                <td>TMY | Burger</td>
                                <td><span class="status delivered">Sent</span></td>
                            </tr>

                            <tr>
                                <td>Pie</td>
                                <td>Special Pie</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Hot Pie</td>
                                <td>Homemade Pie</td>
                                <td><span class="status return">Sent</span></td>
                            </tr>

                            <tr>
                                <td>Cookies</td>
                                <td>Special Cookies</td>
                                <td><span class="status inProgress">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Users</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Keenan Mendiola<br> <span>Cebu City</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Jesa Tano<br> <span>Pamplona</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Omne Pelingon<br> <span>Calatrava</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Jeah Ypil<br> <span>Bohol</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Grace Vellina<br> <span>Dalaguete</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Mark Molina<br> <span>Leyte</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Juls Estorco<br> <span>Canlaon</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="./src/fs.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Enrique Siarot<br> <span>Sagbayan</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../Js/dashboard.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

<?php
// session_start();
if (isset($_POST['submit'])) {
    include './Include_DB/Connection_db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $requete = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";

    $statment = $conn->query($requete);
    // $statment->execute();
    // $result = $statment->fetch();

    if ($statment->num_rows > 0) {
        while ($row = $statment->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            if ($row["Email"] == $email && $row["Password"] == $password) {
                $_SESSION['name'] = $result['username'];
                $_SESSION['email'] = $result['Email'];
                $_SESSION['password'] = $result['Password'];
                if (isset($_POST['check'])) {
                    setcookie('email', $_SESSION['email'], time() + 3600);
                    setcookie('password', $_SESSION['password'], time() + 3600);
                }
                header("location: ./AdminDash.php");
            } else if (empty($email) && empty($password)) {
                header("location:Index.php?error=please enter your email or password");
            } else {
                header("location:Index.php?error=email or password not found");
            }
        }
    }
}