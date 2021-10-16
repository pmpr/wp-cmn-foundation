<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616b28be2e4f3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto uimsyaquwymkcaao; uimsyaquwymkcaao: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto msakgmkaaosagcgc; yqkqmmeaasceaaui: parent::__construct(); goto xamgygckoocqmyae; msakgmkaaosagcgc: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto ocwgmoemmmqwwmoi; ocwgmoemmmqwwmoi: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto yqkqmmeaasceaaui; xamgygckoocqmyae: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
