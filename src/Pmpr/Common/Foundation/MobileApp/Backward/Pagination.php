<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616bf47da21b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto yqkqmmeaasceaaui; yqkqmmeaasceaaui: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto xamgygckoocqmyae; xamgygckoocqmyae: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto qaqkcsmkgkuieoqq; qaqkcsmkgkuieoqq: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto mwegucqywugusieu; mwegucqywugusieu: parent::__construct(); goto qgqmieaieecsksyo; qgqmieaieecsksyo: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
