<?php


namespace App;


class TagParser
{
    public function parse(string $tags): array
    {
        return explode(', ', $tags);
    }
}