<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>blogp4</title>

    <style>

        body {

            font-family: Arial, sans-serif;

        }

        #cookieNotification {

            display: none;

            position: fixed;

            bottom: 0;

            left: 0;

            width: 100%;

            background-color: #f1f1f1;

            padding: 20px;

            text-align: center;

            box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);

        }

        #cookieNotification button {

            background-color: #4CAF50;

            color: white;

            border: none;

            padding: 10px 20px;

            cursor: pointer;

        }

        #cookieNotification button:hover {

            background-color: #45a049;

        }

    </style>

</head>

<body>
 
    <div id="cookieNotification">

    Wij gebruiken cookies om ervoor te zorgen dat u de beste ervaring op onze website krijgt.

        <button onclick="acceptCookies()">Accepteer</button>

    </div>
 
    <script>

        // Check if the user has already accepted cookies

        function checkCookie() {

            let userAccepted = getCookie("userAccepted");

            if (userAccepted != "true") {

                document.getElementById("cookieNotification").style.display = "block";

            }

        }
 
        // Function to set a cookie

        function setCookie(name, value, days) {

            let d = new Date();

            d.setTime(d.getTime() + (days*24*60*60*1000));

            let expires = "expires=" + d.toUTCString();

            document.cookie = name + "=" + value + ";" + expires + ";path=/";

        }
 
        // Function to get a cookie

        function getCookie(name) {

            let cname = name + "=";

            let decodedCookie = decodeURIComponent(document.cookie);

            let ca = decodedCookie.split(';');

            for(let i = 0; i < ca.length; i++) {

                let c = ca[i];

                while (c.charAt(0) == ' ') {

                    c = c.substring(1);

                }

                if (c.indexOf(cname) == 0) {

                    return c.substring(cname.length, c.length);

                }

            }

            return "";

        }
 
        // Function to handle cookie acceptance

        function acceptCookies() {

            setCookie("userAccepted", "true", 30);

            document.getElementById("cookieNotification").style.display = "none";

        }
 
        // Check for cookie on page load

        window.onload = checkCookie;

    </script>
 
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="navbar">
  <div class="dropdown">
    <span>Uitgelicht</span>
    <div class="dropdown-content">
      <a href="../html/laatsteblog.html">Laatste Bloggen</a>
      <a href="../html/opmerkingPage.html">Opmerkingen</a>
     
    </div>
  </div>

  <div class="search-bar">
    <input type="text" placeholder="Waar ben je naar op zoek ? ...">
  </div>

  <div class="gebruiker">
    <div><a href="./html/login.html">Log in</a></div>
    <div><a href="./html/contact.html">Contact</a></div>
    <div><a href="./index.php">Home</a></div>
  </div>
</div>


<!-- blog container 1 -->

<div class="blog-container">
  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog Image" class="card-image">
    <h3>Ongeluk</h3>
    <p>Soms is het leven onbegrijpelijk.</p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>


  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog Image" class="card-image">
    <h3>Ai</h3>
    <p>Wat ik vind van ChatGPT, vroeg iemand me. En of ik daar nog over ging bloggen. Ai, dacht ik. Aiiii!</p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>
  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog image" class="card-image">
    <h3>Blog het proces</h3>
    <p>Een vriendin van mij maakt een carrièreswitch, net als ik. Maar anders dan ik wordt ze zelfstandig ondernemer. </p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>
  

</div>


<!-- blog container 2 -->

<div class="blog-container">
  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog Image" class="card-image">
    <h3>Ongeluk</h3>
    <p>Soms is het leven onbegrijpelijk.</p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>


  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog Image" class="card-image">
    <h3>Ai</h3>
    <p>Wat ik vind van ChatGPT, vroeg iemand me. En of ik daar nog over ging bloggen. Ai, dacht ik. Aiiii!</p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>
  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog image" class="card-image">
    <h3>Blog het proces</h3>
    <p>Een vriendin van mij maakt een carrièreswitch, net als ik. Maar anders dan ik wordt ze zelfstandig ondernemer. </p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>




</div>


<!-- blog container 3 -->

<div class="blog-container">
  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog Image" class="card-image">
    <h3>Ongeluk</h3>
    <p>Soms is het leven onbegrijpelijk.</p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>


  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog Image" class="card-image">
    <h3>Ai</h3>
    <p>Wat ik vind van ChatGPT, vroeg iemand me. En of ik daar nog over ging bloggen. Ai, dacht ik. Aiiii!</p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>
  <div class="blog">
    <img src="https://picsum.photos/id/870/200/300?grayscale&blur=2" alt="blog image" class="card-image">
    <h3>Blog het proces</h3>
    <p>Een vriendin van mij maakt een carrièreswitch, net als ik. Maar anders dan ik wordt ze zelfstandig ondernemer. </p>
    <a href="./html/blog.html" class="blog-link">Verder Lezen</a>
  </div>




</div>





<footer>
  <div class="footer1">

  <a href="#">E mail: mborijnland.nl</a>
  <a href="#">+31 6 4005 8752</a>

  </div>



</footer>


  ​
  
  ​








</body>
</html>

