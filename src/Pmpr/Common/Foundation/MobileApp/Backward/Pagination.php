<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c9e363c910             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto yogaoogoakmaggii; kooyawcskwoagaqi: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto uqcmqacyoyegyica; squwcqweceecssck: parent::__construct(); goto kuouoyaeougsusic; rweicwousieukigk: $this->isPrivate = true; goto squwcqweceecssck; yogaoogoakmaggii: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto kooyawcskwoagaqi; uqcmqacyoyegyica: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto rweicwousieukigk; kuouoyaeougsusic: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
