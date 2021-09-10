<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto oiiuimcocwqkaswg;
        okaomyswqwiemgyk:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto egawuoeqqsmcmmmo;
        eeaicyiyamauyoee:
        kacqaygugykcuwuw:
        goto uiaougayummkgegi;
        wwqickgysiuigqkc:
        $this->name = $ymqmyyeuycgmigyo;
        goto aogmqycyywwqmakw;
        icueeiiugweemseg:
        if (in_array($this->gueasuouwqysmomu(), ["\x67\x72\x6f\165\160", "\x72\141\x64\x69\x6f", "\142\165\164\164\157\156", "\x6d\165\154\x74\x69\137\142\165\x74\x74\x6f\x6e\x73"])) {
            goto kacqaygugykcuwuw;
        }
        goto omyieiyoymkyqiqi;
        aosciycuyeamaaos:
        $this->imgcoakmmgqsckkm(12);
        goto icueeiiugweemseg;
        aogmqycyywwqmakw:
        $this->desc = $mkqqqewsokcswckc;
        goto osceeayksymegksu;
        ugcwgqkgoeioyiim:
        iqaeimeaeecaeauu:
        goto okaomyswqwiemgyk;
        osceeayksymegksu:
        $this->attributes = [];
        goto aosciycuyeamaaos;
        omyieiyoymkyqiqi:
        $this->qigsyyqgewgskemg("\x77\x2d\x31\60\60");
        goto eeaicyiyamauyoee;
        egawuoeqqsmcmmmo:
        $this->type = $sqeykgyoooqysmca;
        goto wwqickgysiuigqkc;
        mwmcueouiygewwqe:
        wp_die("\x66\151\x65\x6c\144\x20\164\171\x70\145\x20\x69\x73\x20\156\157\x74\x20\163\x65\164\x2c\x20\155\145\164\x61\102\x6f\x78\x3a\x20" . get_called_class());
        goto ugcwgqkgoeioyiim;
        oiiuimcocwqkaswg:
        if ($sqeykgyoooqysmca) {
            goto iqaeimeaeecaeauu;
        }
        goto mwmcueouiygewwqe;
        uiaougayummkgegi:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x73\x6d");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6d\144");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6c\x67");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto cigqqsiususukqyc;
        ckkygskekacgqaam:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto ukeugokggimyeyua;
        kcigymowyaokyiwc:
        emqyqacwiyuuasyy:
        goto ckkygskekacgqaam;
        ukeugokggimyeyua:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto scwyyiuseuyecsis;
        scwyyiuseuyecsis:
        return $this;
        goto wgaoigoqggowiyky;
        eyeiewygmaacsiwo:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto kcigymowyaokyiwc;
        cigqqsiususukqyc:
        $egkyssmuqcwaciya = "\143\x6f\x6c";
        goto auqaioasmysiqqsy;
        auqaioasmysiqqsy:
        if (!$gcgsqcoqciockquc) {
            goto emqyqacwiyuuasyy;
        }
        goto eyeiewygmaacsiwo;
        wgaoigoqggowiyky:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto auiawssmaakokgyo;
        cugemmgyisuiuequ:
        $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}";
        goto cwasmcmwoqgckoek;
        esccycckskouguqo:
        return $this;
        goto scqqmasigiqoeuis;
        mqkimeeqmqyeguwm:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto kyogoqkmuyaogssk;
        kyogoqkmuyaogssk:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto esccycckskouguqo;
        auiawssmaakokgyo:
        $egkyssmuqcwaciya = "\x63\157\154";
        goto aamykaaucysaicmw;
        aamykaaucysaicmw:
        if (!$gcgsqcoqciockquc) {
            goto uiiwscsiqwksouoy;
        }
        goto cugemmgyisuiuequ;
        cwasmcmwoqgckoek:
        uiiwscsiqwksouoy:
        goto mqkimeeqmqyeguwm;
        scqqmasigiqoeuis:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        goto mkcqqymyokwyikis;
        yymogmkeagyamsia:
        $this->qigsyyqgewgskemg("\x66\151\x65\x6c\144\55\x69\144\55{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\x64\x61\164\141\55\146\x69\145\x6c\x64\55\x69\144", $aokagokqyuysuksm);
        goto guqsiaskouwsqekk;
        mkcqqymyokwyikis:
        $this->mykogkuaqwmycgog("\146\x69\x65\154\144\x2d\151\144\55{$this->mwikyscisascoeea()}");
        goto uiqsuyugmmwqqqge;
        uiqsuyugmmwqqqge:
        $this->id = $aokagokqyuysuksm;
        goto yymogmkeagyamsia;
        guqsiaskouwsqekk:
        return $this;
        goto euaeeaooygccaaio;
        euaeeaooygccaaio:
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
        goto kqooaiymscqqyaoq;
        keawawscoqeyeksm:
        qyccigkqoyyiiiau:
        goto awaymcmscggqcwyk;
        gwosumqquyaqgaow:
        goto qyccigkqoyyiiiau;
        goto aqymeokaywocqgis;
        euacmiswaqmooigs:
        if ($aokagokqyuysuksm) {
            goto siagmykyaoyiukii;
        }
        goto isqyiqykqwuswkwq;
        isqyiqykqwuswkwq:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto gwosumqquyaqgaow;
        aqymeokaywocqgis:
        siagmykyaoyiukii:
        goto qaowigoaysucscao;
        kqooaiymscqqyaoq:
        $ggauoeuaesiymgee = $this->default;
        goto euacmiswaqmooigs;
        awaymcmscggqcwyk:
        return $eqgoocgaqwqcimie;
        goto sgoqygymeqauosow;
        qaowigoaysucscao:
        $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        goto keawawscoqeyeksm;
        sgoqygymeqauosow:
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
        return $this->qcgocuceocquqcuw("\x72\145\x71\x75\x69\x72\145\x64", "\162\x65\161\165\151\162\145\x64");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\x72\145\161\165\151\x72\x65\144");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\144\x69\x72\x65\x63\164\x69\157\x6e\x2d\x72\x74\x6c");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\144\x69\x72\x65\x63\x74\151\157\156\55\x6c\x74\162");
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
        goto yuoeiacwiaccoqmc;
        yuoeiacwiaccoqmc:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            ssgqequeqwoooawy:
        }
        goto eqywooyqyouscges;
        eqywooyqyouscges:
        uycauyiysqmcmscy:
        goto kmukeiwuqougaquk;
        kmukeiwuqougaquk:
        return $this;
        goto qcsagcciiqgqicsw;
        qcsagcciiqgqicsw:
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc("\143\155\x62\55\162\x6f\x77\x2d\151\x6e\x6c\151\156\145");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\143\x6d\142\55\x72\x6f\x77\55\x62\154\157\x63\x6b");
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
        goto aawmyoyeqakesesk;
        iuesiswwkuycmkss:
        osammgwycqaekuuu:
        goto yuuemysicwemmaeo;
        aukusqkcwcumyaqg:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto iuesiswwkuycmkss;
        yuuemysicwemmaeo:
        $this->qigsyyqgewgskemg("\144\145\160\x65\x6e\x64\x65\144\x2d\164\157")->qcgocuceocquqcuw("\144\141\164\x61\55\x64\x65\x70\x65\156\144\x65\144", $uusmaiomayssaecw)->qcgocuceocquqcuw("\144\141\x74\x61\x2d\x64\145\160\145\156\x64\x65\144\55\x76\141\x6c\x75\145", $eqgoocgaqwqcimie);
        goto imeksugkqgiymkue;
        aawmyoyeqakesesk:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto osammgwycqaekuuu;
        }
        goto aukusqkcwcumyaqg;
        imeksugkqgiymkue:
        return $this;
        goto miqwiyoooqksyaoq;
        miqwiyoooqksyaoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto qooqgmcaekwgiqwk;
        aouqiuqoigamkwkw:
        $kkeqqkkkqwkocsyu["\x64\145\x66\x61\x75\154\x74"] = $eqgoocgaqwqcimie;
        goto iqgyyysiewuckqwg;
        qooqgmcaekwgiqwk:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto ywomuwkqguqiwgac;
        ywomuwkqguqiwgac:
        if (!$eqgoocgaqwqcimie) {
            goto cyywwoiwqioiaiwy;
        }
        goto aouqiuqoigamkwkw;
        iqgyyysiewuckqwg:
        cyywwoiwqioiaiwy:
        goto wcywiwisuykessuc;
        wcywiwisuykessuc:
        return $kkeqqkkkqwkocsyu;
        goto euwcskwkgqiousgk;
        euwcskwkgqiousgk:
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
        $this->qigsyyqgewgskemg("\167\55\155\144\x2d\61\60\60");
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
        goto iauikwwuewwacuck;
        qkooyqycsyamoqco:
        $oyumuuqqsmuacmak["\x66\x69\145\154\x64\x73"] = $ikgwqyuyckaewsow;
        goto wmiyagiicyqykgyk;
        iauikwwuewwacuck:
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        goto qkooyqycsyamoqco;
        yiwwsymuckeyaqaq:
        return $this;
        goto gkcymqkuaqimgogw;
        wmiyagiicyqykgyk:
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        goto yiwwsymuckeyaqaq;
        gkcymqkuaqimgogw:
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        goto egwwoamyomwcwiua;
        eiqoqssiommacioa:
        uweeaukswwkcykom:
        goto yiuycgyoqoeiqyaw;
        egwwoamyomwcwiua:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto mmqissyumkkkcymu;
        }
        goto uqusmgkqcwisoomy;
        amyqmkoiiowmmgkw:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto iiuieoeegigaoqig;
        akcuaggkmmcguucw:
        mmqissyumkkkcymu:
        goto amyqmkoiiowmmgkw;
        uqusmgkqcwisoomy:
        wp_die("\x79\157\165\x20\141\162\x65\40\x74\162\x79\151\156\147\40\x74\x6f\x20\x69\147\156\157\162\x65\x20{$this->mwikyscisascoeea()}\x20\151\156\160\165\x74\x20\x62\171\40\151\x74\163\145\154\146\56");
        goto akcuaggkmmcguucw;
        iiuieoeegigaoqig:
        if (!$aoaumkkqqmwekemo) {
            goto occamqsmqmmeeqqq;
        }
        goto waesmikkwwggimew;
        waesmikkwwggimew:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto yswwqwicwisywcag;
            yswwqwicwisywcag:
            if (!($oyumuuqqsmuacmak["\x76\x61\x6c\x75\145\163"] == $qqswgiawgeaeoecu)) {
                goto msociooiiwqqcwkq;
            }
            goto awwqsoommoiqeciy;
            awwqsoommoiqeciy:
            wp_die("\x64\x75\160\x6c\x69\x63\141\164\145\40\151\147\156\157\162\141\x62\x6c\x65\40\162\x75\154\x65\x20\x66\157\x72\x20{$this->mwikyscisascoeea()}\40\144\145\x74\x65\x63\x74\145\144\x20\x70\154\x65\x61\163\x65\x20\x6d\x65\x72\x67\x65\x20\x72\165\154\145\x73\56");
            goto seeamagcyugquuea;
            uakwiicomqaccaay:
            qkiiyckesqsyyuyu:
            goto siyayucuuoakcueq;
            seeamagcyugquuea:
            msociooiiwqqcwkq:
            goto uakwiicomqaccaay;
            siyayucuuoakcueq:
        }
        goto eiqoqssiommacioa;
        awquyomcikuqeems:
        $this->ignorables[] = ["\162\x65\166\x65\162\x73\145" => $iiwmeimguameeome, "\166\141\154\x75\145\163" => $qqswgiawgeaeoecu, "\146\x69\x65\x6c\x64\x73" => $ikgwqyuyckaewsow];
        goto sqgiugsaigagemae;
        yiuycgyoqoeiqyaw:
        occamqsmqmmeeqqq:
        goto awquyomcikuqeems;
        sqgiugsaigagemae:
        return $this;
        goto muiyqcciawymsusc;
        muiyqcciawymsusc:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\x65\x63\150\157" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto gusuiauayocsggww;
        qausweuwkqqoqguo:
        ausiueiaqeuyacoa:
        goto wwksckauqugwqqww;
        wwksckauqugwqqww:
        return $this;
        goto yqmquegysyueeusw;
        gusuiauayocsggww:
        if (!$iswcokucwmiosiaq) {
            goto ausiueiaqeuyacoa;
        }
        goto weuacusmsswqqmws;
        weuacusmsswqqmws:
        $this->errors[] = $iswcokucwmiosiaq;
        goto qausweuwkqqoqguo;
        yqmquegysyueeusw:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto uwoeogcggmmwmsso;
        ewcwemymosumossy:
        $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d\x65\162\x72\157\x72\163", wp_json_encode($ueeagokqmgisgauy));
        goto suiwsqiykiagwmco;
        gswcgsouggoimkww:
        keeekwsuysmemkec:
        goto esgcemuwcguosmsa;
        lswkqscigacwicay:
        if (!$ueeagokqmgisgauy) {
            goto agyakgmmmgaaycca;
        }
        goto ewcwemymosumossy;
        uukmsueoaggqoumw:
        quueyuisaogageoe:
        goto iaqqcokyamqkasyi;
        kqyayciocgyyyigy:
        if (!($this->gueasuouwqysmomu() !== "\x64\x69\x73\160\154\141\171")) {
            goto keeekwsuysmemkec;
        }
        goto okcciyqesuaygcws;
        iaqqcokyamqkasyi:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto lswkqscigacwicay;
        esgcemuwcguosmsa:
        saikeigkoasmcgms:
        goto msikckyqsccyeemi;
        uwoeogcggmmwmsso:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto iqceqassaaaiqmkc;
        iqceqassaaaiqmkc:
        if (!$aoaumkkqqmwekemo) {
            goto quueyuisaogageoe;
        }
        goto yumwgoyecokakowa;
        suiwsqiykiagwmco:
        agyakgmmmgaaycca:
        goto wicwywmgccskaqmk;
        yumwgoyecokakowa:
        $this->qigsyyqgewgskemg("\x70\162\x2d\151\x67\156\x6f\x72\141\142\x6c\x65\55\151\156\160\165\164")->igmaewykumgwoaoy("\144\x61\x74\141\x2d\151\147\156\157\162\x61\x62\x6c\x65\55\164\x61\162\147\x65\x74", json_encode($aoaumkkqqmwekemo));
        goto uukmsueoaggqoumw;
        wicwywmgccskaqmk:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto saikeigkoasmcgms;
        }
        goto kqyayciocgyyyigy;
        okcciyqesuaygcws:
        $this->qcgocuceocquqcuw("\166\141\154\165\x65", $this->qooeaookuemoqecm());
        goto gswcgsouggoimkww;
        msikckyqsccyeemi:
    }
}
