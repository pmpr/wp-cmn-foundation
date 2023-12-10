<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657605ed631a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait AlertTrait { protected array $alerts = []; public function mikssmeuwaeumwqu() : array { return $this->alerts; } public function cuomeiwckekemywm(string $cmwygeyygwqaemaq, string $sqeykgyoooqysmca = self::ecioqysekgaasegg) : self { if (!$cmwygeyygwqaemaq) { goto euasgwagscuiswiy; } switch ($sqeykgyoooqysmca) { case self::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; goto cmcemcuymikqukce; case self::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; goto cmcemcuymikqukce; case self::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; goto cmcemcuymikqukce; case self::ecioqysekgaasegg: default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; goto cmcemcuymikqukce; } kwgwooqigowksicc: cmcemcuymikqukce: $this->alerts[] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::TEXT => $cmwygeyygwqaemaq, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; euasgwagscuiswiy: return $this; } }
