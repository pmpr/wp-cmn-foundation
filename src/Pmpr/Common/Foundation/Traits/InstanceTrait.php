<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64690d716cb03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto kgmwmmiemqggaqeq; } try { if (class_exists($egkyssmuqcwaciya)) { goto keigessgsgawiyyo; } wp_die("\x63\x61\156\x20\156\157\x74\40\x63\x72\145\x61\164\x65\x20\x69\156\163\164\141\156\143\x65\40\x66\162\157\40{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\x75\145\x73\164\x65\144\40\143\x6c\141\163\163\40\156\157\164\40\145\170\x69\x73\x74\163\56"); goto saueosiwcgqsmgmk; keigessgsgawiyyo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; saueosiwcgqsmgmk: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto cigcsyiesymkuywu; kgmwmmiemqggaqeq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; cigcsyiesymkuywu: return $owgumcsyqsamiemg; } }
