<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616cb1945cf00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto kooyawcskwoagaqi; rweicwousieukigk: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto squwcqweceecssck; uqcmqacyoyegyica: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto rweicwousieukigk; kuouoyaeougsusic: parent::__construct(); goto gkumkcqesowgysme; squwcqweceecssck: $this->isPrivate = true; goto kuouoyaeougsusic; kooyawcskwoagaqi: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto uqcmqacyoyegyica; gkumkcqesowgysme: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
