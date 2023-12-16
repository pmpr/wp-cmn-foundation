<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657d6bb4c8522             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait AlertTrait { protected array $alerts = []; public function mikssmeuwaeumwqu() : array { return $this->alerts; } public function cuomeiwckekemywm(string $cmwygeyygwqaemaq, string $sqeykgyoooqysmca = self::ecioqysekgaasegg) : self { if (!$cmwygeyygwqaemaq) { goto qyqqmmieeeuceawg; } switch ($sqeykgyoooqysmca) { case self::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; goto qmmewcqkiaugaass; case self::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; goto qmmewcqkiaugaass; case self::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; goto qmmewcqkiaugaass; case self::ecioqysekgaasegg: default: $wkaqekwwgqsqwcoi = IconInterface::kiqsyooieeusaemw; goto qmmewcqkiaugaass; } ieqcwaqqkgqecogy: qmmewcqkiaugaass: $this->alerts[] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::TEXT => $cmwygeyygwqaemaq, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; qyqqmmieeeuceawg: return $this; } }
