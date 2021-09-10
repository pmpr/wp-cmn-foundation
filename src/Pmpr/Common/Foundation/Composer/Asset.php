<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const EXCLUDE_PARENT = ["\x73\171\155\146\x6f\x6e\x79"];
    const METHOD_ABSOLUTE_SYMLINK = "\141\x62\x73\157\154\165\x74\145\40\x73\171\155\154\x69\156\153";
    const METHOD_RELATIVE_SYMLINK = "\162\x65\154\x61\164\151\166\145\40\163\171\x6d\x6c\151\156\x6b";
    
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
        goto caceomqcagkmgegk;
        qkwwyoieyciisiia:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto ygauwacugsgiowkc;
            qiawywmkckoemwca:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto souemeuesekaekys;
            gkiaswsaqamiymyq:
            aoyicwmkeekascge:
            goto miaemkcemygcemoo;
            mcsuusyagoowgwgw:
            goto toewskcuygieqowc;
            goto saqyaiwimcywsssm;
            ougkaggismakkmce:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto mcsuusyagoowgwgw;
            uuciyisiqccegsom:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto oeqymuiuaeamuiaq;
            }
            goto ougkaggismakkmce;
            oqmesosgiggoswyi:
            array_pop($qmwoqyacswkwkiog);
            goto uuciyisiqccegsom;
            aqcmgyeecacwueei:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto wwyiqiqummieioym;
            }
            goto oqmesosgiggoswyi;
            uauwuceiiwyqwico:
            toewskcuygieqowc:
            goto yyyeguykcgwukkmk;
            ygauwacugsgiowkc:
            $qmwoqyacswkwkiog = explode("\57", $ymqmyyeuycgmigyo);
            goto aqcmgyeecacwueei;
            yyyeguykcgwukkmk:
            wwyiqiqummieioym:
            goto gkiaswsaqamiymyq;
            saqyaiwimcywsssm:
            oeqymuiuaeamuiaq:
            goto qiawywmkckoemwca;
            souemeuesekaekys:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto uauwuceiiwyqwico;
            miaemkcemygcemoo:
        }
        goto oocokogowowwyqiq;
        kuscwkesakgseqok:
        $oegoegssokkyiqam = [];
        goto qkwwyoieyciisiia;
        couaqcoseguwmkgo:
        return $oegoegssokkyiqam;
        goto mokuammgeauqqsii;
        oocokogowowwyqiq:
        uesewywycaykwikc:
        goto couaqcoseguwmkgo;
        caceomqcagkmgegk:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto kuscwkesakgseqok;
        mokuammgeauqqsii:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto umeaqogigsmqsqsu;
        yqgqaewysywqmysu:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto icmkoqicsywoekgu;
        icmkoqicsywoekgu:
        return self::METHOD_COPY;
        goto acueuwkqyosyekeq;
        umeaqogigsmqsqsu:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto yqgqaewysywqmysu;
        acueuwkqyosyekeq:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto ygagokmesgacaoqy;
        ywyusockqwcssooq:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\151\163\x5f\x64\151\162");
        goto akaosumkgioacikc;
        ywgcoskwgewywecq:
        return $iuaemokqameyemms;
        goto gaugyegusygssymo;
        skieiagqacceemsy:
        uuggkkmqccumqayi:
        goto ywgcoskwgewywecq;
        wukgeggyqimmsokc:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\x2f\52", $ccamueccusigaaio));
            sogouwugiaaiowsa:
        }
        goto skieiagqacceemsy;
        akaosumkgioacikc:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto wukgeggyqimmsokc;
        ygagokmesgacaoqy:
        $iuaemokqameyemms = [];
        goto ywyusockqwcssooq;
        gaugyegusygssymo:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto wmqymkwokycyykow;
        qeycaskgikeokega:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto miosmgaacmsgswos;
        qwsygiaussesywem:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto qyiyukakwoomokqm;
        aeycackeqwkqeokg:
        throw new IOException(sprintf("\123\171\x6d\x62\x6f\154\x69\143\x20\154\x69\x6e\153\40\x22\45\x73\x22\40\167\x61\x73\x20\x63\162\x65\141\x74\x65\x64\x20\x62\165\164\40\x61\160\160\x65\141\x72\163\x20\164\157\40\142\145\x20\142\162\157\153\x65\x6e\56", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto sqyeywwoeiewwkim;
        wmqymkwokycyykow:
        if (!$hssqsasscequuyky) {
            goto ugoueyqkecsooieg;
        }
        goto qwsygiaussesywem;
        eeaiusyckugwoams:
        ugoueyqkecsooieg:
        goto qeycaskgikeokega;
        qyiyukakwoomokqm:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto eeaiusyckugwoams;
        sqyeywwoeiewwkim:
        scgumooaicmgygws:
        goto keemgiqiykwguocw;
        miosmgaacmsgswos:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto scgumooaicmgygws;
        }
        goto aeycackeqwkqeokg;
        keemgiqiykwguocw:
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
        goto reuyikuqkiecguye;
        umqcquemgmagccsa:
        $yaeakkosskocswae = "{$wpContent}\x2f\163";
        goto susywgmyuqgesoqm;
        ggsaqscecssyooyu:
        mmkaacimmsosgyeo:
        goto umqcquemgmagccsa;
        gogekosaoawesmik:
        $wpContent = realpath("{$omckemiaycwscaws}\57\56\56\x2f");
        goto quyowuoyqykcmqem;
        aicqmuuuokcayamc:
        if ($oegoegssokkyiqam) {
            goto mmkaacimmsosgyeo;
        }
        goto aqeciqckokseauei;
        reuyikuqkiecguye:
        $owousuaweekeyagq = 0;
        goto miuwyoykaasqyqmu;
        wmsekuosaquuokig:
        goto masugicegsyegooy;
        goto iswiyqggakommwme;
        aqeciqckokseauei:
        $this->ywwqugyyeuaqousg("\143\x61\x6e\x20\156\x6f\x74\x20\x66\x69\156\144\40\141\156\171\x20\x76\x61\154\x69\144\40\x70\141\164\x68\x20\x69\x6e\x20{$ymiuaqwqkqoqkmck}");
        goto skqqwmemiemiuyka;
        skqqwmemiemiuyka:
        goto oqgyymcwykwyekwi;
        goto ggsaqscecssyooyu;
        iswcaeqkwmqiywmw:
        $this->ywwqugyyeuaqousg("\x61\x73\x73\145\164\40\x73\x63\x72\151\x70\164\40\x64\x6f\x6e\145\x2e");
        goto oasasywweeuieemi;
        oasasywweeuieemi:
        return $owousuaweekeyagq;
        goto kuwwsgeioseccayw;
        wucoqqekkeuwmeac:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\163");
        goto aicqmuuuokcayamc;
        miuuouwcqyuuassq:
        $this->ywwqugyyeuaqousg("\x52\145\x71\x75\151\x72\145\x20\144\151\162\x65\143\164\157\x72\151\x65\x73\40\156\157\x74\40\145\170\151\x73\164\x73");
        goto wmsekuosaquuokig;
        usgwiosecieikgka:
        masugicegsyegooy:
        goto oaomsmoyuaiweqke;
        iswiyqggakommwme:
        ymcussoqgmiugeim:
        goto ukkeimmiooigeukm;
        ogwyceiasmkecega:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto qgaiyikuyacyymma;
            nwqkeomgugscuesw:
            aogumaeoimukciac:
            goto mekgaisoagymyaaw;
            wuqwccycokcwgumm:
            ywgieceuausccaoo:
            goto iawwcgswwmcqmcsk;
            yukmcqiuugkamaow:
            goto hwskqqioyiycssus;
            goto wuqwccycokcwgumm;
            kwgswyiyuiusquis:
            hwskqqioyiycssus:
            goto nwqkeomgugscuesw;
            iawwcgswwmcqmcsk:
            try {
                goto wiksqikkuaiyqmcu;
                ukwwiwwkmuqemkic:
                wakamsgsammaqwqg:
                goto oqeoyeeeogmqagko;
                wiksqikkuaiyqmcu:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\x2f" . $omwmuycmeqcqokom;
                goto quocmskwwaumyiae;
                oqeoyeeeogmqagko:
                oiugacuckwmecqgk:
                goto emiqmswmkkiscuuu;
                emiqmswmkkiscuuu:
                $this->ywwqugyyeuaqousg(sprintf("\x43\157\x70\171\x20\x4f\160\x65\162\x61\164\x69\157\x6e\x20\x66\162\157\155\40\45\163\x20\x74\157\40\45\x73\x20\151\163\40\163\x75\143\143\145\163\163\146\165\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto qcsmqummmmyaqseu;
                quocmskwwaumyiae:
                switch ($aocoewseyaaosiag) {
                    case self::METHOD_RELATIVE_SYMLINK:
                        $this->eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto oiugacuckwmecqgk;
                    case self::METHOD_ABSOLUTE_SYMLINK:
                        $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto oiugacuckwmecqgk;
                    default:
                        $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                }
                goto ukwwiwwkmuqemkic;
                qcsmqummmmyaqseu:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto kwgswyiyuiusquis;
            ycumeemqusckwyoc:
            $this->ywwqugyyeuaqousg(sprintf("\45\x73\x20\x64\x69\162\145\143\164\157\x72\x79\40\151\x73\40\145\155\x70\x74\171\56", $amwwiceekosasokk));
            goto yukmcqiuugkamaow;
            qgaiyikuyacyymma:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto ywgieceuausccaoo;
            }
            goto ycumeemqusckwyoc;
            mekgaisoagymyaaw:
        }
        goto qywaouucmiiygmwm;
        qywaouucmiiygmwm:
        ewecawmiqcgeaque:
        goto usgwiosecieikgka;
        quyowuoyqykcmqem:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\57\166\x65\156\144\x6f\162";
        goto wucoqqekkeuwmeac;
        miuwyoykaasqyqmu:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\x2f\134");
        goto gogekosaoawesmik;
        auikqkeqwesewceo:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto ymcussoqgmiugeim;
        }
        goto miuuouwcqyuuassq;
        oaomsmoyuaiweqke:
        oqgyymcwykwyekwi:
        goto iswcaeqkwmqiywmw;
        ukkeimmiooigeukm:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto ogwyceiasmkecega;
        susywgmyuqgesoqm:
        $this->ywwqugyyeuaqousg("\x61\163\x73\x65\164\40\163\143\162\151\x70\164\x20\x73\x74\x61\x72\x74\56");
        goto auikqkeqwesewceo;
        kuwwsgeioseccayw:
    }
}
