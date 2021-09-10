<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        aogmqycyywwqmakw:
        $this->desc = $mkqqqewsokcswckc;
        goto osceeayksymegksu;
        mwmcueouiygewwqe:
        wp_die("\x66\x69\145\154\144\40\x74\x79\x70\145\40\151\x73\40\156\157\164\40\x73\145\x74\x2c\40\155\x65\x74\141\x42\157\170\72\40" . get_called_class());
        goto ugcwgqkgoeioyiim;
        osceeayksymegksu:
        $this->attributes = [];
        goto aosciycuyeamaaos;
        omyieiyoymkyqiqi:
        $this->qigsyyqgewgskemg("\x77\55\x31\x30\x30");
        goto eeaicyiyamauyoee;
        icueeiiugweemseg:
        if (in_array($this->gueasuouwqysmomu(), ["\x67\x72\157\x75\160", "\x72\141\144\x69\157", "\x62\165\164\164\x6f\x6e", "\155\x75\x6c\x74\151\137\x62\x75\x74\164\x6f\x6e\x73"])) {
            goto kacqaygugykcuwuw;
        }
        goto omyieiyoymkyqiqi;
        egawuoeqqsmcmmmo:
        $this->type = $sqeykgyoooqysmca;
        goto wwqickgysiuigqkc;
        eeaicyiyamauyoee:
        kacqaygugykcuwuw:
        goto uiaougayummkgegi;
        okaomyswqwiemgyk:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto egawuoeqqsmcmmmo;
        wwqickgysiuigqkc:
        $this->name = $ymqmyyeuycgmigyo;
        goto aogmqycyywwqmakw;
        oiiuimcocwqkaswg:
        if ($sqeykgyoooqysmca) {
            goto iqaeimeaeecaeauu;
        }
        goto mwmcueouiygewwqe;
        aosciycuyeamaaos:
        $this->imgcoakmmgqsckkm(12);
        goto icueeiiugweemseg;
        ugcwgqkgoeioyiim:
        iqaeimeaeecaeauu:
        goto okaomyswqwiemgyk;
        uiaougayummkgegi:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x73\x6d");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\155\x64");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\154\x67");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto cigqqsiususukqyc;
        ckkygskekacgqaam:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto ukeugokggimyeyua;
        auqaioasmysiqqsy:
        if (!$gcgsqcoqciockquc) {
            goto emqyqacwiyuuasyy;
        }
        goto eyeiewygmaacsiwo;
        kcigymowyaokyiwc:
        emqyqacwiyuuasyy:
        goto ckkygskekacgqaam;
        eyeiewygmaacsiwo:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto kcigymowyaokyiwc;
        ukeugokggimyeyua:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto scwyyiuseuyecsis;
        scwyyiuseuyecsis:
        return $this;
        goto wgaoigoqggowiyky;
        cigqqsiususukqyc:
        $egkyssmuqcwaciya = "\x63\x6f\154";
        goto auqaioasmysiqqsy;
        wgaoigoqggowiyky:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto auiawssmaakokgyo;
        mqkimeeqmqyeguwm:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto kyogoqkmuyaogssk;
        aamykaaucysaicmw:
        if (!$gcgsqcoqciockquc) {
            goto uiiwscsiqwksouoy;
        }
        goto cugemmgyisuiuequ;
        cugemmgyisuiuequ:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto cwasmcmwoqgckoek;
        esccycckskouguqo:
        return $this;
        goto scqqmasigiqoeuis;
        auiawssmaakokgyo:
        $egkyssmuqcwaciya = "\x63\157\x6c";
        goto aamykaaucysaicmw;
        kyogoqkmuyaogssk:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto esccycckskouguqo;
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
        guqsiaskouwsqekk:
        return $this;
        goto euaeeaooygccaaio;
        yymogmkeagyamsia:
        $this->qigsyyqgewgskemg("\x66\151\x65\154\x64\x2d\151\144\x2d{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\144\141\164\141\x2d\x66\151\145\154\x64\55\x69\144", $aokagokqyuysuksm);
        goto guqsiaskouwsqekk;
        uiqsuyugmmwqqqge:
        $this->id = $aokagokqyuysuksm;
        goto yymogmkeagyamsia;
        mkcqqymyokwyikis:
        $this->mykogkuaqwmycgog("\146\x69\145\x6c\x64\55\x69\x64\55{$this->mwikyscisascoeea()}");
        goto uiqsuyugmmwqqqge;
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
        awaymcmscggqcwyk:
        return $eqgoocgaqwqcimie;
        goto sgoqygymeqauosow;
        kqooaiymscqqyaoq:
        $ggauoeuaesiymgee = $this->default;
        goto euacmiswaqmooigs;
        isqyiqykqwuswkwq:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto gwosumqquyaqgaow;
        euacmiswaqmooigs:
        if ($aokagokqyuysuksm) {
            goto siagmykyaoyiukii;
        }
        goto isqyiqykqwuswkwq;
        aqymeokaywocqgis:
        siagmykyaoyiukii:
        goto qaowigoaysucscao;
        gwosumqquyaqgaow:
        goto qyccigkqoyyiiiau;
        goto aqymeokaywocqgis;
        qaowigoaysucscao:
        $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        goto keawawscoqeyeksm;
        keawawscoqeyeksm:
        qyccigkqoyyiiiau:
        goto awaymcmscggqcwyk;
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
        return $this->qcgocuceocquqcuw("\162\x65\x71\165\x69\162\145\144", "\x72\145\161\x75\151\x72\x65\144");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\162\x65\x71\x75\x69\x72\145\x64");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\x72\x65\143\164\151\x6f\x6e\x2d\162\164\x6c");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\x72\x65\x63\164\x69\x6f\156\x2d\x6c\x74\162");
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
        kmukeiwuqougaquk:
        return $this;
        goto qcsagcciiqgqicsw;
        eqywooyqyouscges:
        uycauyiysqmcmscy:
        goto kmukeiwuqougaquk;
        yuoeiacwiaccoqmc:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            ssgqequeqwoooawy:
        }
        goto eqywooyqyouscges;
        qcsagcciiqgqicsw:
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc("\143\x6d\142\55\x72\157\x77\x2d\x69\x6e\x6c\x69\156\145");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\x63\155\142\x2d\x72\x6f\x77\55\x62\x6c\157\143\x6b");
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
        aawmyoyeqakesesk:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto osammgwycqaekuuu;
        }
        goto aukusqkcwcumyaqg;
        imeksugkqgiymkue:
        return $this;
        goto miqwiyoooqksyaoq;
        yuuemysicwemmaeo:
        $this->qigsyyqgewgskemg("\144\145\160\x65\x6e\x64\x65\144\55\164\x6f")->qcgocuceocquqcuw("\x64\x61\164\141\55\x64\145\160\145\x6e\x64\x65\x64", $uusmaiomayssaecw)->qcgocuceocquqcuw("\144\x61\x74\141\55\144\145\160\x65\x6e\x64\145\144\x2d\166\141\154\x75\x65", $eqgoocgaqwqcimie);
        goto imeksugkqgiymkue;
        aukusqkcwcumyaqg:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto iuesiswwkuycmkss;
        miqwiyoooqksyaoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto qooqgmcaekwgiqwk;
        aouqiuqoigamkwkw:
        $kkeqqkkkqwkocsyu["\144\145\x66\x61\165\154\x74"] = $eqgoocgaqwqcimie;
        goto iqgyyysiewuckqwg;
        wcywiwisuykessuc:
        return $kkeqqkkkqwkocsyu;
        goto euwcskwkgqiousgk;
        ywomuwkqguqiwgac:
        if (!$eqgoocgaqwqcimie) {
            goto cyywwoiwqioiaiwy;
        }
        goto aouqiuqoigamkwkw;
        qooqgmcaekwgiqwk:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto ywomuwkqguqiwgac;
        iqgyyysiewuckqwg:
        cyywwoiwqioiaiwy:
        goto wcywiwisuykessuc;
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
        $this->qigsyyqgewgskemg("\x77\55\155\x64\55\x31\60\60");
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
        iauikwwuewwacuck:
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        goto qkooyqycsyamoqco;
        qkooyqycsyamoqco:
        $oyumuuqqsmuacmak["\146\x69\145\154\x64\163"] = $ikgwqyuyckaewsow;
        goto wmiyagiicyqykgyk;
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
        yiuycgyoqoeiqyaw:
        occamqsmqmmeeqqq:
        goto awquyomcikuqeems;
        iiuieoeegigaoqig:
        if (!$aoaumkkqqmwekemo) {
            goto occamqsmqmmeeqqq;
        }
        goto waesmikkwwggimew;
        awquyomcikuqeems:
        $this->ignorables[] = ["\162\x65\166\145\x72\x73\x65" => $iiwmeimguameeome, "\166\141\x6c\165\x65\163" => $qqswgiawgeaeoecu, "\x66\x69\x65\x6c\144\163" => $ikgwqyuyckaewsow];
        goto sqgiugsaigagemae;
        sqgiugsaigagemae:
        return $this;
        goto muiyqcciawymsusc;
        egwwoamyomwcwiua:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto mmqissyumkkkcymu;
        }
        goto uqusmgkqcwisoomy;
        akcuaggkmmcguucw:
        mmqissyumkkkcymu:
        goto amyqmkoiiowmmgkw;
        waesmikkwwggimew:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto yswwqwicwisywcag;
            uakwiicomqaccaay:
            qkiiyckesqsyyuyu:
            goto siyayucuuoakcueq;
            awwqsoommoiqeciy:
            wp_die("\144\x75\x70\154\151\x63\x61\x74\145\x20\151\147\156\x6f\162\141\142\154\x65\40\162\x75\154\145\40\146\x6f\162\40{$this->mwikyscisascoeea()}\40\144\145\164\x65\143\164\145\x64\40\x70\154\145\141\163\145\40\155\145\162\x67\145\40\162\x75\154\145\163\x2e");
            goto seeamagcyugquuea;
            yswwqwicwisywcag:
            if (!($oyumuuqqsmuacmak["\x76\141\154\165\x65\x73"] == $qqswgiawgeaeoecu)) {
                goto msociooiiwqqcwkq;
            }
            goto awwqsoommoiqeciy;
            seeamagcyugquuea:
            msociooiiwqqcwkq:
            goto uakwiicomqaccaay;
            siyayucuuoakcueq:
        }
        goto eiqoqssiommacioa;
        uqusmgkqcwisoomy:
        wp_die("\x79\x6f\165\x20\141\x72\145\40\164\162\171\x69\x6e\147\x20\164\x6f\x20\x69\x67\x6e\157\x72\x65\x20{$this->mwikyscisascoeea()}\40\151\156\x70\x75\164\40\142\171\x20\x69\x74\163\145\154\146\56");
        goto akcuaggkmmcguucw;
        eiqoqssiommacioa:
        uweeaukswwkcykom:
        goto yiuycgyoqoeiqyaw;
        amyqmkoiiowmmgkw:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto iiuieoeegigaoqig;
        muiyqcciawymsusc:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\x65\x63\150\x6f" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto gusuiauayocsggww;
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
        qausweuwkqqoqguo:
        ausiueiaqeuyacoa:
        goto wwksckauqugwqqww;
        yqmquegysyueeusw:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto uwoeogcggmmwmsso;
        iqceqassaaaiqmkc:
        if (!$aoaumkkqqmwekemo) {
            goto quueyuisaogageoe;
        }
        goto yumwgoyecokakowa;
        esgcemuwcguosmsa:
        saikeigkoasmcgms:
        goto msikckyqsccyeemi;
        lswkqscigacwicay:
        if (!$ueeagokqmgisgauy) {
            goto agyakgmmmgaaycca;
        }
        goto ewcwemymosumossy;
        ewcwemymosumossy:
        $this->igmaewykumgwoaoy("\x64\141\164\141\55\x65\x72\x72\157\162\x73", wp_json_encode($ueeagokqmgisgauy));
        goto suiwsqiykiagwmco;
        iaqqcokyamqkasyi:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto lswkqscigacwicay;
        okcciyqesuaygcws:
        $this->qcgocuceocquqcuw("\166\141\x6c\x75\145", $this->qooeaookuemoqecm());
        goto gswcgsouggoimkww;
        gswcgsouggoimkww:
        keeekwsuysmemkec:
        goto esgcemuwcguosmsa;
        uwoeogcggmmwmsso:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto iqceqassaaaiqmkc;
        kqyayciocgyyyigy:
        if (!($this->gueasuouwqysmomu() !== "\x64\151\163\160\x6c\141\171")) {
            goto keeekwsuysmemkec;
        }
        goto okcciyqesuaygcws;
        wicwywmgccskaqmk:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto saikeigkoasmcgms;
        }
        goto kqyayciocgyyyigy;
        yumwgoyecokakowa:
        $this->qigsyyqgewgskemg("\160\162\x2d\151\x67\x6e\157\x72\x61\142\154\x65\x2d\151\x6e\160\165\x74")->igmaewykumgwoaoy("\144\141\164\x61\x2d\x69\x67\156\x6f\162\x61\x62\x6c\145\55\164\141\x72\147\145\164", json_encode($aoaumkkqqmwekemo));
        goto uukmsueoaggqoumw;
        uukmsueoaggqoumw:
        quueyuisaogageoe:
        goto iaqqcokyamqkasyi;
        suiwsqiykiagwmco:
        agyakgmmmgaaycca:
        goto wicwywmgccskaqmk;
        msikckyqsccyeemi:
    }
}
