<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d5640862e9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto suaymckwwgmugsaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto swmgucaogosuueug; } wp_die("\x63\141\156\40\x6e\x6f\164\40\x63\x72\x65\141\164\145\x20\151\156\163\164\x61\x6e\x63\145\x20\146\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\x73\164\145\144\40\143\154\x61\x73\163\40\156\157\x74\40\145\170\x69\163\164\x73\x2e"); goto uwsmcsiiisuocgwg; swmgucaogosuueug: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uwsmcsiiisuocgwg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wsqoskqgyooqeyga; suaymckwwgmugsaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wsqoskqgyooqeyga: return $owgumcsyqsamiemg; } }
