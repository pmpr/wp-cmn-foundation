<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6817b3c04cb4a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\FormGenerator\Component as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Traits\AlertTrait; abstract class Component extends BaseClass { use AlertTrait; protected ?string $type = null; public function oockkqiqsssakuug(array $ywmkwiwkosakssii = []) : string { return $this->caokeucsksukesyo()->wmkogisswkckmeua()->oockkqiqsssakuug($ywmkwiwkosakssii); } public function gueasuouwqysmomu() : ?string { return $this->type; } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function cisyiemkeykgkomc() : string { $uusmaiomayssaecw = $this->mwikyscisascoeea(); if ($sqeykgyoooqysmca = $this->gueasuouwqysmomu()) { $uusmaiomayssaecw .= "_{$sqeykgyoooqysmca}"; } return $uusmaiomayssaecw; } }
