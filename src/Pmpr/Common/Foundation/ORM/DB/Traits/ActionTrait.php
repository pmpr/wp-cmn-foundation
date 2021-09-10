<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB\Traits;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

trait ActionTrait
{
    
    protected array $viewActions = [];
    
    private function sqgeouqsaemqsaoc() : array
    {
        return $this->viewActions;
    }
    
    public function wqaqomooqiiaeoew() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\141\144\x64", []);
    }
    
    private function oecasaciwaammwsa(?string $qqomumygoacsmsie, ?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        goto kwigwuwessmseqik;
        qqowaeggkimumgei:
        $this->viewActions[$qqomumygoacsmsie][$uusmaiomayssaecw] = ["\x77\x77\x67\165\x63\x73\163\x61\145\x63\161\145\153\165\x65\153" => $wwgucssaecqekuek, "\155\145\161\x6f\x63\x77\163\x65\143\163\171\167\x69\x69\161\163" => $meqocwsecsywiiqs];
        goto kckkiuumaegucsqg;
        kwigwuwessmseqik:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\163", "\160\141\x67\145\55\164\x69\x74\154\145\55\141\x63\x74\x69\157\x6e");
        goto qqowaeggkimumgei;
        kckkiuumaegucsqg:
        return $this;
        goto yqqueamqmkcwimeq;
        yqqueamqmkcwimeq:
    }
    
    public function kecqycomykimqiim(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x61\144\x64", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function easkmgsoqaqeyayo() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\151\x6e\144\145\170", []);
    }
    
    public function icyamyikwyaaoqya(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\151\x6e\x64\x65\170", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function nwuqkwkgugcqsgyq() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\145\144\x69\x74", []);
    }
    
    public function qeiuscikgegousks(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x65\x64\x69\x74", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
}
