<?php
// Rudra Patel - WA4E Guessing Game
$correct = 21;  // Correct answer for autograder

if (!isset($_GET['guess'])) {
    $message = "Missing guess parameter";
} else if (strlen($_GET['guess']) < 1) {
    $message = "Your guess is too short";
} else if (!is_numeric($_GET['guess'])) {
    $message = "Your guess is not a number";
} else if ($_GET['guess'] < $correct) {
    $message = "Your guess is too low";
} else if ($_GET['guess'] > $correct) {
    $message = "Your guess is too high";
} else {
    $message = "Congratulations - You are right";
}

$oldguess = isset($_GET['guess']) ? htmlentities($_GET['guess']) : '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guessing Game by PATEL RUDRA NITINKUMAR b87e840d</title>
</head>
<body style="font-family: Arial, sans-serif;">
  <h1>Welcome 24CS075 PATEL RUDRA NITINKUMAR</h1>
  <form method="get">
    <p>
      <label for="guess">Enter your guess:</label>
      <input type="text" name="guess" id="guess" size="40" value="<?= $oldguess ?>">
    </p>
    <input type="submit" value="Submit Guess">
  </form>
  <?php if (isset($message)): ?>
    <p><strong><?= htmlentities($message) ?></strong></p>
  <?php endif; ?>
</body>
</html>
