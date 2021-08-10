<?php
 namespace Pmpr\Common\Foundation\Decorator\Post; use Pmpr\Common\Foundation\Decorator\Decorator; abstract class Common extends Decorator { public static function getArchiveTitle() : string { return get_the_archive_title(); } public static function getArchiveDescription() : string { return get_the_archive_description(); } }
