<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616cac4b12ca0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto kooyawcskwoagaqi; rweicwousieukigk: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto squwcqweceecssck; squwcqweceecssck: $this->isPrivate = true; goto kuouoyaeougsusic; kooyawcskwoagaqi: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto uqcmqacyoyegyica; uqcmqacyoyegyica: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto rweicwousieukigk; kuouoyaeougsusic: parent::__construct(); goto gkumkcqesowgysme; gkumkcqesowgysme: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
