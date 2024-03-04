<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5243e53d59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gwwyoyaqosoggkcu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gaagyegguueymiec; } wp_die("\x63\141\x6e\x20\x6e\157\x74\40\x63\x72\145\x61\164\145\40\x69\156\163\x74\x61\x6e\x63\x65\40\146\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\145\163\164\x65\144\40\143\154\x61\x73\x73\x20\x6e\157\164\x20\x65\170\x69\163\164\163\x2e"); goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sosqqwiqmeqkwcsm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wwwkcwcigkeqiqwo: return $owgumcsyqsamiemg; } }
