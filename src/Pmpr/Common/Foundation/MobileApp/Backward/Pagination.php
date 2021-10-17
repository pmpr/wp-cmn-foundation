<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616bf84f8d949             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto ocwgmoemmmqwwmoi; xamgygckoocqmyae: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto qaqkcsmkgkuieoqq; ocwgmoemmmqwwmoi: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto yqkqmmeaasceaaui; yqkqmmeaasceaaui: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto xamgygckoocqmyae; qaqkcsmkgkuieoqq: parent::__construct(); goto mwegucqywugusieu; mwegucqywugusieu: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
