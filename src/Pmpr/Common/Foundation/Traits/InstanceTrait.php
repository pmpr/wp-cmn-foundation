<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65782da914af3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto oyysyqcickwskiwq; } try { if (class_exists($egkyssmuqcwaciya)) { goto mkaocmwkyykmakug; } wp_die("\143\141\x6e\40\156\157\164\x20\143\x72\x65\141\x74\x65\40\151\x6e\x73\x74\141\x6e\143\x65\40\x66\162\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\165\145\163\164\145\144\40\143\154\141\163\163\x20\156\157\164\40\145\170\x69\x73\164\x73\x2e"); goto mycwwkyauoegscee; mkaocmwkyykmakug: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; mycwwkyauoegscee: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oykskeiyeqqmqgaq; oyysyqcickwskiwq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oykskeiyeqqmqgaq: return $owgumcsyqsamiemg; } }
