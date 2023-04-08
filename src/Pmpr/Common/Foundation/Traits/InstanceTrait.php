<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643166697164a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto yoegkeiammkuouua; } try { if (class_exists($egkyssmuqcwaciya)) { goto kqkqessiagyiiuim; } wp_die("\143\141\156\40\x6e\157\164\x20\x63\162\145\141\x74\145\40\151\x6e\x73\164\x61\156\x63\x65\x20\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\162\145\161\x75\x65\163\164\x65\144\x20\x63\x6c\141\x73\x73\40\156\x6f\x74\x20\145\170\x69\x73\164\x73\56"); goto omyeseoqwqiuwqcw; kqkqessiagyiiuim: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; omyeseoqwqiuwqcw: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cuqsyqewuemsysgi; yoegkeiammkuouua: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cuqsyqewuemsysgi: return $owgumcsyqsamiemg; } }
