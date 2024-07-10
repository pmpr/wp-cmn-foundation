<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1c0bb2cf9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait AlertTrait { protected array $alerts = []; public function mikssmeuwaeumwqu() : array { return $this->alerts; } public function cuomeiwckekemywm(string $cmwygeyygwqaemaq, string $sqeykgyoooqysmca = self::ecioqysekgaasegg, bool $iyiskikeoeeysmiw = true) : self { if (!$cmwygeyygwqaemaq) { goto qmmewcqkiaugaass; } $wkaqekwwgqsqwcoi = false; if (!$iyiskikeoeeysmiw) { goto eyasmquoaokeamwq; } switch ($sqeykgyoooqysmca) { case self::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; goto miwaociiwmomieeg; case self::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; goto miwaociiwmomieeg; case self::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; goto miwaociiwmomieeg; case self::ecioqysekgaasegg: $wkaqekwwgqsqwcoi = IconInterface::ksosaawiuaiosemw; goto miwaociiwmomieeg; } gmkissoyacsksyko: miwaociiwmomieeg: eyasmquoaokeamwq: $this->alerts[] = [self::squoamkioomemiyi => $sqeykgyoooqysmca, self::TEXT => $cmwygeyygwqaemaq, self::qgqyauaqwqmqseim => $wkaqekwwgqsqwcoi]; qmmewcqkiaugaass: return $this; } }
