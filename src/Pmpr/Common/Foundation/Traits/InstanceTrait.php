<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5844728f1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uiowwckamqucksim; } try { if (class_exists($egkyssmuqcwaciya)) { goto oegaywiwywuyksaq; } wp_die("\x63\x61\x6e\40\x6e\157\164\40\143\x72\145\141\164\145\40\151\156\x73\164\x61\156\143\145\x20\146\162\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\x75\145\163\164\x65\x64\40\x63\x6c\141\x73\x73\x20\x6e\x6f\x74\x20\145\170\x69\x73\164\x73\x2e"); goto eyskqaccgeomqmyw; oegaywiwywuyksaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyskqaccgeomqmyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wscikmsmwmocsqeu; uiowwckamqucksim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wscikmsmwmocsqeu: return $owgumcsyqsamiemg; } }
