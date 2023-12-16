<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657d5fb6c3c74             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto qsgagomkgqcmscyu; } try { if (class_exists($egkyssmuqcwaciya)) { goto qmqsgkwueccwgsqa; } wp_die("\x63\141\156\x20\156\157\164\40\143\162\145\141\164\x65\x20\x69\x6e\163\x74\x61\156\143\x65\x20\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\x65\161\165\145\163\x74\x65\144\40\x63\154\141\163\163\40\156\x6f\164\40\x65\x78\x69\x73\164\163\56"); goto iiceuymgyemuaciy; qmqsgkwueccwgsqa: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; iiceuymgyemuaciy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eaisogogsygugsqi; qsgagomkgqcmscyu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eaisogogsygugsqi: return $owgumcsyqsamiemg; } }
