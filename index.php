<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="img/logo4.jpg"/>
            </a>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
           <h1>Create Perspectives With Virtual Reality  </h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, praesentium non repellendus dolorem eius laudantium explicabo, qui nesciunt dicta vel a quia obcaecati quam blanditiis reprehenderit rerum ut facilis quasi!</p>   
            <a class="main-btn" href="#">Contact</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-container">
            
            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon1.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lore ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">check</a>
                </div>
            </div>
            
            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon2.jpg"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lore ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon3.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lore ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">check</a>
                </div>
            </div>
      
        </div>
    </section>    

    <section class="about">
        <div class="about-img">
            <img src="img/about.jpg">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptas expedita magni vitae dicta deleniti, quia blanditiis similique alias corrupti culpa quos ex! 
                Aliquam exercitationem reiciendis unde, vero enim illum!</p>
            <button href="#" class="main-btn">Read More</button>
        </div>

    </section>

    <section class="contact">
        <div class="contact-heading">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-mail"/>
            <textarea  name="message" placeholder="Type Your Message..."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>


</body>
</html>