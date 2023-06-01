<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equi ="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Home Page</title>
         
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="header">
            <div class="logo">Adopt and Admire</div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
               <ul>
                <li>
                    <a href="" class="active">Home</a>
                </li>
                <li>
                    <a href="login.php" class="active">Admin login</a>
                </li>
                <li>
                    <a href="reg.php" class="active">User sign up</a>
                </li>
               </ul>
                
                <script>
                    hamburger=document.querySelector(".hamburger");
                    hamburger.onclick=function(){
                        navbar=document.querySelector(".nav-bar");
                        navbar.classList.toggle("active");
                    }


                </script>

            </nav>
            
        </header>
        <div class="wrapper">
            <img src="34..03.jpg" alt="">
            <div class="text-box">
                <h2>Adopt and Admire</h2>
                <p>
                    Adopt and Admire is a online web services which allows you to adopt your favorite pet.You can adopt dog or cat.
                    Firstly you have to search the pet based on your preference then select adopt.You will be redirected to fill a form about your details.After that a report is generated and you can take a screenshot of it.</p>
                </p>
            </div>

        </div>
        <div class="footer">
            <p>Contact: adoptandadmire@gmail.com</p>
          </div>
    </body>

</html>
