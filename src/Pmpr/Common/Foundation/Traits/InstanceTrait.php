<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a52990da439             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto iioauiogmamumiym; } try { if (class_exists($egkyssmuqcwaciya)) { goto yqqwweuisgoskcwa; } wp_die("\143\141\156\x20\156\x6f\164\x20\x63\x72\145\141\x74\145\40\x69\x6e\x73\x74\x61\156\143\x65\40\x66\162\157\40{$egkyssmuqcwaciya}\54\x20\x72\145\x71\165\x65\163\164\145\144\x20\143\x6c\141\163\x73\40\156\157\x74\40\x65\x78\151\x73\x74\x73\56"); goto uaaiuqickwysiqiy; yqqwweuisgoskcwa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; uaaiuqickwysiqiy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto gmwcqkgsaesmsuea; iioauiogmamumiym: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gmwcqkgsaesmsuea: return $owgumcsyqsamiemg; } }
