<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    
    protected string $media = "\x61\x6c\154";
    
    protected bool $inFooter = true;
    
    protected array $dependencies = [];
    
    protected string $type = self::SCRIPT;
    
    public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = self::SCRIPT)
    {
        goto kkckckioiqcwoukw;
        oewkyegysuioqeuy:
        $this->handle = $eueuqacmukymcyya;
        goto wmigqcwwousgyuqc;
        kkckckioiqcwoukw:
        $this->src = $ogomymegcoacqisg;
        goto zocygeecusggsqgy;
        zocygeecusggsqgy:
        $this->type = $sqeykgyoooqysmca;
        goto oewkyegysuioqeuy;
        wmigqcwwousgyuqc:
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
        goto eqgwseukuesiwuuq;
        egkiiogswgakiack:
        kaycsosiqusqeiio:
        goto mgyqaewckasyuiie;
        eqgwseukuesiwuuq:
        if (in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc())) {
            goto kaycsosiqusqeiio;
        }
        goto cyeauauawcaoqwsi;
        cyeauauawcaoqwsi:
        $this->dependencies[] = $yeiguwcugmswcysy;
        goto egkiiogswgakiack;
        mgyqaewckasyuiie:
        return $this;
        goto qweasgqgummkgesw;
        qweasgqgummkgesw:
    }
    
    public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self
    {
        goto womyiwaoigaequiw;
        amwiioosseiocuic:
        return $this;
        goto cyueaiekggqumaic;
        womyiwaoigaequiw:
        foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) {
            $this->ayuciigykaswwqeo($yeiguwcugmswcysy);
            ykkuoyukeqkaiamg:
        }
        goto wiaauiiuyogwauum;
        wiaauiiuyogwauum:
        skkkocayisgiuaoq:
        goto amwiioosseiocuic;
        cyueaiekggqumaic:
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
        goto squkoccwioggcaye;
        oocgwowiyomcosac:
        if (!is_callable($wgcyssuyaqysoqya)) {
            goto owseqyqgagqaacmy;
        }
        goto ggywsksyyogoocie;
        mcacwiaagqysweem:
        owseqyqgagqaacmy:
        goto oqokmmqoikgwmsai;
        oqokmmqoikgwmsai:
        return (bool) $wgcyssuyaqysoqya;
        goto yackuaqwsqcwciyo;
        squkoccwioggcaye:
        $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq();
        goto oocgwowiyomcosac;
        ggywsksyyogoocie:
        $wgcyssuyaqysoqya = call_user_func($wgcyssuyaqysoqya);
        goto mcacwiaagqysweem;
        yackuaqwsqcwciyo:
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
        goto yqiaqmigsoeqmgwo;
        yqiaqmigsoeqmgwo:
        $qsaooqieuwgqwmmc = Foundation::symcgieuakksimmu()->miocmcoykayoyyau();
        goto aiswkmkmkckuociu;
        wuesuwyyyaesmkas:
        $this->kkqyswgcoseeawmu(["\152\161\x75\145\x72\171", $syqogysesqgmqoqi]);
        goto uoeogwamkogoqoow;
        uoeogwamkogoqoow:
        return $this;
        goto emyigiiocasusaea;
        aiswkmkmkckuociu:
        $syqogysesqgmqoqi = $qsaooqieuwgqwmmc->yomasssaasmawcso("\x67\154\157\x62\x61\x6c");
        goto wuesuwyyyaesmkas;
        emyigiiocasusaea:
    }
}
