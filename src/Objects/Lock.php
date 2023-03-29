<?php

namespace BondarDe\Emoji\Objects;

use BondarDe\Emoji\HasStaticGetters;

class Lock
{
    use HasStaticGetters;

    const LOCKED = '🔒';
    const UNLOCKED = '🔓';
    const LOCKED_WITH_PEN = '🔏';
    const LOCKED_WITH_KEY = '🔐';
    const KEY = '🔑';
    const OLD_KEY = '🗝️';
}
