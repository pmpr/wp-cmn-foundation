<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90b39bd3e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto sequgigsgkqaikmq; } try { if (class_exists($egkyssmuqcwaciya)) { goto akieeaeqiwugimie; } wp_die("\x63\141\x6e\x20\x6e\x6f\x74\40\143\162\x65\x61\164\x65\40\151\x6e\163\x74\x61\156\x63\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\x20\x72\x65\x71\x75\145\x73\164\145\x64\x20\143\154\x61\x73\x73\x20\156\157\164\x20\x65\170\x69\163\x74\x73\x2e"); goto ugqucegcucyyayga; akieeaeqiwugimie: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ugqucegcucyyayga: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto aemoyqueimayqcaw; sequgigsgkqaikmq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; aemoyqueimayqcaw: return $owgumcsyqsamiemg; } }
