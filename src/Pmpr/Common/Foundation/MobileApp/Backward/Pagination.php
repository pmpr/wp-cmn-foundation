<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616d6b1849937             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto kooyawcskwoagaqi; rweicwousieukigk: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto squwcqweceecssck; kooyawcskwoagaqi: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto uqcmqacyoyegyica; kuouoyaeougsusic: parent::__construct(); goto gkumkcqesowgysme; squwcqweceecssck: $this->isPrivate = true; goto kuouoyaeougsusic; uqcmqacyoyegyica: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto rweicwousieukigk; gkumkcqesowgysme: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
