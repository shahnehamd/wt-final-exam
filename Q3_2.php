<?php
$hour = date('H');
if ($hour >= 21) {
$greetings = "Good Night";
} elseif ($hour > 17) {
$greetings = "Good Evening";
} elseif ($hour >= 12) {
$greetings = "Good Afternoon";
} elseif ($hour < 12) {
$greetings = "Good Morning";
}
echo $greetings;
echo $hour;
?>