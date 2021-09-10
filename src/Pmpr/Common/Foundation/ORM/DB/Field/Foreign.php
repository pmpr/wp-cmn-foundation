<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB\Field;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Foreign extends Field
{
    const ONE_TO_ONE = "\157\x6e\145\164\157\157\x6e\145";
    const ONE_TO_MANY = "\x6f\x6e\145\x74\157\155\141\x6e\x79";
    const MANY_TO_ONE = "\155\141\156\x79\164\157\157\156\x65";
    const MANY_TO_MANY = "\x6d\x61\156\x79\164\x6f\x6d\x61\156\171";
    
    protected ?string $on = null;
    
    protected ?string $class = null;
    
    protected bool $mappedBy = false;
    
    protected ?string $references = "\x69\x64";
    
    protected ?string $inversedBy = null;
    
    protected ?string $relation = self::ONE_TO_ONE;
    
    protected ?string $onDelete = "\116\x4f\40\101\x43\124\111\x4f\116";
    
    protected ?string $onUpdate = "\116\117\x20\101\103\x54\111\x4f\x4e";
    
    public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null)
    {
        parent::__construct("\146\x6f\162\145\151\147\156", $aokagokqyuysuksm, $meqocwsecsywiiqs);
    }
    
    public function yeoakayeygwguyus() : ?string
    {
        return $this->relation;
    }
    
    private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self
    {
        $this->relation = $ayegqaqygsqsmews;
        return $this;
    }
    
    public function geimymogiqyssawi() : self
    {
        return $this->qemiokeaqceqkgso(self::ONE_TO_ONE);
    }
    
    public function ckgquisaimmgwuyu() : self
    {
        $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu();
        return $this->qemiokeaqceqkgso(self::ONE_TO_MANY);
    }
    
    public function ckmqkgwcusyaegmm() : self
    {
        return $this->qemiokeaqceqkgso(self::MANY_TO_MANY);
    }
    
    public function wuuqgaekqeymecag() : self
    {
        goto osiemgqgiycaymio;
        magaykaioygmiciq:
        if (ManipulateString::ykemmsoumouomkqm($this->mwikyscisascoeea(), self::_ID)) {
            goto jiiiygsseagcmycw;
        }
        goto qiokyyweaoysyeci;
        kmkwsqgumkwgemwc:
        jiiiygsseagcmycw:
        goto uiakqoyqmcwokgse;
        qiokyyweaoysyeci:
        wp_die(sprintf(__("\106\x6f\x72\x65\x69\x67\156\x20\x6b\x65\171\40\x25\x73\40\x6d\165\x73\164\x20\x65\x6e\x64\40\167\x69\164\150\x20\x25\x73\40\x70\x6f\163\x74\x66\x69\x78", PR__CMN__FOUNDATION), $this->mwikyscisascoeea(), self::_ID));
        goto kmkwsqgumkwgemwc;
        osiemgqgiycaymio:
        $this->wakqsiacyacmumuw();
        goto magaykaioygmiciq;
        uiakqoyqmcwokgse:
        return $this->qemiokeaqceqkgso(self::MANY_TO_ONE);
        goto oksimyciqsugcami;
        oksimyciqsugcami:
    }
    
    public function eiyqqesoywqkegwu() : bool
    {
        return $this->yeoakayeygwguyus() == self::MANY_TO_ONE;
    }
    
    public function gumeeckcowwoyoci() : bool
    {
        return $this->yeoakayeygwguyus() == self::ONE_TO_MANY;
    }
    
    public function wmomygggskkoqess() : bool
    {
        return $this->yeoakayeygwguyus() == self::ONE_TO_ONE;
    }
    
    public function ygswmewosceowmya() : bool
    {
        return $this->yeoakayeygwguyus() == self::MANY_TO_MANY;
    }
    
    public function uecyuoauykiqqkey() : ?string
    {
        return $this->class;
    }
    
    public function uwmyqckcyamwaiww(?string $egkyssmuqcwaciya) : self
    {
        $this->class = $egkyssmuqcwaciya;
        return $this;
    }
    
    public function iueigwuckeaswyuu() : bool
    {
        return $this->mappedBy;
    }
    
    public function kkeymosoimmgsaug() : self
    {
        $this->mappedBy = true;
        return $this;
    }
    
    public function aumgkcogqygmwsqy() : ?string
    {
        return $this->inversedBy;
    }
    
    public function wakqsiacyacmumuw() : self
    {
        $this->inversedBy = true;
        return $this;
    }
    
    public function giqekaueqsgsmkgo() : ?string
    {
        return $this->onDelete;
    }
    
    public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self
    {
        $this->onDelete = $smgycasaqmgcaekq;
        return $this;
    }
    
    public function ucqugkkuiooayqie() : ?string
    {
        return $this->onUpdate;
    }
    
    public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self
    {
        $this->onUpdate = $muegsmmicsqsgucm;
        return $this;
    }
    
    public function miosasgcmguoamem() : ?string
    {
        return $this->on;
    }
    
    public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self
    {
        $this->on = $koegqoagisewcica;
        return $this;
    }
    
    public function syccewqoeggkkgke() : ?string
    {
        return $this->references;
    }
    
    public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self
    {
        $this->references = $ykqcceqiqygieeks;
        return $this;
    }
}
