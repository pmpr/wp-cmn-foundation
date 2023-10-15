<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652be3bfc2462             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ygwykwccoweycoci; } try { if (class_exists($egkyssmuqcwaciya)) { goto essyuyoweqekagsi; } wp_die("\143\141\x6e\40\156\157\x74\40\x63\x72\145\141\x74\x65\40\151\156\163\x74\141\156\143\145\x20\146\x72\x6f\40{$egkyssmuqcwaciya}\54\40\162\x65\x71\x75\145\x73\x74\145\x64\x20\143\x6c\141\163\163\x20\x6e\157\x74\x20\x65\170\151\x73\164\163\x2e"); goto ogwiccocwuiuyyqk; essyuyoweqekagsi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ogwiccocwuiuyyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gsskeqkeaaoqcqua; ygwykwccoweycoci: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gsskeqkeaaoqcqua: return $owgumcsyqsamiemg; } }
