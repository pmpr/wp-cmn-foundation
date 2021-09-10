<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    
    protected string $media = "\x61\154\154";
    
    protected bool $inFooter = true;
    
    protected array $dependencies = [];
    
    protected string $type = self::SCRIPT;
    
    public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = self::SCRIPT)
    {
        goto wmigqcwwousgyuqc;
        eqgwseukuesiwuuq:
        $this->handle = $eueuqacmukymcyya;
        goto cyeauauawcaoqwsi;
        wmigqcwwousgyuqc:
        $this->src = $ogomymegcoacqisg;
        goto kaycsosiqusqeiio;
        kaycsosiqusqeiio:
        $this->type = $sqeykgyoooqysmca;
        goto eqgwseukuesiwuuq;
        cyeauauawcaoqwsi:
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
        goto mgyqaewckasyuiie;
        mgyqaewckasyuiie:
        if (in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc())) {
            goto egkiiogswgakiack;
        }
        goto qweasgqgummkgesw;
        qweasgqgummkgesw:
        $this->dependencies[] = $yeiguwcugmswcysy;
        goto skkkocayisgiuaoq;
        skkkocayisgiuaoq:
        egkiiogswgakiack:
        goto ykkuoyukeqkaiamg;
        ykkuoyukeqkaiamg:
        return $this;
        goto womyiwaoigaequiw;
        womyiwaoigaequiw:
    }
    
    public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self
    {
        goto cyueaiekggqumaic;
        cyueaiekggqumaic:
        foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) {
            $this->ayuciigykaswwqeo($yeiguwcugmswcysy);
            amwiioosseiocuic:
        }
        goto owseqyqgagqaacmy;
        squkoccwioggcaye:
        return $this;
        goto oocgwowiyomcosac;
        owseqyqgagqaacmy:
        wiaauiiuyogwauum:
        goto squkoccwioggcaye;
        oocgwowiyomcosac:
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
        goto mcacwiaagqysweem;
        yackuaqwsqcwciyo:
        $wgcyssuyaqysoqya = call_user_func($wgcyssuyaqysoqya);
        goto yqiaqmigsoeqmgwo;
        aiswkmkmkckuociu:
        return (bool) $wgcyssuyaqysoqya;
        goto wuesuwyyyaesmkas;
        yqiaqmigsoeqmgwo:
        ggywsksyyogoocie:
        goto aiswkmkmkckuociu;
        mcacwiaagqysweem:
        $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq();
        goto oqokmmqoikgwmsai;
        oqokmmqoikgwmsai:
        if (!is_callable($wgcyssuyaqysoqya)) {
            goto ggywsksyyogoocie;
        }
        goto yackuaqwsqcwciyo;
        wuesuwyyyaesmkas:
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
        goto uoeogwamkogoqoow;
        emyigiiocasusaea:
        $syqogysesqgmqoqi = $qsaooqieuwgqwmmc->yomasssaasmawcso("\147\x6c\x6f\x62\x61\x6c");
        goto qykicwksywyiiqkk;
        uoeogwamkogoqoow:
        $qsaooqieuwgqwmmc = Foundation::symcgieuakksimmu()->miocmcoykayoyyau();
        goto emyigiiocasusaea;
        qykicwksywyiiqkk:
        $this->kkqyswgcoseeawmu(["\x6a\x71\x75\x65\162\x79", $syqogysesqgmqoqi]);
        goto awiawgewcmmiugqm;
        awiawgewcmmiugqm:
        return $this;
        goto meayoamiqaqouykk;
        meayoamiqaqouykk:
    }
}
