<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a29041c5fc0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mgiykamgwsemmiio; } try { if (class_exists($egkyssmuqcwaciya)) { goto ieewmicwgqaigeqi; } wp_die("\143\x61\x6e\40\156\157\x74\x20\143\162\145\x61\x74\x65\40\151\x6e\163\x74\141\156\143\145\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\54\40\x72\145\x71\165\145\x73\x74\x65\x64\40\x63\x6c\141\x73\163\x20\x6e\x6f\x74\40\x65\x78\151\163\164\163\x2e"); goto ouokmaemueykkiqq; ieewmicwgqaigeqi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ouokmaemueykkiqq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto iwkyewqeogaamiou; mgiykamgwsemmiio: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; iwkyewqeogaamiou: return $owgumcsyqsamiemg; } }
