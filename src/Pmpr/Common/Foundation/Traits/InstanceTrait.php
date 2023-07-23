<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bd1d85ea3ef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ksiuacaiaiauywae; } try { if (class_exists($egkyssmuqcwaciya)) { goto kcieymewycqwegis; } wp_die("\143\x61\x6e\40\x6e\157\164\x20\x63\x72\145\x61\164\145\x20\x69\x6e\163\164\141\156\143\x65\40\x66\162\x6f\40{$egkyssmuqcwaciya}\54\40\x72\x65\161\x75\145\x73\164\145\x64\40\x63\x6c\141\x73\x73\40\x6e\157\164\40\x65\x78\151\x73\x74\x73\x2e"); goto swqkecoseauacwio; kcieymewycqwegis: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swqkecoseauacwio: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto mqcoyamukmaoqwmw; ksiuacaiaiauywae: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mqcoyamukmaoqwmw: return $owgumcsyqsamiemg; } }
