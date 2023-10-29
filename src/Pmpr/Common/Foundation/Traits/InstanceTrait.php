<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             653e69f902b90             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qgoiooayqmqqsiok; } try { if (class_exists($egkyssmuqcwaciya)) { goto qiaqsassksqiuyae; } wp_die("\143\x61\x6e\40\156\157\x74\40\x63\x72\x65\x61\164\x65\40\x69\x6e\163\x74\141\156\143\145\x20\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\145\161\x75\145\163\x74\145\144\x20\143\154\141\163\163\x20\156\157\x74\x20\145\170\151\163\x74\x73\x2e"); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qogqewiwmwiwskgm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qwigomakwmyiwkgo: return $owgumcsyqsamiemg; } }
