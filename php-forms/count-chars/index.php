<!DOCTYPE html>
<html>
<body>

<h2>String Length Checker</h2>

<!-- The form sends data to this same page -->
<form method="post">
    <label>Enter a string:</label><br>
    <input type="text" name="userString">
    <button type="submit">Submit</button>
</form>

<?php
// This code runs AFTER the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the text the user typed
    $text = $_POST["userString"];

    // Count its characters
    $length = strlen($text);

    // Show the results
    echo "<p>You entered: $text</p>";
    echo "<p>Number of characters: $length</p>";
}
?>

<form method="post">
    <label>Enter a quote:</label><br>
    <input type="text" name="quote">
    <br><br>

    <label>Enter the author:</label><br>
    <input type="text" name="author">
    <br><br>

    <button type="submit">Show Quote</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $quote = $_POST["quote"];
    $author = $_POST["author"];

    echo "<p>$author says, \"$quote\"</p>";
}
?>

</body>
</html>
