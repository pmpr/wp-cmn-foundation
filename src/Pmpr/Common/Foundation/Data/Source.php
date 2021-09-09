<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Data;

use Pmpr\Common\Foundation\Foundation;

class Source extends Data
{
    
    protected $src = false;
    
    protected $enqueue = true;
    
    protected array $attrs = [];
    
    protected string $handle = '';
    
    protected $version = false;
    
    protected ?string $inline = '';
    
    protected string $media = "\141\154\x6c";
    
    protected bool $inFooter = true;
    
    protected array $dependencies = [];
    
    protected string $type = self::SCRIPT;
    
    public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = self::SCRIPT)
    {
        goto ygyqyeocqgucysak;
        kqwioeqkgsgmmymg:
        $this->handle = $eueuqacmukymcyya;
        goto ssiykmokuqwoukkq;
        ceuqgimswukikqiq:
        $this->type = $sqeykgyoooqysmca;
        goto kqwioeqkgsgmmymg;
        ygyqyeocqgucysak:
        $this->src = $ogomymegcoacqisg;
        goto ceuqgimswukikqiq;
        ssiykmokuqwoukkq:
    }
    
    public function mgaeeqsgeoukeokc()
    {
        return $this->src;
    }
    
    public function sseugukgueoiqega($ogomymegcoacqisg) : self
    {
        $this->src = $ogomymegcoacqisg;
        return $this;
    }
    
    public function yoickwcyekiwiyqm() : string
    {
        return $this->handle;
    }
    
    public function weqmiqaykgwymcou(string $eueuqacmukymcyya) : self
    {
        $this->handle = $eueuqacmukymcyya;
        return $this;
    }
    
    public function gikwwgqmwccescgy()
    {
        return $this->version;
    }
    
    public function aasasueowyemuyoc($kqagasmwymmuiksq)
    {
        $this->version = $kqagasmwymmuiksq;
        return $this;
    }
    
    public function acskcgywyymegikq() : string
    {
        return $this->media;
    }
    
    public function eoeiaaaiywqccaqe(string $qsmqqqccagyuaiso) : self
    {
        $this->media = $qsmqqqccagyuaiso;
        return $this;
    }
    
    public function mequouugayiseiei() : bool
    {
        return $this->inFooter;
    }
    
    public function mimekgmssueakiwu(bool $siucegisggggeiei) : self
    {
        $this->inFooter = $siucegisggggeiei;
        return $this;
    }
    
    public function auskmiuqesyqemgc() : array
    {
        return $this->dependencies;
    }
    
    public function ayuciigykaswwqeo(string $yeiguwcugmswcysy) : self
    {
        goto scgiymugkuqikuoo;
        eqeggksucqsyyqgy:
        return $this;
        goto kiieeckyooaiakiy;
        weookqwiumeyqgqe:
        swwsoucgukwwokou:
        goto eqeggksucqsyyqgy;
        scgiymugkuqikuoo:
        if (in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc())) {
            goto swwsoucgukwwokou;
        }
        goto kggqciusmciogeoc;
        kggqciusmciogeoc:
        $this->dependencies[] = $yeiguwcugmswcysy;
        goto weookqwiumeyqgqe;
        kiieeckyooaiakiy:
    }
    
    public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self
    {
        goto cwqgyckguaiciiam;
        ekqawkaqkgwygyys:
        return $this;
        goto gaaikwwqsgaskqos;
        qeeakiaqiwkogiki:
        mkwcgkgauikuqkgs:
        goto ekqawkaqkgwygyys;
        cwqgyckguaiciiam:
        foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) {
            $this->ayuciigykaswwqeo($yeiguwcugmswcysy);
            iekoocwecouagekw:
        }
        goto qeeakiaqiwkogiki;
        gaaikwwqsgaskqos:
    }
    
    public function gueasuouwqysmomu() : string
    {
        return $this->type;
    }
    
    public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self
    {
        $this->type = $sqeykgyoooqysmca;
        return $this;
    }
    
    public function uuukyuwomieyigsu(callable $wgcyssuyaqysoqya) : self
    {
        $this->enqueue = $wgcyssuyaqysoqya;
        return $this;
    }
    
    public function eeiaogaokoekgmeq()
    {
        return $this->enqueue;
    }
    
    public function simqeemkoyaqkkwe() : bool
    {
        goto scwgaeqqquyqoeey;
        acqcuwoawoiqqcgw:
        $wgcyssuyaqysoqya = call_user_func($wgcyssuyaqysoqya);
        goto qqooskcsgmwcqmyo;
        acymaqouwqmcmisy:
        return (bool) $wgcyssuyaqysoqya;
        goto kuusqsqwcyeicqcu;
        qqooskcsgmwcqmyo:
        guyaeuucuqosewwe:
        goto acymaqouwqmcmisy;
        muyyguewmgkysmqi:
        if (!is_callable($wgcyssuyaqysoqya)) {
            goto guyaeuucuqosewwe;
        }
        goto acqcuwoawoiqqcgw;
        scwgaeqqquyqoeey:
        $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq();
        goto muyyguewmgkysmqi;
        kuusqsqwcyeicqcu:
    }
    
    public function mmoosseiswcigswg() : ?string
    {
        return $this->inline;
    }
    
    public function awagieqcmmwkgwgs(?string $usyqkyomqcuocgoa) : self
    {
        $this->inline = $usyqkyomqcuocgoa;
        return $this;
    }
    
    public function yiuoscqaekcgiyuy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attrs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function aoamooyyyuyiwuoq() : array
    {
        return $this->attrs;
    }
    
    public function ssimwwmyuyyimmug() : bool
    {
        return !empty($this->mmoosseiswcigswg());
    }
    
    public function simswskycwagoeqy() : self
    {
        goto yoigaymqwkcqioac;
        gescaykeyikwwqos:
        return $this;
        goto eeaicwceqqsiymuq;
        eusesuocygoggmyw:
        $syqogysesqgmqoqi = $qsaooqieuwgqwmmc->yomasssaasmawcso("\147\154\x6f\x62\x61\154");
        goto oyuyqykycywqikma;
        yoigaymqwkcqioac:
        $qsaooqieuwgqwmmc = Foundation::symcgieuakksimmu()->miocmcoykayoyyau();
        goto eusesuocygoggmyw;
        oyuyqykycywqikma:
        $this->kkqyswgcoseeawmu(["\152\161\x75\145\162\x79", $syqogysesqgmqoqi]);
        goto gescaykeyikwwqos;
        eeaicwceqqsiymuq:
    }
}
