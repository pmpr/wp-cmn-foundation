<?php
 namespace Pmpr\Common\Foundation\Decorator\Post; class DecoratorPage extends Common { public static function getLink($post = false, $E7UIN = false, $pfScr = false) { return get_page_link($post, $E7UIN, $pfScr); } }
