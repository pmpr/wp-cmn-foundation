<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616bfa941e42b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto yqkqmmeaasceaaui; qaqkcsmkgkuieoqq: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto mwegucqywugusieu; yqkqmmeaasceaaui: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto xamgygckoocqmyae; xamgygckoocqmyae: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto qaqkcsmkgkuieoqq; mwegucqywugusieu: parent::__construct(); goto qgqmieaieecsksyo; qgqmieaieecsksyo: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
