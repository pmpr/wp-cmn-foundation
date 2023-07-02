<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a18c630610a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uecmkwyokqqcysim; } try { if (class_exists($egkyssmuqcwaciya)) { goto yuouykoggqagseog; } wp_die("\143\x61\156\x20\x6e\157\164\x20\x63\x72\x65\141\x74\x65\x20\x69\x6e\163\x74\141\156\x63\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\x75\145\163\x74\x65\x64\40\x63\154\141\163\163\40\156\157\x74\x20\145\x78\x69\163\x74\x73\56"); goto sauwooccoqomkyei; yuouykoggqagseog: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sauwooccoqomkyei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aqqwuwmasekigeus; uecmkwyokqqcysim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aqqwuwmasekigeus: return $owgumcsyqsamiemg; } }
