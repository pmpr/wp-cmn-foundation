<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65b0ce75e5a31             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iioauiogmamumiym; } try { if (class_exists($egkyssmuqcwaciya)) { goto yqqwweuisgoskcwa; } wp_die("\x63\141\x6e\x20\156\x6f\x74\40\143\x72\x65\141\x74\x65\40\x69\156\163\164\x61\156\143\145\x20\146\162\157\40{$egkyssmuqcwaciya}\54\x20\162\x65\x71\x75\x65\163\164\145\x64\40\143\x6c\141\163\x73\x20\156\x6f\164\40\145\x78\x69\163\x74\163\x2e"); goto uaaiuqickwysiqiy; yqqwweuisgoskcwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uaaiuqickwysiqiy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcqkgsaesmsuea; iioauiogmamumiym: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcqkgsaesmsuea: return $owgumcsyqsamiemg; } }
