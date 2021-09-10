<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Composer;

use Exception;
use Pmpr\Common\Foundation\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

class Asset
{
    const METHOD_COPY = "\143\157\160\x79";
    const EXCLUDE_PARENT = ["\x73\x79\x6d\x66\x6f\156\171"];
    const METHOD_ABSOLUTE_SYMLINK = "\x61\x62\x73\157\x6c\x75\164\x65\x20\x73\x79\155\154\x69\156\153";
    const METHOD_RELATIVE_SYMLINK = "\x72\145\x6c\141\164\x69\166\145\40\x73\x79\x6d\x6c\x69\x6e\153";
    
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
        wmsekuosaquuokig:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto mmkaacimmsosgyeo;
            gogekosaoawesmik:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto quyowuoyqykcmqem;
            quyowuoyqykcmqem:
            goto ymcussoqgmiugeim;
            goto wucoqqekkeuwmeac;
            skqqwmemiemiuyka:
            ymcussoqgmiugeim:
            goto ggsaqscecssyooyu;
            umqcquemgmagccsa:
            nwqkeomgugscuesw:
            goto susywgmyuqgesoqm;
            miuwyoykaasqyqmu:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto mekgaisoagymyaaw;
            }
            goto gogekosaoawesmik;
            ggsaqscecssyooyu:
            masugicegsyegooy:
            goto umqcquemgmagccsa;
            mmkaacimmsosgyeo:
            $qmwoqyacswkwkiog = explode("\57", $ymqmyyeuycgmigyo);
            goto oqgyymcwykwyekwi;
            aicqmuuuokcayamc:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto aqeciqckokseauei;
            wucoqqekkeuwmeac:
            mekgaisoagymyaaw:
            goto aicqmuuuokcayamc;
            aqeciqckokseauei:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto skqqwmemiemiuyka;
            reuyikuqkiecguye:
            array_pop($qmwoqyacswkwkiog);
            goto miuwyoykaasqyqmu;
            oqgyymcwykwyekwi:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto masugicegsyegooy;
            }
            goto reuyikuqkiecguye;
            susywgmyuqgesoqm:
        }
        goto iswiyqggakommwme;
        miuuouwcqyuuassq:
        $oegoegssokkyiqam = [];
        goto wmsekuosaquuokig;
        auikqkeqwesewceo:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto miuuouwcqyuuassq;
        iswiyqggakommwme:
        kwgswyiyuiusquis:
        goto ukkeimmiooigeukm;
        ukkeimmiooigeukm:
        return $oegoegssokkyiqam;
        goto ogwyceiasmkecega;
        ogwyceiasmkecega:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto qywaouucmiiygmwm;
        qywaouucmiiygmwm:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto usgwiosecieikgka;
        oaomsmoyuaiweqke:
        return self::METHOD_COPY;
        goto iswcaeqkwmqiywmw;
        usgwiosecieikgka:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto oaomsmoyuaiweqke;
        iswcaeqkwmqiywmw:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto gqgqsiugwyueosuk;
        gqgqsiugwyueosuk:
        $iuaemokqameyemms = [];
        goto yowkucagyqgwyega;
        yowkucagyqgwyega:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\x69\x73\137\x64\151\162");
        goto waeuacmiwukowsuc;
        wwqimegeyywwqqqm:
        return $iuaemokqameyemms;
        goto auksmcqqyyagkeaa;
        uqcaomakqoycwicm:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\57\52", $ccamueccusigaaio));
            kuwwsgeioseccayw:
        }
        goto ukqgycaqkmcmwwua;
        waeuacmiwukowsuc:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto uqcaomakqoycwicm;
        ukqgycaqkmcmwwua:
        oasasywweeuieemi:
        goto wwqimegeyywwqqqm;
        auksmcqqyyagkeaa:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto gemckmgaigeaqoce;
        wkmyuaqacooaiccq:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto kkqsuaomkckegccq;
        }
        goto escmmmseocmegscc;
        tkkkasskiumciacw:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto wkmyuaqacooaiccq;
        yagasegkqgewyyaw:
        kkqsuaomkckegccq:
        goto yukmsawciwkeuusw;
        iacuuogeimakywss:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto qiyskomkewcmygyq;
        qiyskomkewcmygyq:
        ogawmwuomuowcwyy:
        goto tkkkasskiumciacw;
        gucqgcqwoimkwcek:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto iacuuogeimakywss;
        gemckmgaigeaqoce:
        if (!$hssqsasscequuyky) {
            goto ogawmwuomuowcwyy;
        }
        goto gucqgcqwoimkwcek;
        escmmmseocmegscc:
        throw new IOException(sprintf("\123\x79\155\x62\157\154\151\143\x20\154\x69\156\x6b\40\42\45\x73\42\40\x77\x61\163\40\x63\162\x65\141\164\x65\x64\40\x62\x75\164\40\x61\x70\x70\145\141\162\163\x20\x74\x6f\40\142\145\40\x62\x72\x6f\x6b\x65\x6e\56", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto yagasegkqgewyyaw;
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
        ucocwuquasemqweo:
        agycsismscqmqgck:
        goto qaemcayqiaekkuyc;
        qyeayqkyaiimsosi:
        if ($oegoegssokkyiqam) {
            goto uauioquiemswyaqs;
        }
        goto ggyomkkegskioyiw;
        ggyomkkegskioyiw:
        $this->ywwqugyyeuaqousg("\143\141\156\x20\156\x6f\164\40\146\151\156\144\40\141\x6e\171\40\166\x61\x6c\x69\144\x20\x70\x61\x74\x68\40\151\x6e\x20{$ymiuaqwqkqoqkmck}");
        goto koqqweykqaikisee;
        eumocamquwkqqeeq:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto miagouqecwwkqawu;
        }
        goto qygeowmwmiacoekm;
        uqsceccusmgeyuew:
        $owousuaweekeyagq = 0;
        goto wmmawwseygmyisok;
        aoouywumugoecggw:
        uauioquiemswyaqs:
        goto iuwqyoigygqgqoci;
        gsqwqmegcsyuawmq:
        $this->ywwqugyyeuaqousg("\141\163\163\145\x74\x20\163\143\162\151\x70\x74\x20\163\164\x61\x72\x74\56");
        goto eumocamquwkqqeeq;
        gqwsuiweccsqwwsw:
        $this->ywwqugyyeuaqousg("\x61\163\163\145\164\40\x73\x63\x72\151\160\164\40\144\157\x6e\145\x2e");
        goto uguyasecegqmqaoa;
        kommgumsagoyqggu:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto easgcwoweimgucgw;
        gaoiaumomqsoksky:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\x2f\x76\145\156\x64\157\x72";
        goto oiycsmwieaaiikmm;
        easgcwoweimgucgw:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto iiisyiqocwokceqi;
            iiisyiqocwokceqi:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto gmeemgswkyokekac;
            }
            goto iagckoggkakekigk;
            ikaeaqiemmaokace:
            gmeemgswkyokekac:
            goto weuwakqwosgumwsy;
            iagckoggkakekigk:
            $this->ywwqugyyeuaqousg(sprintf("\45\163\40\x64\x69\x72\145\143\x74\157\x72\x79\40\x69\163\x20\145\x6d\x70\164\171\x2e", $amwwiceekosasokk));
            goto oeaqcoicesgmgyoy;
            ksggcqioosseuwkc:
            mswmikumamcegkss:
            goto aigekiscequekicu;
            weuwakqwosgumwsy:
            try {
                goto goecwmeukyiguomk;
                ogiogeuygmkiiquw:
                $this->ywwqugyyeuaqousg(sprintf("\x43\x6f\x70\171\x20\117\x70\145\162\141\x74\151\157\x6e\x20\146\162\157\x6d\40\x25\163\40\x74\157\x20\x25\163\40\x69\x73\40\163\165\143\x63\x65\x73\x73\146\x75\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto omekckkeyyaweyky;
                goecwmeukyiguomk:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\57" . $omwmuycmeqcqokom;
                goto moeiosaoocmukukk;
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
                wwaakogequokiwmc:
                ogoeucemguomwieo:
                goto cowwaukyegiscocm;
                cowwaukyegiscocm:
                wsgcoqwuiemsesck:
                goto ogiogeuygmkiiquw;
                omekckkeyyaweyky:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto swqosaucauumkyam;
            oeaqcoicesgmgyoy:
            goto ykqiaioewyakgmei;
            goto ikaeaqiemmaokace;
            swqosaucauumkyam:
            ykqiaioewyakgmei:
            goto ksggcqioosseuwkc;
            aigekiscequekicu:
        }
        goto ucocwuquasemqweo;
        sqokooqayqgquoua:
        wmoqacqeciuceekg:
        goto gqwsuiweccsqwwsw;
        geswkmoowggqycem:
        $wpContent = realpath("{$omckemiaycwscaws}\57\56\x2e\x2f");
        goto gaoiaumomqsoksky;
        oiycsmwieaaiikmm:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\x73");
        goto qyeayqkyaiimsosi;
        tiueaamgsyyqgwqk:
        goto amaoscwycqygkegq;
        goto wwoiisqaamueeuce;
        koqqweykqaikisee:
        goto wmoqacqeciuceekg;
        goto aoouywumugoecggw;
        wwoiisqaamueeuce:
        miagouqecwwkqawu:
        goto kommgumsagoyqggu;
        qygeowmwmiacoekm:
        $this->ywwqugyyeuaqousg("\x52\x65\x71\x75\151\x72\x65\40\144\151\x72\x65\143\164\x6f\x72\151\x65\x73\x20\156\157\164\40\145\170\151\163\x74\163");
        goto tiueaamgsyyqgwqk;
        qaemcayqiaekkuyc:
        amaoscwycqygkegq:
        goto sqokooqayqgquoua;
        wmmawwseygmyisok:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\57\134");
        goto geswkmoowggqycem;
        uguyasecegqmqaoa:
        return $owousuaweekeyagq;
        goto eaeamowgsqcwyqok;
        iuwqyoigygqgqoci:
        $yaeakkosskocswae = "{$wpContent}\x2f\x73";
        goto gsqwqmegcsyuawmq;
        eaeamowgsqcwyqok:
    }
}
