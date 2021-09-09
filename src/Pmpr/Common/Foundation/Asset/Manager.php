<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto qamggugcciewoqaq;
        gsksaikwgqsiowuq:
        $this->ygegioggqgwwqooe();
        goto kuqmaygwmyayyaqs;
        kuqmaygwmyayyaqs:
        parent::__construct();
        goto wgoswkyqgcmyiiis;
        qamggugcciewoqaq:
        $this->component = $wksoawcgagcgoask;
        goto gsksaikwgqsiowuq;
        wgoswkyqgcmyiiis:
    }
    
    public function ieqamkssqsaukwqm() : bool
    {
        return $this->attributeAdded;
    }
    public function ygegioggqgwwqooe()
    {
        try {
            goto egwgcoeimkcmuoay;
            aqywkgmsimoyusww:
            $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}\x2f\155\141\x6e\151\x66\145\163\164\x2e\x6a\163\x6f\x6e"));
            goto aoqmkcscmggooccq;
            saumgwumguugmwmc:
            $mkomwsiykqigmqca .= "\x2f{$wksoawcgagcgoask}";
            goto miwwmkuqiakemmye;
            aassyqocioskyqss:
            $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
            goto ykiikqagkawsoaci;
            ugkwekwgewwoumkk:
            $eeamcawaiqocomwy .= "\x2f{$wksoawcgagcgoask}";
            goto saumgwumguugmwmc;
            aoqmkcscmggooccq:
            gukauemcgeeiucky:
            goto qeqkywcmyccagagy;
            aayuoggsqocyigmi:
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            goto ugkacsuuamggoaee;
            ykiikqagkawsoaci:
            if (!$wksoawcgagcgoask) {
                goto mkeyagagqqmayimw;
            }
            goto ugkwekwgewwoumkk;
            miwwmkuqiakemmye:
            mkeyagagqqmayimw:
            goto aqywkgmsimoyusww;
            egwgcoeimkcmuoay:
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            goto aayuoggsqocyigmi;
            ugkacsuuamggoaee:
            if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
                goto gukauemcgeeiucky;
            }
            goto aassyqocioskyqss;
            qeqkywcmyccagagy:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\144\x6d\x69\x6e\x5f\x65\x6e\161\165\x65\165\145\x5f\141\163\x73\145\164\x73"), [$this, "\163\167\161\145\x71\167\167\151\x6f\145\x79\153\151\x65\165\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\157\147\x69\x6e\x5f\145\x6e\x71\x75\145\x75\x65\137\141\163\x73\145\x74\163"), [$this, "\153\x71\x79\167\145\143\165\x71\141\147\x65\161\x73\167\x75\167"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x66\162\x6f\156\x74\x5f\x65\156\x71\165\x65\x75\x65\137\141\163\x73\145\164\163"), [$this, "\171\145\163\x6d\x71\x63\x63\x75\x61\145\x63\147\145\147\155\165"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\144\x6d\151\x6e\x5f\154\157\x63\x61\154\x69\x7a\x65\x5f\x76\x61\162\x69\x61\x62\x6c\x65\x73"), [$this, "\165\171\145\163\x75\167\145\145\x73\x6b\171\151\171\x61\151\145"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\154\157\147\151\156\x5f\x6c\157\143\141\154\151\x7a\x65\137\x76\x61\x72\x69\x61\142\154\x65\x73"), [$this, "\153\171\x67\167\145\165\157\x6b\x73\x71\141\157\x6d\x69\x71\171"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\146\162\x6f\x6e\164\x5f\x6c\157\x63\x61\154\x69\x7a\x65\x5f\x76\x61\162\151\x61\142\x6c\145\163"), [$this, "\x73\x6f\x73\x61\153\151\143\157\x77\x6d\x71\151\167\x67\x73\x73"]);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        goto eimkegkeksgauuoc;
        ycsmqwcwuyswwkca:
        $sqeykgyoooqysmca = self::ADMIN;
        goto kscyowywgocauqag;
        isiaqgoyssmewesi:
        if (is_admin()) {
            goto omqquicsamaciuow;
        }
        goto smqaeiwowicwkyqu;
        ickycigiuiwgmyws:
        uuqqioqmameaooki:
        goto gwqyyuasqiquucsu;
        skecaossewayuqyg:
        cmckmmwqkgkmauow:
        goto ickycigiuiwgmyws;
        gowgwskywyqgaeke:
        aagqsqscqcqsgwga:
        goto gsoisieoqagwweki;
        wcecucsciswygeqq:
        $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ["\163\143\x72\151\160\x74" => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
        goto skecaossewayuqyg;
        ywceiuemaoowsess:
        $sqeykgyoooqysmca = self::FRONT;
        goto ugqqwuyqawqwacuw;
        smqaeiwowicwkyqu:
        if (ManipulatePage::awgkmqkqkqawmqcu()) {
            goto aagqsqscqcqsgwga;
        }
        goto ywceiuemaoowsess;
        qyyowcmyggmmkqag:
        $egsumesakcaaukem = $this->yimkcammomikeegq("\x73\x63\162\151\160\164\55{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
        goto qkcguqcqywkciokk;
        ugqqwuyqawqwacuw:
        goto mwqyieouoskcmees;
        goto gowgwskywyqgaeke;
        kscyowywgocauqag:
        agykysuskscqskcm:
        goto qyyowcmyggmmkqag;
        eimkegkeksgauuoc:
        if (!$this->ieqamkssqsaukwqm()) {
            goto uuqqioqmameaooki;
        }
        goto isiaqgoyssmewesi;
        eeyeuakaequcqikw:
        omqquicsamaciuow:
        goto ycsmqwcwuyswwkca;
        uqiowycseskckoqq:
        goto agykysuskscqskcm;
        goto eeyeuakaequcqikw;
        gwqyyuasqiquucsu:
        return $scwiymciagumsuiw;
        goto kkokomceuqcksqmw;
        wkuwkqwkgeksqwoe:
        mwqyieouoskcmees:
        goto uqiowycseskckoqq;
        qkcguqcqywkciokk:
        if (!($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto cmckmmwqkgkmauow;
        }
        goto wcecucsciswygeqq;
        gsoisieoqagwweki:
        $sqeykgyoooqysmca = self::LOGIN;
        goto wkuwkqwkgeksqwoe;
        kkokomceuqcksqmw:
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        goto nagegoomawccoesa;
        nagegoomawccoesa:
        if (!$this->csaueuycewaiuaay()) {
            goto doceecwiieccywmq;
        }
        goto imyucowmgaoaiyam;
        cmayaqwsoqwuyiug:
        return $seiyqiqwcmseaiaq;
        goto mimmaqquyqcgkgma;
        qcqumquqogoukkwu:
        doceecwiieccywmq:
        goto cmayaqwsoqwuyiug;
        imyucowmgaoaiyam:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        goto qcqumquqogoukkwu;
        mimmaqquyqcgkgma:
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        goto qyiqmoeockmkqgca;
        yymeyucsqkwwyoyu:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        goto mkwiimcwoemmsawk;
        mkwiimcwoemmsawk:
        oiokkacaieswccye:
        goto yemmmkmsamgikgoq;
        yemmmkmsamgikgoq:
        return $yokgacoigcscwkie;
        goto qikeguekwsmewscq;
        qyiqmoeockmkqgca:
        if (!$this->csaueuycewaiuaay()) {
            goto oiokkacaieswccye;
        }
        goto yymeyucsqkwwyoyu;
        qikeguekwsmewscq:
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        goto wikaskuciyssiaea;
        qugqqiyqcgacuqkk:
        return $seiyqiqwcmseaiaq;
        goto escqecamuceuuueu;
        qygwgskgigyiqcao:
        wcoymgwyykauukuq:
        goto qugqqiyqcgacuqkk;
        qsmakmgcgcisywwc:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        goto qygwgskgigyiqcao;
        wikaskuciyssiaea:
        if (!$this->csaueuycewaiuaay()) {
            goto wcoymgwyykauukuq;
        }
        goto qsmakmgcgcisywwc;
        escqecamuceuuueu:
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        goto ioseaskqkyayesmi;
        ioseaskqkyayesmi:
        if (!$this->csaueuycewaiuaay()) {
            goto oqeyoyeywsiomiuk;
        }
        goto owmqsikiqkoasecs;
        wyggykgisoacmiua:
        oqeyoyeywsiomiuk:
        goto iocqeaqmccyugmic;
        iocqeaqmccyugmic:
        return $yokgacoigcscwkie;
        goto eqysqusausyoicug;
        owmqsikiqkoasecs:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        goto wyggykgisoacmiua;
        eqysqusausyoicug:
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        goto iymmgskkyyskcksk;
        iymmgskkyyskcksk:
        if (!$this->csaueuycewaiuaay()) {
            goto iawmkemyuaqgkgag;
        }
        goto wycswkyaywmeasyw;
        wycswkyaywmeasyw:
        $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        goto cmqiccmcgsqssmma;
        cmqiccmcgsqssmma:
        iawmkemyuaqgkgag:
        goto mooqiqsymkquusgi;
        mooqiqsymkquusgi:
        return $seiyqiqwcmseaiaq;
        goto wmuwcaqmcwuescwc;
        wmuwcaqmcwuescwc:
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        goto qigkseceeiekiaic;
        ucwaiqcuysmskowc:
        kmskmqcgkamsgkcm:
        goto oskssywmqgoauwke;
        isaykouuuwsgwywi:
        $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        goto ucwaiqcuysmskowc;
        oskssywmqgoauwke:
        return $yokgacoigcscwkie;
        goto wgmscmycmmwagaqe;
        qigkseceeiekiaic:
        if (!$this->csaueuycewaiuaay()) {
            goto kmskmqcgkamsgkcm;
        }
        goto isaykouuuwsgwywi;
        wgmscmycmmwagaqe:
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        goto ugiskommysmcugig;
        cyeoiysigumciuma:
        $eeamcawaiqocomwy .= "\x20\x2f{$wksoawcgagcgoask}";
        goto uekmgwcumckmqwsu;
        ugiskommysmcugig:
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        goto oaiikqqsscmywqyk;
        oeqkeqgkwyayuogc:
        return $eeamcawaiqocomwy;
        goto gqeeocimioewyyou;
        uekmgwcumckmqwsu:
        ueiyyiokueymucqa:
        goto kwguusaseiauseoi;
        geoygkiuccaqcumg:
        if (!$wksoawcgagcgoask) {
            goto ueiyyiokueymucqa;
        }
        goto cyeoiysigumciuma;
        kwguusaseiauseoi:
        $eeamcawaiqocomwy .= "\x20\x2f{$ymqmyyeuycgmigyo}";
        goto oeqkeqgkwyayuogc;
        oaiikqqsscmywqyk:
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        goto geoygkiuccaqcumg;
        gqeeocimioewyyou:
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        goto ggqmkgqosuekoycu;
        aqgucgumeessookq:
        goto yuqmqsuaqqamumac;
        goto sycoccuaosmosqsi;
        gkkuagcemwsckgac:
        $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
        goto egeeeeyuoesgayoc;
        eukciagakmsasako:
        yuqmqsuaqqamumac:
        goto gysooekmciuicgyw;
        kcuyacakkwwucqgi:
        $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
        goto gkkuagcemwsckgac;
        egeeeeyuoesgayoc:
        $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
        goto awykgsqaycauwquo;
        cqwicouukomskmka:
        sokakmqsquykwcmo:
        goto mmieiykmcqgeuceg;
        ggqmkgqosuekoycu:
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        goto wiwugamyyegscqyu;
        awykgsqaycauwquo:
        kawikymokoesioay:
        goto eukciagakmsasako;
        mmieiykmcqgeuceg:
        wcckccugqkukymay:
        goto cacosciskaewuaam;
        yyoogcqkcswwkciw:
        $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
        goto imemamyywgmcwygc;
        gysooekmciuicgyw:
        return $sogksuscggsicmac;
        goto cusumaiokokiiumq;
        oygkgcygoaeaqiom:
        ycmkyasqkukggogs:
        goto aqgucgumeessookq;
        gwuiocyoeiciciyw:
        $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
        goto oygkgcygoaeaqiom;
        cacosciskaewuaam:
        if (!($eeamcawaiqocomwy && $mkomwsiykqigmqca)) {
            goto kawikymokoesioay;
        }
        goto kcuyacakkwwucqgi;
        wiwugamyyegscqyu:
        if (preg_match("\57\134\x2f\x77\160\x2d\x28\x63\157\156\x74\145\156\x74\174\151\x6e\143\x6c\165\144\x65\163\x29\134\x2f\x2f", $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            goto ckskeywcckyaciuu;
        }
        goto yyoogcqkcswwkciw;
        imemamyywgmcwygc:
        $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
        goto esqcysaoigqicqmq;
        wkkqumskaemwemuo:
        switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
            case "\x63\x6f\156\164\x65\x6e\164":
                goto oeyaeawyigiygyus;
                cmkuegkqiwgaeukq:
                goto wcckccugqkukymay;
                goto kescwsiuywawyqwu;
                oeyaeawyigiygyus:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                goto awwoieswswoqsqoa;
                awwoieswswoqsqoa:
                $eeamcawaiqocomwy = content_url();
                goto cmkuegkqiwgaeukq;
                kescwsiuywawyqwu:
            case "\151\x6e\143\154\165\144\145\163":
                goto yqqmeykkyqoiusiu;
                eyqmqqgqiuscecci:
                $eeamcawaiqocomwy = includes_url();
                goto kqocyskgsigykkos;
                kqocyskgsigykkos:
                goto wcckccugqkukymay;
                goto kssqyweyyigkmigs;
                yqqmeykkyqoiusiu:
                $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                goto eyqmqqgqiuscecci;
                kssqyweyyigkmigs:
        }
        goto cqwicouukomskmka;
        sycoccuaosmosqsi:
        ckskeywcckyaciuu:
        goto wkkqumskaemwemuo;
        esqcysaoigqicqmq:
        if (!($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo)) {
            goto ycmkyasqkukggogs;
        }
        goto gwuiocyoeiciciyw;
        cusumaiokokiiumq:
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
        goto qmmweguyeicusqsa;
        gokacuwekwkmygwg:
        try {
            try {
                goto iwmuiuymkouayqyo;
                wgiwmowkiwcwoakm:
                if (!$quowyokcwswmuois) {
                    goto iiwuwsuckokcokey;
                }
                goto ayiwywqikeqgyosm;
                kssyksgomecayykc:
                iiwuwsuckokcokey:
                goto oymuyqwakkkkueoi;
                ayiwywqikeqgyosm:
                
                $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                goto kssyksgomecayykc;
                iwmuiuymkouayqyo:
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                goto wgiwmowkiwcwoakm;
                oymuyqwakkkkueoi:
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
            $kqagasmwymmuiksq = null;
        }
        goto kakmqcgeiqcqsioq;
        kakmqcgeiqcqsioq:
        return $kqagasmwymmuiksq;
        goto ykuumqkmwcaekiac;
        qmmweguyeicusqsa:
        $kqagasmwymmuiksq = null;
        goto gokacuwekwkmygwg;
        ykuumqkmwcaekiac:
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        goto uuoaaawqaaiesekw;
        cggseekycwueosos:
        return $ceuoyocoywikssmy;
        goto wkaouucmyqymqsyq;
        msmksqwgyomoksem:
        if (!$quowyokcwswmuois) {
            goto cqqyaickwcguayai;
        }
        goto gmomuqswgeaoomwe;
        uuoaaawqaaiesekw:
        $ceuoyocoywikssmy = null;
        goto mmaaoasmmgwgcagg;
        gmomuqswgeaoomwe:
        try {
            goto kkusugwsckiwcwai;
            kkusugwsckiwcwai:
            
            $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
            goto iuusagmiuoomeowm;
            saqqwcqqqwkuouoo:
            qameqycyiiyokigq:
            goto gkuuwkyosiewqymy;
            iuusagmiuoomeowm:
            if (!($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, "\56\143\x73\163"))) {
                goto qameqycyiiyokigq;
            }
            goto kigcoaaceaqkmgqk;
            kigcoaaceaqkmgqk:
            $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc("\x2e\143\163\163", "\56\162\x74\154\56\143\163\163", $ceuoyocoywikssmy);
            goto saqqwcqqqwkuouoo;
            gkuuwkyosiewqymy:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto sgqasakygigqcgmy;
        mmaaoasmmgwgcagg:
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        goto msmksqwgyomoksem;
        sgqasakygigqcgmy:
        cqqyaickwcguayai:
        goto cggseekycwueosos;
        wkaouucmyqymqsyq:
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\165\x69\x6c\144\137\144\151\162\145\x63\164\x6f\x72\x79"), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        goto oqcoyawkkcoisqoc;
        ewkakyksocksekmg:
        $sycgeiyakseiumqy = trailingslashit(site_url());
        goto ecwiuigeegaaewqy;
        eiacwgegiuowcmig:
        $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        goto qumekuwomeeyamwu;
        ecwiuigeegaaewqy:
        $eeamcawaiqocomwy = null;
        goto oaikuoqiukaqmiak;
        oqcoyawkkcoisqoc:
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        goto ewkakyksocksekmg;
        ykoooseayycgcayu:
        return $eeamcawaiqocomwy;
        goto kqueiiioekoawcsy;
        oaikuoqiukaqmiak:
        if (!($woaeeewomgcuesaa && $sycgeiyakseiumqy)) {
            goto yegggscmiqaegiua;
        }
        goto eiacwgegiuowcmig;
        qumekuwomeeyamwu:
        yegggscmiqaegiua:
        goto ykoooseayycgcayu;
        kqueiiioekoawcsy:
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        goto ciaueooiggcgakuu;
        aeoysqssqcqwauow:
        zoekckiqssqyomyk:
        goto uigweyocaqgemmgc;
        uigweyocaqgemmgc:
        return $this->package;
        goto meciqmqcuiqawkua;
        mwwciqsyskyekkeq:
        $this->ygegioggqgwwqooe();
        goto aeoysqssqcqwauow;
        ciaueooiggcgakuu:
        if ($this->package) {
            goto zoekckiqssqyomyk;
        }
        goto mwwciqsyskyekkeq;
        meciqmqcuiqawkua:
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        goto yasweukayucicyuk;
        eqecgkeqwuiugeca:
        return "{$mkomwsiykqigmqca}\x2f{$kqagasmwymmuiksq}";
        goto ueqkyiquamyiakgc;
        wccggcuyqqweoikc:
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        goto eqecgkeqwuiugeca;
        yasweukayucicyuk:
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        goto wccggcuyqqweoikc;
        ueqkyiquamyiakgc:
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        goto gimuoawsewokwcky;
        gimuoawsewokwcky:
        if (!$wkaqekwwgqsqwcoi) {
            goto wqoysqscuiyuqsai;
        }
        goto uugioomkywkukaki;
        mceeqosocaaaoaog:
        ikmqssocqayyakge:
        goto ikquocgacmwgcoyu;
        uwwsaskiyywcqmyy:
        
        $wkaqekwwgqsqwcoi = preg_replace("\57\74\x21\55\x2d\133\x5c\163\134\x53\x5d\x2a\x3f\x2d\55\76\57", '', $wkaqekwwgqsqwcoi);
        goto mqyusyqaukgqauos;
        oqwciqwewqwwwqso:
        return $wkaqekwwgqsqwcoi;
        goto oqqqgemqcqicgomo;
        eysugkikgqgegogw:
        wwwqgisgogqgqeom:
        goto mceeqosocaaaoaog;
        gcicoimysgieaygo:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
        goto yyyawioycsowgayc;
        yyyawioycsowgayc:
        if (!($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq)) {
            goto wwwqgisgogqgqeom;
        }
        goto uwwsaskiyywcqmyy;
        mqyusyqaukgqauos:
        $wkaqekwwgqsqwcoi = preg_replace("\x2f\74\x64\x65\146\163\x3e\133\134\x73\x5c\123\x5d\52\x3f\74\134\57\x64\145\x66\163\x3e\57", '', $wkaqekwwgqsqwcoi);
        goto eysugkikgqgegogw;
        ikquocgacmwgcoyu:
        wqoysqscuiyuqsai:
        goto oqwciqwewqwwwqso;
        iiesscwguamgaaoe:
        if ($ewgwqamkygiqaawc) {
            goto oassyegiwmwsmiwg;
        }
        goto wskqiiwkwcokqaai;
        uugioomkywkukaki:
        $ceuoyocoywikssmy = "\x69\x6d\147\x2f\163\166\x67\x2f\151\x63\x6f\x6e\x2f{$wkaqekwwgqsqwcoi}\56\163\166\147";
        goto oqeieoywwiqsqwke;
        oyukuusksqiocwoe:
        goto ikmqssocqayyakge;
        goto wccmooaikyqkemwc;
        wskqiiwkwcokqaai:
        $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
        goto oyukuusksqiocwoe;
        wccmooaikyqkemwc:
        oassyegiwmwsmiwg:
        goto gcicoimysgieaygo;
        oqeieoywwiqsqwke:
        $eygsasmqycagyayw = $this->miocmcoykayoyyau();
        goto iiesscwguamgaaoe;
        oqqqgemqcqicgomo:
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        goto gqcqgsiouousmgwy;
        qgkmkykkgeeqyeyy:
        eceywsecgoyuoqmq:
        goto ioqaeigausyceicu;
        ioqaeigausyceicu:
        $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        goto suocokcwoqamicms;
        suocokcwoqamicms:
        uqkeasmouqogoacq:
        goto ewsiemmseeuyuwsu;
        qkqasaogwyiiciem:
        $egsumesakcaaukem = $this->get($egsumesakcaaukem);
        goto gsqyksumwymkwsas;
        gsqyksumwymkwsas:
        $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        goto mkwemicgqcqyusqw;
        qyqymqymoyouceqk:
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        goto cecyuuwcqioiwauu;
        mkwemicgqcqyusqw:
        goto uqkeasmouqogoacq;
        goto qgkmkykkgeeqyeyy;
        auwymayuwcamoqgq:
        $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto wscmiwckoyiooekg;
        sisisweiyqgccaae:
        return $ewgwqamkygiqaawc;
        goto guumaeugmekqeisi;
        ewsiemmseeuyuwsu:
        $ewgwqamkygiqaawc = false;
        goto qyqymqymoyouceqk;
        wscmiwckoyiooekg:
        gsiccqcoquqskcmk:
        goto sisisweiyqgccaae;
        cecyuuwcqioiwauu:
        if (!($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum))) {
            goto gsiccqcoquqskcmk;
        }
        goto auwymayuwcamoqgq;
        gqcqgsiouousmgwy:
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            goto eceywsecgoyuoqmq;
        }
        goto qkqasaogwyiiciem;
        guumaeugmekqeisi:
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto siugkcyicyqcscsc;
        kqaymsayeiukkaay:
        return $this;
        goto wgeuisockoogeccc;
        qeogscuwaqegqeeu:
        $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        goto kuigciykymecwmos;
        siugkcyicyqcscsc:
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        goto qeggqaqesumwycek;
        kuigciykymecwmos:
        wuikqgsgquisuusa:
        goto aqoygcikqwoegkii;
        qeggqaqesumwycek:
        if (!$uukmwiwiqwyaaegk) {
            goto wuikqgsgquisuusa;
        }
        goto qeogscuwaqegqeeu;
        aqoygcikqwoegkii:
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        goto kqaymsayeiukkaay;
        wgeuisockoogeccc:
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        goto gsyuoweeeqoyiygw;
        gsyuoweeeqoyiygw:
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            eycmsyeuqqmeooaq:
        }
        goto csywagwikouweiqm;
        csywagwikouweiqm:
        wmwocowecyoasqeg:
        goto iqmyomeqgiououou;
        iqmyomeqgiououou:
        return $this;
        goto ogkquckqwooqiymq;
        ogkquckqwooqiymq:
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
        goto mgoaekweikqawgge;
        qqywmguygwscyyae:
        return $this;
        goto qyiigayoyegauwaw;
        eseouiwqkgagsiaa:
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}\x2d{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        goto qqywmguygwscyyae;
        swyggiaiwsmwessm:
        keoouuycgkayggiq:
        goto eseouiwqkgagsiaa;
        mgoaekweikqawgge:
        if (!(!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq())) {
            goto keoouuycgkayggiq;
        }
        goto syumwaimygimyscy;
        syumwaimygimyscy:
        $this->cecaguuoecmccuse("\x73\143\162\151\x70\164\x5f\x6c\x6f\141\x64\145\162\x5f\x74\x61\x67", [$this, "\x65\x63\x6f\161\x6f\157\x69\x75\x79\x6d\163\x67\141\153\x79\x73"], 10, 2);
        goto wgoawmkecwkieoyk;
        wgoawmkecwkieoyk:
        $this->attributeAdded = true;
        goto swyggiaiwsmwessm;
        qyiigayoyegauwaw:
    }
    
    public function yomasssaasmawcso(string $eueuqacmukymcyya) : string
    {
        return "{$this->aiqioscoyukqgsgw()}\55{$eueuqacmukymcyya}";
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return !ManipulateAjax::mcgoysmkqsqooceq() && !ManipulateServer::smowememmgeukwki();
    }
}
