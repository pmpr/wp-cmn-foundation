<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6555ae7732d3c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mgkgeuqasqcaimou; } try { if (class_exists($egkyssmuqcwaciya)) { goto qguqeweisuimgyqk; } wp_die("\143\x61\156\x20\156\x6f\164\x20\x63\162\145\141\164\x65\40\151\x6e\x73\164\x61\156\143\x65\x20\146\x72\157\40{$egkyssmuqcwaciya}\x2c\x20\162\145\x71\x75\x65\163\164\x65\x64\40\x63\154\141\163\163\x20\x6e\x6f\164\x20\x65\170\x69\x73\x74\x73\x2e"); goto eyiigmyweugmgckw; qguqeweisuimgyqk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyiigmyweugmgckw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto syycscyugcgsquwm; mgkgeuqasqcaimou: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; syycscyugcgsquwm: return $owgumcsyqsamiemg; } }
