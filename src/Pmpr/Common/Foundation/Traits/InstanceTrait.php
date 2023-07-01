<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649ff185c9886             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uecmkwyokqqcysim; } try { if (class_exists($egkyssmuqcwaciya)) { goto yuouykoggqagseog; } wp_die("\x63\141\156\40\156\x6f\x74\40\143\x72\x65\x61\164\145\40\151\156\163\x74\141\156\x63\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\54\40\162\x65\161\165\145\163\164\145\x64\x20\143\x6c\x61\163\x73\x20\156\157\x74\40\x65\x78\151\163\164\163\x2e"); goto sauwooccoqomkyei; yuouykoggqagseog: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sauwooccoqomkyei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aqqwuwmasekigeus; uecmkwyokqqcysim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aqqwuwmasekigeus: return $owgumcsyqsamiemg; } }
