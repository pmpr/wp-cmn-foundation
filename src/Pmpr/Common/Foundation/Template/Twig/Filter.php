<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto uweeoqgaykwqiuam;
        myokcoyssqaqkiwq:
        $this->aqiicausqkomqkqy();
        goto gskyueususqmuaka;
        uweeoqgaykwqiuam:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x64\x64\137\164\x77\151\147\x5f\x66\151\x6c\x74\145\x72\x73"), $this->yyyewgugioamwckw());
        goto myokcoyssqaqkiwq;
        gskyueususqmuaka:
        $this->ugugagoguiycqeys();
        goto kwaawikykigcoguk;
        kwaawikykigcoguk:
        $this->eeoeyakoiycwiuoa();
        goto wcqcuuumawiqiqwc;
        wcqcuuumawiqiqwc:
    }
    private function aqiicausqkomqkqy()
    {
        goto mcocqsawoicgaaco;
        mcocqsawoicgaaco:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\153\x73\157\162\x74", function ($uomewyckeuqoqocu, $amcumcomgyqsuymk = null) {
            goto ikygykseocwqeqkq;
            ieiggyuicakyessk:
            return $uomewyckeuqoqocu;
            goto isgiceggyeosgwwy;
            ikygykseocwqeqkq:
            if (!ksort($uomewyckeuqoqocu, $amcumcomgyqsuymk)) {
                goto ngkgaowmiuciqkae;
            }
            goto ieiggyuicakyessk;
            isgiceggyeosgwwy:
            ngkgaowmiuciqkae:
            goto suokmuseicyqaoqi;
            suokmuseicyqaoqi:
            return [];
            goto eksagkeawqauwoqq;
            eksagkeawqauwoqq:
        });
        goto isswkyemiemkccwm;
        qckyiiwgygmyisec:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\146\151\x6c\164\145\x72", function ($uomewyckeuqoqocu) {
            return array_filter($uomewyckeuqoqocu);
        });
        goto syqwsiqcqaiqymgm;
        syayasqisaycswuu:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x73\x74\162\x5f\x73\x70\154\x69\164", function ($sociqikgoyemqaac, $ykiwomimkkuiigoq = 1) {
            return str_split($sociqikgoyemqaac, $ykiwomimkkuiigoq);
        });
        goto yyigyyiammogcwco;
        isswkyemiemkccwm:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x70\162\145\x67\x5f\x72\x65\160\154\141\143\145", function ($iosuwkkwwioumeqg, $eouekqmooogkoqoo, $oqcammciwimcumac) {
            return preg_replace($eouekqmooogkoqoo, $oqcammciwimcumac, $iosuwkkwwioumeqg);
        });
        goto syayasqisaycswuu;
        yyigyyiammogcwco:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x72\141\x77\x75\x72\154\x64\145\x63\x6f\x64\x65", function ($eqgoocgaqwqcimie) {
            return rawurldecode($eqgoocgaqwqcimie);
        });
        goto qckyiiwgygmyisec;
        syqwsiqcqaiqymgm:
    }
    private function ugugagoguiycqeys()
    {
        goto eoweieoeouuiesea;
        oqcucsciagwqmkia:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\162\141\156\144\157\x6d", function ($uomewyckeuqoqocu) {
            return $uomewyckeuqoqocu[array_rand($uomewyckeuqoqocu)];
        });
        goto gioywmqkqcemcqoq;
        rouiwqegswowiiie:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x61\144\x64", function ($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $kskgqoywkoawosao = true) {
            goto eiegogciisyewaaa;
            oyysyqcickwskiwq:
            return $uomewyckeuqoqocu;
            goto oykskeiyeqqmqgaq;
            mkaocmwkyykmakug:
            egawkwesqyogksya:
            goto mycwwkyauoegscee;
            euqoygooougocsoy:
            aciggsookugoiwis:
            goto ioiacoyoygkcmaac;
            mycwwkyauoegscee:
            oiwwecykcycoouai:
            goto oyysyqcickwskiwq;
            eiegogciisyewaaa:
            if (!$kskgqoywkoawosao) {
                goto oiwwecykcycoouai;
            }
            goto ywskqmoyukgyguiy;
            masqmwkguiamwgkc:
            goto egawkwesqyogksya;
            goto euqoygooougocsoy;
            wougckywwqeusquq:
            $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto masqmwkguiamwgkc;
            ioiacoyoygkcmaac:
            $uomewyckeuqoqocu = ManipulateHTML::igmaewykumgwoaoy($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
            goto mkaocmwkyykmakug;
            ywskqmoyukgyguiy:
            if (is_array($uomewyckeuqoqocu)) {
                goto aciggsookugoiwis;
            }
            goto wougckywwqeusquq;
            oykskeiyeqqmqgaq:
        });
        goto eywmyayuiaqsyogc;
        csysmmwiisgwmyoo:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\164\x69\155\x65\137\x61\x67\157", function ($cqgoimumaewouews) {
            return ManipulateDatetime::ikuqieqosemkwuio($cqgoimumaewouews);
        });
        goto sckyokicsooukyuk;
        kasmyowscwyiuqok:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x6d\x6f\156\x65\171", function ($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\146\141") {
            return $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($eusockqasqqmoess), $aamkqmkgsaqmcuao);
        });
        goto mummsuuiqsqckmqu;
        eywmyayuiaqsyogc:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x77\x70\137\x71\x75\x65\162\171", function ($oaukocmsckciqaok) {
            return CommonUtil::aogsoswomcaqoukq($oaukocmsckciqaok);
        });
        goto gscycqkuumemawcw;
        gscycqkuumemawcw:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\151\x73\x5f\150\x74\x6d\154", function ($sociqikgoyemqaac, $kqywgoqsmuswammk = null) {
            return ManipulateValidation::uuksaskqamgouosy($sociqikgoyemqaac, $kqywgoqsmuswammk);
        });
        goto csysmmwiisgwmyoo;
        mummsuuiqsqckmqu:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\166\x61\154\165\x65", function ($uomewyckeuqoqocu = [], $uusmaiomayssaecw = null) {
            goto aogowqwmyguykwky;
            ycsggmcscqkkmkke:
            if (!(is_array($uomewyckeuqoqocu) && isset($uomewyckeuqoqocu[$uusmaiomayssaecw]))) {
                goto gskywgaqgmouwmci;
            }
            goto kcyyycqqecocoksg;
            aogowqwmyguykwky:
            $eqgoocgaqwqcimie = null;
            goto ycsggmcscqkkmkke;
            kcyyycqqecocoksg:
            $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto sigwasiewusckqmu;
            sigwasiewusckqmu:
            gskywgaqgmouwmci:
            goto ommecciesgagmqsu;
            ommecciesgagmqsu:
            return $eqgoocgaqwqcimie;
            goto oseaqyuuaswmeiga;
            oseaqyuuaswmeiga:
        });
        goto agemwcwmiqisoagc;
        cqqoaacqwsgsaymw:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x6e\141\155\x65\163\x70\x61\143\x65", function ($sociqikgoyemqaac) {
            return str_replace("\x5c", "\134\134", $sociqikgoyemqaac);
        });
        goto cswyeeccwkqqsick;
        yooqksokgugueoyu:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x67\x65\156\x65\162\x61\164\x65\x5f\150\157\157\x6b", function ($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq = true, $quowyokcwswmuois = null) {
            return $this->ygyygikyocoymgaw($ymqmyyeuycgmigyo, $ykuqcwwmuyqmkisq, $quowyokcwswmuois);
        });
        goto egasiugmqoomiams;
        eoweieoeouuiesea:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x6e\x75\x6d\x62\x65\162", function ($eusockqasqqmoess, $aamkqmkgsaqmcuao = "\146\141") {
            return $this->msywmyaoqmaegsuy($eusockqasqqmoess, $aamkqmkgsaqmcuao);
        });
        goto yooqksokgugueoyu;
        uimugqewwuwguoay:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x64\x61\x74\x65\164\151\155\x65", function ($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa = null, $aamkqmkgsaqmcuao = null) {
            return $this->eciukqcoqmyacwow($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $aamkqmkgsaqmcuao);
        });
        goto cqqoaacqwsgsaymw;
        gioywmqkqcemcqoq:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\163\150\x6f\x72\164\x5f\x6e\x75\155\142\145\x72", function ($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay = 1) {
            return ManipulateNumber::readable($eqgoocgaqwqcimie, $cmyiqqsaoiwgqcay);
        });
        goto rouiwqegswowiiie;
        egasiugmqoomiams:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x69\156\163\x74\x61\156\x63\145\157\x66", function ($eqgoocgaqwqcimie, $sqeykgyoooqysmca = "\163\164\162\x69\156\x67") {
            return "\156\x75\154\154" === $sqeykgyoooqysmca && null === $eqgoocgaqwqcimie || \function_exists($imacmeoaiyywkewm = "\x69\163\137" . $sqeykgyoooqysmca) && $imacmeoaiyywkewm($eqgoocgaqwqcimie) || $eqgoocgaqwqcimie instanceof $sqeykgyoooqysmca;
        });
        goto kasmyowscwyiuqok;
        agemwcwmiqisoagc:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x70\141\162\163\145\137\141\x74\x74\x72\x73", function ($siquossayskcwkea) {
            return ManipulateHTML::aoyseswaaaugicuq($siquossayskcwkea);
        });
        goto uimugqewwuwguoay;
        cswyeeccwkqqsick:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x73\x6f\162\x74\x5f\142\x79\x5f\154\x65\x6e\x67\164\x68", function ($uomewyckeuqoqocu, $giqggecqqikcysgq, $oaukocmsckciqaok = null) {
            goto ykueywmasoqoewaw;
            sugoigiesaueggis:
            [$uusmaiomayssaecw, $eqgoocgaqwqcimie] = ManipulateArray::oooekmcokooqkcgg($umkqoiwcgmmkeagy, $oaukocmsckciqaok, $couiucmsqaieciue);
            goto iekyiiggsacaoesk;
            kgekiyoosqkwoqcw:
            if (!(!$aqykuigiuwmmcieu || count($aqykuigiuwmmcieu) !== count($uomewyckeuqoqocu))) {
                goto aciwwsakaoomyacw;
            }
            goto kcwosqcuqsikgkyi;
            gcmcqyawakmwwqwi:
            $kgcswwyywoscuqqs++;
            goto qiiaseecwkougcmm;
            uuywoaoyegumicic:
            cgqiiiguusawsoea:
            goto cqeoyiaqowgumgqi;
            eqowouaiymcoysqk:
            if (!(count($couiucmsqaieciue) >= count($umkqoiwcgmmkeagy))) {
                goto ysemaukqywyuwaqk;
            }
            goto qsusgsuaskwsucuc;
            cyqsmqoaaguqouog:
            sassuokyqmykuaak:
            goto kgekiyoosqkwoqcw;
            gaumeyyqioaqyske:
            $gaeqamemwmwsyukm = count($uomewyckeuqoqocu);
            goto qwyquiaeiiiuugie;
            usskmqqiuiamwmwc:
            $umkqoiwcgmmkeagy = [];
            goto asioykyqsgswmgou;
            ykueywmasoqoewaw:
            $aqykuigiuwmmcieu = [];
            goto usskmqqiuiamwmwc;
            qwkmqwwwemyqycga:
            $kgcswwyywoscuqqs = 1;
            goto cgqskwwqiuciqgsk;
            icegcakoeioqeesi:
            $kgcswwyywoscuqqs++;
            goto qwesgmsgkwgcyqkk;
            asioykyqsgswmgou:
            if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu) && is_int($giqggecqqikcysgq))) {
                goto ceacoumkeoymekka;
            }
            goto siacckagyggsgoyc;
            kigqsomigymgyaia:
            goto ueyicgymomkgoysc;
            goto wqsawukekkyakkuu;
            siacckagyggsgoyc:
            $couiucmsqaieciue = [];
            goto kceseecakiymkgcq;
            sgcgckugkyqioygc:
            $momcykaoccoymeig++;
            goto sqmakgoukwggqguc;
            kwyoiqawaqmqkoey:
            if ($umkqoiwcgmmkeagy) {
                goto ogeiqywqaykcmocs;
            }
            goto kigqsomigymgyaia;
            mqoqegioiigykwga:
            ueceekoauueyowyu:
            goto wuucyikacikiycik;
            qwamowwuqewiekys:
            $yeacayasgueouoqc -= 3;
            goto sgcgckugkyqioygc;
            wqsawukekkyakkuu:
            goto cgqiiiguusawsoea;
            goto ismmgaiaiwmwwicc;
            goqgqygaasmeogqc:
            ceacoumkeoymekka:
            goto oiokgqmqeiooeksu;
            qiiaseecwkougcmm:
            ysemaukqywyuwaqk:
            goto sugoigiesaueggis;
            swyogqkgcygqewgk:
            $aqykuigiuwmmcieu[$uusmaiomayssaecw] = $umkqoiwcgmmkeagy[$uusmaiomayssaecw];
            goto eycqiquyywmsaimu;
            eowmsqkksesqysaq:
            $aqykuigiuwmmcieu = $umkqoiwcgmmkeagy;
            goto cyqsmqoaaguqouog;
            oiokgqmqeiooeksu:
            if ($aqykuigiuwmmcieu && $umkqoiwcgmmkeagy) {
                goto maiaaawkmagymaca;
            }
            goto oaeuicecqcyymume;
            oggigasguykseuqs:
            ueyicgymomkgoysc:
            goto goqgqygaasmeogqc;
            qwesgmsgkwgcyqkk:
            goto qkksimkygyyswaii;
            goto mqoqegioiigykwga;
            iekyiiggsacaoesk:
            if ($eqgoocgaqwqcimie) {
                goto ueceekoauueyowyu;
            }
            goto aggeuiaeimsawygg;
            kceseecakiymkgcq:
            $umkqoiwcgmmkeagy = array_values($uomewyckeuqoqocu);
            goto gaumeyyqioaqyske;
            qwyquiaeiiiuugie:
            $momcykaoccoymeig = 0;
            goto keakyuoeecukqmgs;
            kcwosqcuqsikgkyi:
            $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
            goto ioesqeescickieuo;
            cgqskwwqiuciqgsk:
            ikaawoiimikeyacs:
            goto oguyuegsimwwswyo;
            wuucyikacikiycik:
            if (self::igyuegiiaqkymuka($eqgoocgaqwqcimie, $yeacayasgueouoqc, $giqggecqqikcysgq, $oaukocmsckciqaok)) {
                goto ukqkycgguwgkkquc;
            }
            goto fwycqcmswcqkuwkm;
            sqmakgoukwggqguc:
            mkkucqiguwysicsy:
            goto sgkkgysqkisuckcc;
            ywcuocgquokgyoic:
            $aqykuigiuwmmcieu = $aqykuigiuwmmcieu + $umkqoiwcgmmkeagy;
            goto oaaqgsymgoiauuqo;
            suameigqeemygecw:
            ukqkycgguwgkkquc:
            goto swyogqkgcygqewgk;
            seoyoigiqioiakyq:
            goto sassuokyqmykuaak;
            goto qoskgeomamikicio;
            sgkkgysqkisuckcc:
            qkksimkygyyswaii:
            goto uuywoaoyegumicic;
            ioesqeescickieuo:
            aciwwsakaoomyacw:
            goto ugekiayuuqwywsog;
            oguyuegsimwwswyo:
            if (!($momcykaoccoymeig < $gaeqamemwmwsyukm)) {
                goto ueyicgymomkgoysc;
            }
            goto kwyoiqawaqmqkoey;
            qsusgsuaskwsucuc:
            $yeacayasgueouoqc = $giqggecqqikcysgq;
            goto eagewewkqeiimmkc;
            oaeuicecqcyymume:
            if ($umkqoiwcgmmkeagy) {
                goto keweqmmmgqwgmkcq;
            }
            goto seoyoigiqioiakyq;
            cqeoyiaqowgumgqi:
            goto ikaawoiimikeyacs;
            goto oggigasguykseuqs;
            sowisusioymmasmc:
            goto mkkucqiguwysicsy;
            goto suameigqeemygecw;
            fwycqcmswcqkuwkm:
            $couiucmsqaieciue[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto sowisusioymmasmc;
            ssceugiuqiakemcm:
            keweqmmmgqwgmkcq:
            goto eowmsqkksesqysaq;
            qoskgeomamikicio:
            maiaaawkmagymaca:
            goto ywcuocgquokgyoic;
            ismmgaiaiwmwwicc:
            ogeiqywqaykcmocs:
            goto eqowouaiymcoysqk;
            oaaqgsymgoiauuqo:
            goto sassuokyqmykuaak;
            goto ssceugiuqiakemcm;
            keakyuoeecukqmgs:
            $yeacayasgueouoqc = $giqggecqqikcysgq;
            goto qwkmqwwwemyqycga;
            ugekiayuuqwywsog:
            return $aqykuigiuwmmcieu;
            goto suyouseqsosomgke;
            eagewewkqeiimmkc:
            $couiucmsqaieciue = [];
            goto gcmcqyawakmwwqwi;
            eycqiquyywmsaimu:
            unset($umkqoiwcgmmkeagy[$uusmaiomayssaecw]);
            goto qwamowwuqewiekys;
            aggeuiaeimsawygg:
            $yeacayasgueouoqc = $giqggecqqikcysgq;
            goto icegcakoeioqeesi;
            suyouseqsosomgke:
        });
        goto oqcucsciagwqmkia;
        sckyokicsooukyuk:
    }
    private function eeoeyakoiycwiuoa()
    {
        goto iwyoggscwoaecuae;
        eiwigiaqmiwyakck:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\145\163\143\x5f\x75\162\x6c", function ($eeamcawaiqocomwy, $wmiuawgiayqiuqok = null, $_context = "\x64\x69\x73\x70\x6c\141\x79") {
            return esc_url($eeamcawaiqocomwy, $wmiuawgiayqiuqok, $_context);
        });
        goto yauqmogucwsigqeq;
        quauyiscsiqskwie:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x65\163\x63\137\150\164\x6d\154", function ($sociqikgoyemqaac) {
            return esc_html($sociqikgoyemqaac);
        });
        goto eiwigiaqmiwyakck;
        iwyoggscwoaecuae:
        $this->yyyewgugioamwckw()->kgaogakmeumeqaew("\x65\163\x63\x5f\x61\164\164\x72", function ($sociqikgoyemqaac) {
            return esc_attr($sociqikgoyemqaac);
        });
        goto quauyiscsiqskwie;
        yauqmogucwsigqeq:
    }
    
    private function igyuegiiaqkymuka($eqgoocgaqwqcimie, &$mwuwcsieauaqecae, $giqggecqqikcysgq, $oaukocmsckciqaok)
    {
        goto qasmomuqokkmywyk;
        euiecommumccmsoy:
        return false;
        goto cqaquqywymqyymqs;
        cysoogqmuikoisqy:
        $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
        goto aagceqeeqogaqaes;
        asemcaymsukcaawm:
        cqquqgcesyumsseu:
        goto euiecommumccmsoy;
        qsqwwcgikmcoikkg:
        usoowaiwsaiesgem:
        goto miiqgcgyyuwocgay;
        oocciiqymkucsegu:
        $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
        goto ksuqymwomimwkqyw;
        yeugqaigsaakooak:
        mkeuieqqyqegogsq:
        goto asemcaymsukcaawm;
        wewsckyqeeoeewmu:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto cqquqgcesyumsseu;
        }
        goto cysoogqmuikoisqy;
        ksuqymwomimwkqyw:
        iyqmssemqiauuqqc:
        goto wewsckyqeeoeewmu;
        aagceqeeqogaqaes:
        if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq && $mwuwcsieauaqecae == $giqggecqqikcysgq)) {
            goto usoowaiwsaiesgem;
        }
        goto osuyekmuuwmgkwca;
        miiqgcgyyuwocgay:
        if (!($ykiwomimkkuiigoq <= $mwuwcsieauaqecae)) {
            goto mkeuieqqyqegogsq;
        }
        goto yuwawokiuiimecqy;
        qasmomuqokkmywyk:
        if (!is_object($eqgoocgaqwqcimie)) {
            goto iyqmssemqiauuqqc;
        }
        goto oocciiqymkucsegu;
        osuyekmuuwmgkwca:
        return true;
        goto qsqwwcgikmcoikkg;
        yuwawokiuiimecqy:
        $mwuwcsieauaqecae -= $ykiwomimkkuiigoq;
        goto sqameksmiwwkyucq;
        sqameksmiwwkyucq:
        return true;
        goto yeugqaigsaakooak;
        cqaquqywymqyymqs:
    }
}
