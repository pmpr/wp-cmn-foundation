<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d714733e69             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto suaymckwwgmugsaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto swmgucaogosuueug; } wp_die("\x63\x61\x6e\40\x6e\x6f\164\x20\143\162\x65\141\164\145\40\151\156\x73\164\141\x6e\x63\x65\40\146\162\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\165\x65\163\x74\x65\144\40\143\154\141\x73\163\40\x6e\157\164\40\x65\x78\x69\163\x74\x73\x2e"); goto uwsmcsiiisuocgwg; swmgucaogosuueug: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uwsmcsiiisuocgwg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wsqoskqgyooqeyga; suaymckwwgmugsaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wsqoskqgyooqeyga: return $owgumcsyqsamiemg; } }
