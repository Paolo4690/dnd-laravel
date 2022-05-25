<?php
$ability_scores_content = file_get_contents(__DIR__ . '/abilityScores.json');
$ability_scores = json_decode($ability_scores_content);

return array_map(function ($ability_score) {
  return [
    "index" => $ability_score->index,
    "name" => $ability_score->name,
    "desc" => $ability_score->desc,
  ];
}, $ability_scores);
