<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b61855c9112             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->slug = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ouywiegeiyuaaawo, ''); $this->title = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::qescuiwgsyuikume, ''); $this->content = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::ssmskyqgcmeiayco, ''); $this->isPrivate = true; parent::__construct(); } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return parent::qakiyayqiysiqqeo($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($this->souwykwwmyygqyqi()), $post); } }
