<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f1a4291a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait AlertTrait { protected array $alerts = []; public function mikssmeuwaeumwqu() : array { return $this->alerts; } public function cuomeiwckekemywm(string $cmwygeyygwqaemaq, string $sqeykgyoooqysmca = self::ecioqysekgaasegg) : self { if (!$cmwygeyygwqaemaq) { goto eauwuykuucsasmyi; } $wkaqekwwgqsqwcoi = false; switch ($sqeykgyoooqysmca) { case self::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; goto qwcgeuyaymqioiue; case self::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; goto qwcgeuyaymqioiue; case self::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; goto qwcgeuyaymqioiue; case self::ecioqysekgaasegg: $wkaqekwwgqsqwcoi = IconInterface::ksosaawiuaiosemw; goto qwcgeuyaymqioiue; } ikwqycaoqgesokkm: qwcgeuyaymqioiue: $this->alerts[] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::TEXT => $cmwygeyygwqaemaq, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; eauwuykuucsasmyi: return $this; } }
