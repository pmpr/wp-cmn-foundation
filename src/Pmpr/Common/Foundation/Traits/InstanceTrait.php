<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492e761a69f3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto eyskqaccgeomqmyw; } try { if (class_exists($egkyssmuqcwaciya)) { goto ysaumykuimqigeqa; } wp_die("\x63\141\156\40\x6e\157\x74\x20\x63\x72\145\x61\x74\145\40\x69\x6e\x73\x74\141\156\x63\x65\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\161\x75\145\x73\x74\145\x64\40\x63\154\141\163\163\x20\x6e\x6f\x74\x20\x65\170\151\163\164\x73\56"); goto oegaywiwywuyksaq; ysaumykuimqigeqa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; oegaywiwywuyksaq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto uiowwckamqucksim; eyskqaccgeomqmyw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; uiowwckamqucksim: return $owgumcsyqsamiemg; } }
