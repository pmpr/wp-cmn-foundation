<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6555101b0ce72             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eyiigmyweugmgckw; } try { if (class_exists($egkyssmuqcwaciya)) { goto qakcamuiqmiscugu; } wp_die("\143\141\156\40\x6e\157\164\40\x63\x72\x65\x61\x74\x65\40\151\156\x73\164\141\x6e\x63\145\40\x66\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\145\161\x75\145\163\x74\x65\144\x20\143\x6c\141\x73\x73\x20\x6e\157\164\40\x65\x78\151\x73\164\163\56"); goto qguqeweisuimgyqk; qakcamuiqmiscugu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qguqeweisuimgyqk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mgkgeuqasqcaimou; eyiigmyweugmgckw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mgkgeuqasqcaimou: return $owgumcsyqsamiemg; } }
