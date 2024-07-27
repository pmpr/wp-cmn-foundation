<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a57cff413d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uiowwckamqucksim; } try { if (class_exists($egkyssmuqcwaciya)) { goto oegaywiwywuyksaq; } wp_die("\143\141\156\40\x6e\x6f\164\x20\x63\162\145\x61\x74\145\x20\151\156\163\164\x61\x6e\x63\145\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\145\161\x75\x65\163\x74\x65\x64\x20\143\154\141\x73\x73\x20\156\x6f\164\40\x65\x78\x69\x73\164\163\56"); goto eyskqaccgeomqmyw; oegaywiwywuyksaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; eyskqaccgeomqmyw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wscikmsmwmocsqeu; uiowwckamqucksim: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wscikmsmwmocsqeu: return $owgumcsyqsamiemg; } }
