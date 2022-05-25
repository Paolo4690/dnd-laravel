<?php
$monsters_content = file_get_contents(__DIR__ . '/monsters-add.json');
$monsters = json_decode($monsters_content);

return array_map(function ($monster) {
  return [
    "index" => $monster->index,
    "proficiencies" => $monster->proficiencies,
  ];
}, $monsters);
