<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto kacqaygugykcuwuw;
        egawuoeqqsmcmmmo:
        $this->name = $ymqmyyeuycgmigyo;
        goto wwqickgysiuigqkc;
        aosciycuyeamaaos:
        if (in_array($this->gueasuouwqysmomu(), ["\x67\162\157\165\x70", "\x72\x61\x64\x69\157", "\142\x75\164\x74\x6f\x6e", "\x6d\x75\x6c\x74\151\137\x62\x75\x74\x74\157\156\163"])) {
            goto iqaeimeaeecaeauu;
        }
        goto icueeiiugweemseg;
        icueeiiugweemseg:
        $this->qigsyyqgewgskemg("\167\x2d\x31\60\x30");
        goto omyieiyoymkyqiqi;
        wwqickgysiuigqkc:
        $this->desc = $mkqqqewsokcswckc;
        goto aogmqycyywwqmakw;
        osceeayksymegksu:
        $this->imgcoakmmgqsckkm(12);
        goto aosciycuyeamaaos;
        okaomyswqwiemgyk:
        $this->type = $sqeykgyoooqysmca;
        goto egawuoeqqsmcmmmo;
        aogmqycyywwqmakw:
        $this->attributes = [];
        goto osceeayksymegksu;
        oiiuimcocwqkaswg:
        wp_die("\x66\x69\145\x6c\x64\x20\164\x79\160\x65\x20\x69\163\40\156\x6f\x74\x20\x73\145\x74\x2c\40\x6d\145\164\x61\102\x6f\x78\72\40" . get_called_class());
        goto mwmcueouiygewwqe;
        omyieiyoymkyqiqi:
        iqaeimeaeecaeauu:
        goto eeaicyiyamauyoee;
        kacqaygugykcuwuw:
        if ($sqeykgyoooqysmca) {
            goto uagqauwoymegwges;
        }
        goto oiiuimcocwqkaswg;
        mwmcueouiygewwqe:
        uagqauwoymegwges:
        goto ugcwgqkgoeioyiim;
        ugcwgqkgoeioyiim:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto okaomyswqwiemgyk;
        eeaicyiyamauyoee:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x73\155");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6d\144");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\154\x67");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto emqyqacwiyuuasyy;
        auqaioasmysiqqsy:
        $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}";
        goto eyeiewygmaacsiwo;
        ckkygskekacgqaam:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto ukeugokggimyeyua;
        cigqqsiususukqyc:
        if (!$gcgsqcoqciockquc) {
            goto uiaougayummkgegi;
        }
        goto auqaioasmysiqqsy;
        kcigymowyaokyiwc:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto ckkygskekacgqaam;
        emqyqacwiyuuasyy:
        $egkyssmuqcwaciya = "\143\x6f\x6c";
        goto cigqqsiususukqyc;
        ukeugokggimyeyua:
        return $this;
        goto scwyyiuseuyecsis;
        eyeiewygmaacsiwo:
        uiaougayummkgegi:
        goto kcigymowyaokyiwc;
        scwyyiuseuyecsis:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto uiiwscsiqwksouoy;
        auiawssmaakokgyo:
        if (!$gcgsqcoqciockquc) {
            goto wgaoigoqggowiyky;
        }
        goto aamykaaucysaicmw;
        mqkimeeqmqyeguwm:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto kyogoqkmuyaogssk;
        aamykaaucysaicmw:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto cugemmgyisuiuequ;
        cwasmcmwoqgckoek:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto mqkimeeqmqyeguwm;
        uiiwscsiqwksouoy:
        $egkyssmuqcwaciya = "\143\157\x6c";
        goto auiawssmaakokgyo;
        cugemmgyisuiuequ:
        wgaoigoqggowiyky:
        goto cwasmcmwoqgckoek;
        kyogoqkmuyaogssk:
        return $this;
        goto esccycckskouguqo;
        esccycckskouguqo:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        goto scqqmasigiqoeuis;
        yymogmkeagyamsia:
        return $this;
        goto guqsiaskouwsqekk;
        uiqsuyugmmwqqqge:
        $this->qigsyyqgewgskemg("\146\151\x65\154\144\55\151\144\x2d{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\144\141\x74\141\x2d\x66\151\145\154\144\x2d\151\144", $aokagokqyuysuksm);
        goto yymogmkeagyamsia;
        mkcqqymyokwyikis:
        $this->id = $aokagokqyuysuksm;
        goto uiqsuyugmmwqqqge;
        scqqmasigiqoeuis:
        $this->mykogkuaqwmycgog("\x66\151\x65\x6c\144\55\x69\x64\x2d{$this->mwikyscisascoeea()}");
        goto mkcqqymyokwyikis;
        guqsiaskouwsqekk:
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
        goto qyccigkqoyyiiiau;
        keawawscoqeyeksm:
        return $eqgoocgaqwqcimie;
        goto awaymcmscggqcwyk;
        euacmiswaqmooigs:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto isqyiqykqwuswkwq;
        gwosumqquyaqgaow:
        euaeeaooygccaaio:
        goto aqymeokaywocqgis;
        qaowigoaysucscao:
        siagmykyaoyiukii:
        goto keawawscoqeyeksm;
        kqooaiymscqqyaoq:
        if ($aokagokqyuysuksm) {
            goto euaeeaooygccaaio;
        }
        goto euacmiswaqmooigs;
        isqyiqykqwuswkwq:
        goto siagmykyaoyiukii;
        goto gwosumqquyaqgaow;
        aqymeokaywocqgis:
        $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        goto qaowigoaysucscao;
        qyccigkqoyyiiiau:
        $ggauoeuaesiymgee = $this->default;
        goto kqooaiymscqqyaoq;
        awaymcmscggqcwyk:
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
        return $this->qcgocuceocquqcuw("\x72\x65\161\x75\x69\162\145\x64", "\x72\145\161\x75\151\162\x65\144");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\162\145\161\165\x69\162\145\144");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\144\151\x72\x65\143\x74\x69\157\156\55\162\164\154");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\x64\x69\x72\145\143\x74\x69\157\156\x2d\x6c\x74\x72");
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
        goto ssgqequeqwoooawy;
        yuoeiacwiaccoqmc:
        sgoqygymeqauosow:
        goto eqywooyqyouscges;
        eqywooyqyouscges:
        return $this;
        goto kmukeiwuqougaquk;
        ssgqequeqwoooawy:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            uycauyiysqmcmscy:
        }
        goto yuoeiacwiaccoqmc;
        kmukeiwuqougaquk:
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc("\143\x6d\x62\55\x72\x6f\167\55\x69\156\x6c\151\x6e\x65");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\x63\155\x62\x2d\162\157\167\55\142\x6c\157\143\x6b");
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
        goto osammgwycqaekuuu;
        aukusqkcwcumyaqg:
        qcsagcciiqgqicsw:
        goto iuesiswwkuycmkss;
        osammgwycqaekuuu:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto qcsagcciiqgqicsw;
        }
        goto aawmyoyeqakesesk;
        yuuemysicwemmaeo:
        return $this;
        goto imeksugkqgiymkue;
        iuesiswwkuycmkss:
        $this->qigsyyqgewgskemg("\144\145\160\145\156\144\x65\x64\x2d\164\157")->qcgocuceocquqcuw("\144\x61\164\141\55\x64\x65\x70\x65\156\144\x65\x64", $uusmaiomayssaecw)->qcgocuceocquqcuw("\x64\141\x74\141\x2d\144\145\160\x65\x6e\x64\x65\144\x2d\x76\141\154\165\x65", $eqgoocgaqwqcimie);
        goto yuuemysicwemmaeo;
        aawmyoyeqakesesk:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto aukusqkcwcumyaqg;
        imeksugkqgiymkue:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto cyywwoiwqioiaiwy;
        qooqgmcaekwgiqwk:
        if (!$eqgoocgaqwqcimie) {
            goto miqwiyoooqksyaoq;
        }
        goto ywomuwkqguqiwgac;
        cyywwoiwqioiaiwy:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto qooqgmcaekwgiqwk;
        aouqiuqoigamkwkw:
        miqwiyoooqksyaoq:
        goto iqgyyysiewuckqwg;
        ywomuwkqguqiwgac:
        $kkeqqkkkqwkocsyu["\x64\x65\146\141\x75\x6c\x74"] = $eqgoocgaqwqcimie;
        goto aouqiuqoigamkwkw;
        iqgyyysiewuckqwg:
        return $kkeqqkkkqwkocsyu;
        goto wcywiwisuykessuc;
        wcywiwisuykessuc:
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
        $this->qigsyyqgewgskemg("\167\x2d\155\144\x2d\61\60\60");
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
        goto euwcskwkgqiousgk;
        qkooyqycsyamoqco:
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        goto wmiyagiicyqykgyk;
        wmiyagiicyqykgyk:
        return $this;
        goto yiwwsymuckeyaqaq;
        euwcskwkgqiousgk:
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        goto iauikwwuewwacuck;
        iauikwwuewwacuck:
        $oyumuuqqsmuacmak["\x66\151\x65\154\x64\x73"] = $ikgwqyuyckaewsow;
        goto qkooyqycsyamoqco;
        yiwwsymuckeyaqaq:
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        goto occamqsmqmmeeqqq;
        egwwoamyomwcwiua:
        wp_die("\x79\157\165\40\x61\x72\145\x20\164\162\x79\151\x6e\x67\x20\x74\157\40\151\147\x6e\157\162\145\x20{$this->mwikyscisascoeea()}\40\151\156\160\x75\164\40\142\x79\40\x69\x74\x73\145\x6c\x66\x2e");
        goto uqusmgkqcwisoomy;
        awquyomcikuqeems:
        return $this;
        goto sqgiugsaigagemae;
        iiuieoeegigaoqig:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto msociooiiwqqcwkq;
            seeamagcyugquuea:
            uweeaukswwkcykom:
            goto uakwiicomqaccaay;
            yswwqwicwisywcag:
            wp_die("\144\x75\160\x6c\151\143\141\164\x65\40\151\x67\156\157\x72\x61\x62\154\145\40\162\x75\x6c\145\40\146\157\162\40{$this->mwikyscisascoeea()}\40\144\145\x74\x65\143\164\145\144\x20\x70\x6c\145\141\x73\x65\x20\155\x65\162\147\x65\40\x72\165\x6c\x65\x73\x2e");
            goto awwqsoommoiqeciy;
            msociooiiwqqcwkq:
            if (!($oyumuuqqsmuacmak["\166\141\154\x75\x65\163"] == $qqswgiawgeaeoecu)) {
                goto qkiiyckesqsyyuyu;
            }
            goto yswwqwicwisywcag;
            awwqsoommoiqeciy:
            qkiiyckesqsyyuyu:
            goto seeamagcyugquuea;
            uakwiicomqaccaay:
        }
        goto waesmikkwwggimew;
        amyqmkoiiowmmgkw:
        if (!$aoaumkkqqmwekemo) {
            goto siyayucuuoakcueq;
        }
        goto iiuieoeegigaoqig;
        yiuycgyoqoeiqyaw:
        $this->ignorables[] = ["\x72\x65\166\145\162\x73\145" => $iiwmeimguameeome, "\166\x61\154\165\145\x73" => $qqswgiawgeaeoecu, "\x66\151\145\x6c\144\x73" => $ikgwqyuyckaewsow];
        goto awquyomcikuqeems;
        waesmikkwwggimew:
        mmqissyumkkkcymu:
        goto eiqoqssiommacioa;
        akcuaggkmmcguucw:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto amyqmkoiiowmmgkw;
        occamqsmqmmeeqqq:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto gkcymqkuaqimgogw;
        }
        goto egwwoamyomwcwiua;
        uqusmgkqcwisoomy:
        gkcymqkuaqimgogw:
        goto akcuaggkmmcguucw;
        eiqoqssiommacioa:
        siyayucuuoakcueq:
        goto yiuycgyoqoeiqyaw;
        sqgiugsaigagemae:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\145\x63\x68\x6f" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto ausiueiaqeuyacoa;
        weuacusmsswqqmws:
        muiyqcciawymsusc:
        goto qausweuwkqqoqguo;
        qausweuwkqqoqguo:
        return $this;
        goto wwksckauqugwqqww;
        gusuiauayocsggww:
        $this->errors[] = $iswcokucwmiosiaq;
        goto weuacusmsswqqmws;
        ausiueiaqeuyacoa:
        if (!$iswcokucwmiosiaq) {
            goto muiyqcciawymsusc;
        }
        goto gusuiauayocsggww;
        wwksckauqugwqqww:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto saikeigkoasmcgms;
        uwoeogcggmmwmsso:
        if (!$aoaumkkqqmwekemo) {
            goto yqmquegysyueeusw;
        }
        goto iqceqassaaaiqmkc;
        saikeigkoasmcgms:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto uwoeogcggmmwmsso;
        iqceqassaaaiqmkc:
        $this->qigsyyqgewgskemg("\x70\162\55\x69\x67\x6e\x6f\x72\x61\x62\x6c\x65\x2d\x69\x6e\x70\x75\164")->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\x69\147\156\157\162\x61\142\154\145\55\164\x61\162\x67\145\164", json_encode($aoaumkkqqmwekemo));
        goto yumwgoyecokakowa;
        ewcwemymosumossy:
        quueyuisaogageoe:
        goto suiwsqiykiagwmco;
        yumwgoyecokakowa:
        yqmquegysyueeusw:
        goto uukmsueoaggqoumw;
        iaqqcokyamqkasyi:
        if (!$ueeagokqmgisgauy) {
            goto quueyuisaogageoe;
        }
        goto lswkqscigacwicay;
        wicwywmgccskaqmk:
        if (!($this->gueasuouwqysmomu() !== "\144\151\x73\x70\x6c\141\171")) {
            goto agyakgmmmgaaycca;
        }
        goto kqyayciocgyyyigy;
        uukmsueoaggqoumw:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto iaqqcokyamqkasyi;
        suiwsqiykiagwmco:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto keeekwsuysmemkec;
        }
        goto wicwywmgccskaqmk;
        gswcgsouggoimkww:
        keeekwsuysmemkec:
        goto esgcemuwcguosmsa;
        okcciyqesuaygcws:
        agyakgmmmgaaycca:
        goto gswcgsouggoimkww;
        kqyayciocgyyyigy:
        $this->qcgocuceocquqcuw("\x76\141\154\x75\x65", $this->qooeaookuemoqecm());
        goto okcciyqesuaygcws;
        lswkqscigacwicay:
        $this->igmaewykumgwoaoy("\x64\x61\x74\141\x2d\145\x72\x72\157\162\x73", wp_json_encode($ueeagokqmgisgauy));
        goto ewcwemymosumossy;
        esgcemuwcguosmsa:
    }
}
