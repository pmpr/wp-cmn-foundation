<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7b6f01188c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto kmcygqkmwcgwamkw; sueeqeioeiwkscao: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto mmesoisgqucowwms; uieuouugckwokske: parent::__construct(); goto seaiwkkgyyegiyug; mmesoisgqucowwms: $this->isPrivate = true; goto uieuouugckwokske; gysmigyakgaakeoy: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto sueeqeioeiwkscao; kmcygqkmwcgwamkw: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto gysmigyakgaakeoy; seaiwkkgyyegiyug: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = wpautop($this->souwykwwmyygqyqi()); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
