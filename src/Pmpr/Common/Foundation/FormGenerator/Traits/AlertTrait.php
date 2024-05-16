<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697d2b4114             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait AlertTrait { protected array $alerts = []; public function mikssmeuwaeumwqu() : array { return $this->alerts; } public function cuomeiwckekemywm(string $cmwygeyygwqaemaq, string $sqeykgyoooqysmca = self::ecioqysekgaasegg) : self { if (!$cmwygeyygwqaemaq) { goto mmkssgccamceekkq; } $wkaqekwwgqsqwcoi = false; switch ($sqeykgyoooqysmca) { case self::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; goto uqqqaqwamieuwuky; case self::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; goto uqqqaqwamieuwuky; case self::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; goto uqqqaqwamieuwuky; case self::ecioqysekgaasegg: $wkaqekwwgqsqwcoi = IconInterface::ksosaawiuaiosemw; goto uqqqaqwamieuwuky; } geaucesekwmkgusc: uqqqaqwamieuwuky: $this->alerts[] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::TEXT => $cmwygeyygwqaemaq, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; mmkssgccamceekkq: return $this; } }
