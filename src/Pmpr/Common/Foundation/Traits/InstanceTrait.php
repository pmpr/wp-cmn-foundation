<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65552e4514031             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mgkgeuqasqcaimou; } try { if (class_exists($egkyssmuqcwaciya)) { goto qguqeweisuimgyqk; } wp_die("\143\x61\156\x20\156\157\164\x20\x63\x72\x65\x61\164\x65\40\151\156\163\164\141\156\x63\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\162\145\x71\165\145\163\164\145\x64\x20\143\x6c\141\163\163\40\x6e\157\164\40\145\170\x69\163\x74\x73\x2e"); goto eyiigmyweugmgckw; qguqeweisuimgyqk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyiigmyweugmgckw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto syycscyugcgsquwm; mgkgeuqasqcaimou: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; syycscyugcgsquwm: return $owgumcsyqsamiemg; } }
