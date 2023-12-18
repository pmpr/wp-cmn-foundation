<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65802b1c677a7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qsgagomkgqcmscyu; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmqsgkwueccwgsqa; } wp_die("\143\x61\x6e\40\156\x6f\x74\40\143\x72\x65\141\x74\145\x20\151\x6e\163\x74\141\156\x63\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\x65\x73\164\145\x64\40\x63\x6c\141\x73\163\x20\156\x6f\x74\40\x65\170\151\163\164\163\56"); goto iiceuymgyemuaciy; qmqsgkwueccwgsqa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iiceuymgyemuaciy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eaisogogsygugsqi; qsgagomkgqcmscyu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eaisogogsygugsqi: return $owgumcsyqsamiemg; } }
