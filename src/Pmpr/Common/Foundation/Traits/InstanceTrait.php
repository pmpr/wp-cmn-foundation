<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae362a4046f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iioauiogmamumiym; } try { if (class_exists($egkyssmuqcwaciya)) { goto yqqwweuisgoskcwa; } wp_die("\143\x61\156\x20\156\157\x74\x20\x63\162\x65\x61\164\145\x20\151\156\x73\164\141\x6e\143\145\40\146\162\157\x20{$egkyssmuqcwaciya}\54\40\x72\145\x71\165\145\x73\x74\x65\144\x20\143\x6c\141\163\163\40\156\157\x74\40\145\170\151\x73\164\x73\56"); goto uaaiuqickwysiqiy; yqqwweuisgoskcwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uaaiuqickwysiqiy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcqkgsaesmsuea; iioauiogmamumiym: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcqkgsaesmsuea: return $owgumcsyqsamiemg; } }
