<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616b3165eba45             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto xamgygckoocqmyae; qgqmieaieecsksyo: parent::__construct(); goto yacemkmocmaamgui; mwegucqywugusieu: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto qgqmieaieecsksyo; xamgygckoocqmyae: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto qaqkcsmkgkuieoqq; qaqkcsmkgkuieoqq: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto mwegucqywugusieu; yacemkmocmaamgui: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
