<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto mwmcueouiygewwqe;
        mwmcueouiygewwqe:
        if ($sqeykgyoooqysmca) {
            goto kacqaygugykcuwuw;
        }
        goto ugcwgqkgoeioyiim;
        aogmqycyywwqmakw:
        $this->name = $ymqmyyeuycgmigyo;
        goto osceeayksymegksu;
        omyieiyoymkyqiqi:
        if (in_array($this->gueasuouwqysmomu(), ["\147\x72\x6f\165\160", "\162\141\x64\x69\x6f", "\142\165\x74\164\157\156", "\x6d\165\154\164\151\x5f\142\x75\x74\x74\157\x6e\x73"])) {
            goto oiiuimcocwqkaswg;
        }
        goto eeaicyiyamauyoee;
        uiaougayummkgegi:
        oiiuimcocwqkaswg:
        goto emqyqacwiyuuasyy;
        ugcwgqkgoeioyiim:
        wp_die("\x66\x69\x65\x6c\144\40\164\171\160\145\40\x69\x73\x20\156\x6f\164\x20\163\x65\x74\54\x20\155\145\x74\141\x42\x6f\x78\x3a\40" . get_called_class());
        goto okaomyswqwiemgyk;
        okaomyswqwiemgyk:
        kacqaygugykcuwuw:
        goto egawuoeqqsmcmmmo;
        icueeiiugweemseg:
        $this->imgcoakmmgqsckkm(12);
        goto omyieiyoymkyqiqi;
        aosciycuyeamaaos:
        $this->attributes = [];
        goto icueeiiugweemseg;
        osceeayksymegksu:
        $this->desc = $mkqqqewsokcswckc;
        goto aosciycuyeamaaos;
        eeaicyiyamauyoee:
        $this->qigsyyqgewgskemg("\x77\55\x31\60\x30");
        goto uiaougayummkgegi;
        wwqickgysiuigqkc:
        $this->type = $sqeykgyoooqysmca;
        goto aogmqycyywwqmakw;
        egawuoeqqsmcmmmo:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto wwqickgysiuigqkc;
        emqyqacwiyuuasyy:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\163\155");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\155\x64");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6c\x67");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto auqaioasmysiqqsy;
        scwyyiuseuyecsis:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto wgaoigoqggowiyky;
        ukeugokggimyeyua:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto scwyyiuseuyecsis;
        ckkygskekacgqaam:
        cigqqsiususukqyc:
        goto ukeugokggimyeyua;
        eyeiewygmaacsiwo:
        if (!$gcgsqcoqciockquc) {
            goto cigqqsiususukqyc;
        }
        goto kcigymowyaokyiwc;
        auqaioasmysiqqsy:
        $egkyssmuqcwaciya = "\143\x6f\154";
        goto eyeiewygmaacsiwo;
        wgaoigoqggowiyky:
        return $this;
        goto uiiwscsiqwksouoy;
        kcigymowyaokyiwc:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto ckkygskekacgqaam;
        uiiwscsiqwksouoy:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto aamykaaucysaicmw;
        mqkimeeqmqyeguwm:
        auiawssmaakokgyo:
        goto kyogoqkmuyaogssk;
        esccycckskouguqo:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto scqqmasigiqoeuis;
        cwasmcmwoqgckoek:
        $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}";
        goto mqkimeeqmqyeguwm;
        scqqmasigiqoeuis:
        return $this;
        goto mkcqqymyokwyikis;
        aamykaaucysaicmw:
        $egkyssmuqcwaciya = "\x63\157\x6c";
        goto cugemmgyisuiuequ;
        cugemmgyisuiuequ:
        if (!$gcgsqcoqciockquc) {
            goto auiawssmaakokgyo;
        }
        goto cwasmcmwoqgckoek;
        kyogoqkmuyaogssk:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto esccycckskouguqo;
        mkcqqymyokwyikis:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        goto uiqsuyugmmwqqqge;
        euaeeaooygccaaio:
        return $this;
        goto siagmykyaoyiukii;
        guqsiaskouwsqekk:
        $this->qigsyyqgewgskemg("\x66\x69\145\154\144\x2d\151\x64\55{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\x64\141\164\x61\55\146\151\x65\154\x64\x2d\151\x64", $aokagokqyuysuksm);
        goto euaeeaooygccaaio;
        uiqsuyugmmwqqqge:
        $this->mykogkuaqwmycgog("\x66\151\145\154\x64\55\x69\144\55{$this->mwikyscisascoeea()}");
        goto yymogmkeagyamsia;
        yymogmkeagyamsia:
        $this->id = $aokagokqyuysuksm;
        goto guqsiaskouwsqekk;
        siagmykyaoyiukii:
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
        goto euacmiswaqmooigs;
        gwosumqquyaqgaow:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto aqymeokaywocqgis;
        aqymeokaywocqgis:
        goto kqooaiymscqqyaoq;
        goto qaowigoaysucscao;
        awaymcmscggqcwyk:
        kqooaiymscqqyaoq:
        goto sgoqygymeqauosow;
        sgoqygymeqauosow:
        return $eqgoocgaqwqcimie;
        goto uycauyiysqmcmscy;
        isqyiqykqwuswkwq:
        if ($aokagokqyuysuksm) {
            goto qyccigkqoyyiiiau;
        }
        goto gwosumqquyaqgaow;
        euacmiswaqmooigs:
        $ggauoeuaesiymgee = $this->default;
        goto isqyiqykqwuswkwq;
        qaowigoaysucscao:
        qyccigkqoyyiiiau:
        goto keawawscoqeyeksm;
        keawawscoqeyeksm:
        $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        goto awaymcmscggqcwyk;
        uycauyiysqmcmscy:
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
        return $this->qcgocuceocquqcuw("\162\x65\161\x75\151\162\145\x64", "\x72\x65\161\165\151\x72\145\x64");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\x72\x65\x71\x75\151\x72\x65\x64");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\162\x65\x63\x74\x69\157\x6e\x2d\162\164\x6c");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\x72\145\143\164\151\157\x6e\55\x6c\x74\x72");
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
        goto eqywooyqyouscges;
        qcsagcciiqgqicsw:
        return $this;
        goto osammgwycqaekuuu;
        eqywooyqyouscges:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            yuoeiacwiaccoqmc:
        }
        goto kmukeiwuqougaquk;
        kmukeiwuqougaquk:
        ssgqequeqwoooawy:
        goto qcsagcciiqgqicsw;
        osammgwycqaekuuu:
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc("\143\x6d\x62\55\x72\157\167\x2d\x69\x6e\154\151\x6e\x65");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\143\155\x62\x2d\162\x6f\x77\x2d\x62\154\157\x63\x6b");
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
        goto aukusqkcwcumyaqg;
        yuuemysicwemmaeo:
        aawmyoyeqakesesk:
        goto imeksugkqgiymkue;
        aukusqkcwcumyaqg:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto aawmyoyeqakesesk;
        }
        goto iuesiswwkuycmkss;
        imeksugkqgiymkue:
        $this->qigsyyqgewgskemg("\144\145\x70\145\x6e\x64\x65\144\55\164\x6f")->qcgocuceocquqcuw("\144\141\x74\x61\x2d\144\x65\x70\145\156\x64\145\144", $uusmaiomayssaecw)->qcgocuceocquqcuw("\144\x61\164\x61\55\144\145\160\145\x6e\x64\145\x64\55\166\x61\154\x75\x65", $eqgoocgaqwqcimie);
        goto miqwiyoooqksyaoq;
        iuesiswwkuycmkss:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto yuuemysicwemmaeo;
        miqwiyoooqksyaoq:
        return $this;
        goto cyywwoiwqioiaiwy;
        cyywwoiwqioiaiwy:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto ywomuwkqguqiwgac;
        aouqiuqoigamkwkw:
        if (!$eqgoocgaqwqcimie) {
            goto qooqgmcaekwgiqwk;
        }
        goto iqgyyysiewuckqwg;
        wcywiwisuykessuc:
        qooqgmcaekwgiqwk:
        goto euwcskwkgqiousgk;
        iqgyyysiewuckqwg:
        $kkeqqkkkqwkocsyu["\144\145\x66\141\165\154\x74"] = $eqgoocgaqwqcimie;
        goto wcywiwisuykessuc;
        ywomuwkqguqiwgac:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto aouqiuqoigamkwkw;
        euwcskwkgqiousgk:
        return $kkeqqkkkqwkocsyu;
        goto iauikwwuewwacuck;
        iauikwwuewwacuck:
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
        $this->qigsyyqgewgskemg("\x77\x2d\x6d\144\x2d\61\60\60");
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
        goto qkooyqycsyamoqco;
        wmiyagiicyqykgyk:
        $oyumuuqqsmuacmak["\146\x69\x65\154\144\x73"] = $ikgwqyuyckaewsow;
        goto yiwwsymuckeyaqaq;
        yiwwsymuckeyaqaq:
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        goto gkcymqkuaqimgogw;
        qkooyqycsyamoqco:
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        goto wmiyagiicyqykgyk;
        gkcymqkuaqimgogw:
        return $this;
        goto mmqissyumkkkcymu;
        mmqissyumkkkcymu:
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        goto uqusmgkqcwisoomy;
        waesmikkwwggimew:
        if (!$aoaumkkqqmwekemo) {
            goto egwwoamyomwcwiua;
        }
        goto eiqoqssiommacioa;
        amyqmkoiiowmmgkw:
        uweeaukswwkcykom:
        goto iiuieoeegigaoqig;
        iiuieoeegigaoqig:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto waesmikkwwggimew;
        uqusmgkqcwisoomy:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto uweeaukswwkcykom;
        }
        goto akcuaggkmmcguucw;
        eiqoqssiommacioa:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto awwqsoommoiqeciy;
            uakwiicomqaccaay:
            yswwqwicwisywcag:
            goto siyayucuuoakcueq;
            seeamagcyugquuea:
            wp_die("\x64\x75\x70\x6c\151\x63\x61\164\x65\40\x69\x67\156\157\x72\x61\142\154\x65\40\162\x75\154\x65\40\146\x6f\x72\x20{$this->mwikyscisascoeea()}\x20\x64\x65\x74\145\x63\164\x65\144\x20\160\x6c\145\x61\x73\145\x20\155\145\x72\147\145\x20\162\x75\x6c\145\163\56");
            goto uakwiicomqaccaay;
            siyayucuuoakcueq:
            msociooiiwqqcwkq:
            goto occamqsmqmmeeqqq;
            awwqsoommoiqeciy:
            if (!($oyumuuqqsmuacmak["\x76\x61\x6c\x75\145\163"] == $qqswgiawgeaeoecu)) {
                goto yswwqwicwisywcag;
            }
            goto seeamagcyugquuea;
            occamqsmqmmeeqqq:
        }
        goto yiuycgyoqoeiqyaw;
        sqgiugsaigagemae:
        $this->ignorables[] = ["\162\145\166\145\x72\163\x65" => $iiwmeimguameeome, "\166\141\x6c\x75\145\163" => $qqswgiawgeaeoecu, "\x66\151\145\154\x64\163" => $ikgwqyuyckaewsow];
        goto muiyqcciawymsusc;
        yiuycgyoqoeiqyaw:
        qkiiyckesqsyyuyu:
        goto awquyomcikuqeems;
        muiyqcciawymsusc:
        return $this;
        goto ausiueiaqeuyacoa;
        akcuaggkmmcguucw:
        wp_die("\x79\157\x75\40\x61\162\145\40\x74\162\171\x69\156\x67\40\x74\x6f\x20\151\x67\x6e\x6f\162\145\40{$this->mwikyscisascoeea()}\40\151\156\x70\x75\164\40\142\x79\x20\151\x74\163\145\154\x66\x2e");
        goto amyqmkoiiowmmgkw;
        awquyomcikuqeems:
        egwwoamyomwcwiua:
        goto sqgiugsaigagemae;
        ausiueiaqeuyacoa:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\145\x63\x68\x6f" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto weuacusmsswqqmws;
        yqmquegysyueeusw:
        return $this;
        goto quueyuisaogageoe;
        qausweuwkqqoqguo:
        $this->errors[] = $iswcokucwmiosiaq;
        goto wwksckauqugwqqww;
        wwksckauqugwqqww:
        gusuiauayocsggww:
        goto yqmquegysyueeusw;
        weuacusmsswqqmws:
        if (!$iswcokucwmiosiaq) {
            goto gusuiauayocsggww;
        }
        goto qausweuwkqqoqguo;
        quueyuisaogageoe:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto iqceqassaaaiqmkc;
        uukmsueoaggqoumw:
        $this->qigsyyqgewgskemg("\160\162\x2d\151\147\156\157\162\x61\142\x6c\x65\55\151\156\x70\165\164")->igmaewykumgwoaoy("\x64\141\164\x61\55\x69\x67\x6e\157\162\x61\142\x6c\x65\x2d\164\141\x72\x67\145\x74", json_encode($aoaumkkqqmwekemo));
        goto iaqqcokyamqkasyi;
        iqceqassaaaiqmkc:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto yumwgoyecokakowa;
        msikckyqsccyeemi:
        uwoeogcggmmwmsso:
        goto qguqgmiiseimmuki;
        iaqqcokyamqkasyi:
        agyakgmmmgaaycca:
        goto lswkqscigacwicay;
        wicwywmgccskaqmk:
        keeekwsuysmemkec:
        goto kqyayciocgyyyigy;
        suiwsqiykiagwmco:
        $this->igmaewykumgwoaoy("\x64\x61\164\141\x2d\x65\162\162\x6f\x72\163", wp_json_encode($ueeagokqmgisgauy));
        goto wicwywmgccskaqmk;
        kqyayciocgyyyigy:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto uwoeogcggmmwmsso;
        }
        goto okcciyqesuaygcws;
        okcciyqesuaygcws:
        if (!($this->gueasuouwqysmomu() !== "\144\x69\163\x70\x6c\141\171")) {
            goto saikeigkoasmcgms;
        }
        goto gswcgsouggoimkww;
        yumwgoyecokakowa:
        if (!$aoaumkkqqmwekemo) {
            goto agyakgmmmgaaycca;
        }
        goto uukmsueoaggqoumw;
        gswcgsouggoimkww:
        $this->qcgocuceocquqcuw("\x76\141\x6c\165\145", $this->qooeaookuemoqecm());
        goto esgcemuwcguosmsa;
        ewcwemymosumossy:
        if (!$ueeagokqmgisgauy) {
            goto keeekwsuysmemkec;
        }
        goto suiwsqiykiagwmco;
        esgcemuwcguosmsa:
        saikeigkoasmcgms:
        goto msikckyqsccyeemi;
        lswkqscigacwicay:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto ewcwemymosumossy;
        qguqgmiiseimmuki:
    }
}
