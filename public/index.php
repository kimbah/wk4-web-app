<?php include "templates/header.php"; ?>

    <ul>
        <li><a href="create.php">Add a new artwork</a></li>
        <li><a href="read.php">Find an artwork</a></li>
    </ul>

    <form method="post">
        <label for="artistname">Artist Name</label>
        <input type="text" name="artistname" id="artistname">

        <label for="worktitle">Work Title</label>
        <input type="text" name="worktitle" id="worktitle">

        <label for="workdate">Work Date</label>
        <input type="text" name="workdate" id="workdate">

        <label for="worktype">Work Type</label>
        <input type="text" name="worktype" id="worktype">

        <input type="submit" name="submit" value="Submit">

    </form>


<?php include "templates/footer.php"; ?>
