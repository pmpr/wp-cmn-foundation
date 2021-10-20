<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fffc9ea295             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto ccoyciugiugeaqea; yogaoogoakmaggii: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto kooyawcskwoagaqi; cyemeggkueyokkym: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto yogaoogoakmaggii; uqcmqacyoyegyica: parent::__construct(); goto rweicwousieukigk; ccoyciugiugeaqea: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto cyemeggkueyokkym; kooyawcskwoagaqi: $this->isPrivate = true; goto uqcmqacyoyegyica; rweicwousieukigk: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
