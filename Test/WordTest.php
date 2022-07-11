<?php

namespace TZ\Test;

use PHPUnit\Framework\TestCase;
use TZ\Word;

class WordTest extends TestCase
{

    public function test() {
        require 'Word.php';
        $word=new Word();
        $text="А я гуляю по Москве гуляю. здесь я, гуляю гуляю по Москве гуляю здесь и я sds sds sds sds. sds?";
        $ARR=['гуляю'=>5,
            'sds'=>5,
            'я'=>3,
            'по'=>2,
            'Москве'=>2];
        $this->assertSame( $ARR, $word->topFive($text));

    }
}