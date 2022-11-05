<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/styleAbout.css">
    <link rel="icon" href="../src/logo.png">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <title>TMY WEBSITE</title>
</head>

<body>
    <h2 style="text-align:center; margin-top:3%;">TMY TEAM MEMBERS</h2>
    <main style="margin-bottom:10%">
        <section class="cards-section">

            <div class="card-wrapper">

                <div class="card">

                    <div class="card-image">
                        <img src="../public/toqs.png" style="width:80%; height:80%; margin-top: 10%;margin-left: 10%;"
                            alt="profile one">
                    </div>

                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>

                    </ul>

                    <div class="details">
                        <h2>Christy Toquero
                            <br>
                            <span class="job-title">WebApp Developer</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="card-wrapper">

                <div class="card">

                    <div class="card-image">
                        <img src="../public/leah.jpg" style="width:80%; height:80%; margin-top: 10%;margin-left: 10%;"
                            alt="profile one">
                    </div>

                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="details">
                        <h2>Leah Mangmang
                            <br>
                            <span class="job-title">WebApp Developer</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="card-wrapper">

                <div class="card">

                    <div class="card-image">
                        <img src="../public/jeah.png" style="width:80%; height:80%; margin-top: 10%;margin-left: 10%"
                            alt="profile one">
                    </div>

                    <ul class="social-icons">
                        <li>
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>

                    <div class="details">
                        <h2>Jeah Marie Ypil
                            <br>
                            <span class="job-title">WebApp Developer</span>
                        </h2>
                    </div>
                </div>
            </div>
            <a href="../AdminDash.php">
                <button class="bttn" role="button">Go back</button>
            </a>
        </section>
    </main>
    </div>


</body>
<script>
/* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>

</html>