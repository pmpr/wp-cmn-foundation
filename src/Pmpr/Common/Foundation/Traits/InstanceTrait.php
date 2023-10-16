<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652ce91af0c8e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ygwykwccoweycoci; } try { if (class_exists($egkyssmuqcwaciya)) { goto essyuyoweqekagsi; } wp_die("\x63\x61\156\40\x6e\157\164\40\x63\162\145\x61\x74\145\40\x69\156\163\x74\141\x6e\143\145\40\146\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\165\x65\x73\164\x65\x64\40\143\154\141\x73\x73\40\156\157\x74\40\145\x78\151\x73\x74\x73\x2e"); goto ogwiccocwuiuyyqk; essyuyoweqekagsi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ogwiccocwuiuyyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gsskeqkeaaoqcqua; ygwykwccoweycoci: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gsskeqkeaaoqcqua: return $owgumcsyqsamiemg; } }
