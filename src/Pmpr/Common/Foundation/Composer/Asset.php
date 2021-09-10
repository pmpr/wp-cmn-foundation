<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Composer;

use Exception;
use Pmpr\Common\Foundation\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

class Asset
{
    const METHOD_COPY = "\x63\x6f\160\x79";
    const EXCLUDE_PARENT = ["\x73\x79\x6d\146\157\x6e\171"];
    const METHOD_ABSOLUTE_SYMLINK = "\141\142\x73\157\154\165\x74\x65\x20\x73\171\155\x6c\x69\x6e\153";
    const METHOD_RELATIVE_SYMLINK = "\x72\145\x6c\x61\x74\x69\166\145\40\163\171\x6d\x6c\151\156\x6b";
    
    public function ywwqugyyeuaqousg($iswcokucwmiosiaq)
    {
        echo $iswcokucwmiosiaq . PHP_EOL;
    }
    
    public function kcciqwskewsuaemk() : Filesystem
    {
        return Filesystem::symcgieuakksimmu();
    }
    
    private function iuuicquiigqcwyii($ymiuaqwqkqoqkmck, $eisqsskqimiigkay) : array
    {
        goto auikqkeqwesewceo;
        auikqkeqwesewceo:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto miuuouwcqyuuassq;
        iswiyqggakommwme:
        kwgswyiyuiusquis:
        goto ukkeimmiooigeukm;
        ukkeimmiooigeukm:
        return $oegoegssokkyiqam;
        goto ogwyceiasmkecega;
        miuuouwcqyuuassq:
        $oegoegssokkyiqam = [];
        goto wmsekuosaquuokig;
        wmsekuosaquuokig:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto mmkaacimmsosgyeo;
            ggsaqscecssyooyu:
            masugicegsyegooy:
            goto umqcquemgmagccsa;
            oqgyymcwykwyekwi:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto masugicegsyegooy;
            }
            goto reuyikuqkiecguye;
            umqcquemgmagccsa:
            nwqkeomgugscuesw:
            goto susywgmyuqgesoqm;
            quyowuoyqykcmqem:
            goto ymcussoqgmiugeim;
            goto wucoqqekkeuwmeac;
            mmkaacimmsosgyeo:
            $qmwoqyacswkwkiog = explode("\x2f", $ymqmyyeuycgmigyo);
            goto oqgyymcwykwyekwi;
            reuyikuqkiecguye:
            array_pop($qmwoqyacswkwkiog);
            goto miuwyoykaasqyqmu;
            miuwyoykaasqyqmu:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto mekgaisoagymyaaw;
            }
            goto gogekosaoawesmik;
            aicqmuuuokcayamc:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto aqeciqckokseauei;
            gogekosaoawesmik:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto quyowuoyqykcmqem;
            skqqwmemiemiuyka:
            ymcussoqgmiugeim:
            goto ggsaqscecssyooyu;
            wucoqqekkeuwmeac:
            mekgaisoagymyaaw:
            goto aicqmuuuokcayamc;
            aqeciqckokseauei:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto skqqwmemiemiuyka;
            susywgmyuqgesoqm:
        }
        goto iswiyqggakommwme;
        ogwyceiasmkecega:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto qywaouucmiiygmwm;
        usgwiosecieikgka:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto oaomsmoyuaiweqke;
        oaomsmoyuaiweqke:
        return self::METHOD_COPY;
        goto iswcaeqkwmqiywmw;
        qywaouucmiiygmwm:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto usgwiosecieikgka;
        iswcaeqkwmqiywmw:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto gqgqsiugwyueosuk;
        waeuacmiwukowsuc:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto uqcaomakqoycwicm;
        yowkucagyqgwyega:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\x69\x73\x5f\x64\151\x72");
        goto waeuacmiwukowsuc;
        gqgqsiugwyueosuk:
        $iuaemokqameyemms = [];
        goto yowkucagyqgwyega;
        wwqimegeyywwqqqm:
        return $iuaemokqameyemms;
        goto auksmcqqyyagkeaa;
        ukqgycaqkmcmwwua:
        oasasywweeuieemi:
        goto wwqimegeyywwqqqm;
        uqcaomakqoycwicm:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\57\52", $ccamueccusigaaio));
            kuwwsgeioseccayw:
        }
        goto ukqgycaqkmcmwwua;
        auksmcqqyyagkeaa:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto gemckmgaigeaqoce;
        qiyskomkewcmygyq:
        ogawmwuomuowcwyy:
        goto tkkkasskiumciacw;
        iacuuogeimakywss:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto qiyskomkewcmygyq;
        gucqgcqwoimkwcek:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto iacuuogeimakywss;
        yagasegkqgewyyaw:
        kkqsuaomkckegccq:
        goto yukmsawciwkeuusw;
        wkmyuaqacooaiccq:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto kkqsuaomkckegccq;
        }
        goto escmmmseocmegscc;
        escmmmseocmegscc:
        throw new IOException(sprintf("\x53\171\155\x62\x6f\154\151\143\40\x6c\151\x6e\153\x20\42\x25\x73\x22\40\167\141\x73\x20\x63\x72\145\x61\164\x65\x64\40\x62\x75\164\x20\141\x70\x70\x65\x61\x72\x73\x20\x74\x6f\x20\x62\145\40\x62\162\157\153\145\156\x2e", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto yagasegkqgewyyaw;
        tkkkasskiumciacw:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto wkmyuaqacooaiccq;
        gemckmgaigeaqoce:
        if (!$hssqsasscequuyky) {
            goto ogawmwuomuowcwyy;
        }
        goto gucqgcqwoimkwcek;
        yukmsawciwkeuusw:
    }
    
    private function eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        try {
            $this->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, true);
            $qgciuiagkkguykgs = self::METHOD_RELATIVE_SYMLINK;
        } catch (IOException $iewosgggaueeyymg) {
            $qgciuiagkkguykgs = $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        }
        return $qgciuiagkkguykgs;
    }
    
    private function wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        try {
            $this->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
            $qgciuiagkkguykgs = self::METHOD_ABSOLUTE_SYMLINK;
        } catch (IOException $iewosgggaueeyymg) {
            
            $qgciuiagkkguykgs = $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        }
        return $qgciuiagkkguykgs;
    }
    
    public function eeqkqkkwqyeoucok($omckemiaycwscaws, $aocoewseyaaosiag = self::METHOD_RELATIVE_SYMLINK) : int
    {
        goto uqsceccusmgeyuew;
        qygeowmwmiacoekm:
        $this->ywwqugyyeuaqousg("\x52\145\161\165\x69\162\145\x20\x64\151\x72\x65\x63\x74\157\162\x69\145\163\40\x6e\x6f\164\40\x65\170\151\163\x74\163");
        goto tiueaamgsyyqgwqk;
        qyeayqkyaiimsosi:
        if ($oegoegssokkyiqam) {
            goto uauioquiemswyaqs;
        }
        goto ggyomkkegskioyiw;
        gaoiaumomqsoksky:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\57\x76\x65\x6e\x64\x6f\162";
        goto oiycsmwieaaiikmm;
        kommgumsagoyqggu:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto easgcwoweimgucgw;
        sqokooqayqgquoua:
        wmoqacqeciuceekg:
        goto gqwsuiweccsqwwsw;
        iuwqyoigygqgqoci:
        $yaeakkosskocswae = "{$wpContent}\x2f\x73";
        goto gsqwqmegcsyuawmq;
        ucocwuquasemqweo:
        agycsismscqmqgck:
        goto qaemcayqiaekkuyc;
        uqsceccusmgeyuew:
        $owousuaweekeyagq = 0;
        goto wmmawwseygmyisok;
        qaemcayqiaekkuyc:
        amaoscwycqygkegq:
        goto sqokooqayqgquoua;
        gsqwqmegcsyuawmq:
        $this->ywwqugyyeuaqousg("\141\163\x73\145\164\40\163\143\x72\x69\x70\164\x20\163\x74\141\x72\164\x2e");
        goto eumocamquwkqqeeq;
        eumocamquwkqqeeq:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto miagouqecwwkqawu;
        }
        goto qygeowmwmiacoekm;
        ggyomkkegskioyiw:
        $this->ywwqugyyeuaqousg("\143\x61\x6e\40\x6e\x6f\164\40\x66\151\156\144\40\141\x6e\x79\x20\166\x61\154\151\x64\x20\160\x61\164\x68\40\x69\156\40{$ymiuaqwqkqoqkmck}");
        goto koqqweykqaikisee;
        wmmawwseygmyisok:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\57\134");
        goto geswkmoowggqycem;
        oiycsmwieaaiikmm:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\163");
        goto qyeayqkyaiimsosi;
        koqqweykqaikisee:
        goto wmoqacqeciuceekg;
        goto aoouywumugoecggw;
        wwoiisqaamueeuce:
        miagouqecwwkqawu:
        goto kommgumsagoyqggu;
        geswkmoowggqycem:
        $wpContent = realpath("{$omckemiaycwscaws}\57\x2e\x2e\57");
        goto gaoiaumomqsoksky;
        easgcwoweimgucgw:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto iiisyiqocwokceqi;
            iagckoggkakekigk:
            $this->ywwqugyyeuaqousg(sprintf("\45\x73\40\x64\151\x72\x65\x63\164\157\162\x79\x20\151\163\x20\145\x6d\160\164\171\56", $amwwiceekosasokk));
            goto oeaqcoicesgmgyoy;
            oeaqcoicesgmgyoy:
            goto ykqiaioewyakgmei;
            goto ikaeaqiemmaokace;
            weuwakqwosgumwsy:
            try {
                goto goecwmeukyiguomk;
                ogiogeuygmkiiquw:
                $this->ywwqugyyeuaqousg(sprintf("\103\x6f\160\171\x20\117\160\x65\x72\x61\164\x69\157\156\x20\x66\162\157\155\40\45\x73\x20\x74\x6f\40\45\163\40\151\x73\40\163\165\x63\x63\x65\163\163\146\165\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto omekckkeyyaweyky;
                moeiosaoocmukukk:
                switch ($aocoewseyaaosiag) {
                    case self::METHOD_RELATIVE_SYMLINK:
                        $this->eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto wsgcoqwuiemsesck;
                    case self::METHOD_ABSOLUTE_SYMLINK:
                        $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto wsgcoqwuiemsesck;
                    default:
                        $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                }
                goto wwaakogequokiwmc;
                goecwmeukyiguomk:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\57" . $omwmuycmeqcqokom;
                goto moeiosaoocmukukk;
                cowwaukyegiscocm:
                wsgcoqwuiemsesck:
                goto ogiogeuygmkiiquw;
                wwaakogequokiwmc:
                ogoeucemguomwieo:
                goto cowwaukyegiscocm;
                omekckkeyyaweyky:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto swqosaucauumkyam;
            ikaeaqiemmaokace:
            gmeemgswkyokekac:
            goto weuwakqwosgumwsy;
            ksggcqioosseuwkc:
            mswmikumamcegkss:
            goto aigekiscequekicu;
            iiisyiqocwokceqi:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto gmeemgswkyokekac;
            }
            goto iagckoggkakekigk;
            swqosaucauumkyam:
            ykqiaioewyakgmei:
            goto ksggcqioosseuwkc;
            aigekiscequekicu:
        }
        goto ucocwuquasemqweo;
        uguyasecegqmqaoa:
        return $owousuaweekeyagq;
        goto eaeamowgsqcwyqok;
        aoouywumugoecggw:
        uauioquiemswyaqs:
        goto iuwqyoigygqgqoci;
        tiueaamgsyyqgwqk:
        goto amaoscwycqygkegq;
        goto wwoiisqaamueeuce;
        gqwsuiweccsqwwsw:
        $this->ywwqugyyeuaqousg("\x61\163\x73\x65\164\x20\163\x63\x72\151\160\x74\x20\x64\x6f\x6e\145\56");
        goto uguyasecegqmqaoa;
        eaeamowgsqcwyqok:
    }
}
