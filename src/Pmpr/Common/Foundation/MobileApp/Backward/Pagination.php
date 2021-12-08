<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b07b697ecab             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto yoscwomwgukawius; yoscwomwgukawius: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto aswswoccyeayaooc; ewogoyaaykymakio: $this->isPrivate = true; goto qisgkugkmomqkqyy; qisgkugkmomqkqyy: parent::__construct(); goto miaqgsgmmucyukck; aswswoccyeayaooc: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto oceyqqosgiumoigk; oceyqqosgiumoigk: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto ewogoyaaykymakio; miaqgsgmmucyukck: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
