<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675819f57c47e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->slug = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ouywiegeiyuaaawo, ''); $this->title = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qescuiwgsyuikume, ''); $this->content = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ssmskyqgcmeiayco, ''); $this->isPrivate = true; parent::__construct(); } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { return parent::qakiyayqiysiqqeo($this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->aqiqkkuauegomyoi($this->souwykwwmyygqyqi()), $post); } }
