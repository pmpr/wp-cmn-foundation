<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a51f6f3e3a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iioauiogmamumiym; } try { if (class_exists($egkyssmuqcwaciya)) { goto yqqwweuisgoskcwa; } wp_die("\143\x61\x6e\x20\x6e\x6f\x74\40\143\162\145\x61\164\x65\x20\151\x6e\163\164\141\156\143\145\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\165\145\x73\164\145\x64\40\143\154\141\x73\163\x20\x6e\157\x74\40\x65\x78\151\x73\164\x73\56"); goto uaaiuqickwysiqiy; yqqwweuisgoskcwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uaaiuqickwysiqiy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcqkgsaesmsuea; iioauiogmamumiym: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcqkgsaesmsuea: return $owgumcsyqsamiemg; } }
