<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616b218dbe61b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Page\Page; class Pagination extends Page { protected ?string $content = ''; public function __construct($ywmkwiwkosakssii = []) { goto umsskuauuckkimsm; qkcoaggwwskkqggy: $this->content = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT); goto cigmikkigagaoism; umsskuauuckkimsm: $this->slug = ManipulateArray::get($ywmkwiwkosakssii, self::SLUG); goto kiqmqoqcmswwwmug; cigmikkigagaoism: parent::__construct(); goto sssomqswysysigko; kiqmqoqcmswwwmug: $this->title = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE); goto qkcoaggwwskkqggy; sssomqswysysigko: } public function souwykwwmyygqyqi() { return $this->content; } public function qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post) : ?string { $ewgwqamkygiqaawc = $this->souwykwwmyygqyqi(); return parent::qakiyayqiysiqqeo($ewgwqamkygiqaawc, $post); } }
