<?php

$name = getenv('NAME', true) ?: 'test';
echo sprintf('Hello %s!', $name);
>