<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber;

class Filter extends Callback
{
    public function iemaakgqgqosiecm()
    {
        goto iqumoawsgyyywwsq;
        mueuscommwusykqi:
        $this->aqiicausqkomqkqy();
        goto eiyiymqwqgyqcgkw;
        eiyiymqwqgyqcgkw:
        $this->ugugagoguiycqeys();
        goto uweeoqgaykwqiuam;
        iqumoawsgyyywwsq:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\144\144\137\x74\167\x69\x67\137\x66\151\154\x74\x65\162\163"), $this->yyyewgugioamwckw());
        goto mueuscommwusykqi;
        uweeoqgaykwqiuam:
        $this->eeoeyakoiycwiuoa();
        goto myokcoyssqaqkiwq;
        myokcoyssqaqkiwq:
    }
    private function aqiicausqkomqkqy()
    {
        goto isgiceggyeosgwwy;
        mcocqsawoicgaaco:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x72\x61\167\x75\162\x6c\144\x65\x63\157\144\145", function ($eqgoocgaqwqcimie) {
            return rawurldecode($eqgoocgaqwqcimie);
        });
        goto isswkyemiemkccwm;
        suokmuseicyqaoqi:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x70\162\145\147\x5f\x72\x65\160\154\141\x63\145", function ($iosuwkkwwioumeqg, $eouekqmooogkoqoo, $oqcammciwimcumac) {
            return preg_replace($eouekqmooogkoqoo, $oqcammciwimcumac, $iosuwkkwwioumeqg);
        });
        goto eksagkeawqauwoqq;
        isswkyemiemkccwm:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\146\151\x6c\164\x65\162", function ($uomewyckeuqoqocu) {
            return array_filter($uomewyckeuqoqocu);
        });
        goto syayasqisaycswuu;
        eksagkeawqauwoqq:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x73\x74\162\137\163\x70\154\151\x74", function ($sociqikgoyemqaac, $ykiwomimkkuiigoq = 1) {
            return str_split($sociqikgoyemqaac, $ykiwomimkkuiigoq);
        });
        goto mcocqsawoicgaaco;
        isgiceggyeosgwwy:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x6b\x73\157\162\x74", function ($uomewyckeuqoqocu, $amcumcomgyqsuymk = null) {
            goto kwaawikykigcoguk;
            wcqcuuumawiqiqwc:
            return $uomewyckeuqoqocu;
            goto ngkgaowmiuciqkae;
            ngkgaowmiuciqkae:
            gskyueususqmuaka:
            goto ikygykseocwqeqkq;
            ikygykseocwqeqkq:
            return [];
            goto ieiggyuicakyessk;
            kwaawikykigcoguk:
            if (!ksort($uomewyckeuqoqocu, $amcumcomgyqsuymk)) {
                goto gskyueususqmuaka;
            }
            goto wcqcuuumawiqiqwc;
            ieiggyuicakyessk:
        });
        goto suokmuseicyqaoqi;
        syayasqisaycswuu:
    }
    private function ugugagoguiycqeys()
    {
        goto mycwwkyauoegscee;
        egasiugmqoomiams:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x70\x61\x72\163\x65\x5f\141\x74\x74\x72\163", function ($siquossayskcwkea) {
            return ManipulateHTML::aoyseswaaaugicuq($siquossayskcwkea);
        });
        goto kasmyowscwyiuqok;
        oqcucsciagwqmkia:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x77\x70\137\x71\x75\x65\162\x79", function ($oaukocmsckciqaok) {
            return CommonUtil::aogsoswomcaqoukq($oaukocmsckciqaok);
        });
        goto gioywmqkqcemcqoq;
        mycwwkyauoegscee:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x6e\165\155\142\x65\x72", function ($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\146\141") {
            return $this->msywmyaoqmaegsuy($eusockqasqqmoess, $aamkqmkgsaqmcuao);
        });
        goto oyysyqcickwskiwq;
        gioywmqkqcemcqoq:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\151\x73\137\150\x74\155\154", function ($sociqikgoyemqaac, $kqywgoqsmuswammk = null) {
            return ManipulateValidation::uuksaskqamgouosy($sociqikgoyemqaac, $kqywgoqsmuswammk);
        });
        goto rouiwqegswowiiie;
        agemwcwmiqisoagc:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\163\x6f\162\x74\x5f\x62\171\137\154\145\x6e\147\x74\x68", function ($uomewyckeuqoqocu, $giqggecqqikcysgq, $oaukocmsckciqaok = null) {
            goto maiaaawkmagymaca;
            uuywoaoyegumicic:
            qkksimkygyyswaii:
            goto cqeoyiaqowgumgqi;
            kigqsomigymgyaia:
            if (!(count($couiucmsqaieciue) >= count($umkqoiwcgmmkeagy))) {
                goto oseaqyuuaswmeiga;
            }
            goto wqsawukekkyakkuu;
            swyogqkgcygqewgk:
            $momcykaoccoymeig++;
            goto eycqiquyywmsaimu;
            qwamowwuqewiekys:
            ukqkycgguwgkkquc:
            goto sgcgckugkyqioygc;
            aciwwsakaoomyacw:
            if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu) && is_int($giqggecqqikcysgq))) {
                goto qkksimkygyyswaii;
            }
            goto ykueywmasoqoewaw;
            sgkkgysqkisuckcc:
            sigwasiewusckqmu:
            goto uuywoaoyegumicic;
            mqoqegioiigykwga:
            goto ikaawoiimikeyacs;
            goto wuucyikacikiycik;
            oguyuegsimwwswyo:
            goto ueceekoauueyowyu;
            goto kwyoiqawaqmqkoey;
            aggeuiaeimsawygg:
            ysemaukqywyuwaqk:
            goto icegcakoeioqeesi;
            eagewewkqeiimmkc:
            [$uusmaiomayssaecw, $eqgoocgaqwqcimie] = ManipulateArray::oooekmcokooqkcgg($umkqoiwcgmmkeagy, $oaukocmsckciqaok, $couiucmsqaieciue);
            goto gcmcqyawakmwwqwi;
            wqsawukekkyakkuu:
            $yeacayasgueouoqc = $giqggecqqikcysgq;
            goto ismmgaiaiwmwwicc;
            kceseecakiymkgcq:
            $yeacayasgueouoqc = $giqggecqqikcysgq;
            goto gaumeyyqioaqyske;
            qoskgeomamikicio:
            ceacoumkeoymekka:
            goto ywcuocgquokgyoic;
            qiiaseecwkougcmm:
            $yeacayasgueouoqc = $giqggecqqikcysgq;
            goto sugoigiesaueggis;
            goqgqygaasmeogqc:
            goto ogeiqywqaykcmocs;
            goto oiokgqmqeiooeksu;
            cyqsmqoaaguqouog:
            sassuokyqmykuaak:
            goto kgekiyoosqkwoqcw;
            eycqiquyywmsaimu:
            ikaawoiimikeyacs:
            goto qwamowwuqewiekys;
            qwyquiaeiiiuugie:
            ommecciesgagmqsu:
            goto keakyuoeecukqmgs;
            icegcakoeioqeesi:
            if (self::igyuegiiaqkymuka($eqgoocgaqwqcimie, $yeacayasgueouoqc, $giqggecqqikcysgq, $oaukocmsckciqaok)) {
                goto ueyicgymomkgoysc;
            }
            goto qwesgmsgkwgcyqkk;
            oaeuicecqcyymume:
            $aqykuigiuwmmcieu = $aqykuigiuwmmcieu + $umkqoiwcgmmkeagy;
            goto seoyoigiqioiakyq;
            oiokgqmqeiooeksu:
            cgqiiiguusawsoea:
            goto oaeuicecqcyymume;
            oaaqgsymgoiauuqo:
            ogeiqywqaykcmocs:
            goto ssceugiuqiakemcm;
            gaumeyyqioaqyske:
            $kgcswwyywoscuqqs = 1;
            goto qwyquiaeiiiuugie;
            eowmsqkksesqysaq:
            $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
            goto cyqsmqoaaguqouog;
            ykueywmasoqoewaw:
            $couiucmsqaieciue = [];
            goto usskmqqiuiamwmwc;
            ismmgaiaiwmwwicc:
            $couiucmsqaieciue = [];
            goto eqowouaiymcoysqk;
            maiaaawkmagymaca:
            $aqykuigiuwmmcieu = [];
            goto keweqmmmgqwgmkcq;
            suameigqeemygecw:
            $yeacayasgueouoqc -= 3;
            goto swyogqkgcygqewgk;
            eqowouaiymcoysqk:
            $kgcswwyywoscuqqs++;
            goto qsusgsuaskwsucuc;
            cgqskwwqiuciqgsk:
            goto sigwasiewusckqmu;
            goto oguyuegsimwwswyo;
            wuucyikacikiycik:
            ueyicgymomkgoysc:
            goto fwycqcmswcqkuwkm;
            qsusgsuaskwsucuc:
            oseaqyuuaswmeiga:
            goto eagewewkqeiimmkc;
            oggigasguykseuqs:
            if ($umkqoiwcgmmkeagy) {
                goto ceacoumkeoymekka;
            }
            goto goqgqygaasmeogqc;
            gcmcqyawakmwwqwi:
            if ($eqgoocgaqwqcimie) {
                goto ysemaukqywyuwaqk;
            }
            goto qiiaseecwkougcmm;
            ssceugiuqiakemcm:
            if (!(!$aqykuigiuwmmcieu || count($aqykuigiuwmmcieu) !== count($uomewyckeuqoqocu))) {
                goto sassuokyqmykuaak;
            }
            goto eowmsqkksesqysaq;
            cqeoyiaqowgumgqi:
            if ($aqykuigiuwmmcieu && $umkqoiwcgmmkeagy) {
                goto cgqiiiguusawsoea;
            }
            goto oggigasguykseuqs;
            kgekiyoosqkwoqcw:
            return $aqykuigiuwmmcieu;
            goto kcwosqcuqsikgkyi;
            iekyiiggsacaoesk:
            goto ukqkycgguwgkkquc;
            goto aggeuiaeimsawygg;
            usskmqqiuiamwmwc:
            $umkqoiwcgmmkeagy = array_values($uomewyckeuqoqocu);
            goto asioykyqsgswmgou;
            kwyoiqawaqmqkoey:
            mkkucqiguwysicsy:
            goto kigqsomigymgyaia;
            qwesgmsgkwgcyqkk:
            $couiucmsqaieciue[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto mqoqegioiigykwga;
            seoyoigiqioiakyq:
            goto ogeiqywqaykcmocs;
            goto qoskgeomamikicio;
            sugoigiesaueggis:
            $kgcswwyywoscuqqs++;
            goto iekyiiggsacaoesk;
            siacckagyggsgoyc:
            $momcykaoccoymeig = 0;
            goto kceseecakiymkgcq;
            keweqmmmgqwgmkcq:
            $umkqoiwcgmmkeagy = [];
            goto aciwwsakaoomyacw;
            ywcuocgquokgyoic:
            $aqykuigiuwmmcieu = $umkqoiwcgmmkeagy;
            goto oaaqgsymgoiauuqo;
            fwycqcmswcqkuwkm:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $umkqoiwcgmmkeagy[$uusmaiomayssaecw];
            goto sowisusioymmasmc;
            sgcgckugkyqioygc:
            ueceekoauueyowyu:
            goto sqmakgoukwggqguc;
            asioykyqsgswmgou:
            $gaeqamemwmwsyukm = count($uomewyckeuqoqocu);
            goto siacckagyggsgoyc;
            keakyuoeecukqmgs:
            if (!($momcykaoccoymeig < $gaeqamemwmwsyukm)) {
                goto sigwasiewusckqmu;
            }
            goto qwkmqwwwemyqycga;
            sqmakgoukwggqguc:
            goto ommecciesgagmqsu;
            goto sgkkgysqkisuckcc;
            sowisusioymmasmc:
            unset($umkqoiwcgmmkeagy[$uusmaiomayssaecw]);
            goto suameigqeemygecw;
            qwkmqwwwemyqycga:
            if ($umkqoiwcgmmkeagy) {
                goto mkkucqiguwysicsy;
            }
            goto cgqskwwqiuciqgsk;
            kcwosqcuqsikgkyi:
        });
        goto uimugqewwuwguoay;
        oykskeiyeqqmqgaq:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x69\156\163\164\141\156\143\x65\157\x66", function ($eqgoocgaqwqcimie, $sqeykgyoooqysmca = "\163\x74\x72\x69\156\x67") {
            return "\x6e\165\154\x6c" === $sqeykgyoooqysmca && null === $eqgoocgaqwqcimie || \function_exists($imacmeoaiyywkewm = "\x69\163\137" . $sqeykgyoooqysmca) && $imacmeoaiyywkewm($eqgoocgaqwqcimie) || $eqgoocgaqwqcimie instanceof $sqeykgyoooqysmca;
        });
        goto eoweieoeouuiesea;
        yooqksokgugueoyu:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x76\141\x6c\x75\145", function ($uomewyckeuqoqocu = [], $uusmaiomayssaecw = null) {
            goto qckyiiwgygmyisec;
            ycsggmcscqkkmkke:
            return $eqgoocgaqwqcimie;
            goto kcyyycqqecocoksg;
            aogowqwmyguykwky:
            yyigyyiammogcwco:
            goto ycsggmcscqkkmkke;
            qckyiiwgygmyisec:
            $eqgoocgaqwqcimie = null;
            goto syqwsiqcqaiqymgm;
            gskywgaqgmouwmci:
            $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto aogowqwmyguykwky;
            syqwsiqcqaiqymgm:
            if (!(is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw]))) {
                goto yyigyyiammogcwco;
            }
            goto gskywgaqgmouwmci;
            kcyyycqqecocoksg:
        });
        goto egasiugmqoomiams;
        oyysyqcickwskiwq:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\147\x65\x6e\145\162\141\x74\145\137\x68\157\x6f\153", function ($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq = true, $quowyokcwswmuois = null) {
            return $this->ygyygikyocoymgaw($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq, $quowyokcwswmuois);
        });
        goto oykskeiyeqqmqgaq;
        uimugqewwuwguoay:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x72\141\x6e\x64\157\x6d", function ($uomewyckeuqoqocu) {
            return $uomewyckeuqoqocu[array_rand($uomewyckeuqoqocu)];
        });
        goto cqqoaacqwsgsaymw;
        cswyeeccwkqqsick:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x61\144\x64", function ($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $kskgqoywkoawosao = true) {
            goto aciggsookugoiwis;
            egawkwesqyogksya:
            if (is_array($uomewyckeuqoqocu)) {
                goto ioesqeescickieuo;
            }
            goto oiwwecykcycoouai;
            masqmwkguiamwgkc:
            ugekiayuuqwywsog:
            goto euqoygooougocsoy;
            wougckywwqeusquq:
            $uomewyckeuqoqocu = ManipulateHTML::igmaewykumgwoaoy($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto masqmwkguiamwgkc;
            aciggsookugoiwis:
            if (!$kskgqoywkoawosao) {
                goto suyouseqsosomgke;
            }
            goto egawkwesqyogksya;
            oiwwecykcycoouai:
            $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto eiegogciisyewaaa;
            ioiacoyoygkcmaac:
            return $uomewyckeuqoqocu;
            goto mkaocmwkyykmakug;
            eiegogciisyewaaa:
            goto ugekiayuuqwywsog;
            goto ywskqmoyukgyguiy;
            euqoygooougocsoy:
            suyouseqsosomgke:
            goto ioiacoyoygkcmaac;
            ywskqmoyukgyguiy:
            ioesqeescickieuo:
            goto wougckywwqeusquq;
            mkaocmwkyykmakug:
        });
        goto oqcucsciagwqmkia;
        cqqoaacqwsgsaymw:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x73\x68\157\162\x74\x5f\156\x75\155\x62\145\x72", function ($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) {
            return ManipulateNumber::readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay);
        });
        goto cswyeeccwkqqsick;
        kasmyowscwyiuqok:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\144\x61\x74\x65\164\x69\x6d\x65", function ($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = null) {
            return $this->eciukqcoqmyacwow($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aamkqmkgsaqmcuao);
        });
        goto mummsuuiqsqckmqu;
        rouiwqegswowiiie:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\164\151\x6d\145\x5f\x61\147\x6f", function ($cqgoimumaewouews) {
            return ManipulateDatetime::ikuqieqosemkwuio($cqgoimumaewouews);
        });
        goto eywmyayuiaqsyogc;
        mummsuuiqsqckmqu:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x6e\141\x6d\145\163\160\141\x63\x65", function ($sociqikgoyemqaac) {
            return str_replace("\x5c", "\x5c\x5c", $sociqikgoyemqaac);
        });
        goto agemwcwmiqisoagc;
        eoweieoeouuiesea:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\155\x6f\x6e\x65\x79", function ($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\x66\141") {
            return $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($eusockqasqqmoess), $aamkqmkgsaqmcuao);
        });
        goto yooqksokgugueoyu;
        eywmyayuiaqsyogc:
    }
    private function eeoeyakoiycwiuoa()
    {
        goto gscycqkuumemawcw;
        sckyokicsooukyuk:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x65\163\x63\x5f\165\162\154", function ($eeamcawaiqocomwy, $wmiuawgiayqiuqok = null, $_context = "\x64\151\163\x70\154\x61\x79") {
            return esc_url($eeamcawaiqocomwy, $wmiuawgiayqiuqok, $_context);
        });
        goto iwyoggscwoaecuae;
        gscycqkuumemawcw:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\145\x73\x63\137\141\164\x74\x72", function ($sociqikgoyemqaac) {
            return esc_attr($sociqikgoyemqaac);
        });
        goto csysmmwiisgwmyoo;
        csysmmwiisgwmyoo:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\145\163\x63\137\150\164\155\x6c", function ($sociqikgoyemqaac) {
            return esc_html($sociqikgoyemqaac);
        });
        goto sckyokicsooukyuk;
        iwyoggscwoaecuae:
    }
    
    private function igyuegiiaqkymuka($eqgoocgaqwqcimie, &$mwuwcsieauaqecae, $giqggecqqikcysgq, $oaukocmsckciqaok)
    {
        goto usoowaiwsaiesgem;
        usoowaiwsaiesgem:
        if (!is_object($eqgoocgaqwqcimie)) {
            goto quauyiscsiqskwie;
        }
        goto mkeuieqqyqegogsq;
        sqameksmiwwkyucq:
        return false;
        goto yeugqaigsaakooak;
        wewsckyqeeoeewmu:
        return true;
        goto cysoogqmuikoisqy;
        miiqgcgyyuwocgay:
        yauqmogucwsigqeq:
        goto yuwawokiuiimecqy;
        yuwawokiuiimecqy:
        iyqmssemqiauuqqc:
        goto sqameksmiwwkyucq;
        ksuqymwomimwkqyw:
        if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq && $mwuwcsieauaqecae == $giqggecqqikcysgq)) {
            goto eiwigiaqmiwyakck;
        }
        goto wewsckyqeeoeewmu;
        cqquqgcesyumsseu:
        quauyiscsiqskwie:
        goto qasmomuqokkmywyk;
        oocciiqymkucsegu:
        $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
        goto ksuqymwomimwkqyw;
        qasmomuqokkmywyk:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto iyqmssemqiauuqqc;
        }
        goto oocciiqymkucsegu;
        cysoogqmuikoisqy:
        eiwigiaqmiwyakck:
        goto aagceqeeqogaqaes;
        aagceqeeqogaqaes:
        if (!($ykiwomimkkuiigoq <= $mwuwcsieauaqecae)) {
            goto yauqmogucwsigqeq;
        }
        goto osuyekmuuwmgkwca;
        mkeuieqqyqegogsq:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
        goto cqquqgcesyumsseu;
        qsqwwcgikmcoikkg:
        return true;
        goto miiqgcgyyuwocgay;
        osuyekmuuwmgkwca:
        $mwuwcsieauaqecae -= $ykiwomimkkuiigoq;
        goto qsqwwcgikmcoikkg;
        yeugqaigsaakooak:
    }
}
