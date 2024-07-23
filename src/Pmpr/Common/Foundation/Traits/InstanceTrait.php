<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669f571e3146a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto suaymckwwgmugsaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto swmgucaogosuueug; } wp_die("\143\x61\156\x20\x6e\x6f\x74\40\143\x72\x65\141\164\x65\x20\151\156\x73\164\x61\156\x63\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\x73\164\x65\x64\40\x63\x6c\141\163\x73\40\x6e\x6f\164\x20\x65\170\x69\x73\164\x73\x2e"); goto uwsmcsiiisuocgwg; swmgucaogosuueug: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uwsmcsiiisuocgwg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wsqoskqgyooqeyga; suaymckwwgmugsaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wsqoskqgyooqeyga: return $owgumcsyqsamiemg; } }
