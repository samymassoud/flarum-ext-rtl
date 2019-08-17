<?php

use Flarum\Extend;
use Illuminate\Contracts\Events\Dispatcher;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/less/forum/extension.less'),
];
