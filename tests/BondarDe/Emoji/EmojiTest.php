<?php

namespace Tests\BondarDe\Emoji;

use BondarDe\Emoji\Emoji;
use PHPUnit\Framework\TestCase;

class EmojiTest extends TestCase
{
    public function testStaticEmojiGetter()
    {
        $expected = Emoji::SEE_NO_EVIL_MONKEY;
        $actual = Emoji::seeNoEvilMonkey();

        self::assertEquals(
            $expected,
            $actual
        );
    }
}
