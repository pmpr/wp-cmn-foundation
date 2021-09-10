<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        icueeiiugweemseg:
        if (in_array($this->gueasuouwqysmomu(), ["\x67\x72\157\165\x70", "\162\141\x64\x69\157", "\142\x75\164\164\157\x6e", "\155\165\x6c\164\x69\x5f\x62\165\x74\164\157\x6e\163"])) {
            goto kacqaygugykcuwuw;
        }
        goto omyieiyoymkyqiqi;
        okaomyswqwiemgyk:
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        goto egawuoeqqsmcmmmo;
        osceeayksymegksu:
        $this->attributes = [];
        goto aosciycuyeamaaos;
        omyieiyoymkyqiqi:
        $this->qigsyyqgewgskemg("\167\55\x31\x30\60");
        goto eeaicyiyamauyoee;
        wwqickgysiuigqkc:
        $this->name = $ymqmyyeuycgmigyo;
        goto aogmqycyywwqmakw;
        egawuoeqqsmcmmmo:
        $this->type = $sqeykgyoooqysmca;
        goto wwqickgysiuigqkc;
        aogmqycyywwqmakw:
        $this->desc = $mkqqqewsokcswckc;
        goto osceeayksymegksu;
        ugcwgqkgoeioyiim:
        iqaeimeaeecaeauu:
        goto okaomyswqwiemgyk;
        oiiuimcocwqkaswg:
        if ($sqeykgyoooqysmca) {
            goto iqaeimeaeecaeauu;
        }
        goto mwmcueouiygewwqe;
        mwmcueouiygewwqe:
        wp_die("\146\151\145\154\x64\x20\164\x79\x70\145\x20\151\163\40\156\157\x74\x20\163\x65\x74\x2c\40\155\145\164\141\102\x6f\x78\72\x20" . get_called_class());
        goto ugcwgqkgoeioyiim;
        eeaicyiyamauyoee:
        kacqaygugykcuwuw:
        goto uiaougayummkgegi;
        aosciycuyeamaaos:
        $this->imgcoakmmgqsckkm(12);
        goto icueeiiugweemseg;
        uiaougayummkgegi:
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\163\155");
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6d\x64");
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6c\x67");
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto cigqqsiususukqyc;
        scwyyiuseuyecsis:
        return $this;
        goto wgaoigoqggowiyky;
        auqaioasmysiqqsy:
        if (!$gcgsqcoqciockquc) {
            goto emqyqacwiyuuasyy;
        }
        goto eyeiewygmaacsiwo;
        ukeugokggimyeyua:
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        goto scwyyiuseuyecsis;
        cigqqsiususukqyc:
        $egkyssmuqcwaciya = "\x63\157\154";
        goto auqaioasmysiqqsy;
        eyeiewygmaacsiwo:
        $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}";
        goto kcigymowyaokyiwc;
        ckkygskekacgqaam:
        $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}";
        goto ukeugokggimyeyua;
        kcigymowyaokyiwc:
        emqyqacwiyuuasyy:
        goto ckkygskekacgqaam;
        wgaoigoqggowiyky:
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        goto auiawssmaakokgyo;
        kyogoqkmuyaogssk:
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        goto esccycckskouguqo;
        esccycckskouguqo:
        return $this;
        goto scqqmasigiqoeuis;
        aamykaaucysaicmw:
        if (!$gcgsqcoqciockquc) {
            goto uiiwscsiqwksouoy;
        }
        goto cugemmgyisuiuequ;
        cugemmgyisuiuequ:
        $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}";
        goto cwasmcmwoqgckoek;
        mqkimeeqmqyeguwm:
        $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}";
        goto kyogoqkmuyaogssk;
        auiawssmaakokgyo:
        $egkyssmuqcwaciya = "\x63\x6f\x6c";
        goto aamykaaucysaicmw;
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
        mkcqqymyokwyikis:
        $this->mykogkuaqwmycgog("\146\x69\145\154\144\55\x69\x64\x2d{$this->mwikyscisascoeea()}");
        goto uiqsuyugmmwqqqge;
        uiqsuyugmmwqqqge:
        $this->id = $aokagokqyuysuksm;
        goto yymogmkeagyamsia;
        guqsiaskouwsqekk:
        return $this;
        goto euaeeaooygccaaio;
        yymogmkeagyamsia:
        $this->qigsyyqgewgskemg("\146\151\145\x6c\144\55\151\x64\x2d{$aokagokqyuysuksm}")->qcgocuceocquqcuw("\144\141\164\x61\55\x66\x69\145\x6c\x64\x2d\x69\144", $aokagokqyuysuksm);
        goto guqsiaskouwsqekk;
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
        kqooaiymscqqyaoq:
        $ggauoeuaesiymgee = $this->default;
        goto euacmiswaqmooigs;
        keawawscoqeyeksm:
        qyccigkqoyyiiiau:
        goto awaymcmscggqcwyk;
        awaymcmscggqcwyk:
        return $eqgoocgaqwqcimie;
        goto sgoqygymeqauosow;
        gwosumqquyaqgaow:
        goto qyccigkqoyyiiiau;
        goto aqymeokaywocqgis;
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
        return $this->qcgocuceocquqcuw("\x72\x65\161\x75\x69\x72\x65\144", "\x72\145\x71\165\x69\162\145\x64");
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa("\162\x65\x71\x75\x69\x72\145\144");
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg("\144\x69\162\x65\x63\164\x69\157\x6e\x2d\162\x74\x6c");
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg("\144\151\162\x65\143\164\151\x6f\156\x2d\154\164\x72");
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
        eqywooyqyouscges:
        uycauyiysqmcmscy:
        goto kmukeiwuqougaquk;
        kmukeiwuqougaquk:
        return $this;
        goto qcsagcciiqgqicsw;
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
        return $this->usoqcyyugsuyiewc("\143\155\142\x2d\162\157\167\55\x69\x6e\154\x69\x6e\145");
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc("\x63\155\x62\55\162\x6f\167\55\142\154\157\x63\x6b");
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
        yuuemysicwemmaeo:
        $this->qigsyyqgewgskemg("\144\145\160\145\156\144\x65\x64\55\164\157")->qcgocuceocquqcuw("\x64\141\164\x61\x2d\x64\x65\x70\145\x6e\x64\145\x64", $uusmaiomayssaecw)->qcgocuceocquqcuw("\x64\x61\164\141\x2d\x64\145\160\145\156\144\x65\144\x2d\166\x61\x6c\x75\145", $eqgoocgaqwqcimie);
        goto imeksugkqgiymkue;
        aawmyoyeqakesesk:
        if (!is_array($eqgoocgaqwqcimie)) {
            goto osammgwycqaekuuu;
        }
        goto aukusqkcwcumyaqg;
        imeksugkqgiymkue:
        return $this;
        goto miqwiyoooqksyaoq;
        aukusqkcwcumyaqg:
        $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        goto iuesiswwkuycmkss;
        miqwiyoooqksyaoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto qooqgmcaekwgiqwk;
        wcywiwisuykessuc:
        return $kkeqqkkkqwkocsyu;
        goto euwcskwkgqiousgk;
        iqgyyysiewuckqwg:
        cyywwoiwqioiaiwy:
        goto wcywiwisuykessuc;
        aouqiuqoigamkwkw:
        $kkeqqkkkqwkocsyu["\x64\x65\146\x61\165\x6c\164"] = $eqgoocgaqwqcimie;
        goto iqgyyysiewuckqwg;
        ywomuwkqguqiwgac:
        if (!$eqgoocgaqwqcimie) {
            goto cyywwoiwqioiaiwy;
        }
        goto aouqiuqoigamkwkw;
        qooqgmcaekwgiqwk:
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        goto ywomuwkqguqiwgac;
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
        $this->qigsyyqgewgskemg("\x77\55\155\144\55\x31\60\x30");
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
        $oyumuuqqsmuacmak["\146\x69\x65\154\x64\163"] = $ikgwqyuyckaewsow;
        goto wmiyagiicyqykgyk;
        wmiyagiicyqykgyk:
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        goto yiwwsymuckeyaqaq;
        yiwwsymuckeyaqaq:
        return $this;
        goto gkcymqkuaqimgogw;
        gkcymqkuaqimgogw:
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        goto egwwoamyomwcwiua;
        akcuaggkmmcguucw:
        mmqissyumkkkcymu:
        goto amyqmkoiiowmmgkw;
        sqgiugsaigagemae:
        return $this;
        goto muiyqcciawymsusc;
        iiuieoeegigaoqig:
        if (!$aoaumkkqqmwekemo) {
            goto occamqsmqmmeeqqq;
        }
        goto waesmikkwwggimew;
        awquyomcikuqeems:
        $this->ignorables[] = ["\x72\x65\x76\145\x72\x73\x65" => $iiwmeimguameeome, "\x76\141\x6c\165\145\163" => $qqswgiawgeaeoecu, "\x66\x69\x65\154\144\163" => $ikgwqyuyckaewsow];
        goto sqgiugsaigagemae;
        yiuycgyoqoeiqyaw:
        occamqsmqmmeeqqq:
        goto awquyomcikuqeems;
        amyqmkoiiowmmgkw:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto iiuieoeegigaoqig;
        egwwoamyomwcwiua:
        if (!(is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea())) {
            goto mmqissyumkkkcymu;
        }
        goto uqusmgkqcwisoomy;
        uqusmgkqcwisoomy:
        wp_die("\x79\x6f\165\x20\x61\x72\145\x20\x74\162\171\151\156\147\40\164\157\40\151\x67\x6e\x6f\x72\x65\x20{$this->mwikyscisascoeea()}\x20\151\x6e\160\165\164\40\142\x79\x20\151\164\x73\x65\x6c\146\x2e");
        goto akcuaggkmmcguucw;
        eiqoqssiommacioa:
        uweeaukswwkcykom:
        goto yiuycgyoqoeiqyaw;
        waesmikkwwggimew:
        foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
            goto yswwqwicwisywcag;
            yswwqwicwisywcag:
            if (!($oyumuuqqsmuacmak["\x76\x61\154\165\x65\x73"] == $qqswgiawgeaeoecu)) {
                goto msociooiiwqqcwkq;
            }
            goto awwqsoommoiqeciy;
            seeamagcyugquuea:
            msociooiiwqqcwkq:
            goto uakwiicomqaccaay;
            awwqsoommoiqeciy:
            wp_die("\144\x75\x70\154\151\x63\141\164\145\x20\x69\147\x6e\x6f\x72\141\142\154\x65\x20\x72\165\x6c\145\40\x66\x6f\162\40{$this->mwikyscisascoeea()}\40\x64\145\x74\x65\143\x74\145\144\40\x70\x6c\x65\141\x73\x65\x20\155\145\x72\x67\145\x20\162\165\x6c\x65\163\x2e");
            goto seeamagcyugquuea;
            uakwiicomqaccaay:
            qkiiyckesqsyyuyu:
            goto siyayucuuoakcueq;
            siyayucuuoakcueq:
        }
        goto eiqoqssiommacioa;
        muiyqcciawymsusc:
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ["\x65\143\x68\157" => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        goto gusuiauayocsggww;
        weuacusmsswqqmws:
        $this->errors[] = $iswcokucwmiosiaq;
        goto qausweuwkqqoqguo;
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
        yqmquegysyueeusw:
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto uwoeogcggmmwmsso;
        lswkqscigacwicay:
        if (!$ueeagokqmgisgauy) {
            goto agyakgmmmgaaycca;
        }
        goto ewcwemymosumossy;
        esgcemuwcguosmsa:
        saikeigkoasmcgms:
        goto msikckyqsccyeemi;
        wicwywmgccskaqmk:
        if (!is_string($this->qooeaookuemoqecm())) {
            goto saikeigkoasmcgms;
        }
        goto kqyayciocgyyyigy;
        iqceqassaaaiqmkc:
        if (!$aoaumkkqqmwekemo) {
            goto quueyuisaogageoe;
        }
        goto yumwgoyecokakowa;
        yumwgoyecokakowa:
        $this->qigsyyqgewgskemg("\160\162\x2d\151\x67\156\157\162\141\x62\x6c\x65\x2d\x69\x6e\x70\165\x74")->igmaewykumgwoaoy("\x64\x61\164\x61\x2d\x69\x67\x6e\x6f\162\x61\142\154\145\x2d\x74\141\162\147\x65\x74", json_encode($aoaumkkqqmwekemo));
        goto uukmsueoaggqoumw;
        uwoeogcggmmwmsso:
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        goto iqceqassaaaiqmkc;
        gswcgsouggoimkww:
        keeekwsuysmemkec:
        goto esgcemuwcguosmsa;
        kqyayciocgyyyigy:
        if (!($this->gueasuouwqysmomu() !== "\144\x69\x73\160\154\x61\x79")) {
            goto keeekwsuysmemkec;
        }
        goto okcciyqesuaygcws;
        okcciyqesuaygcws:
        $this->qcgocuceocquqcuw("\x76\x61\x6c\165\x65", $this->qooeaookuemoqecm());
        goto gswcgsouggoimkww;
        ewcwemymosumossy:
        $this->igmaewykumgwoaoy("\144\x61\x74\x61\55\x65\x72\162\157\162\163", wp_json_encode($ueeagokqmgisgauy));
        goto suiwsqiykiagwmco;
        uukmsueoaggqoumw:
        quueyuisaogageoe:
        goto iaqqcokyamqkasyi;
        iaqqcokyamqkasyi:
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        goto lswkqscigacwicay;
        suiwsqiykiagwmco:
        agyakgmmmgaaycca:
        goto wicwywmgccskaqmk;
        msikckyqsccyeemi:
    }
}
