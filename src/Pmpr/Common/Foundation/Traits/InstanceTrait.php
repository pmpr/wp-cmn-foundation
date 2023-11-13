<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6551d64d06a2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ssoawgymwwgamowo; } try { if (class_exists($egkyssmuqcwaciya)) { goto saueimgassmwoyka; } wp_die("\x63\141\x6e\40\x6e\x6f\164\40\143\x72\145\141\164\145\x20\x69\x6e\x73\x74\141\x6e\143\145\x20\146\x72\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\x75\145\x73\164\x65\144\x20\143\x6c\141\163\163\40\x6e\157\164\x20\x65\x78\151\163\x74\x73\x2e"); goto yeycmwocyqoegmaq; saueimgassmwoyka: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; yeycmwocyqoegmaq: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kuyggkawoaiiwseo; ssoawgymwwgamowo: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kuyggkawoaiiwseo: return $owgumcsyqsamiemg; } }
