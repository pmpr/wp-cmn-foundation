<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5877b2049c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uiowwckamqucksim; } try { if (class_exists($egkyssmuqcwaciya)) { goto oegaywiwywuyksaq; } wp_die("\143\x61\156\40\156\157\x74\x20\143\162\145\x61\164\145\40\x69\x6e\163\x74\141\156\143\145\x20\146\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\162\145\x71\x75\x65\163\164\145\144\x20\143\154\141\163\x73\40\x6e\157\x74\40\145\170\x69\x73\164\x73\x2e"); goto eyskqaccgeomqmyw; oegaywiwywuyksaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyskqaccgeomqmyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wscikmsmwmocsqeu; uiowwckamqucksim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wscikmsmwmocsqeu: return $owgumcsyqsamiemg; } }
