<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6474c5025eaa2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto sgqaaocqgayiigos; } try { if (class_exists($egkyssmuqcwaciya)) { goto aosmakasyommmioc; } wp_die("\x63\141\x6e\40\x6e\x6f\x74\40\143\x72\x65\141\x74\145\40\151\x6e\x73\164\141\x6e\143\x65\x20\146\x72\157\x20{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\145\x73\x74\x65\x64\40\143\154\x61\163\163\40\156\x6f\x74\x20\145\170\151\x73\x74\x73\56"); goto swmkkiiauusieuqw; aosmakasyommmioc: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; swmkkiiauusieuqw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto wmyagwwmquqeyyok; sgqaaocqgayiigos: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; wmyagwwmquqeyyok: return $owgumcsyqsamiemg; } }
