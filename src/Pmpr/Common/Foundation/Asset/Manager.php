<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Asset;

use Exception;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Data\Source;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class Manager extends Common
{
    
    protected ?Component $component = null;
    
    protected ?UrlPackage $package = null;
    
    protected bool $attributeAdded = false;
    
    protected array $localize = [self::ADMIN => [], self::FRONT => [], self::LOGIN => []];
    
    protected array $sources = [self::ADMIN => [], self::FRONT => [], self::LOGIN => []];
    
    public function __construct(Component $wksoawcgagcgoask)
    {
        goto wgmscmycmmwagaqe;
        ueiyyiokueymucqa:
        $this->ygegioggqgwwqooe();
        goto ugiskommysmcugig;
        ugiskommysmcugig:
        parent::__construct();
        goto oaiikqqsscmywqyk;
        wgmscmycmmwagaqe:
        $this->component = $wksoawcgagcgoask;
        goto ueiyyiokueymucqa;
        oaiikqqsscmywqyk:
    }
    
    public function ieqamkssqsaukwqm() : bool
    {
        return $this->attributeAdded;
    }
    public function ygegioggqgwwqooe()
    {
        try {
            goto uekmgwcumckmqwsu;
            oeqkeqgkwyayuogc:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto cyeoiysigumciuma;
            }
            goto gqeeocimioewyyou;
            wcckccugqkukymay:
            if (!$wksoawcgagcgoask) {
                goto geoygkiuccaqcumg;
            }
            goto sokakmqsquykwcmo;
            uekmgwcumckmqwsu:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto kwguusaseiauseoi;
            gqeeocimioewyyou:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto wcckccugqkukymay;
            awwoieswswoqsqoa:
            geoygkiuccaqcumg:
            goto cmkuegkqiwgaeukq;
            sokakmqsquykwcmo:
            $eeamcawaiqocomwy .= "\57{$wksoawcgagcgoask}";
            goto oeyaeawyigiygyus;
            cmkuegkqiwgaeukq:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\155\141\156\x69\x66\x65\163\x74\56\x6a\163\x6f\156"));
            goto kescwsiuywawyqwu;
            oeyaeawyigiygyus:
            $mkomwsiykqigmqca .= "\57{$wksoawcgagcgoask}";
            goto awwoieswswoqsqoa;
            kescwsiuywawyqwu:
            cyeoiysigumciuma:
            goto yqqmeykkyqoiusiu;
            kwguusaseiauseoi:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto oeqkeqgkwyayuogc;
            yqqmeykkyqoiusiu:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\x6d\151\x6e\x5f\x65\156\x71\165\x65\x75\145\137\141\163\163\145\164\x73"), [$this, "\x73\x77\161\145\x71\167\167\x69\157\x65\171\x6b\151\x65\165\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\157\x67\x69\x6e\137\x65\x6e\161\x75\145\165\145\137\x61\x73\163\x65\164\x73"), [$this, "\x6b\x71\x79\167\x65\143\x75\x71\141\147\145\x71\x73\x77\165\167"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\162\x6f\x6e\164\x5f\x65\x6e\x71\165\x65\x75\145\x5f\141\163\163\x65\x74\163"), [$this, "\x79\145\163\x6d\161\x63\143\x75\141\x65\143\x67\145\147\155\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\x6d\151\x6e\x5f\154\x6f\143\141\154\x69\x7a\x65\x5f\x76\141\x72\151\141\142\154\145\x73"), [$this, "\x75\171\x65\163\165\167\145\145\163\153\171\151\171\141\x69\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6c\157\147\x69\156\137\154\x6f\x63\141\154\x69\x7a\145\x5f\x76\x61\x72\151\141\142\x6c\145\163"), [$this, "\x6b\x79\147\x77\x65\x75\157\x6b\163\x71\x61\157\x6d\151\x71\x79"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\162\x6f\156\164\137\x6c\x6f\143\141\154\151\172\x65\x5f\166\141\162\x69\x61\x62\x6c\x65\x73"), [$this, "\x73\x6f\163\x61\x6b\x69\x63\157\167\x6d\161\x69\x77\147\x73\x73"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto yuqmqsuaqqamumac;
        cqwicouukomskmka:
        kawikymokoesioay:
        goto mmieiykmcqgeuceg;
        aqgucgumeessookq:
        goto kawikymokoesioay;
        goto sycoccuaosmosqsi;
        imemamyywgmcwygc:
        goto kqocyskgsigykkos;
        goto esqcysaoigqicqmq;
        mmieiykmcqgeuceg:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\x73\143\162\x69\x70\x74\x2d{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto cacosciskaewuaam;
        wkkqumskaemwemuo:
        $sqeykgyoooqysmca = self::ADMIN;
        goto cqwicouukomskmka;
        egeeeeyuoesgayoc:
        ckskeywcckyaciuu:
        goto awykgsqaycauwquo;
        ggqmkgqosuekoycu:
        if (is_admin()) {
            goto kssqyweyyigkmigs;
        }
        goto wiwugamyyegscqyu;
        wiwugamyyegscqyu:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto eyqmqqgqiuscecci;
        }
        goto yyoogcqkcswwkciw;
        yuqmqsuaqqamumac:
        if (!$this->ieqamkssqsaukwqm()) {
            goto ckskeywcckyaciuu;
        }
        goto ggqmkgqosuekoycu;
        gwuiocyoeiciciyw:
        $sqeykgyoooqysmca = self::LOGIN;
        goto oygkgcygoaeaqiom;
        gkkuagcemwsckgac:
        ycmkyasqkukggogs:
        goto egeeeeyuoesgayoc;
        yyoogcqkcswwkciw:
        $sqeykgyoooqysmca = self::FRONT;
        goto imemamyywgmcwygc;
        cacosciskaewuaam:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto ycmkyasqkukggogs;
        }
        goto kcuyacakkwwucqgi;
        oygkgcygoaeaqiom:
        kqocyskgsigykkos:
        goto aqgucgumeessookq;
        awykgsqaycauwquo:
        return $scwiymciagumsuiw;
        goto eukciagakmsasako;
        esqcysaoigqicqmq:
        eyqmqqgqiuscecci:
        goto gwuiocyoeiciciyw;
        sycoccuaosmosqsi:
        kssqyweyyigkmigs:
        goto wkkqumskaemwemuo;
        kcuyacakkwwucqgi:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\x63\162\151\x70\164" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto gkkuagcemwsckgac;
        eukciagakmsasako:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto cusumaiokokiiumq;
        cusumaiokokiiumq:
        if (!$this->csaueuycewaiuaay()) {
            goto gysooekmciuicgyw;
        }
        goto iiwuwsuckokcokey;
        iiwuwsuckokcokey:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto iwmuiuymkouayqyo;
        iwmuiuymkouayqyo:
        gysooekmciuicgyw:
        goto wgiwmowkiwcwoakm;
        wgiwmowkiwcwoakm:
        return $seiyqiqwcmseaiaq;
        goto ayiwywqikeqgyosm;
        ayiwywqikeqgyosm:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto oymuyqwakkkkueoi;
        gokacuwekwkmygwg:
        kssyksgomecayykc:
        goto kakmqcgeiqcqsioq;
        oymuyqwakkkkueoi:
        if (!$this->csaueuycewaiuaay()) {
            goto kssyksgomecayykc;
        }
        goto qmmweguyeicusqsa;
        qmmweguyeicusqsa:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto gokacuwekwkmygwg;
        kakmqcgeiqcqsioq:
        return $yokgacoigcscwkie;
        goto ykuumqkmwcaekiac;
        ykuumqkmwcaekiac:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto kkusugwsckiwcwai;
        iuusagmiuoomeowm:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto kigcoaaceaqkmgqk;
        kigcoaaceaqkmgqk:
        qameqycyiiyokigq:
        goto saqqwcqqqwkuouoo;
        saqqwcqqqwkuouoo:
        return $seiyqiqwcmseaiaq;
        goto gkuuwkyosiewqymy;
        kkusugwsckiwcwai:
        if (!$this->csaueuycewaiuaay()) {
            goto qameqycyiiyokigq;
        }
        goto iuusagmiuoomeowm;
        gkuuwkyosiewqymy:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto uuoaaawqaaiesekw;
        mmaaoasmmgwgcagg:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto msmksqwgyomoksem;
        uuoaaawqaaiesekw:
        if (!$this->csaueuycewaiuaay()) {
            goto cqqyaickwcguayai;
        }
        goto mmaaoasmmgwgcagg;
        msmksqwgyomoksem:
        cqqyaickwcguayai:
        goto gmomuqswgeaoomwe;
        gmomuqswgeaoomwe:
        return $yokgacoigcscwkie;
        goto sgqasakygigqcgmy;
        sgqasakygigqcgmy:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto wkaouucmyqymqsyq;
        yegggscmiqaegiua:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto oqcoyawkkcoisqoc;
        wkaouucmyqymqsyq:
        if (!$this->csaueuycewaiuaay()) {
            goto cggseekycwueosos;
        }
        goto yegggscmiqaegiua;
        ewkakyksocksekmg:
        return $seiyqiqwcmseaiaq;
        goto ecwiuigeegaaewqy;
        oqcoyawkkcoisqoc:
        cggseekycwueosos:
        goto ewkakyksocksekmg;
        ecwiuigeegaaewqy:
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        goto eiacwgegiuowcmig;
        kqueiiioekoawcsy:
        return $yokgacoigcscwkie;
        goto zoekckiqssqyomyk;
        eiacwgegiuowcmig:
        if (!$this->csaueuycewaiuaay()) {
            goto oaikuoqiukaqmiak;
        }
        goto qumekuwomeeyamwu;
        qumekuwomeeyamwu:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto ykoooseayycgcayu;
        ykoooseayycgcayu:
        oaikuoqiukaqmiak:
        goto kqueiiioekoawcsy;
        zoekckiqssqyomyk:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto mwwciqsyskyekkeq;
        wccggcuyqqweoikc:
        $eeamcawaiqocomwy .= "\x20\x2f{$ymqmyyeuycgmigyo}";
        goto eqecgkeqwuiugeca;
        uigweyocaqgemmgc:
        if (!$wksoawcgagcgoask) {
            goto ciaueooiggcgakuu;
        }
        goto meciqmqcuiqawkua;
        aeoysqssqcqwauow:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto uigweyocaqgemmgc;
        eqecgkeqwuiugeca:
        return $eeamcawaiqocomwy;
        goto ueqkyiquamyiakgc;
        mwwciqsyskyekkeq:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto aeoysqssqcqwauow;
        yasweukayucicyuk:
        ciaueooiggcgakuu:
        goto wccggcuyqqweoikc;
        meciqmqcuiqawkua:
        $eeamcawaiqocomwy .= "\40\57{$wksoawcgagcgoask}";
        goto yasweukayucicyuk;
        ueqkyiquamyiakgc:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto mqyusyqaukgqauos;
        qyqymqymoyouceqk:
        uwwsaskiyywcqmyy:
        goto cecyuuwcqioiwauu;
        qkqasaogwyiiciem:
        oassyegiwmwsmiwg:
        goto gsqyksumwymkwsas;
        ewsiemmseeuyuwsu:
        wccmooaikyqkemwc:
        goto qyqymqymoyouceqk;
        mkwemicgqcqyusqw:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto wccmooaikyqkemwc;
        }
        goto qgkmkykkgeeqyeyy;
        suocokcwoqamicms:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto ewsiemmseeuyuwsu;
        uqkeasmouqogoacq:
        goto uwwsaskiyywcqmyy;
        goto gsiccqcoquqskcmk;
        gqcqgsiouousmgwy:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\143\x6f\156\164\x65\156\x74":
                goto ikmqssocqayyakge;
                gimuoawsewokwcky:
                goto wwwqgisgogqgqeom;
                goto uugioomkywkukaki;
                ikmqssocqayyakge:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                goto wqoysqscuiyuqsai;
                wqoysqscuiyuqsai:
                $eeamcawaiqocomwy = content_url();
                goto gimuoawsewokwcky;
                uugioomkywkukaki:
            case "\151\x6e\143\154\x75\144\x65\163":
                goto oqeieoywwiqsqwke;
                wskqiiwkwcokqaai:
                goto wwwqgisgogqgqeom;
                goto oyukuusksqiocwoe;
                oqeieoywwiqsqwke:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto iiesscwguamgaaoe;
                iiesscwguamgaaoe:
                $eeamcawaiqocomwy = includes_url();
                goto wskqiiwkwcokqaai;
                oyukuusksqiocwoe:
        }
        goto qkqasaogwyiiciem;
        gsqyksumwymkwsas:
        wwwqgisgogqgqeom:
        goto mkwemicgqcqyusqw;
        eceywsecgoyuoqmq:
        gcicoimysgieaygo:
        goto uqkeasmouqogoacq;
        gsiccqcoquqskcmk:
        yyyawioycsowgayc:
        goto gqcqgsiouousmgwy;
        mceeqosocaaaoaog:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto ikquocgacmwgcoyu;
        ikquocgacmwgcoyu:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto oqwciqwewqwwwqso;
        cecyuuwcqioiwauu:
        return $sogksuscggsicmac;
        goto auwymayuwcamoqgq;
        qgkmkykkgeeqyeyy:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto ioqaeigausyceicu;
        eysugkikgqgegogw:
        if (preg_match("\57\134\57\x77\160\55\50\x63\157\156\164\145\156\x74\174\x69\x6e\x63\x6c\165\144\x65\163\x29\134\57\x2f", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto yyyawioycsowgayc;
        }
        goto mceeqosocaaaoaog;
        ioqaeigausyceicu:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto suocokcwoqamicms;
        oqqqgemqcqicgomo:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto eceywsecgoyuoqmq;
        mqyusyqaukgqauos:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto eysugkikgqgegogw;
        oqwciqwewqwwwqso:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto gcicoimysgieaygo;
        }
        goto oqqqgemqcqicgomo;
        auwymayuwcamoqgq:
    }
    
    public function cqusmgskowmesgcg() : Component
    {
        return $this->component;
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw();
    }
    
    public function mkwomgueyaaooyye() : string
    {
        return untrailingslashit(ManipulateString::cmaecekuqkwmemms(self::PUBLIC_HTML__BUILD__URL, ''));
    }
    
    public function gyguukaswwqgsoag() : string
    {
        return trailingslashit($this->mkwomgueyaaooyye()) . $this->aiqioscoyukqgsgw();
    }
    
    public function qmwkoewmiweimaqe() : string
    {
        return untrailingslashit(ManipulateString::cmaecekuqkwmemms(self::PUBLIC_HTML__BUILD__PATH, ''));
    }
    
    public function gikwwgqmwccescgy(string $ymqmyyeuycgmigyo) : ?string
    {
        goto qeogscuwaqegqeeu;
        kuigciykymecwmos:
        try {
            try {
                goto sisisweiyqgccaae;
                guumaeugmekqeisi:
                if (!$quowyokcwswmuois) {
                    goto wscmiwckoyiooekg;
                }
                goto wuikqgsgquisuusa;
                wuikqgsgquisuusa:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto siugkcyicyqcscsc;
                siugkcyicyqcscsc:
                wscmiwckoyiooekg:
                goto qeggqaqesumwycek;
                sisisweiyqgccaae:
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                goto guumaeugmekqeisi;
                qeggqaqesumwycek:
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
            $kqagasmwymmuiksq = null;
        }
        goto aqoygcikqwoegkii;
        aqoygcikqwoegkii:
        return $kqagasmwymmuiksq;
        goto kqaymsayeiukkaay;
        qeogscuwaqegqeeu:
        $kqagasmwymmuiksq = null;
        goto kuigciykymecwmos;
        kqaymsayeiukkaay:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto keoouuycgkayggiq;
        wgoawmkecwkieoyk:
        try {
            goto wmwocowecyoasqeg;
            eycmsyeuqqmeooaq:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\56\x63\163\x73"))) {
                goto wgeuisockoogeccc;
            }
            goto gsyuoweeeqoyiygw;
            wmwocowecyoasqeg:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto eycmsyeuqqmeooaq;
            csywagwikouweiqm:
            wgeuisockoogeccc:
            goto iqmyomeqgiououou;
            gsyuoweeeqoyiygw:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\x2e\x63\163\163", "\56\x72\164\x6c\56\143\x73\163", $ceuoyocoywikssmy);
            goto csywagwikouweiqm;
            iqmyomeqgiououou:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto swyggiaiwsmwessm;
        swyggiaiwsmwessm:
        ogkquckqwooqiymq:
        goto eseouiwqkgagsiaa;
        mgoaekweikqawgge:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto syumwaimygimyscy;
        eseouiwqkgagsiaa:
        return $ceuoyocoywikssmy;
        goto qqywmguygwscyyae;
        keoouuycgkayggiq:
        $ceuoyocoywikssmy = null;
        goto mgoaekweikqawgge;
        syumwaimygimyscy:
        if (!$quowyokcwswmuois) {
            goto ogkquckqwooqiymq;
        }
        goto wgoawmkecwkieoyk;
        qqywmguygwscyyae:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\151\154\x64\137\x64\151\162\x65\143\x74\x6f\x72\171"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto cmcemcuymikqukce;
        cmcemcuymikqukce:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto kwgwooqigowksicc;
        ekwmkkmwckeiaugc:
        qyiigayoyegauwaw:
        goto oocsqwaeuuqceiky;
        scwseaueieuugecs:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto qyiigayoyegauwaw;
        }
        goto ccgaaokwqeiycemk;
        oocsqwaeuuqceiky:
        return $eeamcawaiqocomwy;
        goto mmekseaoqiouuycc;
        euasgwagscuiswiy:
        $eeamcawaiqocomwy = null;
        goto scwseaueieuugecs;
        kwgwooqigowksicc:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto euasgwagscuiswiy;
        ccgaaokwqeiycemk:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto ekwmkkmwckeiaugc;
        mmekseaoqiouuycc:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto qyuguuqgysiqsaww;
        qyuguuqgysiqsaww:
        if ($this->package) {
            goto gkwywcweoaacsqqi;
        }
        goto gicqcsqmkgiyeoss;
        gicqcsqmkgiyeoss:
        $this->ygegioggqgwwqooe();
        goto ugasqyoegamcgqco;
        ymsymwiockkscikc:
        return $this->package;
        goto csicyuisekuyiuys;
        ugasqyoegamcgqco:
        gkwywcweoaacsqqi:
        goto ymsymwiockkscikc;
        csicyuisekuyiuys:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto kaccuquekgoomume;
        ekikcgogkomooqia:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto ygomiqmeacmoogqa;
        kaccuquekgoomume:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto ekikcgogkomooqia;
        ygomiqmeacmoogqa:
        return "{$mkomwsiykqigmqca}\x2f{$kqagasmwymmuiksq}";
        goto owusgguueuoikwim;
        owusgguueuoikwim:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto aueusukugaqgmuqe;
        gesswekoguscuise:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto gaqeewuasmsgumsg;
        suwiwmkogwymwqec:
        
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\41\55\55\x5b\x5c\163\x5c\x53\135\52\77\55\55\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto akcqewkmyeqsmqcg;
        gaqeewuasmsgumsg:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto wgeiswcaskeoeewk;
        }
        goto suwiwmkogwymwqec;
        mscukwykcksygqkg:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto usuewcmsgysskeca;
        mquqekumeaoswgye:
        $ceuoyocoywikssmy = "\151\x6d\147\x2f\163\x76\147\57\x69\x63\x6f\156\57{$wkaqekwwgqsqwcoi}\x2e\163\166\147";
        goto ocaguoikqsymkaaw;
        kwckkiekaoaaukkk:
        uwgamgyakeacquiu:
        goto mucuuagawemmkwug;
        sigyamiisqewqwkm:
        cmgogcekgkgwakua:
        goto gesswekoguscuise;
        aqciayqccmoesccw:
        wgeiswcaskeoeewk:
        goto kwckkiekaoaaukkk;
        aueusukugaqgmuqe:
        if (!$wkaqekwwgqsqwcoi) {
            goto aokomqwsiyysawim;
        }
        goto mquqekumeaoswgye;
        usuewcmsgysskeca:
        goto uwgamgyakeacquiu;
        goto sigyamiisqewqwkm;
        logyqqoeosuimcmi:
        if ($ewgwqamkygiqaawc) {
            goto cmgogcekgkgwakua;
        }
        goto mscukwykcksygqkg;
        mucuuagawemmkwug:
        aokomqwsiyysawim:
        goto gmeegkiyasyqwyqq;
        ocaguoikqsymkaaw:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto logyqqoeosuimcmi;
        akcqewkmyeqsmqcg:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\x3c\144\x65\x66\163\76\133\x5c\163\134\x53\135\x2a\x3f\x3c\x5c\x2f\x64\145\x66\x73\76\57", '', $wkaqekwwgqsqwcoi);
        goto aqciayqccmoesccw;
        gmeegkiyasyqwyqq:
        return $wkaqekwwgqsqwcoi;
        goto qmmwceyuwsagkgqs;
        qmmwceyuwsagkgqs:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto wsqqoqwykgsoeweu;
        wyggeaoiwkkiewgy:
        return $ewgwqamkygiqaawc;
        goto ycmeseaweuwkuksm;
        umkaquamukuuqeii:
        wycieuuioyumuaim:
        goto eyugqqoqukeiuowe;
        mqgkywcmemsukuck:
        cycqgciuqgyacwyy:
        goto wyggeaoiwkkiewgy;
        cwayuyemyqsewgkc:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto mqgkywcmemsukuck;
        eyugqqoqukeiuowe:
        $ewgwqamkygiqaawc = false;
        goto oowggkeeseuskeio;
        wsqqoqwykgsoeweu:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto coyyauuykuwacoes;
        }
        goto wasqmeqaayyqckwa;
        uwoqemmymksauskq:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto iqamqqkameysgiwm;
        wasqmeqaayyqckwa:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto uwoqemmymksauskq;
        qeoakikuyiyksguo:
        coyyauuykuwacoes:
        goto uayiuioememomcuc;
        iqamqqkameysgiwm:
        goto wycieuuioyumuaim;
        goto qeoakikuyiyksguo;
        oqiqgegsqcoeiesa:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto cycqgciuqgyacwyy;
        }
        goto cwayuyemyqsewgkc;
        oowggkeeseuskeio:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto oqiqgegsqcoeiesa;
        uayiuioememomcuc:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto umkaquamukuuqeii;
        ycmeseaweuwkuksm:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto mmwoqyscsyyccmgc;
        wygsgseuikmkckig:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto iagouugawsuswccu;
        mmwoqyscsyyccmgc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto swiiswsgcesakeei;
        swiiswsgcesakeei:
        if (!$uukmwiwiqwyaaegk) {
            goto gcsmyoouiugsuywu;
        }
        goto ouyskuyuekeeeuku;
        ouyskuyuekeeeuku:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto icikesyuoswkwyag;
        icikesyuoswkwyag:
        gcsmyoouiugsuywu:
        goto wygsgseuikmkckig;
        iagouugawsuswccu:
        return $this;
        goto aygkqeyqeguyaumo;
        aygkqeyqeguyaumo:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto syysuweucygqsgoo;
        syysuweucygqsgoo:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            gwyqsaswyiicuoke:
        }
        goto giqymigmomaaoicm;
        giqymigmomaaoicm:
        wawgcwguamqgekis:
        goto iuwmasqwsuqgcwmg;
        iuwmasqwsuqgcwmg:
        return $this;
        goto meoicwqckywiwaii;
        meoicwqckywiwaii:
    }
    
    public function ieayqiyiuuguowyq(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, self::FRONT);
    }
    
    public function iagmuqogkyysiick($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, self::FRONT);
    }
    
    public function gauosiuwaieksway(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, self::LOGIN);
    }
    
    public function oaoisgmqkamuoeam($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, self::LOGIN);
    }
    
    public function ikqyiskqaaymscgw(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq);
    }
    
    public function ssguskiqaagaauoy($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq);
    }
    
    private function seimiyccuwecawki(string $eueuqacmukymcyya, $ogomymegcoacqisg = false, string $sqeykgyoooqysmca = self::STYLE) : Source
    {
        return new Source("{$this->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca);
    }
    
    public function awgyqswkqywwmkye(string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source
    {
        return $this->seimiyccuwecawki($eueuqacmukymcyya, $geecqyososceumsk, self::STYLE);
    }
    
    public function owygwqwawqoiusis(string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source
    {
        return $this->seimiyccuwecawki($eueuqacmukymcyya, $ogomymegcoacqisg, self::SCRIPT);
    }
    
    public function ayeieigcckcmsikq(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::ADMIN);
    }
    
    public function oeoquuwkoywiuesy(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::FRONT);
    }
    
    public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::LOGIN);
    }
    
    public function gmgiuyeyoguqqccw() : array
    {
        return $this->sources;
    }
    
    private function yimkcammomikeegq($uusmaiomayssaecw, $sqeykgyoooqysmca = self::ADMIN) : ?Source
    {
        $yokgacoigcscwkie = ManipulateArray::get($this->gmgiuyeyoguqqccw(), $sqeykgyoooqysmca, []);
        return ManipulateArray::get($yokgacoigcscwkie, $uusmaiomayssaecw);
    }
    
    private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $sqeykgyoooqysmca = self::ADMIN) : self
    {
        goto kummqkwyeiomswyy;
        msoomyweeumakeyc:
        kuioacgcmuoukscw:
        goto yiuqmueuywsmsyuw;
        wyuagceiqgqoggeu:
        $this->cecaguuoecmccuse("\x73\143\x72\151\x70\164\137\154\157\x61\x64\x65\162\x5f\x74\x61\x67", [$this, "\145\x63\157\161\157\x6f\x69\165\x79\155\163\x67\141\153\171\x73"], 10, 2);
        goto kqesamwwcakuwuas;
        yiuqmueuywsmsyuw:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\55{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto yyimkksgiagkwgau;
        kqesamwwcakuwuas:
        $this->attributeAdded = true;
        goto msoomyweeumakeyc;
        kummqkwyeiomswyy:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto kuioacgcmuoukscw;
        }
        goto wyuagceiqgqoggeu;
        yyimkksgiagkwgau:
        return $this;
        goto qiseoemcesgaagwg;
        qiseoemcesgaagwg:
    }
    
    public function yomasssaasmawcso(string $eueuqacmukymcyya) : string
    {
        return "{$this->aiqioscoyukqgsgw()}\x2d{$eueuqacmukymcyya}";
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return !ManipulateAjax::mcgoysmkqsqooceq() && !ManipulateServer::smowememmgeukwki();
    }
}
