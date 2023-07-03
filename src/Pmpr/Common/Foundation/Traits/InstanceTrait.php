<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a2700bd616e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uecmkwyokqqcysim; } try { if (class_exists($egkyssmuqcwaciya)) { goto yuouykoggqagseog; } wp_die("\x63\141\x6e\40\156\157\164\x20\x63\162\145\141\x74\x65\40\151\156\163\164\x61\x6e\x63\x65\x20\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\165\x65\163\x74\145\x64\x20\x63\x6c\x61\163\x73\40\x6e\x6f\164\40\145\170\x69\163\164\163\x2e"); goto sauwooccoqomkyei; yuouykoggqagseog: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sauwooccoqomkyei: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aqqwuwmasekigeus; uecmkwyokqqcysim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aqqwuwmasekigeus: return $owgumcsyqsamiemg; } }
