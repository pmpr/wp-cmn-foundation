<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64ca123209c3d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::ouywiegeiyuaaawo, ''); $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::qescuiwgsyuikume, ''); $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::ssmskyqgcmeiayco, ''); $this->isPrivate = true; parent::__construct(); } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return parent::qakiyayqiysiqqeo(wpautop($this->souwykwwmyygqyqi()), $post); } }
