<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             658012f9e1738             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qsgagomkgqcmscyu; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmqsgkwueccwgsqa; } wp_die("\x63\141\x6e\40\156\157\x74\x20\143\x72\x65\141\164\145\40\151\x6e\163\x74\141\x6e\x63\x65\x20\146\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\161\165\145\163\x74\x65\x64\40\143\x6c\141\x73\x73\x20\156\157\x74\40\145\x78\x69\x73\x74\x73\56"); goto iiceuymgyemuaciy; qmqsgkwueccwgsqa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iiceuymgyemuaciy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eaisogogsygugsqi; qsgagomkgqcmscyu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eaisogogsygugsqi: return $owgumcsyqsamiemg; } }
