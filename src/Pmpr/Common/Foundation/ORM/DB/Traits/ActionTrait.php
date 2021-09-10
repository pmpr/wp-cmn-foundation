<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\141\x64\x64", []);
    }
    
    private function oecasaciwaammwsa(?string $qqomumygoacsmsie, ?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        goto kwigwuwessmseqik;
        kwigwuwessmseqik:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", "\x70\x61\147\x65\x2d\164\x69\x74\x6c\145\55\x61\x63\164\x69\x6f\156");
        goto qqowaeggkimumgei;
        kckkiuumaegucsqg:
        return $this;
        goto yqqueamqmkcwimeq;
        qqowaeggkimumgei:
        $this->viewActions[$qqomumygoacsmsie][$uusmaiomayssaecw] = ["\x77\167\147\165\143\163\163\141\145\143\161\145\x6b\165\145\153" => $wwgucssaecqekuek, "\155\145\x71\x6f\x63\167\x73\145\143\163\171\x77\151\151\161\163" => $meqocwsecsywiiqs];
        goto kckkiuumaegucsqg;
        yqqueamqmkcwimeq:
    }
    
    public function kecqycomykimqiim(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x61\x64\x64", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function easkmgsoqaqeyayo() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\151\x6e\144\145\170", []);
    }
    
    public function icyamyikwyaaoqya(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x69\x6e\x64\145\170", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
    
    public function nwuqkwkgugcqsgyq() : array
    {
        return ManipulateArray::get($this->sqgeouqsaemqsaoc(), "\x65\144\151\x74", []);
    }
    
    public function qeiuscikgegousks(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs, ?array $wwgucssaecqekuek) : self
    {
        return $this->oecasaciwaammwsa("\x65\144\x69\x74", $uusmaiomayssaecw, $meqocwsecsywiiqs, $wwgucssaecqekuek);
    }
}
