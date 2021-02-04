<?php
require_once "./Includes/functions.php";
head("Zegert Boele || Webdevelopment");
?>

<body>
    <div class="container">
        <div class="landingpage">

            <div class="row">
                <h1 class="maintitle">Zegert Boele</h1>
            </div>
            <div class="row">
                <h2 class="subtitle">Front- and Backend Webdevelopment</h2>
            </div>
            <div class="row">
                <h3 class="subtitle">Programming, Coffee, Sleep, Repeat</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Projects</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col portfolio-item">
                <a href="project-page.php?ID=">
                    <div class="card">
                        <img class="card-img-top" src="./Includes/IMG/img1.jpg" alt="">
                        <h4 class="card-title">Item 1</h4>
                        <p class="card-text">lorem ipsum dolor is amet</p>
                    </div>
            </div>
            </a>
            <div class="col portfolio-item">
                <div class="card">
                    <a href="project-page.php?ID=">
                        <img class="card-img-top" src="./Includes/IMG/img1.jpg" alt="">
                        <h4 class="card-title">Item 2</h4>
                        <p class="card-text">lorem ipsum dolor is amet</p>
                    </a>
                </div>
            </div>
            <div class="col portfolio-item">
                <div class="card">
                    <a href="project-page.php?ID=">
                        <img class="card-img-top" src="./Includes/IMG/img1.jpg" alt="">
                        <h4 class="card-title">Item 3</h4>
                        <p class="card-text">lorem ipsum dolor is amet</p>
                    </a>
                </div>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="inputName" placeholder="Name" required>
                </div>
                <div class="col">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea class="formcontrol textarea" name="" placeholder="Your message..."></textarea>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

</html>