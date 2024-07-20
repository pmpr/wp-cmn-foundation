<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c444fadf9a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto suaymckwwgmugsaa; } try { if (class_exists($egkyssmuqcwaciya)) { goto swmgucaogosuueug; } wp_die("\x63\141\x6e\x20\x6e\157\x74\x20\143\x72\145\x61\164\145\x20\151\x6e\163\x74\141\x6e\x63\x65\40\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\x65\x73\164\x65\x64\x20\x63\154\x61\163\x73\40\x6e\x6f\x74\40\145\x78\151\x73\164\163\x2e"); goto uwsmcsiiisuocgwg; swmgucaogosuueug: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uwsmcsiiisuocgwg: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wsqoskqgyooqeyga; suaymckwwgmugsaa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wsqoskqgyooqeyga: return $owgumcsyqsamiemg; } }
