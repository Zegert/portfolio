<?php
require_once '../Includes/functions.php';
checkRank(1);
Head("Admin panel || Zegert Boele || Webdevelopment", false, true);
?>


<body>
    <div class="row">
        <div class="col">
            <h1>Languages</h1>
        </div>
        <div class="col">
            <button type="button" class="btn btn-outline-success">Add languages</button>
        </div>
    </div>
    <table class="table table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Path</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
$stmtLanguages = SelectAll("languages", "ID", "ASC");
while ($row = $stmtLanguages->fetch()) {
    ?>
            <tr>
                <th scope="row"><?php echo $row['ID']; ?></th>
                <td><a
                        href="http://192.168.2.12/portfolio-2/<?php echo $row["Path"]; ?>"><?php echo $row['Path']; ?></a>
                </td>
                <td><?php echo $row['Name']; ?></td>
                <a href="#">
                    <td><img class="edit-img"
                            src="https://cdn0.iconfinder.com/data/icons/set-app-incredibles/24/Edit-01-128.png"
                            alt="Edit icon"></td>
                </a>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>Projects</h1>
        </div>
        <div class="col">
            <button type="button" class="btn btn-outline-success">Add projects</button>
        </div>
    </div>
    <table class="table table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">ShortDescription</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
                <th scope="col">Photo1</th>
                <th scope="col">Photo2</th>
                <th scope="col">Photo3</th>
                <th scope="col">LastUpdated</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php

$stmtProject = SelectAll("projects", "ID", "ASC");
while ($row = $stmtProject->fetch()) {
    ?>
            <tr>
                <th scope="row"><?php echo $row['ID']; ?></th>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['ShortDescription']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Link']; ?></td>
                <td><?php echo $row['Photo1']; ?></td>
                <td><?php echo $row['Photo2']; ?></td>
                <td><?php echo $row['Photo3']; ?></td>
                <td><?php echo $row['LastUpdated']; ?></td>
                <a href="#">
                    <td><img class="edit-img"
                            src="https://cdn0.iconfinder.com/data/icons/set-app-incredibles/24/Edit-01-128.png"
                            alt="Edit icon"></td>
                </a>
            </tr>
            <?php

}
?>
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            <hr>
        </div>
    </div>
</body>

</html>