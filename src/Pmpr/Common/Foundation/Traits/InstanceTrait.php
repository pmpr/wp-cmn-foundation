<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64dcf4c02a6a0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oaeuicecqcyymume; } try { if (class_exists($egkyssmuqcwaciya)) { goto goqgqygaasmeogqc; } wp_die("\x63\x61\x6e\40\156\157\164\40\143\162\145\141\x74\145\40\x69\156\x73\x74\141\x6e\143\x65\40\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\165\145\x73\x74\x65\x64\x20\143\154\x61\163\163\x20\156\157\x74\40\145\170\x69\163\x74\x73\x2e"); goto oiokgqmqeiooeksu; goqgqygaasmeogqc: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; oiokgqmqeiooeksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto seoyoigiqioiakyq; oaeuicecqcyymume: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; seoyoigiqioiakyq: return $owgumcsyqsamiemg; } }
