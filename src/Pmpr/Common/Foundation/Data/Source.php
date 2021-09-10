<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    
    protected string $media = "\141\x6c\154";
    
    protected bool $inFooter = true;
    
    protected array $dependencies = [];
    
    protected string $type = self::SCRIPT;
    
    public function __construct(string $eueuqacmukymcyya = '', $ogomymegcoacqisg = '', string $sqeykgyoooqysmca = self::SCRIPT)
    {
        goto mgyqaewckasyuiie;
        skkkocayisgiuaoq:
        $this->handle = $eueuqacmukymcyya;
        goto ykkuoyukeqkaiamg;
        qweasgqgummkgesw:
        $this->type = $sqeykgyoooqysmca;
        goto skkkocayisgiuaoq;
        mgyqaewckasyuiie:
        $this->src = $ogomymegcoacqisg;
        goto qweasgqgummkgesw;
        ykkuoyukeqkaiamg:
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
        goto wiaauiiuyogwauum;
        amwiioosseiocuic:
        $this->dependencies[] = $yeiguwcugmswcysy;
        goto cyueaiekggqumaic;
        cyueaiekggqumaic:
        womyiwaoigaequiw:
        goto owseqyqgagqaacmy;
        wiaauiiuyogwauum:
        if (in_array($yeiguwcugmswcysy, $this->auskmiuqesyqemgc())) {
            goto womyiwaoigaequiw;
        }
        goto amwiioosseiocuic;
        owseqyqgagqaacmy:
        return $this;
        goto squkoccwioggcaye;
        squkoccwioggcaye:
    }
    
    public function kkqyswgcoseeawmu(array $ugmuiugkaygmsagq) : self
    {
        goto mcacwiaagqysweem;
        yackuaqwsqcwciyo:
        return $this;
        goto yqiaqmigsoeqmgwo;
        oqokmmqoikgwmsai:
        oocgwowiyomcosac:
        goto yackuaqwsqcwciyo;
        mcacwiaagqysweem:
        foreach ($ugmuiugkaygmsagq as $yeiguwcugmswcysy) {
            $this->ayuciigykaswwqeo($yeiguwcugmswcysy);
            ggywsksyyogoocie:
        }
        goto oqokmmqoikgwmsai;
        yqiaqmigsoeqmgwo:
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
        goto wuesuwyyyaesmkas;
        awiawgewcmmiugqm:
        return (bool) $wgcyssuyaqysoqya;
        goto meayoamiqaqouykk;
        wuesuwyyyaesmkas:
        $wgcyssuyaqysoqya = $this->eeiaogaokoekgmeq();
        goto uoeogwamkogoqoow;
        uoeogwamkogoqoow:
        if (!is_callable($wgcyssuyaqysoqya)) {
            goto aiswkmkmkckuociu;
        }
        goto emyigiiocasusaea;
        qykicwksywyiiqkk:
        aiswkmkmkckuociu:
        goto awiawgewcmmiugqm;
        emyigiiocasusaea:
        $wgcyssuyaqysoqya = call_user_func($wgcyssuyaqysoqya);
        goto qykicwksywyiiqkk;
        meayoamiqaqouykk:
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
        goto igsmkqcwksaogqaq;
        oscqsgwcimqawseu:
        $this->kkqyswgcoseeawmu(["\152\x71\165\145\162\x79", $syqogysesqgmqoqi]);
        goto ysqeawycwuosoawe;
        ysqeawycwuosoawe:
        return $this;
        goto omikseuuygmokqsw;
        igsmkqcwksaogqaq:
        $qsaooqieuwgqwmmc = Foundation::symcgieuakksimmu()->miocmcoykayoyyau();
        goto iekwmuigmiooiugw;
        iekwmuigmiooiugw:
        $syqogysesqgmqoqi = $qsaooqieuwgqwmmc->yomasssaasmawcso("\147\154\157\x62\x61\154");
        goto oscqsgwcimqawseu;
        omikseuuygmokqsw:
    }
}
