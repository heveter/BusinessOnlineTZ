<?php

namespace TZ;

class Word
{
    function topFive(string $text){

        $words = preg_split('/[\s,.!?]+/', $text);
        $wordscount = array_count_values($words);
        arsort($wordscount);
        $sliced_array = array_slice($wordscount, 0, 5);
        return $sliced_array;
    }
}