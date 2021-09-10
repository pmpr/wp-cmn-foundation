<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        wgmscmycmmwagaqe:
        $this->component = $wksoawcgagcgoask;
        goto ueiyyiokueymucqa;
        ueiyyiokueymucqa:
        $this->ygegioggqgwwqooe();
        goto ugiskommysmcugig;
        ugiskommysmcugig:
        parent::__construct();
        goto oaiikqqsscmywqyk;
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
            kwguusaseiauseoi:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto oeqkeqgkwyayuogc;
            oeyaeawyigiygyus:
            $mkomwsiykqigmqca .= "\x2f{$wksoawcgagcgoask}";
            goto awwoieswswoqsqoa;
            oeqkeqgkwyayuogc:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto cyeoiysigumciuma;
            }
            goto gqeeocimioewyyou;
            uekmgwcumckmqwsu:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto kwguusaseiauseoi;
            wcckccugqkukymay:
            if (!$wksoawcgagcgoask) {
                goto geoygkiuccaqcumg;
            }
            goto sokakmqsquykwcmo;
            cmkuegkqiwgaeukq:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\x6d\141\156\x69\x66\x65\163\x74\x2e\x6a\163\x6f\156"));
            goto kescwsiuywawyqwu;
            sokakmqsquykwcmo:
            $eeamcawaiqocomwy .= "\57{$wksoawcgagcgoask}";
            goto oeyaeawyigiygyus;
            gqeeocimioewyyou:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto wcckccugqkukymay;
            kescwsiuywawyqwu:
            cyeoiysigumciuma:
            goto yqqmeykkyqoiusiu;
            awwoieswswoqsqoa:
            geoygkiuccaqcumg:
            goto cmkuegkqiwgaeukq;
            yqqmeykkyqoiusiu:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\x6d\x69\x6e\x5f\x65\x6e\161\165\145\x75\145\x5f\x61\x73\x73\x65\164\x73"), [$this, "\x73\167\x71\145\x71\x77\x77\151\x6f\145\x79\x6b\x69\x65\165\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6c\157\x67\151\x6e\x5f\x65\156\161\165\145\x75\145\137\141\x73\163\145\164\163"), [$this, "\x6b\161\x79\167\145\x63\165\161\x61\147\145\161\163\x77\x75\167"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x72\157\x6e\x74\x5f\x65\x6e\161\x75\x65\165\x65\137\141\x73\163\x65\164\x73"), [$this, "\171\x65\x73\x6d\x71\x63\143\x75\x61\145\x63\x67\x65\147\x6d\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\155\x69\x6e\x5f\154\x6f\x63\x61\x6c\151\172\145\x5f\166\x61\162\x69\x61\142\x6c\x65\163"), [$this, "\165\171\x65\163\x75\167\145\145\163\x6b\171\151\x79\x61\151\x65"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\x6f\147\151\156\137\154\157\143\141\x6c\x69\x7a\145\137\166\141\162\151\141\x62\154\x65\163"), [$this, "\x6b\171\147\167\x65\165\x6f\x6b\x73\x71\x61\157\155\x69\161\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x72\x6f\x6e\164\x5f\x6c\x6f\x63\x61\154\x69\x7a\145\137\166\x61\162\x69\141\x62\154\145\163"), [$this, "\163\157\163\141\153\151\x63\157\x77\x6d\x71\151\167\147\163\x73"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto yuqmqsuaqqamumac;
        wiwugamyyegscqyu:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto eyqmqqgqiuscecci;
        }
        goto yyoogcqkcswwkciw;
        kcuyacakkwwucqgi:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\143\x72\x69\160\164" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto gkkuagcemwsckgac;
        yyoogcqkcswwkciw:
        $sqeykgyoooqysmca = self::FRONT;
        goto imemamyywgmcwygc;
        esqcysaoigqicqmq:
        eyqmqqgqiuscecci:
        goto gwuiocyoeiciciyw;
        sycoccuaosmosqsi:
        kssqyweyyigkmigs:
        goto wkkqumskaemwemuo;
        ggqmkgqosuekoycu:
        if (is_admin()) {
            goto kssqyweyyigkmigs;
        }
        goto wiwugamyyegscqyu;
        wkkqumskaemwemuo:
        $sqeykgyoooqysmca = self::ADMIN;
        goto cqwicouukomskmka;
        imemamyywgmcwygc:
        goto kqocyskgsigykkos;
        goto esqcysaoigqicqmq;
        gwuiocyoeiciciyw:
        $sqeykgyoooqysmca = self::LOGIN;
        goto oygkgcygoaeaqiom;
        aqgucgumeessookq:
        goto kawikymokoesioay;
        goto sycoccuaosmosqsi;
        awykgsqaycauwquo:
        return $scwiymciagumsuiw;
        goto eukciagakmsasako;
        oygkgcygoaeaqiom:
        kqocyskgsigykkos:
        goto aqgucgumeessookq;
        cqwicouukomskmka:
        kawikymokoesioay:
        goto mmieiykmcqgeuceg;
        egeeeeyuoesgayoc:
        ckskeywcckyaciuu:
        goto awykgsqaycauwquo;
        yuqmqsuaqqamumac:
        if (!$this->ieqamkssqsaukwqm()) {
            goto ckskeywcckyaciuu;
        }
        goto ggqmkgqosuekoycu;
        gkkuagcemwsckgac:
        ycmkyasqkukggogs:
        goto egeeeeyuoesgayoc;
        mmieiykmcqgeuceg:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\163\x63\162\151\x70\164\x2d{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto cacosciskaewuaam;
        cacosciskaewuaam:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto ycmkyasqkukggogs;
        }
        goto kcuyacakkwwucqgi;
        eukciagakmsasako:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto cusumaiokokiiumq;
        wgiwmowkiwcwoakm:
        return $seiyqiqwcmseaiaq;
        goto ayiwywqikeqgyosm;
        iwmuiuymkouayqyo:
        gysooekmciuicgyw:
        goto wgiwmowkiwcwoakm;
        iiwuwsuckokcokey:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto iwmuiuymkouayqyo;
        cusumaiokokiiumq:
        if (!$this->csaueuycewaiuaay()) {
            goto gysooekmciuicgyw;
        }
        goto iiwuwsuckokcokey;
        ayiwywqikeqgyosm:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto oymuyqwakkkkueoi;
        oymuyqwakkkkueoi:
        if (!$this->csaueuycewaiuaay()) {
            goto kssyksgomecayykc;
        }
        goto qmmweguyeicusqsa;
        kakmqcgeiqcqsioq:
        return $yokgacoigcscwkie;
        goto ykuumqkmwcaekiac;
        qmmweguyeicusqsa:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto gokacuwekwkmygwg;
        gokacuwekwkmygwg:
        kssyksgomecayykc:
        goto kakmqcgeiqcqsioq;
        ykuumqkmwcaekiac:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto kkusugwsckiwcwai;
        kkusugwsckiwcwai:
        if (!$this->csaueuycewaiuaay()) {
            goto qameqycyiiyokigq;
        }
        goto iuusagmiuoomeowm;
        iuusagmiuoomeowm:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto kigcoaaceaqkmgqk;
        kigcoaaceaqkmgqk:
        qameqycyiiyokigq:
        goto saqqwcqqqwkuouoo;
        saqqwcqqqwkuouoo:
        return $seiyqiqwcmseaiaq;
        goto gkuuwkyosiewqymy;
        gkuuwkyosiewqymy:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto uuoaaawqaaiesekw;
        msmksqwgyomoksem:
        cqqyaickwcguayai:
        goto gmomuqswgeaoomwe;
        mmaaoasmmgwgcagg:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto msmksqwgyomoksem;
        gmomuqswgeaoomwe:
        return $yokgacoigcscwkie;
        goto sgqasakygigqcgmy;
        uuoaaawqaaiesekw:
        if (!$this->csaueuycewaiuaay()) {
            goto cqqyaickwcguayai;
        }
        goto mmaaoasmmgwgcagg;
        sgqasakygigqcgmy:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto wkaouucmyqymqsyq;
        wkaouucmyqymqsyq:
        if (!$this->csaueuycewaiuaay()) {
            goto cggseekycwueosos;
        }
        goto yegggscmiqaegiua;
        oqcoyawkkcoisqoc:
        cggseekycwueosos:
        goto ewkakyksocksekmg;
        yegggscmiqaegiua:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto oqcoyawkkcoisqoc;
        ewkakyksocksekmg:
        return $seiyqiqwcmseaiaq;
        goto ecwiuigeegaaewqy;
        ecwiuigeegaaewqy:
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        goto eiacwgegiuowcmig;
        ykoooseayycgcayu:
        oaikuoqiukaqmiak:
        goto kqueiiioekoawcsy;
        kqueiiioekoawcsy:
        return $yokgacoigcscwkie;
        goto zoekckiqssqyomyk;
        qumekuwomeeyamwu:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto ykoooseayycgcayu;
        eiacwgegiuowcmig:
        if (!$this->csaueuycewaiuaay()) {
            goto oaikuoqiukaqmiak;
        }
        goto qumekuwomeeyamwu;
        zoekckiqssqyomyk:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto mwwciqsyskyekkeq;
        eqecgkeqwuiugeca:
        return $eeamcawaiqocomwy;
        goto ueqkyiquamyiakgc;
        aeoysqssqcqwauow:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto uigweyocaqgemmgc;
        uigweyocaqgemmgc:
        if (!$wksoawcgagcgoask) {
            goto ciaueooiggcgakuu;
        }
        goto meciqmqcuiqawkua;
        yasweukayucicyuk:
        ciaueooiggcgakuu:
        goto wccggcuyqqweoikc;
        wccggcuyqqweoikc:
        $eeamcawaiqocomwy .= "\40\x2f{$ymqmyyeuycgmigyo}";
        goto eqecgkeqwuiugeca;
        meciqmqcuiqawkua:
        $eeamcawaiqocomwy .= "\40\x2f{$wksoawcgagcgoask}";
        goto yasweukayucicyuk;
        mwwciqsyskyekkeq:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto aeoysqssqcqwauow;
        ueqkyiquamyiakgc:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto mqyusyqaukgqauos;
        eysugkikgqgegogw:
        if (preg_match("\57\134\x2f\167\x70\55\50\x63\157\x6e\x74\145\x6e\164\174\151\x6e\143\154\x75\x64\x65\163\x29\134\x2f\57", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto yyyawioycsowgayc;
        }
        goto mceeqosocaaaoaog;
        qkqasaogwyiiciem:
        oassyegiwmwsmiwg:
        goto gsqyksumwymkwsas;
        qyqymqymoyouceqk:
        uwwsaskiyywcqmyy:
        goto cecyuuwcqioiwauu;
        mkwemicgqcqyusqw:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto wccmooaikyqkemwc;
        }
        goto qgkmkykkgeeqyeyy;
        oqwciqwewqwwwqso:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto gcicoimysgieaygo;
        }
        goto oqqqgemqcqicgomo;
        qgkmkykkgeeqyeyy:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto ioqaeigausyceicu;
        suocokcwoqamicms:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto ewsiemmseeuyuwsu;
        eceywsecgoyuoqmq:
        gcicoimysgieaygo:
        goto uqkeasmouqogoacq;
        ikquocgacmwgcoyu:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto oqwciqwewqwwwqso;
        mceeqosocaaaoaog:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto ikquocgacmwgcoyu;
        ioqaeigausyceicu:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto suocokcwoqamicms;
        gsqyksumwymkwsas:
        wwwqgisgogqgqeom:
        goto mkwemicgqcqyusqw;
        uqkeasmouqogoacq:
        goto uwwsaskiyywcqmyy;
        goto gsiccqcoquqskcmk;
        gqcqgsiouousmgwy:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\143\157\156\x74\x65\x6e\164":
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
            case "\x69\156\143\x6c\x75\144\145\x73":
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
        ewsiemmseeuyuwsu:
        wccmooaikyqkemwc:
        goto qyqymqymoyouceqk;
        gsiccqcoquqskcmk:
        yyyawioycsowgayc:
        goto gqcqgsiouousmgwy;
        oqqqgemqcqicgomo:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto eceywsecgoyuoqmq;
        cecyuuwcqioiwauu:
        return $sogksuscggsicmac;
        goto auwymayuwcamoqgq;
        mqyusyqaukgqauos:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto eysugkikgqgegogw;
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
        qeogscuwaqegqeeu:
        $kqagasmwymmuiksq = null;
        goto kuigciykymecwmos;
        aqoygcikqwoegkii:
        return $kqagasmwymmuiksq;
        goto kqaymsayeiukkaay;
        kqaymsayeiukkaay:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto keoouuycgkayggiq;
        wgoawmkecwkieoyk:
        try {
            goto wmwocowecyoasqeg;
            wmwocowecyoasqeg:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto eycmsyeuqqmeooaq;
            csywagwikouweiqm:
            wgeuisockoogeccc:
            goto iqmyomeqgiououou;
            eycmsyeuqqmeooaq:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\x2e\x63\x73\x73"))) {
                goto wgeuisockoogeccc;
            }
            goto gsyuoweeeqoyiygw;
            gsyuoweeeqoyiygw:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\56\143\163\163", "\56\x72\164\154\x2e\x63\163\163", $ceuoyocoywikssmy);
            goto csywagwikouweiqm;
            iqmyomeqgiououou:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto swyggiaiwsmwessm;
        mgoaekweikqawgge:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto syumwaimygimyscy;
        keoouuycgkayggiq:
        $ceuoyocoywikssmy = null;
        goto mgoaekweikqawgge;
        syumwaimygimyscy:
        if (!$quowyokcwswmuois) {
            goto ogkquckqwooqiymq;
        }
        goto wgoawmkecwkieoyk;
        swyggiaiwsmwessm:
        ogkquckqwooqiymq:
        goto eseouiwqkgagsiaa;
        eseouiwqkgagsiaa:
        return $ceuoyocoywikssmy;
        goto qqywmguygwscyyae;
        qqywmguygwscyyae:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\151\x6c\x64\x5f\x64\x69\162\x65\143\164\157\162\171"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto cmcemcuymikqukce;
        oocsqwaeuuqceiky:
        return $eeamcawaiqocomwy;
        goto mmekseaoqiouuycc;
        scwseaueieuugecs:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto qyiigayoyegauwaw;
        }
        goto ccgaaokwqeiycemk;
        ccgaaokwqeiycemk:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto ekwmkkmwckeiaugc;
        ekwmkkmwckeiaugc:
        qyiigayoyegauwaw:
        goto oocsqwaeuuqceiky;
        kwgwooqigowksicc:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto euasgwagscuiswiy;
        euasgwagscuiswiy:
        $eeamcawaiqocomwy = null;
        goto scwseaueieuugecs;
        cmcemcuymikqukce:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto kwgwooqigowksicc;
        mmekseaoqiouuycc:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto qyuguuqgysiqsaww;
        ymsymwiockkscikc:
        return $this->package;
        goto csicyuisekuyiuys;
        gicqcsqmkgiyeoss:
        $this->ygegioggqgwwqooe();
        goto ugasqyoegamcgqco;
        ugasqyoegamcgqco:
        gkwywcweoaacsqqi:
        goto ymsymwiockkscikc;
        qyuguuqgysiqsaww:
        if ($this->package) {
            goto gkwywcweoaacsqqi;
        }
        goto gicqcsqmkgiyeoss;
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
        gaqeewuasmsgumsg:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto wgeiswcaskeoeewk;
        }
        goto suwiwmkogwymwqec;
        ocaguoikqsymkaaw:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto logyqqoeosuimcmi;
        mquqekumeaoswgye:
        $ceuoyocoywikssmy = "\x69\155\147\57\x73\x76\x67\57\151\143\x6f\x6e\x2f{$wkaqekwwgqsqwcoi}\56\x73\166\147";
        goto ocaguoikqsymkaaw;
        kwckkiekaoaaukkk:
        uwgamgyakeacquiu:
        goto mucuuagawemmkwug;
        logyqqoeosuimcmi:
        if ($ewgwqamkygiqaawc) {
            goto cmgogcekgkgwakua;
        }
        goto mscukwykcksygqkg;
        suwiwmkogwymwqec:
        
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\x3c\41\x2d\x2d\133\134\163\x5c\123\135\x2a\77\55\x2d\76\x2f", '', $wkaqekwwgqsqwcoi);
        goto akcqewkmyeqsmqcg;
        aueusukugaqgmuqe:
        if (!$wkaqekwwgqsqwcoi) {
            goto aokomqwsiyysawim;
        }
        goto mquqekumeaoswgye;
        mucuuagawemmkwug:
        aokomqwsiyysawim:
        goto gmeegkiyasyqwyqq;
        akcqewkmyeqsmqcg:
        $wkaqekwwgqsqwcoi = preg_replace("\57\74\144\x65\x66\163\76\133\134\x73\134\x53\135\x2a\x3f\74\x5c\57\144\145\146\x73\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto aqciayqccmoesccw;
        gmeegkiyasyqwyqq:
        return $wkaqekwwgqsqwcoi;
        goto qmmwceyuwsagkgqs;
        mscukwykcksygqkg:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto usuewcmsgysskeca;
        aqciayqccmoesccw:
        wgeiswcaskeoeewk:
        goto kwckkiekaoaaukkk;
        usuewcmsgysskeca:
        goto uwgamgyakeacquiu;
        goto sigyamiisqewqwkm;
        sigyamiisqewqwkm:
        cmgogcekgkgwakua:
        goto gesswekoguscuise;
        gesswekoguscuise:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto gaqeewuasmsgumsg;
        qmmwceyuwsagkgqs:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto wsqqoqwykgsoeweu;
        wyggeaoiwkkiewgy:
        return $ewgwqamkygiqaawc;
        goto ycmeseaweuwkuksm;
        eyugqqoqukeiuowe:
        $ewgwqamkygiqaawc = false;
        goto oowggkeeseuskeio;
        qeoakikuyiyksguo:
        coyyauuykuwacoes:
        goto uayiuioememomcuc;
        uayiuioememomcuc:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto umkaquamukuuqeii;
        umkaquamukuuqeii:
        wycieuuioyumuaim:
        goto eyugqqoqukeiuowe;
        uwoqemmymksauskq:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto iqamqqkameysgiwm;
        oowggkeeseuskeio:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto oqiqgegsqcoeiesa;
        mqgkywcmemsukuck:
        cycqgciuqgyacwyy:
        goto wyggeaoiwkkiewgy;
        iqamqqkameysgiwm:
        goto wycieuuioyumuaim;
        goto qeoakikuyiyksguo;
        wasqmeqaayyqckwa:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto uwoqemmymksauskq;
        cwayuyemyqsewgkc:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto mqgkywcmemsukuck;
        wsqqoqwykgsoeweu:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto coyyauuykuwacoes;
        }
        goto wasqmeqaayyqckwa;
        oqiqgegsqcoeiesa:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto cycqgciuqgyacwyy;
        }
        goto cwayuyemyqsewgkc;
        ycmeseaweuwkuksm:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto mmwoqyscsyyccmgc;
        iagouugawsuswccu:
        return $this;
        goto aygkqeyqeguyaumo;
        swiiswsgcesakeei:
        if (!$uukmwiwiqwyaaegk) {
            goto gcsmyoouiugsuywu;
        }
        goto ouyskuyuekeeeuku;
        mmwoqyscsyyccmgc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto swiiswsgcesakeei;
        wygsgseuikmkckig:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto iagouugawsuswccu;
        icikesyuoswkwyag:
        gcsmyoouiugsuywu:
        goto wygsgseuikmkckig;
        ouyskuyuekeeeuku:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto icikesyuoswkwyag;
        aygkqeyqeguyaumo:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto syysuweucygqsgoo;
        giqymigmomaaoicm:
        wawgcwguamqgekis:
        goto iuwmasqwsuqgcwmg;
        iuwmasqwsuqgcwmg:
        return $this;
        goto meoicwqckywiwaii;
        syysuweucygqsgoo:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            gwyqsaswyiicuoke:
        }
        goto giqymigmomaaoicm;
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
        kummqkwyeiomswyy:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto kuioacgcmuoukscw;
        }
        goto wyuagceiqgqoggeu;
        yiuqmueuywsmsyuw:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\55{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto yyimkksgiagkwgau;
        yyimkksgiagkwgau:
        return $this;
        goto qiseoemcesgaagwg;
        msoomyweeumakeyc:
        kuioacgcmuoukscw:
        goto yiuqmueuywsmsyuw;
        wyuagceiqgqoggeu:
        $this->cecaguuoecmccuse("\163\143\x72\151\160\x74\137\x6c\157\x61\144\145\x72\137\x74\x61\147", [$this, "\x65\x63\157\x71\157\157\x69\165\171\x6d\163\x67\x61\x6b\x79\163"], 10, 2);
        goto kqesamwwcakuwuas;
        kqesamwwcakuwuas:
        $this->attributeAdded = true;
        goto msoomyweeumakeyc;
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
