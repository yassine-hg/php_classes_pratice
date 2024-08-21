<?php
class AdamsUtils {
  static public $the_answer = 42;
  static public function addTowel($string) {
    return $string . " and a towel.";
  }
}

$items = "I brought apples";

echo AdamsUtils::$the_answer;
echo AdamsUtils:: addTowel($items);