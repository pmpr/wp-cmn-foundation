<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649c4b95e34c9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto gkumkcqesowgysme; } try { if (class_exists($egkyssmuqcwaciya)) { goto squwcqweceecssck; } wp_die("\x63\141\156\x20\156\157\164\40\143\162\145\x61\164\x65\x20\x69\156\x73\x74\141\156\143\145\40\x66\x72\x6f\x20{$egkyssmuqcwaciya}\x2c\40\162\145\x71\x75\x65\x73\164\x65\144\40\143\154\141\x73\x73\40\x6e\157\164\x20\145\x78\151\163\164\163\x2e"); goto kuouoyaeougsusic; squwcqweceecssck: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; kuouoyaeougsusic: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto yqwaggyckkquggqs; gkumkcqesowgysme: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; yqwaggyckkquggqs: return $owgumcsyqsamiemg; } }
