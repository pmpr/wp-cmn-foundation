<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6570b300bc64f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait AlertTrait { protected array $alerts = []; public function mikssmeuwaeumwqu() : array { return $this->alerts; } public function cuomeiwckekemywm(string $cmwygeyygwqaemaq, string $sqeykgyoooqysmca = self::ecioqysekgaasegg) : self { if (!$cmwygeyygwqaemaq) { goto wmwocowecyoasqeg; } switch ($sqeykgyoooqysmca) { case self::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; goto kqaymsayeiukkaay; case self::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; goto kqaymsayeiukkaay; case self::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; goto kqaymsayeiukkaay; case self::ecioqysekgaasegg: default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; goto kqaymsayeiukkaay; } wgeuisockoogeccc: kqaymsayeiukkaay: $this->alerts[] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::TEXT => $cmwygeyygwqaemaq, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; wmwocowecyoasqeg: return $this; } }
