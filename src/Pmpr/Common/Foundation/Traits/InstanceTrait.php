<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5235100c8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gwwyoyaqosoggkcu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gaagyegguueymiec; } wp_die("\143\141\x6e\x20\156\157\x74\x20\143\162\x65\141\x74\145\x20\x69\156\163\164\141\x6e\143\145\40\x66\x72\157\40{$egkyssmuqcwaciya}\54\40\162\x65\161\x75\145\163\x74\x65\x64\x20\x63\x6c\141\x73\x73\x20\156\x6f\x74\40\145\170\151\163\164\163\56"); goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sosqqwiqmeqkwcsm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wwwkcwcigkeqiqwo: return $owgumcsyqsamiemg; } }
