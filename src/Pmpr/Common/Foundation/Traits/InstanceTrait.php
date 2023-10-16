<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652ce21619887             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ygwykwccoweycoci; } try { if (class_exists($egkyssmuqcwaciya)) { goto essyuyoweqekagsi; } wp_die("\x63\x61\156\x20\156\x6f\164\40\143\x72\x65\x61\x74\145\40\151\156\x73\x74\141\x6e\143\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\x65\163\164\145\144\40\143\154\141\x73\x73\x20\x6e\157\x74\40\145\x78\151\x73\x74\x73\x2e"); goto ogwiccocwuiuyyqk; essyuyoweqekagsi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ogwiccocwuiuyyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gsskeqkeaaoqcqua; ygwykwccoweycoci: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gsskeqkeaaoqcqua: return $owgumcsyqsamiemg; } }
