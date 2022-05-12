<?php
$monsters_content = file_get_contents(__DIR__ . '/monsters.json');
$monsters = json_decode($monsters_content);

return array_map(function ($monster) {
  return [
    "index" => $monster->index,
    "name" => $monster->name,
    "type" => $monster->type,
    "alignment" => $monster->alignment,
    "armor_class" => $monster->armor_class,
    "hit_points" => $monster->hit_points,
    "size" => $monster->size,
    "strength" => $monster->strength,
    "dexterity" => $monster->dexterity,
    "constitution" => $monster->constitution,
    "intelligence" => $monster->intelligence,
    "wisdom" => $monster->wisdom,
    "charisma" => $monster->charisma,
    "xp" => $monster->xp,
    "challenge_rating" => $monster->challenge_rating,
    "hit_dice" => $monster->hit_dice,
    "languages" => $monster->languages,
  ];
}, $monsters);
