<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a2a0681f58f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iioauiogmamumiym; } try { if (class_exists($egkyssmuqcwaciya)) { goto yqqwweuisgoskcwa; } wp_die("\143\141\x6e\x20\x6e\x6f\164\40\143\x72\145\141\164\x65\x20\x69\156\163\164\141\156\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\161\x75\x65\x73\164\x65\x64\40\143\154\141\x73\x73\40\156\x6f\164\x20\145\170\151\x73\164\x73\x2e"); goto uaaiuqickwysiqiy; yqqwweuisgoskcwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uaaiuqickwysiqiy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcqkgsaesmsuea; iioauiogmamumiym: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcqkgsaesmsuea: return $owgumcsyqsamiemg; } }
