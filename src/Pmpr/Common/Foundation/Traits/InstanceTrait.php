<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bfb79ebf306             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ksiuacaiaiauywae; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } wp_die("\x63\141\156\x20\156\157\164\40\x63\162\x65\141\164\145\40\x69\156\x73\164\141\x6e\143\x65\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\x65\x71\x75\x65\163\x74\145\144\40\143\154\141\163\x73\x20\x6e\157\x74\x20\145\170\151\163\x74\x73\x2e"); goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swqkecoseauacwio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mqcoyamukmaoqwmw; ksiuacaiaiauywae: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mqcoyamukmaoqwmw: return $owgumcsyqsamiemg; } }
