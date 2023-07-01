<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649fe76666a34             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto sauwooccoqomkyei; } try { if (class_exists($egkyssmuqcwaciya)) { goto owgsqkkemawskgos; } wp_die("\x63\x61\156\x20\x6e\x6f\164\40\143\162\145\141\164\x65\40\151\156\x73\164\141\x6e\143\x65\x20\146\x72\157\x20{$egkyssmuqcwaciya}\54\40\162\x65\161\x75\145\x73\x74\145\144\x20\143\x6c\141\x73\163\40\x6e\157\164\x20\x65\x78\x69\x73\x74\163\56"); goto yuouykoggqagseog; owgsqkkemawskgos: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yuouykoggqagseog: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uecmkwyokqqcysim; sauwooccoqomkyei: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uecmkwyokqqcysim: return $owgumcsyqsamiemg; } }
