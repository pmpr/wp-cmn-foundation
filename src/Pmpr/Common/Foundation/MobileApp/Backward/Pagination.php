<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c275d8431a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto yqwaggyckkquggqs; ysawmmcgoceiuqmg: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto saagquesokaackwy; yqwaggyckkquggqs: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto eeqmaiqacegskmae; saagquesokaackwy: parent::__construct(); goto aqgeugceemmqaemu; eeqmaiqacegskmae: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto ysawmmcgoceiuqmg; aqgeugceemmqaemu: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
