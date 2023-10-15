<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652bc5135eed3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ygwykwccoweycoci; } try { if (class_exists($egkyssmuqcwaciya)) { goto essyuyoweqekagsi; } wp_die("\x63\141\156\x20\156\157\x74\40\143\x72\x65\141\x74\145\x20\151\156\x73\x74\141\156\x63\x65\x20\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\x65\163\x74\145\x64\x20\x63\154\141\x73\163\x20\x6e\157\164\40\145\x78\151\x73\164\163\56"); goto ogwiccocwuiuyyqk; essyuyoweqekagsi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ogwiccocwuiuyyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gsskeqkeaaoqcqua; ygwykwccoweycoci: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gsskeqkeaaoqcqua: return $owgumcsyqsamiemg; } }
