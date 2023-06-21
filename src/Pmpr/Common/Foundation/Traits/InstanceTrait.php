<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492ef49d4e3a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gscssgigiaqmgiuw; } try { if (class_exists($egkyssmuqcwaciya)) { goto wqkekssiaiaqkqck; } wp_die("\143\x61\156\40\x6e\x6f\x74\x20\143\162\x65\141\x74\x65\x20\x69\156\163\x74\x61\156\143\x65\x20\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\145\x73\x74\x65\144\40\143\x6c\x61\x73\163\40\156\x6f\x74\x20\x65\x78\x69\163\164\163\56"); goto wgagqmumyekewuge; wqkekssiaiaqkqck: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; wgagqmumyekewuge: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto muiggeckwwywcusy; gscssgigiaqmgiuw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; muiggeckwwywcusy: return $owgumcsyqsamiemg; } }
