<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce373d0ef0a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto mmoyseisgqkyouaq; } try { if (class_exists($egkyssmuqcwaciya)) { goto quweggukmkusygwe; } wp_die("\143\141\x6e\40\156\x6f\164\40\143\162\x65\141\164\145\40\x69\x6e\163\164\141\x6e\143\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\x2c\x20\162\x65\x71\165\145\x73\164\x65\144\40\143\x6c\x61\163\163\40\156\157\x74\x20\x65\170\151\x73\x74\x73\56"); goto ysmqqmuesgeyquws; quweggukmkusygwe: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; ysmqqmuesgeyquws: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oyeuoiqgeuioiqie; mmoyseisgqkyouaq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oyeuoiqgeuioiqie: return $owgumcsyqsamiemg; } }
