<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7c1de9c843             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); $this->isPrivate = true; parent::__construct(); } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
