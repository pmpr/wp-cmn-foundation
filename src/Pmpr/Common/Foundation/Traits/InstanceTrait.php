<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c3a21eaac3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto suaymckwwgmugsaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto swmgucaogosuueug; } wp_die("\143\x61\156\x20\x6e\x6f\x74\40\x63\x72\x65\x61\164\x65\40\x69\156\x73\x74\x61\156\x63\145\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\40\x72\x65\161\x75\145\163\164\145\x64\40\x63\154\141\x73\163\x20\x6e\x6f\x74\x20\145\x78\x69\163\164\x73\56"); goto uwsmcsiiisuocgwg; swmgucaogosuueug: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uwsmcsiiisuocgwg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wsqoskqgyooqeyga; suaymckwwgmugsaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wsqoskqgyooqeyga: return $owgumcsyqsamiemg; } }
