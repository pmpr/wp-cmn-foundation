<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Composer;

use Exception;
use Pmpr\Common\Foundation\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

class Asset
{
    const METHOD_COPY = "\143\157\x70\x79";
    const EXCLUDE_PARENT = ["\x73\x79\x6d\x66\157\x6e\x79"];
    const METHOD_ABSOLUTE_SYMLINK = "\x61\x62\x73\157\x6c\165\x74\145\x20\x73\171\x6d\x6c\151\x6e\x6b";
    const METHOD_RELATIVE_SYMLINK = "\x72\x65\x6c\141\x74\151\166\x65\40\x73\171\155\154\x69\x6e\153";
    
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
        goto gcwcoaasoisikiis;
        cymiymiigkyegwqq:
        return $oegoegssokkyiqam;
        goto umqcguqgqygqossy;
        agsmckaiamicsmku:
        omommciksgmosmku:
        goto cymiymiigkyegwqq;
        gcwcoaasoisikiis:
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        goto oiwgeqquqqoougyk;
        oiwgeqquqqoougyk:
        $oegoegssokkyiqam = [];
        goto ikcmyyecwuoacqyg;
        ikcmyyecwuoacqyg:
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            goto sescoamicygaiooy;
            ekeiwcgqeikqiyks:
            saoqimsoqwweysso:
            goto aqwugymawgissagm;
            iuueumuwsooouiao:
            kyqsamceokgyseks:
            goto ioagaggwicqesuyq;
            aqwugymawgissagm:
            $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
            goto gayuaogckqsomgsy;
            wgmwswuwumgsyomo:
            
            if (is_array($qmwoqyacswkwkiog)) {
                goto saoqimsoqwweysso;
            }
            goto ykmkawakkqkuuaym;
            ykmkawakkqkuuaym:
            $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
            goto omoiwieaiucgikse;
            cuyoyqcisqywkqaa:
            cwwusaokqsuisggk:
            goto cwoocwkqsoosaqkm;
            quysmmuogiamswey:
            array_pop($qmwoqyacswkwkiog);
            goto wgmwswuwumgsyomo;
            omoiwieaiucgikse:
            goto cwwusaokqsuisggk;
            goto ekeiwcgqeikqiyks;
            cscgqokcugoeacek:
            if (!(is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay)) {
                goto osiqkqkuswkomaui;
            }
            goto quysmmuogiamswey;
            gayuaogckqsomgsy:
            $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
            goto cuyoyqcisqywkqaa;
            cwoocwkqsoosaqkm:
            osiqkqkuswkomaui:
            goto iuueumuwsooouiao;
            sescoamicygaiooy:
            $qmwoqyacswkwkiog = explode("\57", $ymqmyyeuycgmigyo);
            goto cscgqokcugoeacek;
            ioagaggwicqesuyq:
        }
        goto agsmckaiamicsmku;
        umqcguqgqygqossy:
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        goto kciusguyocmsuaeu;
        eiqaaeeseksuaoso:
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        goto akkyiomimkeoskos;
        kciusguyocmsuaeu:
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        goto eiqaaeeseksuaoso;
        akkyiomimkeoskos:
        return self::METHOD_COPY;
        goto cuqiuaqqmiwysuss;
        cuqiuaqqmiwysuss:
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        goto qacikuseouqsqmwq;
        jsageqqwqkykweig:
        symooqoecgcicomq:
        goto weyeyookuqayoakq;
        weyeyookuqayoakq:
        return $iuaemokqameyemms;
        goto mogeeqsawaqyeaaa;
        sgwymesyqucmwwkw:
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), "\x69\163\x5f\x64\151\162");
        goto meywqiioyoucokow;
        gcmeeeyemkqeacws:
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . "\57\x2a", $ccamueccusigaaio));
            ekywgoqskwiummes:
        }
        goto jsageqqwqkykweig;
        qacikuseouqsqmwq:
        $iuaemokqameyemms = [];
        goto sgwymesyqucmwwkw;
        meywqiioyoucokow:
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        goto gcmeeeyemkqeacws;
        mogeeqsawaqyeaaa:
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        goto ycsockioamocssqc;
        ycsockioamocssqc:
        if (!$hssqsasscequuyky) {
            goto qosuyiciqgmakegs;
        }
        goto mcgskyeeqqsyswam;
        mcgskyeeqqsyswam:
        $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
        goto aiecqsmqwwceuigs;
        yugiaygagouuesgo:
        qosuyiciqgmakegs:
        goto oyogcgssysygmeam;
        aiecqsmqwwceuigs:
        $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        goto yugiaygagouuesgo;
        aogemgkeckkmuyus:
        if (file_exists($gwgkqsyaesmocmsk)) {
            goto ysukiaoekgcswucm;
        }
        goto iugkiwiucuaueycm;
        oyogcgssysygmeam:
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        goto aogemgkeckkmuyus;
        iugkiwiucuaueycm:
        throw new IOException(sprintf("\x53\x79\155\x62\x6f\154\151\x63\x20\154\x69\156\x6b\x20\x22\x25\x73\x22\40\167\x61\163\x20\x63\162\145\x61\x74\x65\144\x20\x62\x75\x74\x20\141\x70\x70\145\x61\162\163\40\164\157\40\x62\145\40\x62\x72\157\x6b\x65\x6e\x2e", $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        goto gagmssewkqoakmic;
        gagmssewkqoakmic:
        ysukiaoekgcswucm:
        goto qmwcqkmogmmseeaa;
        qmwcqkmogmmseeaa:
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
        goto uesewywycaykwikc;
        yyyeguykcgwukkmk:
        $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
        goto gkiaswsaqamiymyq;
        souemeuesekaekys:
        goto iimsyikswgcwgoim;
        goto uauwuceiiwyqwico;
        uuciyisiqccegsom:
        ekmgygwagiwkumky:
        goto ougkaggismakkmce;
        caceomqcagkmgegk:
        iimsyikswgcwgoim:
        goto kuscwkesakgseqok;
        gkiaswsaqamiymyq:
        foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
            goto wquciuouwsqeaywy;
            wquciuouwsqeaywy:
            if (count(scandir($amwwiceekosasokk)) > 2) {
                goto qicaiiwqkuekisec;
            }
            goto qaiqycmkuwkyawoo;
            iwqggoqaweooecai:
            yoowqwwqgyoqusam:
            goto iicmygykyuguyeku;
            wkuiygkkiegeqmks:
            try {
                goto akweguyeywgimcii;
                akweguyeywgimcii:
                $gwgkqsyaesmocmsk = $yaeakkosskocswae . "\x2f" . $omwmuycmeqcqokom;
                goto qksgckcogweyegiy;
                qymasoskamceuyga:
                qccqwqewgsuaassw:
                goto ccysimigeiasqcce;
                qksgckcogweyegiy:
                switch ($aocoewseyaaosiag) {
                    case self::METHOD_RELATIVE_SYMLINK:
                        $this->eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto qccqwqewgsuaassw;
                    case self::METHOD_ABSOLUTE_SYMLINK:
                        $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                        goto qccqwqewgsuaassw;
                    default:
                        $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                }
                goto mcyaaamaeyyuuyqc;
                ccysimigeiasqcce:
                $this->ywwqugyyeuaqousg(sprintf("\103\157\x70\x79\x20\117\160\x65\162\x61\164\x69\x6f\156\x20\x66\x72\x6f\155\40\x25\x73\40\164\157\40\x25\x73\x20\151\x73\40\x73\165\x63\x63\x65\163\x73\146\165\154", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                goto waossucmeakmcyqo;
                mcyaaamaeyyuuyqc:
                hisossycecaayukk:
                goto qymasoskamceuyga;
                waossucmeakmcyqo:
            } catch (Exception $iewosgggaueeyymg) {
                $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
            }
            goto uecwikikoegwokma;
            qaiqycmkuwkyawoo:
            $this->ywwqugyyeuaqousg(sprintf("\x25\163\40\x64\x69\x72\x65\143\x74\x6f\x72\171\40\x69\163\x20\145\x6d\160\x74\x79\56", $amwwiceekosasokk));
            goto myksuyaasakqyemk;
            myksuyaasakqyemk:
            goto easmiuiiqscigksi;
            goto wweeowcauskgueqo;
            wweeowcauskgueqo:
            qicaiiwqkuekisec:
            goto wkuiygkkiegeqmks;
            uecwikikoegwokma:
            easmiuiiqscigksi:
            goto iwqggoqaweooecai;
            iicmygykyuguyeku:
        }
        goto miaemkcemygcemoo;
        mcsuusyagoowgwgw:
        $this->ywwqugyyeuaqousg("\x61\x73\163\x65\x74\40\x73\x63\x72\151\160\164\40\x73\164\141\x72\164\x2e");
        goto saqyaiwimcywsssm;
        oqmesosgiggoswyi:
        goto iuqeycyiwoygwgyw;
        goto uuciyisiqccegsom;
        wwyiqiqummieioym:
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, "\163");
        goto ygauwacugsgiowkc;
        oocokogowowwyqiq:
        return $owousuaweekeyagq;
        goto couaqcoseguwmkgo;
        qkwwyoieyciisiia:
        $this->ywwqugyyeuaqousg("\x61\x73\x73\x65\x74\x20\163\x63\162\151\160\164\40\144\157\x6e\145\56");
        goto oocokogowowwyqiq;
        saqyaiwimcywsssm:
        if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
            goto eamocokcskeaowsy;
        }
        goto qiawywmkckoemwca;
        ygauwacugsgiowkc:
        if ($oegoegssokkyiqam) {
            goto ekmgygwagiwkumky;
        }
        goto aqcmgyeecacwueei;
        aqcmgyeecacwueei:
        $this->ywwqugyyeuaqousg("\143\x61\x6e\x20\156\157\x74\40\x66\x69\156\144\40\141\156\171\x20\x76\x61\x6c\151\x64\x20\160\x61\164\150\40\151\156\40{$ymiuaqwqkqoqkmck}");
        goto oqmesosgiggoswyi;
        ougkaggismakkmce:
        $yaeakkosskocswae = "{$wpContent}\x2f\x73";
        goto mcsuusyagoowgwgw;
        toewskcuygieqowc:
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}\57\x76\145\x6e\144\x6f\162";
        goto wwyiqiqummieioym;
        kuscwkesakgseqok:
        iuqeycyiwoygwgyw:
        goto qkwwyoieyciisiia;
        oeqymuiuaeamuiaq:
        $wpContent = realpath("{$omckemiaycwscaws}\57\56\x2e\x2f");
        goto toewskcuygieqowc;
        miaemkcemygcemoo:
        imycaqewmusocike:
        goto caceomqcagkmgegk;
        aoyicwmkeekascge:
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, "\57\134");
        goto oeqymuiuaeamuiaq;
        uauwuceiiwyqwico:
        eamocokcskeaowsy:
        goto yyyeguykcgwukkmk;
        qiawywmkckoemwca:
        $this->ywwqugyyeuaqousg("\x52\x65\x71\165\x69\x72\145\x20\144\x69\162\x65\143\164\157\x72\x69\x65\x73\x20\156\x6f\164\40\x65\x78\x69\x73\x74\x73");
        goto souemeuesekaekys;
        uesewywycaykwikc:
        $owousuaweekeyagq = 0;
        goto aoyicwmkeekascge;
        couaqcoseguwmkgo:
    }
}
