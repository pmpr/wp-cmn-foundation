<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Composer;

use Exception;
use Pmpr\Common\Foundation\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

class Asset
{
    const METHOD_COPY = "\x63\157\x70\x79";
    const EXCLUDE_PARENT = ["\163\x79\x6d\x66\157\x6e\x79"];
    const METHOD_ABSOLUTE_SYMLINK = "\x61\x62\x73\x6f\x6c\x75\164\x65\40\x73\171\x6d\154\x69\x6e\153";
    const METHOD_RELATIVE_SYMLINK = "\162\145\x6c\141\164\x69\x76\x65\x20\163\x79\x6d\x6c\x69\x6e\x6b";
    
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
        goto miuuouwcqyuuassq;
        ukkeimmiooigeukm:
        nwqkeomgugscuesw:
        goto ogwyceiasmkecega;
        wmsekuosaquuokig:
        $oegoegssokkyiqam = [];
        goto iswiyqggakommwme;
        miuuouwcqyuuassq:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto wmsekuosaquuokig;
        ogwyceiasmkecega:
        return $oegoegssokkyiqam;
        goto qywaouucmiiygmwm;
        iswiyqggakommwme:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto oqgyymcwykwyekwi;
            gogekosaoawesmik:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto ymcussoqgmiugeim;
            }
            goto quyowuoyqykcmqem;
            aqeciqckokseauei:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto skqqwmemiemiuyka;
            aicqmuuuokcayamc:
            ymcussoqgmiugeim:
            goto aqeciqckokseauei;
            reuyikuqkiecguye:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto mmkaacimmsosgyeo;
            }
            goto miuwyoykaasqyqmu;
            susywgmyuqgesoqm:
            mekgaisoagymyaaw:
            goto auikqkeqwesewceo;
            oqgyymcwykwyekwi:
            $qmwoqyacswkwkiog = explode("\x2f", $ymqmyyeuycgmigyo);
            goto reuyikuqkiecguye;
            skqqwmemiemiuyka:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto ggsaqscecssyooyu;
            miuwyoykaasqyqmu:
            array_pop($qmwoqyacswkwkiog);
            goto gogekosaoawesmik;
            quyowuoyqykcmqem:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto wucoqqekkeuwmeac;
            ggsaqscecssyooyu:
            masugicegsyegooy:
            goto umqcquemgmagccsa;
            wucoqqekkeuwmeac:
            goto masugicegsyegooy;
            goto aicqmuuuokcayamc;
            umqcquemgmagccsa:
            mmkaacimmsosgyeo:
            goto susywgmyuqgesoqm;
            auikqkeqwesewceo:
        }
        goto ukkeimmiooigeukm;
        qywaouucmiiygmwm:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto usgwiosecieikgka;
        iswcaeqkwmqiywmw:
        return self::METHOD_COPY;
        goto oasasywweeuieemi;
        usgwiosecieikgka:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto oaomsmoyuaiweqke;
        oaomsmoyuaiweqke:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto iswcaeqkwmqiywmw;
        oasasywweeuieemi:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto yowkucagyqgwyega;
        auksmcqqyyagkeaa:
        return $iuaemokqameyemms;
        goto ogawmwuomuowcwyy;
        ukqgycaqkmcmwwua:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\x2f\x2a", $ccamueccusigaaio));
            gqgqsiugwyueosuk:
        }
        goto wwqimegeyywwqqqm;
        uqcaomakqoycwicm:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto ukqgycaqkmcmwwua;
        wwqimegeyywwqqqm:
        kuwwsgeioseccayw:
        goto auksmcqqyyagkeaa;
        yowkucagyqgwyega:
        $iuaemokqameyemms = [];
        goto waeuacmiwukowsuc;
        waeuacmiwukowsuc:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\151\x73\137\144\x69\x72");
        goto uqcaomakqoycwicm;
        ogawmwuomuowcwyy:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto gucqgcqwoimkwcek;
        gucqgcqwoimkwcek:
        if (!$hssqsasscequuyky) {
            goto kkqsuaomkckegccq;
        }
        goto iacuuogeimakywss;
        wkmyuaqacooaiccq:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto escmmmseocmegscc;
        qiyskomkewcmygyq:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto tkkkasskiumciacw;
        yagasegkqgewyyaw:
        throw new IOException(sprintf("\123\171\x6d\x62\x6f\154\151\143\x20\154\151\x6e\153\x20\42\45\x73\42\x20\167\x61\x73\40\x63\162\145\141\x74\145\x64\40\142\165\164\x20\141\160\160\145\x61\162\x73\x20\x74\157\40\142\145\x20\142\162\157\153\x65\x6e\x2e", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto yukmsawciwkeuusw;
        iacuuogeimakywss:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto qiyskomkewcmygyq;
        tkkkasskiumciacw:
        kkqsuaomkckegccq:
        goto wkmyuaqacooaiccq;
        escmmmseocmegscc:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto gemckmgaigeaqoce;
        }
        goto yagasegkqgewyyaw;
        yukmsawciwkeuusw:
        gemckmgaigeaqoce:
        goto agycsismscqmqgck;
        agycsismscqmqgck:
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
        goto wmmawwseygmyisok;
        gaoiaumomqsoksky:
        $wpContent = realpath("{$omckemiaycwscaws}\57\56\x2e\57");
        goto oiycsmwieaaiikmm;
        sqokooqayqgquoua:
        uauioquiemswyaqs:
        goto gqwsuiweccsqwwsw;
        qygeowmwmiacoekm:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto amaoscwycqygkegq;
        }
        goto tiueaamgsyyqgwqk;
        aoouywumugoecggw:
        goto uqsceccusmgeyuew;
        goto iuwqyoigygqgqoci;
        eaeamowgsqcwyqok:
        return $owousuaweekeyagq;
        goto qiwicsqkwcywmsaq;
        iuwqyoigygqgqoci:
        wmoqacqeciuceekg:
        goto gsqwqmegcsyuawmq;
        qyeayqkyaiimsosi:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\163");
        goto ggyomkkegskioyiw;
        geswkmoowggqycem:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\57\134");
        goto gaoiaumomqsoksky;
        oiycsmwieaaiikmm:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\57\166\x65\156\144\157\x72";
        goto qyeayqkyaiimsosi;
        ucocwuquasemqweo:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto iagckoggkakekigk;
            iagckoggkakekigk:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto ykqiaioewyakgmei;
            }
            goto oeaqcoicesgmgyoy;
            swqosaucauumkyam:
            try {
                goto moeiosaoocmukukk;
                ogiogeuygmkiiquw:
                ogoeucemguomwieo:
                goto omekckkeyyaweyky;
                omekckkeyyaweyky:
                $this->ywwqugyyeuaqousg(sprintf("\x43\x6f\160\x79\40\117\x70\145\x72\141\x74\x69\157\156\40\x66\x72\157\155\x20\x25\x73\x20\x74\x6f\x20\x25\x73\x20\x69\x73\x20\163\x75\x63\x63\145\x73\x73\146\165\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto gmeemgswkyokekac;
                wwaakogequokiwmc:
                switch ($aocoewseyaaosiag) {
                    case self::METHOD_RELATIVE_SYMLINK:
                        $this->eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto ogoeucemguomwieo;
                    case self::METHOD_ABSOLUTE_SYMLINK:
                        $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto ogoeucemguomwieo;
                    default:
                        $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                }
                goto cowwaukyegiscocm;
                moeiosaoocmukukk:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\x2f" . $omwmuycmeqcqokom;
                goto wwaakogequokiwmc;
                cowwaukyegiscocm:
                goecwmeukyiguomk:
                goto ogiogeuygmkiiquw;
                gmeemgswkyokekac:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto ksggcqioosseuwkc;
            ikaeaqiemmaokace:
            goto iiisyiqocwokceqi;
            goto weuwakqwosgumwsy;
            weuwakqwosgumwsy:
            ykqiaioewyakgmei:
            goto swqosaucauumkyam;
            oeaqcoicesgmgyoy:
            $this->ywwqugyyeuaqousg(sprintf("\x25\x73\x20\144\151\162\x65\x63\164\157\x72\171\40\151\x73\x20\145\x6d\160\164\171\x2e", $amwwiceekosasokk));
            goto ikaeaqiemmaokace;
            ksggcqioosseuwkc:
            iiisyiqocwokceqi:
            goto aigekiscequekicu;
            aigekiscequekicu:
            wsgcoqwuiemsesck:
            goto miagouqecwwkqawu;
            miagouqecwwkqawu:
        }
        goto qaemcayqiaekkuyc;
        tiueaamgsyyqgwqk:
        $this->ywwqugyyeuaqousg("\x52\x65\161\x75\x69\x72\145\40\x64\151\162\x65\143\x74\x6f\162\x69\145\163\x20\156\157\164\40\145\170\151\x73\164\163");
        goto wwoiisqaamueeuce;
        ggyomkkegskioyiw:
        if ($oegoegssokkyiqam) {
            goto wmoqacqeciuceekg;
        }
        goto koqqweykqaikisee;
        wmmawwseygmyisok:
        $owousuaweekeyagq = 0;
        goto geswkmoowggqycem;
        kommgumsagoyqggu:
        amaoscwycqygkegq:
        goto easgcwoweimgucgw;
        qaemcayqiaekkuyc:
        mswmikumamcegkss:
        goto sqokooqayqgquoua;
        easgcwoweimgucgw:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto ucocwuquasemqweo;
        wwoiisqaamueeuce:
        goto uauioquiemswyaqs;
        goto kommgumsagoyqggu;
        gqwsuiweccsqwwsw:
        uqsceccusmgeyuew:
        goto uguyasecegqmqaoa;
        gsqwqmegcsyuawmq:
        $yaeakkosskocswae = "{$wpContent}\57\x73";
        goto eumocamquwkqqeeq;
        eumocamquwkqqeeq:
        $this->ywwqugyyeuaqousg("\141\x73\x73\145\164\x20\163\143\x72\x69\160\164\x20\x73\x74\x61\162\x74\56");
        goto qygeowmwmiacoekm;
        uguyasecegqmqaoa:
        $this->ywwqugyyeuaqousg("\x61\163\x73\145\164\40\163\x63\162\151\160\164\40\x64\x6f\156\x65\56");
        goto eaeamowgsqcwyqok;
        koqqweykqaikisee:
        $this->ywwqugyyeuaqousg("\143\x61\x6e\x20\156\x6f\x74\40\146\151\x6e\144\40\x61\156\171\40\166\x61\154\151\x64\40\x70\x61\x74\150\40\151\156\x20{$ymiuaqwqkqoqkmck}");
        goto aoouywumugoecggw;
        qiwicsqkwcywmsaq:
    }
}
