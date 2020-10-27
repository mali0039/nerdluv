<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php' ?>

    <p><strong> Matches for <?php echo $_GET["name"] ?></p>

    <?php
    $singleUsers = file("singles.txt");


$currentUserLine = '';
for ($i = 0; $i < count($singleUsers); $i++) {
    $currentUserLine = strstr($singleUsers[$i], $_GET["name"]);
    if ($currentUserLine === TRUE) {
        break;
    }
}

$currentUserLine = explode(",", $currentUserLine);

$currentUser_gender = $currentUserLine[1];
$currentUser_age = $currentUserLine[2];
$currentUser_personality = $currentUserLine[3];
$currentUser_os = $currentUserLine[4];
$possible_match_min = $currentUserLine[5];
$currentUser_max_age = $currentUserLine[6];

$match_gender = '';
if (strcmp($currentUser_gender, 'M') === 0) {
    $match_gender = 'F';
} else {
    $match_gender = 'M';
}
$matches = array();

?>
<div>
<?php
$is_first = true;
for ($i = 0; $i < count($singleUsers); $i++) {

    $possible_matches_array = explode(",", $singleUsers[$i]);
    $possible_match_gender = $possible_matches_array[1];
    $possible_match_age = $possible_matches_array[2];
    $possible_match_personality = $possible_matches_array[3];
    $possible_match_os = $possible_matches_array[4];
    $possible_match_min = $possible_matches_array[5];
    $possible_match_max = $possible_matches_array[6];

    
    if (strcmp($match_gender, $possible_match_gender) === 0) {

        $currentUser_matches_others_choice = NULL;
        $possible_match_matches_users_choice = NULL;

        if ($possible_match_min <= $currentUser_age && $currentUser_age <= $possible_match_max)
            $currentUser_matches_others_choice = TRUE;

        if($possible_match_min <= $possible_match_age && $possible_match_age <= $currentUser_max_age)
            $possible_match_matches_users_choice = TRUE;


        if($currentUser_matches_others_choice && $possible_match_matches_users_choice){
            if (strcmp($currentUser_os, $possible_match_os) === 0) {

                $inRegex = "/[".$currentUser_personality."]/";
                if (preg_match($inRegex, $possible_match_personality) === 1) {
                    $matches[] = $singleUsers[$i];

                
?>

  <div class="match">
      <img src="user.jpg" alt="photo"/>
      <div>
          <ul>
              <li><p><?= $possible_matches_array[0] ?></p></li>
              <li><strong>Gender:</strong> <?= $possible_match_gender ?></li>
              <li><strong> Age:</strong> <?= $possible_match_age ?> </li>
              <li><strong> Type:</strong> <?= $possible_match_personality ?> </li>
              <li><strong> OS:</strong> <?= $possible_match_os ?></li>
          </ul>
      </div>
  </div>
<?php
                }
            }
        }
    }
}
?>
</div>
<?php include 'footer.php' ?>
</body>
</html>