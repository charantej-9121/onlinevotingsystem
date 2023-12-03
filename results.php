<!-- 'results.php' -->
<!DOCTYPE html>
<html>
<head>
  <title>Online Voting System - Results</title>
  <link rel="stylesheet" href="styles.css"> <!-- Linking CSS file -->
</head>
<body>
  <div class="container">
    <h1>Voting Results</h1>
    <div class="results">
      <?php
      $parties = array('BJP', 'Congress', 'AAP', 'BSP');
      foreach ($parties as $party) {
        echo "<p>$party: " . getVotes($party) . " votes</p>";
      }

      function getVotes($party) {
        // For demonstration, we'll simulate vote counts using session
        session_start();
        if (!isset($_SESSION['votes'][$party])) {
          $_SESSION['votes'][$party] = 0;
        }
        return $_SESSION['votes'][$party];
      }
      ?>
    </div>
  </div>
</body>
</html>
