<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a68e6522f2a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uiowwckamqucksim; } try { if (class_exists($egkyssmuqcwaciya)) { goto oegaywiwywuyksaq; } wp_die("\143\141\156\40\x6e\x6f\x74\40\143\x72\145\x61\164\x65\40\x69\x6e\163\164\141\156\143\145\40\x66\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\145\x71\165\x65\163\164\x65\144\40\x63\154\x61\x73\163\40\156\157\164\x20\145\x78\x69\x73\164\x73\56"); goto eyskqaccgeomqmyw; oegaywiwywuyksaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyskqaccgeomqmyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wscikmsmwmocsqeu; uiowwckamqucksim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wscikmsmwmocsqeu: return $owgumcsyqsamiemg; } }
