<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a195306176b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qsgagomkgqcmscyu; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmqsgkwueccwgsqa; } wp_die("\143\x61\156\40\x6e\x6f\x74\40\143\x72\145\141\164\x65\x20\x69\156\163\164\x61\x6e\143\145\x20\146\x72\157\x20{$egkyssmuqcwaciya}\54\40\x72\x65\161\165\x65\x73\x74\145\144\40\143\x6c\x61\163\163\x20\x6e\157\x74\40\x65\x78\151\x73\x74\163\56"); goto iiceuymgyemuaciy; qmqsgkwueccwgsqa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iiceuymgyemuaciy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eaisogogsygugsqi; qsgagomkgqcmscyu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eaisogogsygugsqi: return $owgumcsyqsamiemg; } }
