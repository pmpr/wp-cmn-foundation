<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cfa40e39             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto aayysiegiyweiyuu; } try { if (class_exists($egkyssmuqcwaciya)) { goto gkoyqgogsukuowqi; } wp_die("\143\x61\156\40\156\157\164\x20\143\x72\x65\x61\x74\x65\x20\x69\x6e\163\164\141\156\x63\145\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\40\162\145\161\x75\x65\x73\x74\145\144\40\x63\x6c\141\x73\163\x20\x6e\x6f\164\x20\x65\170\151\163\x74\x73\56"); goto sgikkoswwyesqomo; gkoyqgogsukuowqi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; sgikkoswwyesqomo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cksoeiwawiygyiyg; aayysiegiyweiyuu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cksoeiwawiygyiyg: return $owgumcsyqsamiemg; } }
