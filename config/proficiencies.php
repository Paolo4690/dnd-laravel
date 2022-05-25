<?php
$proficiencies_content = file_get_contents(__DIR__ . '/proficiencies.json');
$proficiencies = json_decode($proficiencies_content);

return array_map(function ($proficiency) {
  return [
    "index" => $proficiency->index,
    "name" => $proficiency->name,
    "type" => $proficiency->type,
    "reference" => $proficiency->reference,
  ];
}, $proficiencies);
