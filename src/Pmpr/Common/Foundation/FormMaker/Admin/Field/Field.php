<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;
use Pmpr\Common\Foundation\Traits\AttributeTrait;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

class Field
{
    use AttributeTrait, ToArrayTrait, TemplateTrait;
    
    protected array $ignorables = [];
    
    protected array $errors = [];
    
    protected ?string $id = null;
    
    protected ?int $priority = 0;
    
    protected ?string $type = null;
    
    protected ?string $name = null;
    
    protected $default = null;
    
    protected ?string $desc = null;
    
    protected $classes;
    
    protected $defaultCb = null;
    
    protected $restValueCb;
    
    protected $value;
    
    public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        goto ogggoiwaseooqyee;
        mowkckamsoqiugqo:
        $this->attributes = [];
        goto meowuayekqaqeggq;
        gmmqkkwsagswkwkm:
        wp_die("\x66\151\145\x6c\144\x20\x74\171\160\x65\x20\x69\x73\40\156\x6f\x74\40\163\145\164\x2c\40\155\145\x74\x61\102\x6f\170\x3a\x20" . get_called_class());
        goto mkoukageucsqewms;
        mkoukageucsqewms:
        ociiyomqweeuyqaw:
        goto qaogwawmaiqokycq;
        ogggoiwaseooqyee:
        if ($sqeykgyoooqysmca) {
            goto ociiyomqweeuyqaw;
        }
        goto gmmqkkwsagswkwkm;
        qaogwawmaiqokycq:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto ougeaoiicseiqwsi;
        ikiyswysiaqmeuam:
        $this->name = $ymqmyyeuycgmigyo;
        goto eqgiaawwcamuckce;
        meowuayekqaqeggq:
        $this->imgcoakmmgqsckkm(12);
        goto qkyucemgwyyueywk;
        eqgiaawwcamuckce:
        $this->desc = $mkqqqewsokcswckc;
        goto mowkckamsoqiugqo;
        qkyucemgwyyueywk:
        if (in_array($this->gueasuouwqysmomu(), ["\147\x72\157\165\x70", "\x72\x61\144\x69\157", "\142\x75\x74\164\157\156", "\x6d\x75\x6c\x74\151\137\142\165\164\x74\x6f\x6e\x73"])) {
            goto oggeooaecikkokqy;
        }
        goto guikuyakqquuuwaq;
        ougeaoiicseiqwsi:
        $this->type = $sqeykgyoooqysmca;
        goto ikiyswysiaqmeuam;
        guikuyakqquuuwaq:
        $this->qigsyyqgewgskemg("\167\x2d\x31\x30\60");
        goto oeaggeimyssqskqy;
        oeaggeimyssqskqy:
        oggeooaecikkokqy:
        goto ickukymckqsiuuse;
        ickukymckqsiuuse:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\163\155");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\155\144");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\154\147");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto geuoucowacomeyye;
        agqqyagegyisqyuq:
        return $this;
        goto uikaseooigockkck;
        oicsksemwukmcgqg:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto agqqyagegyisqyuq;
        geuoucowacomeyye:
        $egkyssmuqcwaciya = "\143\157\154";
        goto cwcasoaiwiakuigg;
        cwcasoaiwiakuigg:
        if (!$gcgsqcoqciockquc) {
            goto ssusmeimqugmkqos;
        }
        goto eeiouwmmywmimeak;
        mqywkoekecegwiau:
        ssusmeimqugmkqos:
        goto koymemqqgwacmmgg;
        eeiouwmmywmimeak:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto mqywkoekecegwiau;
        koymemqqgwacmmgg:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto oicsksemwukmcgqg;
        uikaseooigockkck:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto hacmiqqyiqmyooos;
        hacmiqqyiqmyooos:
        $egkyssmuqcwaciya = "\143\x6f\x6c";
        goto eocmsysacwewkeuo;
        yowugmucmocsiiec:
        kmokgiekykomyika:
        goto eugamswsoqcmowwe;
        wsoawwsgmoywwywo:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto sckuiossamwacgao;
        eocmsysacwewkeuo:
        if (!$gcgsqcoqciockquc) {
            goto kmokgiekykomyika;
        }
        goto yaomwkksikaowycc;
        sckuiossamwacgao:
        return $this;
        goto uegeiaqeooisqukc;
        eugamswsoqcmowwe:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto wsoawwsgmoywwywo;
        yaomwkksikaowycc:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto yowugmucmocsiiec;
        uegeiaqeooisqukc:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        goto eqwyuciwuemqauyg;
        ckkyoqscuqwgwiko:
        $this->qigsyyqgewgskemg("\146\x69\x65\154\x64\55\151\x64\x2d{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\144\x61\164\x61\x2d\x66\x69\145\154\x64\55\x69\x64", $aokagokqyuysuksm);
        goto giuigkqomgkomuys;
        gyqiiuiuiaoykgok:
        $this->id = $aokagokqyuysuksm;
        goto ckkyoqscuqwgwiko;
        eqwyuciwuemqauyg:
        $this->mykogkuaqwmycgog("\x66\151\x65\x6c\144\55\151\x64\55{$this->mwikyscisascoeea()}");
        goto gyqiiuiuiaoykgok;
        giuigkqomgkomuys:
        return $this;
        goto yyewuaciqkkywkau;
        yyewuaciqkkywkau:
    }
    
    public function yywskysiycwkwsgw() : ?int
    {
        return $this->priority;
    }
    
    public function jyumyyugiwwiqomk($sqqewmoeaekuyyas) : self
    {
        $this->priority = $sqqewmoeaekuyyas;
        return $this;
    }
    
    public function iukseawoegcgwcoy(&$wwgucssaecqekuek, $ggauoeuaesiymgee, $uusmaiomayssaecw = null) : self
    {
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        return $this;
    }
    
    public function miwgyweukiaicmos()
    {
        return $this->defaultCb;
    }
    
    public function qqowmcseeoiskoug($qwiycwgywyomkoog) : self
    {
        $this->defaultCb = $qwiycwgywyomkoog;
        return $this;
    }
    
    public function gueasuouwqysmomu() : ?string
    {
        return $this->type;
    }
    
    protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self
    {
        $this->type = $sqeykgyoooqysmca;
        return $this;
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function oiswysuiioecsaae($aokagokqyuysuksm = null)
    {
        goto sgkgwewwmgsqumwm;
        mamgkwkwqccsukgi:
        $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        goto eaegmykmqyqwuwwg;
        sgkgwewwmgsqumwm:
        $ggauoeuaesiymgee = $this->default;
        goto swmoeiisqkkgikwu;
        oekuwemeqegwgkic:
        return $eqgoocgaqwqcimie;
        goto weeqcoowkmsgiyqi;
        kueekkgmsagcywoy:
        cyosgmkweiyuygiu:
        goto mamgkwkwqccsukgi;
        eaegmykmqyqwuwwg:
        cgseuwwymqoekcgk:
        goto oekuwemeqegwgkic;
        swmoeiisqkkgikwu:
        if ($aokagokqyuysuksm) {
            goto cyosgmkweiyuygiu;
        }
        goto cmqmqugyuesekeme;
        cmqmqugyuesekeme:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto oeaaiscgiuasgemc;
        oeaaiscgiuasgemc:
        goto cgseuwwymqoekcgk;
        goto kueekkgmsagcywoy;
        weeqcoowkmsgiyqi:
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function uuwsoaqmkwcgaqes() : ?string
    {
        return $this->desc;
    }
    
    public function ccmwycqioaicegoc(?string $mkqqqewsokcswckc) : self
    {
        $this->desc = $mkqqqewsokcswckc;
        return $this;
    }
    
    public function cuisiyiswcqkuogm()
    {
        return $this->classes;
    }
    
    public function eumecwmqmukqgyea() : self
    {
        return $this->qcgocuceocquqcuw("\162\145\161\x75\151\162\145\x64", "\x72\145\161\165\151\162\x65\x64");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\x72\145\161\x75\x69\162\x65\x64");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\x64\151\x72\x65\x63\x74\x69\157\156\x2d\162\164\154");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\144\151\162\145\x63\x74\151\157\x6e\55\154\164\x72");
    }
    
    public function usoqcyyugsuyiewc(?string $egkyssmuqcwaciya) : self
    {
        $this->classes = ManipulateHTML::igmaewykumgwoaoy($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya);
        return $this;
    }
    
    public function yqoekuewicqoescm(?string $egkyssmuqcwaciya) : self
    {
        $this->classes = ManipulateHTML::ogaeogwycyqqckeu($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya);
        return $this;
    }
    
    public function wkmawgqeysyeiakk(array $cmkqisoeyioisqaw) : self
    {
        goto mwqygcegskuoakso;
        owiwkogimmuuqsma:
        return $this;
        goto mwocyimaoyesyioc;
        wgqoywgmcoegywci:
        kqwayskmewwmuowi:
        goto owiwkogimmuuqsma;
        mwqygcegskuoakso:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            cygksyyeoewaisiy:
        }
        goto wgqoywgmcoegywci;
        mwocyimaoyesyioc:
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc("\143\155\142\55\x72\157\167\55\151\x6e\x6c\x69\x6e\x65");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\x63\x6d\x62\x2d\x72\157\x77\55\142\x6c\x6f\143\x6b");
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        $this->value = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function ccakgucwwemiwkoi($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto qqweyyqmqkwkwqow;
        skoqyuocwgesmgwi:
        gskmwgwookqyuocg:
        goto aegkkcqqkoowqaoa;
        qqweyyqmqkwkwqow:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto gskmwgwookqyuocg;
        }
        goto wmmwiisasuywyiqe;
        aegkkcqqkoowqaoa:
        $this->qigsyyqgewgskemg("\144\x65\160\145\x6e\144\x65\144\55\x74\157")->qcgocuceocquqcuw("\144\141\x74\141\x2d\x64\145\x70\x65\x6e\144\x65\144", $uusmaiomayssaecw)->qcgocuceocquqcuw("\x64\x61\164\x61\x2d\144\145\x70\x65\x6e\x64\x65\x64\55\166\141\x6c\x75\145", $eqgoocgaqwqcimie);
        goto yoqssweumyeoqqoy;
        wmmwiisasuywyiqe:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto skoqyuocwgesmgwi;
        yoqssweumyeoqqoy:
        return $this;
        goto wewwwqceugoewsim;
        wewwwqceugoewsim:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto kmokmywuuiikocgi;
        mqwkaksawqaeismc:
        return $kkeqqkkkqwkocsyu;
        goto ywmymcwoykuoqeeq;
        cwymeeswgwucyesq:
        $kkeqqkkkqwkocsyu["\x64\x65\146\141\165\154\164"] = $eqgoocgaqwqcimie;
        goto swossimcmqssgsou;
        kyyqkaouqwaswams:
        if (!$eqgoocgaqwqcimie) {
            goto wqsaaaueggcgiqoc;
        }
        goto cwymeeswgwucyesq;
        kmokmywuuiikocgi:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto kyyqkaouqwaswams;
        swossimcmqssgsou:
        wqsaaaueggcgiqoc:
        goto mqwkaksawqaeismc;
        ywmymcwoykuoqeeq:
    }
    
    public function agkauiesooccqsae() : ?callable
    {
        return $this->restValueCb;
    }
    
    public function aygqoksyisymwcuw(callable $wkmuskegugkocuwc) : self
    {
        $this->restValueCb = $wkmuskegugkocuwc;
        return $this;
    }
    
    public function awakiiaoeeiaiqgo() : self
    {
        $this->qigsyyqgewgskemg("\167\55\x6d\x64\x2d\61\x30\60");
        return $this;
    }
    
    public function giaekmqwqoqmqcic()
    {
        return $this->ignorables;
    }
    
    public function qicwqseeaecsiiia($momcykaoccoymeig)
    {
        return ManipulateArray::get($this->giaekmqwqoqmqcic(), $momcykaoccoymeig);
    }
    
    public function kqkccuwgcwemskey($momcykaoccoymeig, $ikgwqyuyckaewsow) : self
    {
        goto oeykyqgwekyacicc;
        ysgwyckucmmigkei:
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        goto uagqauwoymegwges;
        uagqauwoymegwges:
        return $this;
        goto iqaeimeaeecaeauu;
        ccyuyimwausiiegi:
        $oyumuuqqsmuacmak["\146\x69\x65\154\144\163"] = $ikgwqyuyckaewsow;
        goto ysgwyckucmmigkei;
        oeykyqgwekyacicc:
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        goto ccyuyimwausiiegi;
        iqaeimeaeecaeauu:
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        goto icueeiiugweemseg;
        icueeiiugweemseg:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto kacqaygugykcuwuw;
        }
        goto omyieiyoymkyqiqi;
        cigqqsiususukqyc:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto okaomyswqwiemgyk;
            aogmqycyywwqmakw:
            mwmcueouiygewwqe:
            goto osceeayksymegksu;
            okaomyswqwiemgyk:
            if (!($oyumuuqqsmuacmak["\166\141\x6c\165\x65\x73"] == $qqswgiawgeaeoecu)) {
                goto ugcwgqkgoeioyiim;
            }
            goto egawuoeqqsmcmmmo;
            wwqickgysiuigqkc:
            ugcwgqkgoeioyiim:
            goto aogmqycyywwqmakw;
            egawuoeqqsmcmmmo:
            wp_die("\144\165\160\x6c\x69\143\x61\x74\145\x20\x69\x67\156\157\162\x61\142\154\145\x20\x72\165\x6c\x65\x20\146\x6f\162\40{$this->mwikyscisascoeea()}\x20\x64\145\x74\145\143\x74\x65\144\x20\x70\154\145\x61\x73\145\x20\x6d\x65\x72\x67\x65\x20\162\165\154\x65\x73\56");
            goto wwqickgysiuigqkc;
            osceeayksymegksu:
        }
        goto auqaioasmysiqqsy;
        kcigymowyaokyiwc:
        $this->ignorables[] = ["\162\145\166\145\x72\x73\x65" => $iiwmeimguameeome, "\x76\x61\x6c\x75\x65\x73" => $qqswgiawgeaeoecu, "\146\x69\x65\154\x64\x73" => $ikgwqyuyckaewsow];
        goto ckkygskekacgqaam;
        eyeiewygmaacsiwo:
        aosciycuyeamaaos:
        goto kcigymowyaokyiwc;
        auqaioasmysiqqsy:
        oiiuimcocwqkaswg:
        goto eyeiewygmaacsiwo;
        uiaougayummkgegi:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto emqyqacwiyuuasyy;
        emqyqacwiyuuasyy:
        if (!$aoaumkkqqmwekemo) {
            goto aosciycuyeamaaos;
        }
        goto cigqqsiususukqyc;
        eeaicyiyamauyoee:
        kacqaygugykcuwuw:
        goto uiaougayummkgegi;
        ckkygskekacgqaam:
        return $this;
        goto ukeugokggimyeyua;
        omyieiyoymkyqiqi:
        wp_die("\x79\x6f\165\40\141\x72\x65\40\164\x72\x79\x69\x6e\x67\x20\164\x6f\40\151\147\156\x6f\162\145\x20{$this->mwikyscisascoeea()}\x20\151\x6e\x70\x75\x74\x20\142\x79\x20\151\164\163\x65\154\146\x2e");
        goto eeaicyiyamauyoee;
        ukeugokggimyeyua:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\145\143\150\157" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto wgaoigoqggowiyky;
        uiiwscsiqwksouoy:
        $this->errors[] = $iswcokucwmiosiaq;
        goto auiawssmaakokgyo;
        wgaoigoqggowiyky:
        if (!$iswcokucwmiosiaq) {
            goto scwyyiuseuyecsis;
        }
        goto uiiwscsiqwksouoy;
        aamykaaucysaicmw:
        return $this;
        goto cugemmgyisuiuequ;
        auiawssmaakokgyo:
        scwyyiuseuyecsis:
        goto aamykaaucysaicmw;
        cugemmgyisuiuequ:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto scqqmasigiqoeuis;
        kqooaiymscqqyaoq:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto esccycckskouguqo;
        }
        goto euacmiswaqmooigs;
        isqyiqykqwuswkwq:
        $this->qcgocuceocquqcuw("\166\141\154\165\x65", $this->qooeaookuemoqecm());
        goto gwosumqquyaqgaow;
        euaeeaooygccaaio:
        if (!$ueeagokqmgisgauy) {
            goto mqkimeeqmqyeguwm;
        }
        goto siagmykyaoyiukii;
        gwosumqquyaqgaow:
        kyogoqkmuyaogssk:
        goto aqymeokaywocqgis;
        scqqmasigiqoeuis:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto mkcqqymyokwyikis;
        guqsiaskouwsqekk:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto euaeeaooygccaaio;
        mkcqqymyokwyikis:
        if (!$aoaumkkqqmwekemo) {
            goto cwasmcmwoqgckoek;
        }
        goto uiqsuyugmmwqqqge;
        uiqsuyugmmwqqqge:
        $this->qigsyyqgewgskemg("\x70\x72\x2d\151\x67\x6e\x6f\x72\141\x62\154\x65\x2d\x69\156\x70\x75\164")->igmaewykumgwoaoy("\144\141\x74\x61\x2d\151\x67\x6e\x6f\162\x61\142\154\145\55\x74\141\162\x67\145\164", json_encode($aoaumkkqqmwekemo));
        goto yymogmkeagyamsia;
        aqymeokaywocqgis:
        esccycckskouguqo:
        goto qaowigoaysucscao;
        qyccigkqoyyiiiau:
        mqkimeeqmqyeguwm:
        goto kqooaiymscqqyaoq;
        euacmiswaqmooigs:
        if (!($this->gueasuouwqysmomu() !== "\144\151\163\160\154\x61\171")) {
            goto kyogoqkmuyaogssk;
        }
        goto isqyiqykqwuswkwq;
        yymogmkeagyamsia:
        cwasmcmwoqgckoek:
        goto guqsiaskouwsqekk;
        siagmykyaoyiukii:
        $this->igmaewykumgwoaoy("\x64\141\x74\x61\55\145\162\162\x6f\x72\x73", wp_json_encode($ueeagokqmgisgauy));
        goto qyccigkqoyyiiiau;
        qaowigoaysucscao:
    }
}
