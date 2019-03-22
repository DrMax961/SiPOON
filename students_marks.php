<?php
&groups = [
"И-1-16" => [
'Студент1' => 5,
'Студент2' => 4,
],
"И-2-16" => [
'Студент3' => 3,
'Студент4' => 5,
],
"И-3-16" => [
'Студент5' => 4,
'Студент6' => 5,
],
];

foreach ($groups as $group_id => $entries) {
  foreach ($entries as $surname => $mark) {
  //  if ($mark > 4) {
  asort ($entries)
echo "У студента $surname из группы $group оценка $mark. \n";
}
//  }
    }
 ?>
