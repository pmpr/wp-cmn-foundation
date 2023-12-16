<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657d44c50e692             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qsgagomkgqcmscyu; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmqsgkwueccwgsqa; } wp_die("\143\141\156\40\156\x6f\x74\40\x63\162\145\141\164\145\x20\151\x6e\x73\x74\x61\156\x63\x65\40\146\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\x65\x71\x75\145\x73\x74\x65\144\40\x63\154\x61\x73\163\40\x6e\157\164\40\145\170\151\163\x74\163\x2e"); goto iiceuymgyemuaciy; qmqsgkwueccwgsqa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iiceuymgyemuaciy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eaisogogsygugsqi; qsgagomkgqcmscyu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eaisogogsygugsqi: return $owgumcsyqsamiemg; } }
