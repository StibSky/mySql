<!DOCTYPE html>
<html lang="en">
<body>
<form action="" method="post">
    <h1>make user</h1>
    <section>
        <label for="firstName">Write firstName here</label>
        <input id="firstName" name="firstName" required>
    </section>
    <section>
        <label for="lastName">Write lastName here</label>
        <input id="lastName" name="lastName" required>
    </section>
    <section>
        <label for="username">Write username here</label>
        <input id="username" name="username" required>
    </section>
    <section>
        <label for="linkedin">Write linkedin here</label>
        <input id="linkedin" name="linkedin" required>
    </section>
    <section>
        <label for="github">Write github here</label>
        <input id="github" name="github" required>
    </section>
    <section>
        <label for="email">Write email here</label>
        <input id="email" name="email" required>
    </section>
    <label for="preferred_language"> Choose language here</label>
    <select name="preferred_language">
        <option value="be">nl</option>
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="ru">ru</option>
    </select>
    <section>
        <label for="avatar">Write avatar here</label>
        <input id="avatar" name="avatar" required>
    </section>
    <section>
        <label for="video">Write video here</label>
        <input id="video" name="video" required>
    </section>
    <section>
        <label for="quote">Write quote here</label>
        <input id="quote" name="quote" required>
    </section>
    <section>
        <label for="quote_author">Write quote_author here</label>
        <input id="quote_author" name="quote_author" required>
    </section>
    <br>
    <input type="submit" name="submitButton">
</form>
<table border="1">
    <?php
    $newConnection = new Connection();
    $newConnection = $newConnection->openConnection();
    $query = new Query();
    $query->createUserArray();
    foreach (($query->getUserArray()) as $user):
        ?>
        <tr>
            <td>
                <?php echo $user['firstName'] ?>
            </td>


            <td>
                <?php echo $user['lastName'] ?>
            </td>


            <td>
                <?php echo $user['email'] ?>
            </td>

            <td>
                <img src="<?php echo 'images/' . $user['preferred_language'] . '.png' ?>" alt="flag">
            </td>

            <td><a href="?user=<?php echo $user['id'] ?>">Profile</a></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>