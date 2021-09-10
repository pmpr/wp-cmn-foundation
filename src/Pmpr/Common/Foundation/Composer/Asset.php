<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const EXCLUDE_PARENT = ["\x73\171\x6d\146\157\x6e\171"];
    const METHOD_ABSOLUTE_SYMLINK = "\141\142\163\x6f\154\165\164\x65\40\x73\171\155\x6c\151\x6e\x6b";
    const METHOD_RELATIVE_SYMLINK = "\x72\145\154\x61\164\151\x76\x65\x20\x73\x79\155\154\x69\x6e\153";
    
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
        goto yyyeguykcgwukkmk;
        yyyeguykcgwukkmk:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto gkiaswsaqamiymyq;
        miaemkcemygcemoo:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto oeqymuiuaeamuiaq;
            oqmesosgiggoswyi:
            goto uesewywycaykwikc;
            goto uuciyisiqccegsom;
            mcsuusyagoowgwgw:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto saqyaiwimcywsssm;
            toewskcuygieqowc:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto aoyicwmkeekascge;
            }
            goto wwyiqiqummieioym;
            qiawywmkckoemwca:
            aoyicwmkeekascge:
            goto souemeuesekaekys;
            oeqymuiuaeamuiaq:
            $qmwoqyacswkwkiog = explode("\57", $ymqmyyeuycgmigyo);
            goto toewskcuygieqowc;
            aqcmgyeecacwueei:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto oqmesosgiggoswyi;
            wwyiqiqummieioym:
            array_pop($qmwoqyacswkwkiog);
            goto ygauwacugsgiowkc;
            ygauwacugsgiowkc:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto iuqeycyiwoygwgyw;
            }
            goto aqcmgyeecacwueei;
            saqyaiwimcywsssm:
            uesewywycaykwikc:
            goto qiawywmkckoemwca;
            uuciyisiqccegsom:
            iuqeycyiwoygwgyw:
            goto ougkaggismakkmce;
            souemeuesekaekys:
            ekmgygwagiwkumky:
            goto uauwuceiiwyqwico;
            ougkaggismakkmce:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto mcsuusyagoowgwgw;
            uauwuceiiwyqwico:
        }
        goto caceomqcagkmgegk;
        kuscwkesakgseqok:
        return $oegoegssokkyiqam;
        goto qkwwyoieyciisiia;
        gkiaswsaqamiymyq:
        $oegoegssokkyiqam = [];
        goto miaemkcemygcemoo;
        caceomqcagkmgegk:
        iimsyikswgcwgoim:
        goto kuscwkesakgseqok;
        qkwwyoieyciisiia:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto oocokogowowwyqiq;
        couaqcoseguwmkgo:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto mokuammgeauqqsii;
        oocokogowowwyqiq:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto couaqcoseguwmkgo;
        mokuammgeauqqsii:
        return self::METHOD_COPY;
        goto umeaqogigsmqsqsu;
        umeaqogigsmqsqsu:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto acueuwkqyosyekeq;
        ywyusockqwcssooq:
        yqgqaewysywqmysu:
        goto akaosumkgioacikc;
        acueuwkqyosyekeq:
        $iuaemokqameyemms = [];
        goto uuggkkmqccumqayi;
        sogouwugiaaiowsa:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto ygagokmesgacaoqy;
        uuggkkmqccumqayi:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\x69\163\137\x64\151\162");
        goto sogouwugiaaiowsa;
        ygagokmesgacaoqy:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\x2f\52", $ccamueccusigaaio));
            icmkoqicsywoekgu:
        }
        goto ywyusockqwcssooq;
        akaosumkgioacikc:
        return $iuaemokqameyemms;
        goto wukgeggyqimmsokc;
        wukgeggyqimmsokc:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto gaugyegusygssymo;
        qyiyukakwoomokqm:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto ywgcoskwgewywecq;
        }
        goto eeaiusyckugwoams;
        scgumooaicmgygws:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto wmqymkwokycyykow;
        qwsygiaussesywem:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto qyiyukakwoomokqm;
        eeaiusyckugwoams:
        throw new IOException(sprintf("\x53\x79\x6d\142\x6f\x6c\x69\x63\x20\x6c\151\x6e\x6b\40\42\45\163\x22\x20\x77\141\163\40\143\162\145\x61\x74\x65\144\x20\x62\165\x74\x20\141\160\160\145\141\162\x73\40\164\157\x20\x62\x65\x20\x62\162\x6f\x6b\145\x6e\x2e", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto qeycaskgikeokega;
        ugoueyqkecsooieg:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto scgumooaicmgygws;
        wmqymkwokycyykow:
        skieiagqacceemsy:
        goto qwsygiaussesywem;
        gaugyegusygssymo:
        if (!$hssqsasscequuyky) {
            goto skieiagqacceemsy;
        }
        goto ugoueyqkecsooieg;
        qeycaskgikeokega:
        ywgcoskwgewywecq:
        goto miosmgaacmsgswos;
        miosmgaacmsgswos:
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
        goto masugicegsyegooy;
        ggsaqscecssyooyu:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto kwgswyiyuiusquis;
        }
        goto umqcquemgmagccsa;
        umqcquemgmagccsa:
        $this->ywwqugyyeuaqousg("\x52\145\x71\x75\x69\x72\x65\40\144\151\162\x65\x63\x74\x6f\x72\x69\145\163\40\156\x6f\164\40\x65\x78\151\163\164\163");
        goto susywgmyuqgesoqm;
        reuyikuqkiecguye:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\57\166\x65\156\x64\157\162";
        goto miuwyoykaasqyqmu;
        wmsekuosaquuokig:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto qcsmqummmmyaqseu;
            ycumeemqusckwyoc:
            try {
                goto aogumaeoimukciac;
                wiksqikkuaiyqmcu:
                keemgiqiykwguocw:
                goto quocmskwwaumyiae;
                quocmskwwaumyiae:
                $this->ywwqugyyeuaqousg(sprintf("\103\x6f\x70\171\x20\x4f\x70\145\x72\x61\164\x69\157\x6e\x20\x66\162\157\x6d\40\45\x73\x20\x74\x6f\x20\x25\163\40\x69\163\40\163\x75\x63\143\x65\163\163\146\165\x6c", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto ukwwiwwkmuqemkic;
                wakamsgsammaqwqg:
                ewecawmiqcgeaque:
                goto wiksqikkuaiyqmcu;
                aogumaeoimukciac:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\57" . $omwmuycmeqcqokom;
                goto oiugacuckwmecqgk;
                oiugacuckwmecqgk:
                switch ($aocoewseyaaosiag) {
                    case self::METHOD_RELATIVE_SYMLINK:
                        $this->eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto keemgiqiykwguocw;
                    case self::METHOD_ABSOLUTE_SYMLINK:
                        $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto keemgiqiykwguocw;
                    default:
                        $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                }
                goto wakamsgsammaqwqg;
                ukwwiwwkmuqemkic:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto yukmcqiuugkamaow;
            yukmcqiuugkamaow:
            emiqmswmkkiscuuu:
            goto wuqwccycokcwgumm;
            wuqwccycokcwgumm:
            sqyeywwoeiewwkim:
            goto iawwcgswwmcqmcsk;
            qcsmqummmmyaqseu:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto oqeoyeeeogmqagko;
            }
            goto ywgieceuausccaoo;
            qgaiyikuyacyymma:
            oqeoyeeeogmqagko:
            goto ycumeemqusckwyoc;
            hwskqqioyiycssus:
            goto emiqmswmkkiscuuu;
            goto qgaiyikuyacyymma;
            ywgieceuausccaoo:
            $this->ywwqugyyeuaqousg(sprintf("\45\x73\40\x64\x69\x72\x65\x63\164\157\x72\x79\40\x69\x73\x20\145\x6d\x70\x74\171\56", $amwwiceekosasokk));
            goto hwskqqioyiycssus;
            iawwcgswwmcqmcsk:
        }
        goto iswiyqggakommwme;
        ogwyceiasmkecega:
        ymcussoqgmiugeim:
        goto qywaouucmiiygmwm;
        miuwyoykaasqyqmu:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\163");
        goto gogekosaoawesmik;
        aqeciqckokseauei:
        $yaeakkosskocswae = "{$wpContent}\x2f\163";
        goto skqqwmemiemiuyka;
        masugicegsyegooy:
        $owousuaweekeyagq = 0;
        goto mmkaacimmsosgyeo;
        auikqkeqwesewceo:
        kwgswyiyuiusquis:
        goto miuuouwcqyuuassq;
        usgwiosecieikgka:
        return $owousuaweekeyagq;
        goto oaomsmoyuaiweqke;
        susywgmyuqgesoqm:
        goto nwqkeomgugscuesw;
        goto auikqkeqwesewceo;
        oqgyymcwykwyekwi:
        $wpContent = realpath("{$omckemiaycwscaws}\57\56\x2e\57");
        goto reuyikuqkiecguye;
        skqqwmemiemiuyka:
        $this->ywwqugyyeuaqousg("\141\163\x73\145\164\x20\163\143\162\x69\x70\164\x20\x73\x74\141\162\x74\56");
        goto ggsaqscecssyooyu;
        aicqmuuuokcayamc:
        mekgaisoagymyaaw:
        goto aqeciqckokseauei;
        miuuouwcqyuuassq:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto wmsekuosaquuokig;
        qywaouucmiiygmwm:
        $this->ywwqugyyeuaqousg("\141\163\x73\145\164\40\163\x63\x72\x69\160\164\x20\144\x6f\156\x65\x2e");
        goto usgwiosecieikgka;
        gogekosaoawesmik:
        if ($oegoegssokkyiqam) {
            goto mekgaisoagymyaaw;
        }
        goto quyowuoyqykcmqem;
        ukkeimmiooigeukm:
        nwqkeomgugscuesw:
        goto ogwyceiasmkecega;
        quyowuoyqykcmqem:
        $this->ywwqugyyeuaqousg("\143\x61\156\40\156\x6f\x74\40\x66\151\x6e\144\x20\141\156\x79\x20\166\x61\x6c\151\x64\x20\x70\141\x74\150\x20\151\156\x20{$ymiuaqwqkqoqkmck}");
        goto wucoqqekkeuwmeac;
        mmkaacimmsosgyeo:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\57\x5c");
        goto oqgyymcwykwyekwi;
        iswiyqggakommwme:
        aeycackeqwkqeokg:
        goto ukkeimmiooigeukm;
        wucoqqekkeuwmeac:
        goto ymcussoqgmiugeim;
        goto aicqmuuuokcayamc;
        oaomsmoyuaiweqke:
    }
}
