<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6570b300bc64f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kgekiyoosqkwoqcw; } try { if (class_exists($egkyssmuqcwaciya)) { goto eowmsqkksesqysaq; } wp_die("\x63\141\x6e\40\x6e\157\164\x20\x63\162\145\141\164\145\x20\x69\156\x73\x74\x61\156\x63\145\x20\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\145\x71\165\x65\163\164\x65\144\x20\143\154\x61\x73\163\x20\156\157\x74\40\x65\x78\x69\163\x74\163\56"); goto cyqsmqoaaguqouog; eowmsqkksesqysaq: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; cyqsmqoaaguqouog: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto kcwosqcuqsikgkyi; kgekiyoosqkwoqcw: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; kcwosqcuqsikgkyi: return $owgumcsyqsamiemg; } }
