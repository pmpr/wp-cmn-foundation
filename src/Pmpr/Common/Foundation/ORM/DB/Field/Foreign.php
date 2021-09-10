<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB\Field;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Foreign extends Field
{
    const ONE_TO_ONE = "\157\156\x65\164\x6f\x6f\x6e\x65";
    const ONE_TO_MANY = "\x6f\x6e\145\164\157\x6d\141\x6e\171";
    const MANY_TO_ONE = "\x6d\141\x6e\x79\x74\x6f\x6f\x6e\x65";
    const MANY_TO_MANY = "\x6d\141\x6e\171\x74\157\155\141\156\171";
    
    protected ?string $on = null;
    
    protected ?string $class = null;
    
    protected bool $mappedBy = false;
    
    protected ?string $references = "\151\x64";
    
    protected ?string $inversedBy = null;
    
    protected ?string $relation = self::ONE_TO_ONE;
    
    protected ?string $onDelete = "\x4e\x4f\x20\101\103\x54\x49\x4f\x4e";
    
    protected ?string $onUpdate = "\x4e\117\x20\x41\x43\124\x49\117\116";
    
    public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null)
    {
        parent::__construct("\x66\x6f\x72\x65\x69\x67\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs);
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
        kmkwsqgumkwgemwc:
        jiiiygsseagcmycw:
        goto uiakqoyqmcwokgse;
        uiakqoyqmcwokgse:
        return $this->qemiokeaqceqkgso(self::MANY_TO_ONE);
        goto oksimyciqsugcami;
        qiokyyweaoysyeci:
        wp_die(sprintf(__("\106\x6f\162\145\151\x67\x6e\x20\x6b\x65\x79\x20\45\163\x20\x6d\165\x73\164\40\x65\156\x64\x20\167\x69\x74\x68\x20\x25\163\40\x70\157\x73\164\146\x69\x78", PR__CMN__FOUNDATION), $this->mwikyscisascoeea(), self::_ID));
        goto kmkwsqgumkwgemwc;
        magaykaioygmiciq:
        if (ManipulateString::ykemmsoumouomkqm($this->mwikyscisascoeea(), self::_ID)) {
            goto jiiiygsseagcmycw;
        }
        goto qiokyyweaoysyeci;
        osiemgqgiycaymio:
        $this->wakqsiacyacmumuw();
        goto magaykaioygmiciq;
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
