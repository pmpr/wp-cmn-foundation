<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e509d3e9e34             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gwwyoyaqosoggkcu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gaagyegguueymiec; } wp_die("\143\x61\x6e\x20\156\x6f\164\x20\143\162\x65\x61\164\x65\x20\151\156\x73\x74\x61\156\143\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\165\x65\x73\x74\x65\144\x20\x63\x6c\141\x73\x73\40\156\157\x74\x20\x65\170\x69\163\x74\163\56"); goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sosqqwiqmeqkwcsm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wwwkcwcigkeqiqwo: return $owgumcsyqsamiemg; } }
