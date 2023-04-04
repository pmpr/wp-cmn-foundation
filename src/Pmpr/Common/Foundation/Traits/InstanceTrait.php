<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642bcfe93b439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aayysiegiyweiyuu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gkoyqgogsukuowqi; } wp_die("\x63\x61\156\40\x6e\x6f\x74\x20\x63\x72\x65\141\164\145\x20\151\x6e\x73\164\141\x6e\143\x65\40\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\x65\163\164\145\144\40\143\x6c\141\x73\x73\x20\156\157\x74\40\x65\x78\151\163\x74\x73\56"); goto sgikkoswwyesqomo; gkoyqgogsukuowqi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sgikkoswwyesqomo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cksoeiwawiygyiyg; aayysiegiyweiyuu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cksoeiwawiygyiyg: return $owgumcsyqsamiemg; } }
