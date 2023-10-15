<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652b9c2925f06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ygwykwccoweycoci; } try { if (class_exists($egkyssmuqcwaciya)) { goto essyuyoweqekagsi; } wp_die("\x63\141\x6e\40\x6e\x6f\164\x20\x63\x72\x65\141\164\145\x20\151\x6e\x73\164\x61\156\143\145\x20\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\161\165\x65\163\x74\x65\x64\x20\143\x6c\141\x73\163\x20\156\x6f\164\40\x65\170\151\x73\164\x73\x2e"); goto ogwiccocwuiuyyqk; essyuyoweqekagsi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ogwiccocwuiuyyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gsskeqkeaaoqcqua; ygwykwccoweycoci: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gsskeqkeaaoqcqua: return $owgumcsyqsamiemg; } }
