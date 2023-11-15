<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65551107e6be5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eyiigmyweugmgckw; } try { if (class_exists($egkyssmuqcwaciya)) { goto qakcamuiqmiscugu; } wp_die("\143\x61\x6e\x20\156\x6f\x74\40\143\x72\145\x61\x74\x65\x20\151\156\x73\164\x61\x6e\x63\145\40\146\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\145\161\x75\145\x73\164\x65\x64\x20\143\154\141\x73\x73\x20\156\x6f\164\x20\145\170\151\163\164\x73\x2e"); goto qguqeweisuimgyqk; qakcamuiqmiscugu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qguqeweisuimgyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mgkgeuqasqcaimou; eyiigmyweugmgckw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mgkgeuqasqcaimou: return $owgumcsyqsamiemg; } }
