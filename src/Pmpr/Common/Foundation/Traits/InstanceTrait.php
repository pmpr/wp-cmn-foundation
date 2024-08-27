<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce6343424e0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; public final function ggmimykuacwcogaq(string $egkyssmuqcwaciya) { if (isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya])) { goto osskmmsaekmgemwc; } try { if (class_exists($egkyssmuqcwaciya)) { goto oyeuoiqgeuioiqie; } wp_die("\x63\x61\156\x20\156\x6f\164\40\143\x72\145\141\x74\x65\x20\151\156\x73\164\141\156\143\x65\40\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\x72\145\161\165\145\163\x74\x65\x64\40\x63\x6c\141\163\163\40\156\157\x74\x20\x65\170\x69\x73\164\x73\56"); goto qwuwcoeiguyqekuy; oyeuoiqgeuioiqie: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qwuwcoeiguyqekuy: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto eowskcomgqqwcyui; osskmmsaekmgemwc: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; eowskcomgqqwcyui: return $owgumcsyqsamiemg; } }
