<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64326c7337067             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto meywqwweoiaqwwiu; } try { if (class_exists($egkyssmuqcwaciya)) { goto cuqsyqewuemsysgi; } wp_die("\143\x61\156\40\x6e\157\x74\x20\x63\162\x65\x61\164\145\40\x69\x6e\163\164\141\x6e\143\145\x20\146\x72\x6f\x20{$egkyssmuqcwaciya}\54\x20\x72\145\x71\165\x65\x73\x74\145\144\x20\143\154\141\163\x73\x20\156\x6f\164\x20\145\170\x69\163\x74\x73\x2e"); goto aicoaaeeewwmioou; cuqsyqewuemsysgi: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; aicoaaeeewwmioou: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto umseiamyiyksuyim; meywqwweoiaqwwiu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; umseiamyiyksuyim: return $owgumcsyqsamiemg; } }
