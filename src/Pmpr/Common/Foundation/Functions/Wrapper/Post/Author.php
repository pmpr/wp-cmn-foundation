<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             684453fb09ba0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function get() : ?string { return get_the_author(); } public function qmgcisuuikgmqcsu() : ?string { return get_the_author_link(); } public function igawqaomowicuayw($aiowsaccomcoikus, $qscaoekmoooeuyqg = null) : string { if ($aiowsaccomcoikus === Constants::gouqcwikiiygyasc) { $aiowsaccomcoikus = 'ID'; } return get_the_author_meta($aiowsaccomcoikus, $qscaoekmoooeuyqg); } public function mkaiaewoyaimieqg($qaqgaqikqmcmukem = null, string $ymqmyyeuycgmigyo = '') : string { return get_author_posts_url($qaqgaqikqmcmukem, $ymqmyyeuycgmigyo); } public function yaqmookisiusemak($qaqgaqikqmcmukem = null, string $kqqoowikisucgqgy = '') : string { return get_author_feed_link($qaqgaqikqmcmukem, $kqqoowikisucgqgy); } }
