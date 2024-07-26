<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a42a884e46e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ysaumykuimqigeqa; } try { if (class_exists($egkyssmuqcwaciya)) { goto kkogaccoqmsmmkmo; } wp_die("\143\141\x6e\x20\x6e\x6f\x74\x20\x63\x72\x65\x61\x74\145\x20\x69\x6e\x73\x74\x61\156\143\145\40\x66\x72\157\x20{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\145\163\164\x65\x64\x20\x63\154\x61\x73\163\x20\x6e\157\x74\40\145\x78\151\x73\164\163\56"); goto qmiqicgscsuoyeqo; kkogaccoqmsmmkmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qmiqicgscsuoyeqo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oegaywiwywuyksaq; ysaumykuimqigeqa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oegaywiwywuyksaq: return $owgumcsyqsamiemg; } }
