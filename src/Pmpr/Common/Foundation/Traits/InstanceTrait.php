<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a40d8e73701             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ysaumykuimqigeqa; } try { if (class_exists($egkyssmuqcwaciya)) { goto kkogaccoqmsmmkmo; } wp_die("\x63\x61\x6e\40\x6e\157\164\x20\x63\162\x65\141\x74\x65\40\x69\156\x73\x74\x61\156\x63\145\40\x66\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\145\x71\x75\145\163\x74\x65\x64\40\143\x6c\141\163\163\40\156\x6f\164\x20\145\170\151\163\164\x73\56"); goto qmiqicgscsuoyeqo; kkogaccoqmsmmkmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qmiqicgscsuoyeqo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oegaywiwywuyksaq; ysaumykuimqigeqa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oegaywiwywuyksaq: return $owgumcsyqsamiemg; } }
