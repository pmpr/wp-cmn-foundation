<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64dcfc1086ab1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oaeuicecqcyymume; } try { if (class_exists($egkyssmuqcwaciya)) { goto goqgqygaasmeogqc; } wp_die("\143\141\156\x20\156\157\164\x20\143\x72\145\x61\x74\x65\40\x69\x6e\x73\x74\141\156\x63\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\x75\x65\163\164\145\x64\x20\143\x6c\x61\163\163\40\x6e\157\164\40\x65\170\x69\x73\164\163\x2e"); goto oiokgqmqeiooeksu; goqgqygaasmeogqc: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; oiokgqmqeiooeksu: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto seoyoigiqioiakyq; oaeuicecqcyymume: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; seoyoigiqioiakyq: return $owgumcsyqsamiemg; } }
