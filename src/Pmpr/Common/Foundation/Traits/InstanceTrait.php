<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bf7d5a589a9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ksiuacaiaiauywae; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } wp_die("\143\141\156\x20\x6e\x6f\164\40\x63\162\x65\141\x74\145\x20\151\x6e\163\x74\x61\156\x63\145\40\146\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\165\145\163\x74\x65\144\x20\x63\x6c\x61\163\x73\40\156\157\x74\40\x65\x78\x69\x73\164\163\56"); goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swqkecoseauacwio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mqcoyamukmaoqwmw; ksiuacaiaiauywae: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mqcoyamukmaoqwmw: return $owgumcsyqsamiemg; } }
