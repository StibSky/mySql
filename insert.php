<?php //require_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<body>
<form action="index.php" method="post">
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
    <section>
        <label for="preferred_language">Write preferred_language here</label>
        <input id="preferred_language" name="preferred_language" required>
    </section>
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


    <input type="submit" name="submitButton">
</form>
</body>
</html>