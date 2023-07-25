<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bf957f3fc45             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ksiuacaiaiauywae; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } wp_die("\143\x61\156\40\x6e\157\x74\40\x63\162\145\x61\164\145\x20\x69\156\163\164\x61\156\143\145\40\146\x72\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\x71\x75\145\163\x74\x65\144\40\143\x6c\141\163\163\40\156\x6f\164\40\x65\170\151\163\x74\x73\x2e"); goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swqkecoseauacwio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mqcoyamukmaoqwmw; ksiuacaiaiauywae: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mqcoyamukmaoqwmw: return $owgumcsyqsamiemg; } }
