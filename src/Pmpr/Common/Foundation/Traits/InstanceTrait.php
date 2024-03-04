<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e50f284816c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gwwyoyaqosoggkcu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gaagyegguueymiec; } wp_die("\143\141\x6e\40\x6e\157\x74\40\143\x72\145\x61\164\145\x20\151\x6e\163\x74\x61\x6e\x63\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\x65\x73\x74\x65\x64\x20\143\154\141\163\163\40\156\x6f\164\40\x65\170\151\163\x74\163\x2e"); goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sosqqwiqmeqkwcsm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wwwkcwcigkeqiqwo: return $owgumcsyqsamiemg; } }
