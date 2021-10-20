<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             617016132102d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto qoogiceokacewciw; iskmaskwiwguswym: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto wyysmocawoaemiew; qoogiceokacewciw: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto lsggiimkmcoccyqa; wyysmocawoaemiew: $this->isPrivate = true; goto oumecckuoogcisam; lsggiimkmcoccyqa: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto iskmaskwiwguswym; oumecckuoogcisam: parent::__construct(); goto isekoekueuaeuaew; isekoekueuaeuaew: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
