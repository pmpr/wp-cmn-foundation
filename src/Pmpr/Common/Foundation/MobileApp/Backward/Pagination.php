<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c170c184f4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto ysawmmcgoceiuqmg; saagquesokaackwy: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto aqgeugceemmqaemu; aqgeugceemmqaemu: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto ismmcscmkqogkwyo; ysawmmcgoceiuqmg: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto saagquesokaackwy; ismmcscmkqogkwyo: parent::__construct(); goto saiswigiqcyqmgmm; saiswigiqcyqmgmm: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
