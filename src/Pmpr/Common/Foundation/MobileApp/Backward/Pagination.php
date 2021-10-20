<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616febac1ec3f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto ccoyciugiugeaqea; cyemeggkueyokkym: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto yogaoogoakmaggii; kooyawcskwoagaqi: $this->isPrivate = true; goto uqcmqacyoyegyica; yogaoogoakmaggii: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto kooyawcskwoagaqi; ccoyciugiugeaqea: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto cyemeggkueyokkym; uqcmqacyoyegyica: parent::__construct(); goto rweicwousieukigk; rweicwousieukigk: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
