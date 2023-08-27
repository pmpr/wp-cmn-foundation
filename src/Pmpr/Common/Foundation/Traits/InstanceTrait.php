<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64eb126a5ff93             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto uimugqewwuwguoay; } try { if (class_exists($egkyssmuqcwaciya)) { goto mummsuuiqsqckmqu; } wp_die("\x63\x61\156\40\156\x6f\x74\40\143\x72\145\141\x74\x65\x20\x69\156\x73\164\141\156\x63\x65\40\146\162\157\40{$egkyssmuqcwaciya}\54\40\x72\145\161\x75\145\163\x74\145\144\x20\143\x6c\x61\x73\163\40\x6e\157\164\x20\145\170\x69\163\x74\x73\56"); goto agemwcwmiqisoagc; mummsuuiqsqckmqu: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; agemwcwmiqisoagc: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cqqoaacqwsgsaymw; uimugqewwuwguoay: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cqqoaacqwsgsaymw: return $owgumcsyqsamiemg; } }
