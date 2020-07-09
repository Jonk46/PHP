<?php

namespace Coursephp\Lesson11\Readers;

interface Readable
{
    public function getSrcId();
    public function getContent();
    public function getSrcInfo();
}
