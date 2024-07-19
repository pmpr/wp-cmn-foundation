<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669ada81ac791             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uwsmcsiiisuocgwg; } try { if (class_exists($egkyssmuqcwaciya)) { goto yomoeykcqyukscmi; } wp_die("\143\141\x6e\40\x6e\157\164\x20\143\162\x65\x61\164\x65\x20\151\x6e\163\164\x61\x6e\x63\x65\x20\x66\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\165\145\x73\x74\x65\x64\x20\x63\x6c\141\x73\163\40\156\x6f\164\x20\x65\x78\x69\163\164\163\x2e"); goto swmgucaogosuueug; yomoeykcqyukscmi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swmgucaogosuueug: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto suaymckwwgmugsaa; uwsmcsiiisuocgwg: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; suaymckwwgmugsaa: return $owgumcsyqsamiemg; } }
