<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Composer;

use Exception;
use Pmpr\Common\Foundation\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

class Asset
{
    const METHOD_COPY = "\x63\x6f\x70\x79";
    const EXCLUDE_PARENT = ["\x73\171\x6d\x66\157\x6e\171"];
    const METHOD_ABSOLUTE_SYMLINK = "\x61\x62\163\x6f\x6c\x75\164\x65\40\163\x79\x6d\x6c\151\156\x6b";
    const METHOD_RELATIVE_SYMLINK = "\x72\145\x6c\x61\x74\151\x76\x65\x20\x73\171\x6d\x6c\151\156\x6b";
    
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
            saqyaiwimcywsssm:
            oeqymuiuaeamuiaq:
            goto qiawywmkckoemwca;
            oqmesosgiggoswyi:
            array_pop($qmwoqyacswkwkiog);
            goto uuciyisiqccegsom;
            aqcmgyeecacwueei:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto wwyiqiqummieioym;
            }
            goto oqmesosgiggoswyi;
            souemeuesekaekys:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto uauwuceiiwyqwico;
            ygauwacugsgiowkc:
            $qmwoqyacswkwkiog = explode("\x2f", $ymqmyyeuycgmigyo);
            goto aqcmgyeecacwueei;
            qiawywmkckoemwca:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto souemeuesekaekys;
            uuciyisiqccegsom:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto oeqymuiuaeamuiaq;
            }
            goto ougkaggismakkmce;
            ougkaggismakkmce:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto mcsuusyagoowgwgw;
            uauwuceiiwyqwico:
            toewskcuygieqowc:
            goto yyyeguykcgwukkmk;
            yyyeguykcgwukkmk:
            wwyiqiqummieioym:
            goto gkiaswsaqamiymyq;
            mcsuusyagoowgwgw:
            goto toewskcuygieqowc;
            goto saqyaiwimcywsssm;
            gkiaswsaqamiymyq:
            aoyicwmkeekascge:
            goto miaemkcemygcemoo;
            miaemkcemygcemoo:
        }
        goto oocokogowowwyqiq;
        oocokogowowwyqiq:
        uesewywycaykwikc:
        goto couaqcoseguwmkgo;
        kuscwkesakgseqok:
        $oegoegssokkyiqam = [];
        goto qkwwyoieyciisiia;
        caceomqcagkmgegk:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto kuscwkesakgseqok;
        couaqcoseguwmkgo:
        return $oegoegssokkyiqam;
        goto mokuammgeauqqsii;
        mokuammgeauqqsii:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto umeaqogigsmqsqsu;
        icmkoqicsywoekgu:
        return self::METHOD_COPY;
        goto acueuwkqyosyekeq;
        yqgqaewysywqmysu:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto icmkoqicsywoekgu;
        umeaqogigsmqsqsu:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto yqgqaewysywqmysu;
        acueuwkqyosyekeq:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto ygagokmesgacaoqy;
        akaosumkgioacikc:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto wukgeggyqimmsokc;
        ygagokmesgacaoqy:
        $iuaemokqameyemms = [];
        goto ywyusockqwcssooq;
        ywyusockqwcssooq:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\151\163\x5f\x64\x69\162");
        goto akaosumkgioacikc;
        ywgcoskwgewywecq:
        return $iuaemokqameyemms;
        goto gaugyegusygssymo;
        skieiagqacceemsy:
        uuggkkmqccumqayi:
        goto ywgcoskwgewywecq;
        wukgeggyqimmsokc:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\57\52", $ccamueccusigaaio));
            sogouwugiaaiowsa:
        }
        goto skieiagqacceemsy;
        gaugyegusygssymo:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto wmqymkwokycyykow;
        qwsygiaussesywem:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto qyiyukakwoomokqm;
        miosmgaacmsgswos:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto scgumooaicmgygws;
        }
        goto aeycackeqwkqeokg;
        aeycackeqwkqeokg:
        throw new IOException(sprintf("\x53\x79\155\142\157\154\x69\143\40\x6c\x69\156\x6b\x20\x22\45\163\42\x20\167\x61\x73\40\143\162\x65\141\x74\145\x64\40\x62\165\x74\40\x61\160\160\145\141\162\x73\40\x74\x6f\40\142\x65\x20\142\162\x6f\x6b\145\156\x2e", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto sqyeywwoeiewwkim;
        eeaiusyckugwoams:
        ugoueyqkecsooieg:
        goto qeycaskgikeokega;
        qeycaskgikeokega:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto miosmgaacmsgswos;
        sqyeywwoeiewwkim:
        scgumooaicmgygws:
        goto keemgiqiykwguocw;
        wmqymkwokycyykow:
        if (!$hssqsasscequuyky) {
            goto ugoueyqkecsooieg;
        }
        goto qwsygiaussesywem;
        qyiyukakwoomokqm:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto eeaiusyckugwoams;
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
        reuyikuqkiecguye:
        $owousuaweekeyagq = 0;
        goto miuwyoykaasqyqmu;
        iswiyqggakommwme:
        ymcussoqgmiugeim:
        goto ukkeimmiooigeukm;
        gogekosaoawesmik:
        $wpContent = realpath("{$omckemiaycwscaws}\57\x2e\x2e\x2f");
        goto quyowuoyqykcmqem;
        umqcquemgmagccsa:
        $yaeakkosskocswae = "{$wpContent}\x2f\163";
        goto susywgmyuqgesoqm;
        wmsekuosaquuokig:
        goto masugicegsyegooy;
        goto iswiyqggakommwme;
        ggsaqscecssyooyu:
        mmkaacimmsosgyeo:
        goto umqcquemgmagccsa;
        aicqmuuuokcayamc:
        if ($oegoegssokkyiqam) {
            goto mmkaacimmsosgyeo;
        }
        goto aqeciqckokseauei;
        oasasywweeuieemi:
        return $owousuaweekeyagq;
        goto kuwwsgeioseccayw;
        iswcaeqkwmqiywmw:
        $this->ywwqugyyeuaqousg("\141\163\163\145\x74\x20\163\143\x72\151\160\164\40\x64\x6f\x6e\x65\56");
        goto oasasywweeuieemi;
        miuuouwcqyuuassq:
        $this->ywwqugyyeuaqousg("\122\x65\161\x75\151\x72\x65\x20\x64\x69\162\x65\x63\x74\x6f\x72\x69\145\x73\40\156\157\x74\x20\x65\x78\x69\x73\x74\x73");
        goto wmsekuosaquuokig;
        aqeciqckokseauei:
        $this->ywwqugyyeuaqousg("\143\x61\x6e\40\x6e\157\x74\x20\146\x69\x6e\x64\40\x61\x6e\x79\40\x76\141\x6c\151\x64\40\x70\x61\164\x68\40\x69\156\40{$ymiuaqwqkqoqkmck}");
        goto skqqwmemiemiuyka;
        qywaouucmiiygmwm:
        ewecawmiqcgeaque:
        goto usgwiosecieikgka;
        oaomsmoyuaiweqke:
        oqgyymcwykwyekwi:
        goto iswcaeqkwmqiywmw;
        ukkeimmiooigeukm:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto ogwyceiasmkecega;
        ogwyceiasmkecega:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto qgaiyikuyacyymma;
            qgaiyikuyacyymma:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto ywgieceuausccaoo;
            }
            goto ycumeemqusckwyoc;
            yukmcqiuugkamaow:
            goto hwskqqioyiycssus;
            goto wuqwccycokcwgumm;
            wuqwccycokcwgumm:
            ywgieceuausccaoo:
            goto iawwcgswwmcqmcsk;
            nwqkeomgugscuesw:
            aogumaeoimukciac:
            goto mekgaisoagymyaaw;
            iawwcgswwmcqmcsk:
            try {
                goto wiksqikkuaiyqmcu;
                ukwwiwwkmuqemkic:
                wakamsgsammaqwqg:
                goto oqeoyeeeogmqagko;
                wiksqikkuaiyqmcu:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\x2f" . $omwmuycmeqcqokom;
                goto quocmskwwaumyiae;
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
                oqeoyeeeogmqagko:
                oiugacuckwmecqgk:
                goto emiqmswmkkiscuuu;
                emiqmswmkkiscuuu:
                $this->ywwqugyyeuaqousg(sprintf("\103\157\160\x79\40\117\160\145\x72\x61\x74\151\x6f\x6e\40\146\162\157\x6d\40\x25\x73\x20\x74\157\40\x25\163\40\x69\x73\40\x73\x75\143\143\x65\163\x73\x66\x75\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto qcsmqummmmyaqseu;
                qcsmqummmmyaqseu:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto kwgswyiyuiusquis;
            ycumeemqusckwyoc:
            $this->ywwqugyyeuaqousg(sprintf("\45\x73\40\144\151\162\145\143\x74\157\x72\x79\40\x69\163\x20\x65\x6d\160\x74\171\x2e", $amwwiceekosasokk));
            goto yukmcqiuugkamaow;
            kwgswyiyuiusquis:
            hwskqqioyiycssus:
            goto nwqkeomgugscuesw;
            mekgaisoagymyaaw:
        }
        goto qywaouucmiiygmwm;
        skqqwmemiemiuyka:
        goto oqgyymcwykwyekwi;
        goto ggsaqscecssyooyu;
        auikqkeqwesewceo:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto ymcussoqgmiugeim;
        }
        goto miuuouwcqyuuassq;
        quyowuoyqykcmqem:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\x2f\166\x65\x6e\x64\x6f\x72";
        goto wucoqqekkeuwmeac;
        susywgmyuqgesoqm:
        $this->ywwqugyyeuaqousg("\141\163\163\145\164\40\x73\x63\x72\151\x70\x74\x20\163\x74\141\x72\164\56");
        goto auikqkeqwesewceo;
        miuwyoykaasqyqmu:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\57\134");
        goto gogekosaoawesmik;
        usgwiosecieikgka:
        masugicegsyegooy:
        goto oaomsmoyuaiweqke;
        wucoqqekkeuwmeac:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\163");
        goto aicqmuuuokcayamc;
        kuwwsgeioseccayw:
    }
}
