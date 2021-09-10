<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto cmqiccmcgsqssmma;
        mooqiqsymkquusgi:
        $this->ygegioggqgwwqooe();
        goto wmuwcaqmcwuescwc;
        cmqiccmcgsqssmma:
        $this->component = $wksoawcgagcgoask;
        goto mooqiqsymkquusgi;
        wmuwcaqmcwuescwc:
        parent::__construct();
        goto kmskmqcgkamsgkcm;
        kmskmqcgkamsgkcm:
    }
    
    public function ieqamkssqsaukwqm() : bool
    {
        return $this->attributeAdded;
    }
    public function ygegioggqgwwqooe()
    {
        try {
            goto ucwaiqcuysmskowc;
            oaiikqqsscmywqyk:
            $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}";
            goto geoygkiuccaqcumg;
            uekmgwcumckmqwsu:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\57\x6d\x61\156\151\146\x65\163\x74\x2e\x6a\x73\x6f\156"));
            goto kwguusaseiauseoi;
            kwguusaseiauseoi:
            isaykouuuwsgwywi:
            goto oeqkeqgkwyayuogc;
            wgmscmycmmwagaqe:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto isaykouuuwsgwywi;
            }
            goto ueiyyiokueymucqa;
            oskssywmqgoauwke:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto wgmscmycmmwagaqe;
            geoygkiuccaqcumg:
            $mkomwsiykqigmqca .= "\x2f{$wksoawcgagcgoask}";
            goto cyeoiysigumciuma;
            cyeoiysigumciuma:
            qigkseceeiekiaic:
            goto uekmgwcumckmqwsu;
            ueiyyiokueymucqa:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto ugiskommysmcugig;
            ugiskommysmcugig:
            if (!$wksoawcgagcgoask) {
                goto qigkseceeiekiaic;
            }
            goto oaiikqqsscmywqyk;
            ucwaiqcuysmskowc:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto oskssywmqgoauwke;
            oeqkeqgkwyayuogc:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\x6d\151\x6e\137\x65\156\x71\x75\145\165\145\137\141\x73\x73\145\164\163"), [$this, "\163\x77\161\145\x71\x77\x77\x69\157\145\x79\153\x69\145\165\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6c\x6f\147\151\156\137\x65\x6e\x71\165\145\165\x65\137\141\163\163\x65\164\163"), [$this, "\153\161\x79\167\145\143\165\161\x61\x67\x65\161\163\167\165\x77"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\x72\157\156\x74\137\145\x6e\x71\x75\145\165\x65\137\141\x73\x73\145\x74\x73"), [$this, "\x79\145\x73\x6d\x71\x63\x63\x75\141\x65\143\147\145\x67\155\x75"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\x64\x6d\x69\156\x5f\x6c\157\143\141\x6c\151\172\x65\137\x76\x61\x72\151\141\142\x6c\x65\163"), [$this, "\x75\x79\145\x73\165\167\x65\x65\163\x6b\x79\x69\171\141\151\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6c\157\147\x69\x6e\137\154\157\143\141\154\151\172\145\137\166\141\x72\151\141\x62\154\x65\x73"), [$this, "\x6b\x79\x67\167\x65\165\x6f\153\163\161\141\x6f\x6d\x69\161\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\162\157\156\164\x5f\154\157\x63\x61\154\151\172\x65\x5f\166\x61\x72\x69\x61\x62\154\145\163"), [$this, "\x73\x6f\163\x61\153\x69\x63\x6f\x77\155\x71\x69\x77\147\163\163"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto kescwsiuywawyqwu;
        kqocyskgsigykkos:
        $sqeykgyoooqysmca = self::FRONT;
        goto kssqyweyyigkmigs;
        imemamyywgmcwygc:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\163\143\x72\151\160\164\55{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto esqcysaoigqicqmq;
        gwuiocyoeiciciyw:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\x63\162\151\160\164" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto oygkgcygoaeaqiom;
        yqqmeykkyqoiusiu:
        if (is_admin()) {
            goto sokakmqsquykwcmo;
        }
        goto eyqmqqgqiuscecci;
        yuqmqsuaqqamumac:
        goto oeyaeawyigiygyus;
        goto ggqmkgqosuekoycu;
        kescwsiuywawyqwu:
        if (!$this->ieqamkssqsaukwqm()) {
            goto cmkuegkqiwgaeukq;
        }
        goto yqqmeykkyqoiusiu;
        wiwugamyyegscqyu:
        $sqeykgyoooqysmca = self::ADMIN;
        goto yyoogcqkcswwkciw;
        sycoccuaosmosqsi:
        return $scwiymciagumsuiw;
        goto wkkqumskaemwemuo;
        esqcysaoigqicqmq:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto awwoieswswoqsqoa;
        }
        goto gwuiocyoeiciciyw;
        ggqmkgqosuekoycu:
        sokakmqsquykwcmo:
        goto wiwugamyyegscqyu;
        aqgucgumeessookq:
        cmkuegkqiwgaeukq:
        goto sycoccuaosmosqsi;
        oygkgcygoaeaqiom:
        awwoieswswoqsqoa:
        goto aqgucgumeessookq;
        ckskeywcckyaciuu:
        wcckccugqkukymay:
        goto yuqmqsuaqqamumac;
        eyqmqqgqiuscecci:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto gqeeocimioewyyou;
        }
        goto kqocyskgsigykkos;
        yyoogcqkcswwkciw:
        oeyaeawyigiygyus:
        goto imemamyywgmcwygc;
        kssqyweyyigkmigs:
        goto wcckccugqkukymay;
        goto kawikymokoesioay;
        ycmkyasqkukggogs:
        $sqeykgyoooqysmca = self::LOGIN;
        goto ckskeywcckyaciuu;
        kawikymokoesioay:
        gqeeocimioewyyou:
        goto ycmkyasqkukggogs;
        wkkqumskaemwemuo:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto mmieiykmcqgeuceg;
        mmieiykmcqgeuceg:
        if (!$this->csaueuycewaiuaay()) {
            goto cqwicouukomskmka;
        }
        goto cacosciskaewuaam;
        kcuyacakkwwucqgi:
        cqwicouukomskmka:
        goto gkkuagcemwsckgac;
        gkkuagcemwsckgac:
        return $seiyqiqwcmseaiaq;
        goto egeeeeyuoesgayoc;
        cacosciskaewuaam:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto kcuyacakkwwucqgi;
        egeeeeyuoesgayoc:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto eukciagakmsasako;
        gysooekmciuicgyw:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto cusumaiokokiiumq;
        iiwuwsuckokcokey:
        return $yokgacoigcscwkie;
        goto iwmuiuymkouayqyo;
        cusumaiokokiiumq:
        awykgsqaycauwquo:
        goto iiwuwsuckokcokey;
        eukciagakmsasako:
        if (!$this->csaueuycewaiuaay()) {
            goto awykgsqaycauwquo;
        }
        goto gysooekmciuicgyw;
        iwmuiuymkouayqyo:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto ayiwywqikeqgyosm;
        oymuyqwakkkkueoi:
        wgiwmowkiwcwoakm:
        goto qmmweguyeicusqsa;
        ayiwywqikeqgyosm:
        if (!$this->csaueuycewaiuaay()) {
            goto wgiwmowkiwcwoakm;
        }
        goto kssyksgomecayykc;
        qmmweguyeicusqsa:
        return $seiyqiqwcmseaiaq;
        goto gokacuwekwkmygwg;
        kssyksgomecayykc:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto oymuyqwakkkkueoi;
        gokacuwekwkmygwg:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto ykuumqkmwcaekiac;
        ykuumqkmwcaekiac:
        if (!$this->csaueuycewaiuaay()) {
            goto kakmqcgeiqcqsioq;
        }
        goto qameqycyiiyokigq;
        qameqycyiiyokigq:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto kkusugwsckiwcwai;
        iuusagmiuoomeowm:
        return $yokgacoigcscwkie;
        goto kigcoaaceaqkmgqk;
        kkusugwsckiwcwai:
        kakmqcgeiqcqsioq:
        goto iuusagmiuoomeowm;
        kigcoaaceaqkmgqk:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto gkuuwkyosiewqymy;
        mmaaoasmmgwgcagg:
        return $seiyqiqwcmseaiaq;
        goto msmksqwgyomoksem;
        gkuuwkyosiewqymy:
        if (!$this->csaueuycewaiuaay()) {
            goto saqqwcqqqwkuouoo;
        }
        goto cqqyaickwcguayai;
        cqqyaickwcguayai:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto uuoaaawqaaiesekw;
        uuoaaawqaaiesekw:
        saqqwcqqqwkuouoo:
        goto mmaaoasmmgwgcagg;
        msmksqwgyomoksem:
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        goto sgqasakygigqcgmy;
        cggseekycwueosos:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto wkaouucmyqymqsyq;
        yegggscmiqaegiua:
        return $yokgacoigcscwkie;
        goto oqcoyawkkcoisqoc;
        sgqasakygigqcgmy:
        if (!$this->csaueuycewaiuaay()) {
            goto gmomuqswgeaoomwe;
        }
        goto cggseekycwueosos;
        wkaouucmyqymqsyq:
        gmomuqswgeaoomwe:
        goto yegggscmiqaegiua;
        oqcoyawkkcoisqoc:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto ecwiuigeegaaewqy;
        oaikuoqiukaqmiak:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto eiacwgegiuowcmig;
        qumekuwomeeyamwu:
        $eeamcawaiqocomwy .= "\x20\57{$wksoawcgagcgoask}";
        goto ykoooseayycgcayu;
        kqueiiioekoawcsy:
        $eeamcawaiqocomwy .= "\x20\57{$ymqmyyeuycgmigyo}";
        goto zoekckiqssqyomyk;
        ykoooseayycgcayu:
        ewkakyksocksekmg:
        goto kqueiiioekoawcsy;
        zoekckiqssqyomyk:
        return $eeamcawaiqocomwy;
        goto ciaueooiggcgakuu;
        eiacwgegiuowcmig:
        if (!$wksoawcgagcgoask) {
            goto ewkakyksocksekmg;
        }
        goto qumekuwomeeyamwu;
        ecwiuigeegaaewqy:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto oaikuoqiukaqmiak;
        ciaueooiggcgakuu:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto oqeieoywwiqsqwke;
        uwwsaskiyywcqmyy:
        goto uugioomkywkukaki;
        goto mqyusyqaukgqauos;
        oqwciqwewqwwwqso:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto ikmqssocqayyakge;
        }
        goto oqqqgemqcqicgomo;
        gcicoimysgieaygo:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto yyyawioycsowgayc;
        oqqqgemqcqicgomo:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto eceywsecgoyuoqmq;
        wskqiiwkwcokqaai:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto oyukuusksqiocwoe;
        yyyawioycsowgayc:
        wqoysqscuiyuqsai:
        goto uwwsaskiyywcqmyy;
        mqyusyqaukgqauos:
        gimuoawsewokwcky:
        goto eysugkikgqgegogw;
        mceeqosocaaaoaog:
        aeoysqssqcqwauow:
        goto ikquocgacmwgcoyu;
        eceywsecgoyuoqmq:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto uqkeasmouqogoacq;
        wccmooaikyqkemwc:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto wqoysqscuiyuqsai;
        }
        goto gcicoimysgieaygo;
        gsiccqcoquqskcmk:
        ikmqssocqayyakge:
        goto gqcqgsiouousmgwy;
        iiesscwguamgaaoe:
        if (preg_match("\57\134\57\167\160\x2d\50\x63\157\156\x74\x65\156\x74\x7c\151\156\x63\x6c\165\x64\x65\x73\x29\134\x2f\x2f", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto gimuoawsewokwcky;
        }
        goto wskqiiwkwcokqaai;
        oyukuusksqiocwoe:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto wccmooaikyqkemwc;
        gqcqgsiouousmgwy:
        uugioomkywkukaki:
        goto qkqasaogwyiiciem;
        ikquocgacmwgcoyu:
        mwwciqsyskyekkeq:
        goto oqwciqwewqwwwqso;
        qkqasaogwyiiciem:
        return $sogksuscggsicmac;
        goto gsqyksumwymkwsas;
        eysugkikgqgegogw:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\x63\157\156\x74\145\156\164":
                goto uigweyocaqgemmgc;
                uigweyocaqgemmgc:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                goto meciqmqcuiqawkua;
                yasweukayucicyuk:
                goto mwwciqsyskyekkeq;
                goto wccggcuyqqweoikc;
                meciqmqcuiqawkua:
                $eeamcawaiqocomwy = content_url();
                goto yasweukayucicyuk;
                wccggcuyqqweoikc:
            case "\x69\156\x63\x6c\x75\x64\x65\x73":
                goto eqecgkeqwuiugeca;
                ueqkyiquamyiakgc:
                $eeamcawaiqocomwy = includes_url();
                goto wwwqgisgogqgqeom;
                wwwqgisgogqgqeom:
                goto mwwciqsyskyekkeq;
                goto oassyegiwmwsmiwg;
                eqecgkeqwuiugeca:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto ueqkyiquamyiakgc;
                oassyegiwmwsmiwg:
        }
        goto mceeqosocaaaoaog;
        uqkeasmouqogoacq:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto gsiccqcoquqskcmk;
        oqeieoywwiqsqwke:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto iiesscwguamgaaoe;
        gsqyksumwymkwsas:
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
        goto cecyuuwcqioiwauu;
        wscmiwckoyiooekg:
        return $kqagasmwymmuiksq;
        goto sisisweiyqgccaae;
        auwymayuwcamoqgq:
        try {
            try {
                goto qgkmkykkgeeqyeyy;
                ioqaeigausyceicu:
                if (!$quowyokcwswmuois) {
                    goto mkwemicgqcqyusqw;
                }
                goto suocokcwoqamicms;
                ewsiemmseeuyuwsu:
                mkwemicgqcqyusqw:
                goto qyqymqymoyouceqk;
                suocokcwoqamicms:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto ewsiemmseeuyuwsu;
                qgkmkykkgeeqyeyy:
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                goto ioqaeigausyceicu;
                qyqymqymoyouceqk:
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
            $kqagasmwymmuiksq = null;
        }
        goto wscmiwckoyiooekg;
        cecyuuwcqioiwauu:
        $kqagasmwymmuiksq = null;
        goto auwymayuwcamoqgq;
        sisisweiyqgccaae:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto kqaymsayeiukkaay;
        wmwocowecyoasqeg:
        if (!$quowyokcwswmuois) {
            goto aqoygcikqwoegkii;
        }
        goto eycmsyeuqqmeooaq;
        kqaymsayeiukkaay:
        $ceuoyocoywikssmy = null;
        goto wgeuisockoogeccc;
        wgeuisockoogeccc:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto wmwocowecyoasqeg;
        gsyuoweeeqoyiygw:
        aqoygcikqwoegkii:
        goto csywagwikouweiqm;
        eycmsyeuqqmeooaq:
        try {
            goto wuikqgsgquisuusa;
            qeogscuwaqegqeeu:
            guumaeugmekqeisi:
            goto kuigciykymecwmos;
            qeggqaqesumwycek:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\56\143\x73\x73", "\56\x72\x74\x6c\56\143\163\163", $ceuoyocoywikssmy);
            goto qeogscuwaqegqeeu;
            wuikqgsgquisuusa:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto siugkcyicyqcscsc;
            siugkcyicyqcscsc:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\x2e\143\x73\x73"))) {
                goto guumaeugmekqeisi;
            }
            goto qeggqaqesumwycek;
            kuigciykymecwmos:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto gsyuoweeeqoyiygw;
        csywagwikouweiqm:
        return $ceuoyocoywikssmy;
        goto iqmyomeqgiououou;
        iqmyomeqgiououou:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\x69\154\x64\137\x64\151\x72\145\143\164\x6f\x72\x79"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto keoouuycgkayggiq;
        qqywmguygwscyyae:
        return $eeamcawaiqocomwy;
        goto qyiigayoyegauwaw;
        swyggiaiwsmwessm:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto eseouiwqkgagsiaa;
        wgoawmkecwkieoyk:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto ogkquckqwooqiymq;
        }
        goto swyggiaiwsmwessm;
        eseouiwqkgagsiaa:
        ogkquckqwooqiymq:
        goto qqywmguygwscyyae;
        keoouuycgkayggiq:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto mgoaekweikqawgge;
        mgoaekweikqawgge:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto syumwaimygimyscy;
        syumwaimygimyscy:
        $eeamcawaiqocomwy = null;
        goto wgoawmkecwkieoyk;
        qyiigayoyegauwaw:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto kwgwooqigowksicc;
        euasgwagscuiswiy:
        $this->ygegioggqgwwqooe();
        goto scwseaueieuugecs;
        scwseaueieuugecs:
        cmcemcuymikqukce:
        goto ccgaaokwqeiycemk;
        kwgwooqigowksicc:
        if ($this->package) {
            goto cmcemcuymikqukce;
        }
        goto euasgwagscuiswiy;
        ccgaaokwqeiycemk:
        return $this->package;
        goto ekwmkkmwckeiaugc;
        ekwmkkmwckeiaugc:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto oocsqwaeuuqceiky;
        mmekseaoqiouuycc:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto gkwywcweoaacsqqi;
        gkwywcweoaacsqqi:
        return "{$mkomwsiykqigmqca}\x2f{$kqagasmwymmuiksq}";
        goto qyuguuqgysiqsaww;
        oocsqwaeuuqceiky:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto mmekseaoqiouuycc;
        qyuguuqgysiqsaww:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto kaccuquekgoomume;
        wgeiswcaskeoeewk:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto cmgogcekgkgwakua;
        logyqqoeosuimcmi:
        gicqcsqmkgiyeoss:
        goto mscukwykcksygqkg;
        aokomqwsiyysawim:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto aueusukugaqgmuqe;
        cmgogcekgkgwakua:
        goto ymsymwiockkscikc;
        goto uwgamgyakeacquiu;
        sigyamiisqewqwkm:
        return $wkaqekwwgqsqwcoi;
        goto gesswekoguscuise;
        uwgamgyakeacquiu:
        ugasqyoegamcgqco:
        goto aokomqwsiyysawim;
        owusgguueuoikwim:
        if ($ewgwqamkygiqaawc) {
            goto ugasqyoegamcgqco;
        }
        goto wgeiswcaskeoeewk;
        ygomiqmeacmoogqa:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto owusgguueuoikwim;
        kaccuquekgoomume:
        if (!$wkaqekwwgqsqwcoi) {
            goto csicyuisekuyiuys;
        }
        goto ekikcgogkomooqia;
        mscukwykcksygqkg:
        ymsymwiockkscikc:
        goto usuewcmsgysskeca;
        mquqekumeaoswgye:
        
        $wkaqekwwgqsqwcoi = preg_replace("\57\x3c\x21\x2d\55\x5b\x5c\x73\x5c\123\135\x2a\77\55\x2d\x3e\x2f", '', $wkaqekwwgqsqwcoi);
        goto ocaguoikqsymkaaw;
        ocaguoikqsymkaaw:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\x64\x65\x66\x73\76\x5b\134\163\134\x53\135\52\77\x3c\x5c\57\x64\x65\x66\163\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto logyqqoeosuimcmi;
        aueusukugaqgmuqe:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto gicqcsqmkgiyeoss;
        }
        goto mquqekumeaoswgye;
        usuewcmsgysskeca:
        csicyuisekuyiuys:
        goto sigyamiisqewqwkm;
        ekikcgogkomooqia:
        $ceuoyocoywikssmy = "\151\x6d\147\x2f\163\166\x67\57\151\143\x6f\156\x2f{$wkaqekwwgqsqwcoi}\x2e\x73\166\147";
        goto ygomiqmeacmoogqa;
        gesswekoguscuise:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto aqciayqccmoesccw;
        wycieuuioyumuaim:
        suwiwmkogwymwqec:
        goto cycqgciuqgyacwyy;
        coyyauuykuwacoes:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto wycieuuioyumuaim;
        mucuuagawemmkwug:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto gmeegkiyasyqwyqq;
        gmeegkiyasyqwyqq:
        goto suwiwmkogwymwqec;
        goto qmmwceyuwsagkgqs;
        uwoqemmymksauskq:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto iqamqqkameysgiwm;
        wsqqoqwykgsoeweu:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto wasqmeqaayyqckwa;
        cycqgciuqgyacwyy:
        $ewgwqamkygiqaawc = false;
        goto wsqqoqwykgsoeweu;
        wasqmeqaayyqckwa:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto akcqewkmyeqsmqcg;
        }
        goto uwoqemmymksauskq;
        qeoakikuyiyksguo:
        return $ewgwqamkygiqaawc;
        goto uayiuioememomcuc;
        aqciayqccmoesccw:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto gaqeewuasmsgumsg;
        }
        goto kwckkiekaoaaukkk;
        qmmwceyuwsagkgqs:
        gaqeewuasmsgumsg:
        goto coyyauuykuwacoes;
        kwckkiekaoaaukkk:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto mucuuagawemmkwug;
        iqamqqkameysgiwm:
        akcqewkmyeqsmqcg:
        goto qeoakikuyiyksguo;
        uayiuioememomcuc:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto eyugqqoqukeiuowe;
        wyggeaoiwkkiewgy:
        return $this;
        goto ycmeseaweuwkuksm;
        mqgkywcmemsukuck:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto wyggeaoiwkkiewgy;
        oqiqgegsqcoeiesa:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto cwayuyemyqsewgkc;
        eyugqqoqukeiuowe:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto oowggkeeseuskeio;
        oowggkeeseuskeio:
        if (!$uukmwiwiqwyaaegk) {
            goto umkaquamukuuqeii;
        }
        goto oqiqgegsqcoeiesa;
        cwayuyemyqsewgkc:
        umkaquamukuuqeii:
        goto mqgkywcmemsukuck;
        ycmeseaweuwkuksm:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto swiiswsgcesakeei;
        ouyskuyuekeeeuku:
        gcsmyoouiugsuywu:
        goto icikesyuoswkwyag;
        icikesyuoswkwyag:
        return $this;
        goto wygsgseuikmkckig;
        swiiswsgcesakeei:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            mmwoqyscsyyccmgc:
        }
        goto ouyskuyuekeeeuku;
        wygsgseuikmkckig:
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
        goto aygkqeyqeguyaumo;
        gwyqsaswyiicuoke:
        $this->attributeAdded = true;
        goto syysuweucygqsgoo;
        giqymigmomaaoicm:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\55{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto iuwmasqwsuqgcwmg;
        aygkqeyqeguyaumo:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto iagouugawsuswccu;
        }
        goto wawgcwguamqgekis;
        wawgcwguamqgekis:
        $this->cecaguuoecmccuse("\163\x63\162\151\x70\164\137\x6c\157\141\x64\145\162\x5f\164\141\x67", [$this, "\x65\143\x6f\161\x6f\157\x69\165\x79\x6d\163\x67\141\153\171\x73"], 10, 2);
        goto gwyqsaswyiicuoke;
        iuwmasqwsuqgcwmg:
        return $this;
        goto meoicwqckywiwaii;
        syysuweucygqsgoo:
        iagouugawsuswccu:
        goto giqymigmomaaoicm;
        meoicwqckywiwaii:
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
