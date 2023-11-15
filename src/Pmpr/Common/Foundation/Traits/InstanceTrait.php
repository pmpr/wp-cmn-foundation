<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65551375772aa             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto mgkgeuqasqcaimou; } try { if (class_exists($egkyssmuqcwaciya)) { goto qguqeweisuimgyqk; } wp_die("\x63\141\x6e\40\156\157\x74\x20\x63\162\x65\141\x74\x65\40\151\x6e\x73\x74\141\x6e\143\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\x75\x65\163\x74\x65\144\40\143\x6c\141\163\163\x20\156\157\x74\x20\x65\170\151\x73\x74\x73\56"); goto eyiigmyweugmgckw; qguqeweisuimgyqk: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyiigmyweugmgckw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto syycscyugcgsquwm; mgkgeuqasqcaimou: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; syycscyugcgsquwm: return $owgumcsyqsamiemg; } }
