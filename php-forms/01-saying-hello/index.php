<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>#01 Saying Hello</title>
</head>
<body>

	<a href="../">&larr; All exercises</a>

	<h1>#01 Saying Hello</h1>

	<!-- 
		

		user is asked to provide name

		user types AND submits name

		if there IS a name

		name is incorporated into a "hello, NAME, nice to meet you" greeting

		name is outputted on screen with the greeting 

	-->
	
<?php
$userStr = "";
$errors = [];
$result = "";

const MAX_INPUT_LENGTH = 40;

function getInput($key) {
    $value = $_POST[$key] ?? "";
    return is_string($value) ? trim($value) : "";
}

function validateText($userStr) {
    $errors = [];

    if ($userStr === "") {
        array_push($errors, 'Please enter at least one character.');
    }

    if (mb_strlen($userStr) > MAX_INPUT_LENGTH) {
        array_push($errors, 'Input must be no more than ' . MAX_INPUT_LENGTH . ' characters.');
    }

    return $errors;
}

function countChars($userStr) {
    $noSpaces = str_replace(' ', '', $userStr);
    return "$userStr has " . mb_strlen($noSpaces) . " characters.";
}

function escape($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

if (isset($_POST['userStr'])) {
    $userStr = getInput('userStr');
    $errors = validateText($userStr);

    if (empty($errors)) {
        $result = countChars($userStr);
    }
}
?>

<?php if ($result !== ""): ?>
    <p><?= escape($result) ?></p>
<?php endif; ?>

<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= escape($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="POST">
    <label for="userStr">Enter something with less than 40 characters</label>
    <input type="text" id="userStr" name="userStr" value="<?= escape($userStr) ?>">
    <button type="submit">Submit</button>
</form>

</body>
</html>
