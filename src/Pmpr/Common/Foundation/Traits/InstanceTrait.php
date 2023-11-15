<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65550f4a9e63e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eyiigmyweugmgckw; } try { if (class_exists($egkyssmuqcwaciya)) { goto qakcamuiqmiscugu; } wp_die("\x63\141\x6e\x20\x6e\157\x74\x20\x63\x72\x65\x61\164\x65\x20\151\156\x73\164\x61\156\x63\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\165\x65\163\x74\x65\144\40\x63\x6c\x61\163\x73\40\156\x6f\x74\x20\x65\x78\151\x73\164\x73\56"); goto qguqeweisuimgyqk; qakcamuiqmiscugu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qguqeweisuimgyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mgkgeuqasqcaimou; eyiigmyweugmgckw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mgkgeuqasqcaimou: return $owgumcsyqsamiemg; } }
