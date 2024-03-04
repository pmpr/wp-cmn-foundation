<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e52816305b8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gwwyoyaqosoggkcu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gaagyegguueymiec; } wp_die("\143\141\156\x20\156\157\x74\40\x63\x72\145\x61\x74\145\x20\151\x6e\x73\164\x61\x6e\143\x65\x20\146\162\x6f\x20{$egkyssmuqcwaciya}\54\40\x72\145\x71\x75\x65\x73\164\145\144\40\143\154\x61\163\x73\x20\x6e\x6f\164\40\145\170\x69\163\x74\163\x2e"); goto sosqqwiqmeqkwcsm; gaagyegguueymiec: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sosqqwiqmeqkwcsm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wwwkcwcigkeqiqwo; gwwyoyaqosoggkcu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wwwkcwcigkeqiqwo: return $owgumcsyqsamiemg; } }
