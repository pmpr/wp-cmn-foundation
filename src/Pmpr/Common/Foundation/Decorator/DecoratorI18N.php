<?php
 namespace Pmpr\Common\Foundation\Decorator; class DecoratorI18N extends Decorator { public static function getLocale() : string { return get_locale(); } }
