<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65425691bbe12             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qgoiooayqmqqsiok; } try { if (class_exists($egkyssmuqcwaciya)) { goto qiaqsassksqiuyae; } wp_die("\143\141\156\x20\x6e\157\x74\x20\x63\162\145\x61\x74\x65\40\x69\x6e\x73\164\x61\156\x63\x65\40\x66\x72\157\40{$egkyssmuqcwaciya}\54\40\162\x65\x71\x75\145\x73\x74\145\x64\x20\x63\x6c\141\163\163\x20\x6e\x6f\x74\x20\145\170\x69\163\x74\x73\x2e"); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qogqewiwmwiwskgm: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; qwigomakwmyiwkgo: return $owgumcsyqsamiemg; } }
