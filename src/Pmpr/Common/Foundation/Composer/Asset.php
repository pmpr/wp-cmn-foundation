<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const EXCLUDE_PARENT = ["\163\171\155\x66\157\156\171"];
    const METHOD_ABSOLUTE_SYMLINK = "\141\142\x73\157\x6c\x75\x74\145\40\163\x79\x6d\154\151\156\153";
    const METHOD_RELATIVE_SYMLINK = "\x72\145\x6c\x61\164\x69\166\x65\x20\163\x79\x6d\x6c\x69\156\153";
    
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
        ukkeimmiooigeukm:
        return $oegoegssokkyiqam;
        goto ogwyceiasmkecega;
        auikqkeqwesewceo:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto miuuouwcqyuuassq;
        wmsekuosaquuokig:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto mmkaacimmsosgyeo;
            aqeciqckokseauei:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto skqqwmemiemiuyka;
            quyowuoyqykcmqem:
            goto ymcussoqgmiugeim;
            goto wucoqqekkeuwmeac;
            aicqmuuuokcayamc:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto aqeciqckokseauei;
            mmkaacimmsosgyeo:
            $qmwoqyacswkwkiog = explode("\x2f", $ymqmyyeuycgmigyo);
            goto oqgyymcwykwyekwi;
            umqcquemgmagccsa:
            nwqkeomgugscuesw:
            goto susywgmyuqgesoqm;
            gogekosaoawesmik:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto quyowuoyqykcmqem;
            miuwyoykaasqyqmu:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto mekgaisoagymyaaw;
            }
            goto gogekosaoawesmik;
            reuyikuqkiecguye:
            array_pop($qmwoqyacswkwkiog);
            goto miuwyoykaasqyqmu;
            ggsaqscecssyooyu:
            masugicegsyegooy:
            goto umqcquemgmagccsa;
            skqqwmemiemiuyka:
            ymcussoqgmiugeim:
            goto ggsaqscecssyooyu;
            oqgyymcwykwyekwi:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto masugicegsyegooy;
            }
            goto reuyikuqkiecguye;
            wucoqqekkeuwmeac:
            mekgaisoagymyaaw:
            goto aicqmuuuokcayamc;
            susywgmyuqgesoqm:
        }
        goto iswiyqggakommwme;
        miuuouwcqyuuassq:
        $oegoegssokkyiqam = [];
        goto wmsekuosaquuokig;
        iswiyqggakommwme:
        kwgswyiyuiusquis:
        goto ukkeimmiooigeukm;
        ogwyceiasmkecega:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto qywaouucmiiygmwm;
        oaomsmoyuaiweqke:
        return self::METHOD_COPY;
        goto iswcaeqkwmqiywmw;
        qywaouucmiiygmwm:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto usgwiosecieikgka;
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
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\151\x73\x5f\144\151\x72");
        goto waeuacmiwukowsuc;
        waeuacmiwukowsuc:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto uqcaomakqoycwicm;
        ukqgycaqkmcmwwua:
        oasasywweeuieemi:
        goto wwqimegeyywwqqqm;
        uqcaomakqoycwicm:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\57\52", $ccamueccusigaaio));
            kuwwsgeioseccayw:
        }
        goto ukqgycaqkmcmwwua;
        wwqimegeyywwqqqm:
        return $iuaemokqameyemms;
        goto auksmcqqyyagkeaa;
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
        iacuuogeimakywss:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto qiyskomkewcmygyq;
        gemckmgaigeaqoce:
        if (!$hssqsasscequuyky) {
            goto ogawmwuomuowcwyy;
        }
        goto gucqgcqwoimkwcek;
        qiyskomkewcmygyq:
        ogawmwuomuowcwyy:
        goto tkkkasskiumciacw;
        gucqgcqwoimkwcek:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto iacuuogeimakywss;
        tkkkasskiumciacw:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto wkmyuaqacooaiccq;
        yagasegkqgewyyaw:
        kkqsuaomkckegccq:
        goto yukmsawciwkeuusw;
        escmmmseocmegscc:
        throw new IOException(sprintf("\123\171\155\x62\x6f\x6c\x69\143\x20\154\x69\156\153\40\x22\x25\x73\x22\40\167\x61\163\x20\x63\x72\x65\141\x74\x65\144\40\x62\165\x74\40\141\160\x70\x65\x61\x72\x73\40\x74\157\40\x62\145\x20\x62\x72\157\x6b\145\x6e\56", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
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
        ggyomkkegskioyiw:
        $this->ywwqugyyeuaqousg("\143\x61\x6e\40\x6e\157\x74\x20\146\x69\156\144\40\141\156\171\x20\166\x61\154\x69\144\x20\160\141\x74\x68\40\x69\156\x20{$ymiuaqwqkqoqkmck}");
        goto koqqweykqaikisee;
        sqokooqayqgquoua:
        wmoqacqeciuceekg:
        goto gqwsuiweccsqwwsw;
        geswkmoowggqycem:
        $wpContent = realpath("{$omckemiaycwscaws}\57\x2e\x2e\57");
        goto gaoiaumomqsoksky;
        tiueaamgsyyqgwqk:
        goto amaoscwycqygkegq;
        goto wwoiisqaamueeuce;
        wmmawwseygmyisok:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\x2f\x5c");
        goto geswkmoowggqycem;
        qyeayqkyaiimsosi:
        if ($oegoegssokkyiqam) {
            goto uauioquiemswyaqs;
        }
        goto ggyomkkegskioyiw;
        uguyasecegqmqaoa:
        return $owousuaweekeyagq;
        goto eaeamowgsqcwyqok;
        koqqweykqaikisee:
        goto wmoqacqeciuceekg;
        goto aoouywumugoecggw;
        qygeowmwmiacoekm:
        $this->ywwqugyyeuaqousg("\x52\x65\x71\165\x69\162\x65\x20\144\151\x72\145\x63\x74\x6f\162\x69\145\163\x20\156\157\x74\x20\145\170\x69\x73\164\163");
        goto tiueaamgsyyqgwqk;
        gsqwqmegcsyuawmq:
        $this->ywwqugyyeuaqousg("\141\163\x73\145\x74\40\163\x63\x72\151\x70\x74\x20\163\164\141\x72\x74\x2e");
        goto eumocamquwkqqeeq;
        iuwqyoigygqgqoci:
        $yaeakkosskocswae = "{$wpContent}\x2f\163";
        goto gsqwqmegcsyuawmq;
        uqsceccusmgeyuew:
        $owousuaweekeyagq = 0;
        goto wmmawwseygmyisok;
        qaemcayqiaekkuyc:
        amaoscwycqygkegq:
        goto sqokooqayqgquoua;
        ucocwuquasemqweo:
        agycsismscqmqgck:
        goto qaemcayqiaekkuyc;
        kommgumsagoyqggu:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto easgcwoweimgucgw;
        gaoiaumomqsoksky:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\x2f\x76\145\x6e\x64\157\162";
        goto oiycsmwieaaiikmm;
        oiycsmwieaaiikmm:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\x73");
        goto qyeayqkyaiimsosi;
        wwoiisqaamueeuce:
        miagouqecwwkqawu:
        goto kommgumsagoyqggu;
        easgcwoweimgucgw:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto iiisyiqocwokceqi;
            iiisyiqocwokceqi:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto gmeemgswkyokekac;
            }
            goto iagckoggkakekigk;
            weuwakqwosgumwsy:
            try {
                goto goecwmeukyiguomk;
                goecwmeukyiguomk:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\57" . $omwmuycmeqcqokom;
                goto moeiosaoocmukukk;
                ogiogeuygmkiiquw:
                $this->ywwqugyyeuaqousg(sprintf("\x43\x6f\160\171\x20\x4f\160\145\x72\141\x74\151\157\x6e\x20\146\x72\x6f\155\40\x25\163\x20\164\157\x20\x25\x73\40\151\x73\40\163\x75\143\143\x65\163\x73\x66\x75\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto omekckkeyyaweyky;
                wwaakogequokiwmc:
                ogoeucemguomwieo:
                goto cowwaukyegiscocm;
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
                cowwaukyegiscocm:
                wsgcoqwuiemsesck:
                goto ogiogeuygmkiiquw;
                omekckkeyyaweyky:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto swqosaucauumkyam;
            swqosaucauumkyam:
            ykqiaioewyakgmei:
            goto ksggcqioosseuwkc;
            ikaeaqiemmaokace:
            gmeemgswkyokekac:
            goto weuwakqwosgumwsy;
            oeaqcoicesgmgyoy:
            goto ykqiaioewyakgmei;
            goto ikaeaqiemmaokace;
            iagckoggkakekigk:
            $this->ywwqugyyeuaqousg(sprintf("\45\x73\x20\x64\x69\162\x65\143\164\157\x72\171\x20\151\x73\x20\x65\155\x70\x74\x79\56", $amwwiceekosasokk));
            goto oeaqcoicesgmgyoy;
            ksggcqioosseuwkc:
            mswmikumamcegkss:
            goto aigekiscequekicu;
            aigekiscequekicu:
        }
        goto ucocwuquasemqweo;
        eumocamquwkqqeeq:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto miagouqecwwkqawu;
        }
        goto qygeowmwmiacoekm;
        aoouywumugoecggw:
        uauioquiemswyaqs:
        goto iuwqyoigygqgqoci;
        gqwsuiweccsqwwsw:
        $this->ywwqugyyeuaqousg("\x61\x73\163\145\164\40\x73\x63\162\151\x70\164\x20\144\x6f\x6e\145\x2e");
        goto uguyasecegqmqaoa;
        eaeamowgsqcwyqok:
    }
}
