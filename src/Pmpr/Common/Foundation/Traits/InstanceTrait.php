<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f45159400             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ysaumykuimqigeqa; } try { if (class_exists($egkyssmuqcwaciya)) { goto kkogaccoqmsmmkmo; } wp_die("\143\141\x6e\x20\x6e\x6f\x74\x20\x63\x72\145\141\164\x65\x20\x69\156\163\164\141\156\x63\x65\40\x66\x72\157\x20{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\165\145\163\164\145\x64\40\143\154\x61\x73\x73\x20\x6e\x6f\x74\x20\145\170\151\x73\x74\x73\56"); goto qmiqicgscsuoyeqo; kkogaccoqmsmmkmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qmiqicgscsuoyeqo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oegaywiwywuyksaq; ysaumykuimqigeqa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oegaywiwywuyksaq: return $owgumcsyqsamiemg; } }
