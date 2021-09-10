<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ysgwyckucmmigkei;
        uagqauwoymegwges:
        wp_die("\x66\151\x65\154\x64\x20\164\171\160\145\x20\x69\163\x20\x6e\x6f\164\40\163\x65\x74\54\40\x6d\145\164\141\102\157\170\72\x20" . get_called_class());
        goto iqaeimeaeecaeauu;
        ugcwgqkgoeioyiim:
        $this->desc = $mkqqqewsokcswckc;
        goto okaomyswqwiemgyk;
        oiiuimcocwqkaswg:
        $this->type = $sqeykgyoooqysmca;
        goto mwmcueouiygewwqe;
        kacqaygugykcuwuw:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto oiiuimcocwqkaswg;
        mwmcueouiygewwqe:
        $this->name = $ymqmyyeuycgmigyo;
        goto ugcwgqkgoeioyiim;
        iqaeimeaeecaeauu:
        oeykyqgwekyacicc:
        goto kacqaygugykcuwuw;
        ysgwyckucmmigkei:
        if ($sqeykgyoooqysmca) {
            goto oeykyqgwekyacicc;
        }
        goto uagqauwoymegwges;
        egawuoeqqsmcmmmo:
        $this->imgcoakmmgqsckkm(12);
        goto wwqickgysiuigqkc;
        aogmqycyywwqmakw:
        $this->qigsyyqgewgskemg("\x77\55\x31\60\x30");
        goto osceeayksymegksu;
        osceeayksymegksu:
        ccyuyimwausiiegi:
        goto aosciycuyeamaaos;
        okaomyswqwiemgyk:
        $this->attributes = [];
        goto egawuoeqqsmcmmmo;
        wwqickgysiuigqkc:
        if (in_array($this->gueasuouwqysmomu(), ["\147\x72\x6f\165\x70", "\x72\x61\x64\151\157", "\x62\x75\x74\164\x6f\x6e", "\x6d\165\154\x74\151\137\142\165\164\x74\x6f\156\163"])) {
            goto ccyuyimwausiiegi;
        }
        goto aogmqycyywwqmakw;
        aosciycuyeamaaos:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x73\155");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\155\x64");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6c\147");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto omyieiyoymkyqiqi;
        eyeiewygmaacsiwo:
        return $this;
        goto kcigymowyaokyiwc;
        cigqqsiususukqyc:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto auqaioasmysiqqsy;
        omyieiyoymkyqiqi:
        $egkyssmuqcwaciya = "\x63\157\154";
        goto eeaicyiyamauyoee;
        emqyqacwiyuuasyy:
        icueeiiugweemseg:
        goto cigqqsiususukqyc;
        uiaougayummkgegi:
        $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}";
        goto emqyqacwiyuuasyy;
        eeaicyiyamauyoee:
        if (!$gcgsqcoqciockquc) {
            goto icueeiiugweemseg;
        }
        goto uiaougayummkgegi;
        auqaioasmysiqqsy:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto eyeiewygmaacsiwo;
        kcigymowyaokyiwc:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto ukeugokggimyeyua;
        aamykaaucysaicmw:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto cugemmgyisuiuequ;
        auiawssmaakokgyo:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto aamykaaucysaicmw;
        cugemmgyisuiuequ:
        return $this;
        goto cwasmcmwoqgckoek;
        scwyyiuseuyecsis:
        if (!$gcgsqcoqciockquc) {
            goto ckkygskekacgqaam;
        }
        goto wgaoigoqggowiyky;
        ukeugokggimyeyua:
        $egkyssmuqcwaciya = "\143\x6f\154";
        goto scwyyiuseuyecsis;
        wgaoigoqggowiyky:
        $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}";
        goto uiiwscsiqwksouoy;
        uiiwscsiqwksouoy:
        ckkygskekacgqaam:
        goto auiawssmaakokgyo;
        cwasmcmwoqgckoek:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        goto mqkimeeqmqyeguwm;
        mqkimeeqmqyeguwm:
        $this->mykogkuaqwmycgog("\146\151\x65\x6c\x64\55\151\144\x2d{$this->mwikyscisascoeea()}");
        goto kyogoqkmuyaogssk;
        scqqmasigiqoeuis:
        return $this;
        goto mkcqqymyokwyikis;
        esccycckskouguqo:
        $this->qigsyyqgewgskemg("\x66\151\x65\x6c\144\x2d\151\144\55{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\x64\141\x74\141\55\146\151\x65\154\x64\x2d\151\x64", $aokagokqyuysuksm);
        goto scqqmasigiqoeuis;
        kyogoqkmuyaogssk:
        $this->id = $aokagokqyuysuksm;
        goto esccycckskouguqo;
        mkcqqymyokwyikis:
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
        goto guqsiaskouwsqekk;
        euacmiswaqmooigs:
        $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        goto isqyiqykqwuswkwq;
        kqooaiymscqqyaoq:
        uiqsuyugmmwqqqge:
        goto euacmiswaqmooigs;
        guqsiaskouwsqekk:
        $ggauoeuaesiymgee = $this->default;
        goto euaeeaooygccaaio;
        siagmykyaoyiukii:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qyccigkqoyyiiiau;
        isqyiqykqwuswkwq:
        yymogmkeagyamsia:
        goto gwosumqquyaqgaow;
        gwosumqquyaqgaow:
        return $eqgoocgaqwqcimie;
        goto aqymeokaywocqgis;
        euaeeaooygccaaio:
        if ($aokagokqyuysuksm) {
            goto uiqsuyugmmwqqqge;
        }
        goto siagmykyaoyiukii;
        qyccigkqoyyiiiau:
        goto yymogmkeagyamsia;
        goto kqooaiymscqqyaoq;
        aqymeokaywocqgis:
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
        return $this->qcgocuceocquqcuw("\162\x65\161\x75\151\162\x65\x64", "\162\145\x71\165\x69\x72\x65\144");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\x72\x65\161\x75\151\162\145\144");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\144\151\x72\x65\143\164\x69\x6f\156\x2d\x72\x74\x6c");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\x72\x65\x63\164\151\x6f\x6e\x2d\154\x74\162");
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
        goto awaymcmscggqcwyk;
        uycauyiysqmcmscy:
        return $this;
        goto ssgqequeqwoooawy;
        sgoqygymeqauosow:
        qaowigoaysucscao:
        goto uycauyiysqmcmscy;
        awaymcmscggqcwyk:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            keawawscoqeyeksm:
        }
        goto sgoqygymeqauosow;
        ssgqequeqwoooawy:
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc("\x63\x6d\x62\55\162\x6f\167\x2d\x69\156\x6c\x69\x6e\x65");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\x63\155\x62\55\162\x6f\x77\x2d\142\x6c\x6f\x63\x6b");
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
        goto eqywooyqyouscges;
        aawmyoyeqakesesk:
        return $this;
        goto aukusqkcwcumyaqg;
        osammgwycqaekuuu:
        $this->qigsyyqgewgskemg("\x64\x65\160\x65\x6e\144\145\144\x2d\164\157")->qcgocuceocquqcuw("\144\141\x74\x61\x2d\x64\145\x70\145\x6e\x64\x65\144", $uusmaiomayssaecw)->qcgocuceocquqcuw("\x64\x61\x74\x61\x2d\x64\x65\160\x65\156\144\x65\x64\55\166\x61\x6c\x75\145", $eqgoocgaqwqcimie);
        goto aawmyoyeqakesesk;
        qcsagcciiqgqicsw:
        yuoeiacwiaccoqmc:
        goto osammgwycqaekuuu;
        kmukeiwuqougaquk:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto qcsagcciiqgqicsw;
        eqywooyqyouscges:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto yuoeiacwiaccoqmc;
        }
        goto kmukeiwuqougaquk;
        aukusqkcwcumyaqg:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto yuuemysicwemmaeo;
        imeksugkqgiymkue:
        if (!$eqgoocgaqwqcimie) {
            goto iuesiswwkuycmkss;
        }
        goto miqwiyoooqksyaoq;
        yuuemysicwemmaeo:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto imeksugkqgiymkue;
        miqwiyoooqksyaoq:
        $kkeqqkkkqwkocsyu["\x64\x65\146\141\165\x6c\164"] = $eqgoocgaqwqcimie;
        goto cyywwoiwqioiaiwy;
        cyywwoiwqioiaiwy:
        iuesiswwkuycmkss:
        goto qooqgmcaekwgiqwk;
        qooqgmcaekwgiqwk:
        return $kkeqqkkkqwkocsyu;
        goto ywomuwkqguqiwgac;
        ywomuwkqguqiwgac:
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
        $this->qigsyyqgewgskemg("\x77\x2d\155\x64\55\61\60\60");
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
        goto aouqiuqoigamkwkw;
        iqgyyysiewuckqwg:
        $oyumuuqqsmuacmak["\146\x69\145\154\144\x73"] = $ikgwqyuyckaewsow;
        goto wcywiwisuykessuc;
        euwcskwkgqiousgk:
        return $this;
        goto iauikwwuewwacuck;
        wcywiwisuykessuc:
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        goto euwcskwkgqiousgk;
        aouqiuqoigamkwkw:
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        goto iqgyyysiewuckqwg;
        iauikwwuewwacuck:
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        goto seeamagcyugquuea;
        akcuaggkmmcguucw:
        wmiyagiicyqykgyk:
        goto amyqmkoiiowmmgkw;
        uakwiicomqaccaay:
        wp_die("\x79\157\165\40\x61\x72\x65\x20\164\162\x79\x69\156\147\x20\164\157\40\x69\x67\x6e\x6f\x72\x65\40{$this->mwikyscisascoeea()}\40\151\x6e\160\165\x74\40\142\x79\40\x69\x74\163\145\x6c\x66\56");
        goto siyayucuuoakcueq;
        seeamagcyugquuea:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto qkooyqycsyamoqco;
        }
        goto uakwiicomqaccaay;
        uqusmgkqcwisoomy:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto mmqissyumkkkcymu;
            uweeaukswwkcykom:
            wp_die("\144\x75\x70\x6c\151\143\141\164\145\x20\151\x67\x6e\157\162\x61\x62\154\145\40\x72\x75\x6c\145\40\146\x6f\x72\40{$this->mwikyscisascoeea()}\40\144\x65\x74\x65\143\x74\145\x64\40\160\x6c\145\x61\163\145\40\155\x65\x72\147\x65\40\x72\x75\x6c\145\163\56");
            goto qkiiyckesqsyyuyu;
            mmqissyumkkkcymu:
            if (!($oyumuuqqsmuacmak["\166\141\154\x75\145\163"] == $qqswgiawgeaeoecu)) {
                goto gkcymqkuaqimgogw;
            }
            goto uweeaukswwkcykom;
            msociooiiwqqcwkq:
            yiwwsymuckeyaqaq:
            goto yswwqwicwisywcag;
            qkiiyckesqsyyuyu:
            gkcymqkuaqimgogw:
            goto msociooiiwqqcwkq;
            yswwqwicwisywcag:
        }
        goto akcuaggkmmcguucw;
        occamqsmqmmeeqqq:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto egwwoamyomwcwiua;
        waesmikkwwggimew:
        return $this;
        goto eiqoqssiommacioa;
        egwwoamyomwcwiua:
        if (!$aoaumkkqqmwekemo) {
            goto awwqsoommoiqeciy;
        }
        goto uqusmgkqcwisoomy;
        amyqmkoiiowmmgkw:
        awwqsoommoiqeciy:
        goto iiuieoeegigaoqig;
        siyayucuuoakcueq:
        qkooyqycsyamoqco:
        goto occamqsmqmmeeqqq;
        iiuieoeegigaoqig:
        $this->ignorables[] = ["\x72\x65\166\x65\x72\x73\145" => $iiwmeimguameeome, "\166\141\x6c\x75\x65\163" => $qqswgiawgeaeoecu, "\146\x69\x65\x6c\144\x73" => $ikgwqyuyckaewsow];
        goto waesmikkwwggimew;
        eiqoqssiommacioa:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\x65\x63\x68\157" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto awquyomcikuqeems;
        muiyqcciawymsusc:
        yiuycgyoqoeiqyaw:
        goto ausiueiaqeuyacoa;
        awquyomcikuqeems:
        if (!$iswcokucwmiosiaq) {
            goto yiuycgyoqoeiqyaw;
        }
        goto sqgiugsaigagemae;
        ausiueiaqeuyacoa:
        return $this;
        goto gusuiauayocsggww;
        sqgiugsaigagemae:
        $this->errors[] = $iswcokucwmiosiaq;
        goto muiyqcciawymsusc;
        gusuiauayocsggww:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto quueyuisaogageoe;
        uwoeogcggmmwmsso:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto iqceqassaaaiqmkc;
        ewcwemymosumossy:
        $this->qcgocuceocquqcuw("\166\141\154\165\145", $this->qooeaookuemoqecm());
        goto suiwsqiykiagwmco;
        lswkqscigacwicay:
        if (!($this->gueasuouwqysmomu() !== "\x64\151\x73\x70\x6c\x61\x79")) {
            goto wwksckauqugwqqww;
        }
        goto ewcwemymosumossy;
        quueyuisaogageoe:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto agyakgmmmgaaycca;
        uukmsueoaggqoumw:
        qausweuwkqqoqguo:
        goto iaqqcokyamqkasyi;
        iqceqassaaaiqmkc:
        if (!$ueeagokqmgisgauy) {
            goto qausweuwkqqoqguo;
        }
        goto yumwgoyecokakowa;
        yumwgoyecokakowa:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\145\162\x72\157\x72\x73", wp_json_encode($ueeagokqmgisgauy));
        goto uukmsueoaggqoumw;
        suiwsqiykiagwmco:
        wwksckauqugwqqww:
        goto wicwywmgccskaqmk;
        wicwywmgccskaqmk:
        yqmquegysyueeusw:
        goto kqyayciocgyyyigy;
        iaqqcokyamqkasyi:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto yqmquegysyueeusw;
        }
        goto lswkqscigacwicay;
        keeekwsuysmemkec:
        $this->qigsyyqgewgskemg("\160\162\x2d\151\147\156\157\x72\141\142\154\145\55\151\156\160\x75\164")->igmaewykumgwoaoy("\144\141\164\x61\x2d\x69\147\156\157\x72\x61\x62\x6c\x65\55\x74\141\162\x67\145\164", json_encode($aoaumkkqqmwekemo));
        goto saikeigkoasmcgms;
        agyakgmmmgaaycca:
        if (!$aoaumkkqqmwekemo) {
            goto weuacusmsswqqmws;
        }
        goto keeekwsuysmemkec;
        saikeigkoasmcgms:
        weuacusmsswqqmws:
        goto uwoeogcggmmwmsso;
        kqyayciocgyyyigy:
    }
}
