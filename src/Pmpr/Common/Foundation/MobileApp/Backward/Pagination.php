<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f4dc7e1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto uwmcugkwqwcuqqsq; kmcygqkmwcgwamkw: parent::__construct(); goto gysmigyakgaakeoy; cycasoiysmksuwqk: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto muimagegskoisckc; uwmcugkwqwcuqqsq: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto cycasoiysmksuwqk; yicaqocukqoauqgc: $this->isPrivate = true; goto kmcygqkmwcgwamkw; muimagegskoisckc: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto yicaqocukqoauqgc; gysmigyakgaakeoy: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
