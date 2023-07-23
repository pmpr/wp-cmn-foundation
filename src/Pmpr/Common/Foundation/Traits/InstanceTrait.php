<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bd2aa8ad2d8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ksiuacaiaiauywae; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } wp_die("\143\x61\x6e\40\156\x6f\164\x20\x63\162\x65\141\x74\145\x20\151\156\x73\164\x61\156\x63\x65\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\54\40\162\x65\161\x75\145\163\x74\x65\144\40\x63\154\x61\163\163\x20\156\x6f\164\x20\x65\170\x69\x73\x74\163\56"); goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swqkecoseauacwio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mqcoyamukmaoqwmw; ksiuacaiaiauywae: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mqcoyamukmaoqwmw: return $owgumcsyqsamiemg; } }
