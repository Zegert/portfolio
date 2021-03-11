<?php
require_once "./Includes/functions.php";
Head("Zegert Boele || Webdevelopment", true, false);
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
            <div class="row">
                <div class="mousescroll">
                    <div class="icon-scroll">
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                        <div class="icon-arrows">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h1 class="H1">About Me</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p class="aboutmeText">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus quod obcaecati facilis nihil
                    alias quia, doloribus accusantium aliquid. Dolore non alias animi iusto recusandae corporis
                    maxime
                    expedita delectus minus eius!<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nihil illo commodi, dolores
                    praesentium nisi consectetur perferendis eveniet nam fuga accusantium dolorum quis similique
                    delectus, blanditiis corporis. Consequuntur, aperiam corporis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore hic id iste at? Nostrum, at quo
                    odio vero doloremque hic ea eveniet placeat libero error tempora, voluptatem ullam ipsam sit.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid distinctio, dolores modi
                    laboriosam sunt quis aut exercitationem autem. Ipsum, illo. Eum nulla sed nihil nostrum nam
                    voluptatibus est ipsum explicabo.<br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste eius doloribus animi officia quia
                    nihil repudiandae voluptate, minima id debitis fuga sint quod, quis ut ipsam tenetur in
                    accusamus
                    harum.<br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam totam doloribus
                    voluptates!
                    Necessitatibus nostrum provident, odio officia culpa pariatur consectetur placeat rerum quia aut
                    enim iste minus vel optio!<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam debitis rerum vel nulla nobis
                    natus
                    adipisci laudantium velit. Itaque repellat ea ab placeat dignissimos, magni quasi eaque?
                    Mollitia,
                    quam quos.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellat placeat ab impedit
                    itaque
                    doloremque, a magni quidem facilis natus sed reprehenderit illum, quia dolorem repudiandae
                    tenetur,
                    excepturi consequuntur qui!praesentium nisi consectetur perferendis eveniet nam fuga accusantium
                    dolorum quis similique
                    delectus, blanditiis corporis. Consequuntur, aperiam corporis!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore hic id iste at? Nostrum, at quo
                    odio vero doloremque hic ea eveniet placeat libero error tempora, voluptatem ullam ipsam sit.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid distinctio, dolores modi
                    laboriosam sunt quis aut exercitationem autem. Ipsum, illo. Eum nulla sed nihil nostrum nam
                    voluptatibus est ipsum explicabo.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste eius doloribus animi officia quia
                    nihil repudiandae voluptate, minima id debitis fuga sint quod, quis ut ipsam tenetur in
                    accusamus
                    harum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquam totam doloribus
                    voluptates!
                    Necessitatibus nostrum provident, odio officia culpa pariatur consectetur placeat rerum quia aut
                    enim iste minus vel optio!
                </p>
            </div>
            <div class="col-4">
                <img class="aboutmeImg" src="./Includes/IMG/aboutme.jpeg" alt="A photo of me.">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h1 class="H1">Programming languages</h1>
            </div>
        </div>
        <div class="row">
            <?php
$languages_stmt = SelectAll("languages", "ID", "ASC");
while ($rowLanguages = $languages_stmt->fetch()) {
    ?>
            <div class="col">
                <div class="card text-white bg-secondary text-center programLangCard">
                    <img class="card-img-top" src="<?php echo $rowLanguages['Path']; ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $rowLanguages['Name']; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <?php
}
?>

        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h1 class="H1">Projects</h1>
            </div>
        </div>
        <?php

$projects_stmt = Conn()->prepare("SELECT * FROM projects ORDER BY ID ASC");
$projects_stmt->execute();
$projects_stmt = SelectAll("projects", "ID", "ASC", );
while ($rowProjects = $projects_stmt->fetch()) {
    ?>
        <div class="row justify-content-center">
            <div class="col portfolio-item">
                <div class="card text-white bg-secondary">
                    <img class="card-img-top" src="<?php echo $rowProjects['Photo1']; ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $rowProjects['Name']; ?></h4>
                        <p class="card-text">
                            <?php echo $rowProjects['ShortDescription']; ?>
                        </p>
                    </div>
                    <div class="card-body">
                        <a href="project-page.php?ID=<?php echo $rowProjects['ID']; ?>"
                            class="btn btn-secondary">Details</a>
                    </div>
                </div>
            </div>
            <?php

}
?>
        </div>
        <hr>
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <h1 class="H1">Contact</h1>
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