<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Pmpr\Common\Foundation\ORM\DB\Model;

class Show extends ObjectAware
{
    const PAGINATION_QUERY_VAR = "\x70\x61\147\145\x6e\x75\155";
    public function render()
    {
        goto eweaaismksecwagy;
        kyiwsiakwgiwouyi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto awgmegueeqeyqamu;
        iuwkiyimqmgguose:
        $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => "\43", "\x63\x6c\x61\163\163" => "\142\x74\x6e\x20\x74\145\170\164\55\144\x65\143\157\x72\x61\164\151\157\x6e\55\x6e\157\156\x65\40\x62\x74\156\55\144\141\156\147\145\x72\x20\160\x72\x2d\x63\157\156\x66\151\x72\x6d\141\x62\154\145\55\x61\x63\x74\151\x6f\x6e", "\x64\141\x74\141\55\143\157\156\146\151\x67" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))], $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x72\145\155\x6f\166\x65\x5f\151\x74\x65\x6d"));
        goto yggseoaommssscwo;
        esagiiawomyacuiw:
        $ccowyogiqwikkkie = [];
        goto maaisuqwkymeguys;
        maaisuqwkymeguys:
        if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) {
            goto yuoeumyiuqkuouey;
        }
        goto qkyciyiwkmgkmquk;
        eweaaismksecwagy:
        parent::render();
        goto icumkkykaoqycqqu;
        oeamoqweiueaueay:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto owgsameoayaogsma;
        giuccakymqymawgk:
        mcqucouuiuoagqwc:
        goto sicgyiyiocyygkoc;
        owgsameoayaogsma:
        if (!$mksyucucyswaukig) {
            goto mcqucouuiuoagqwc;
        }
        goto kyiwsiakwgiwouyi;
        gqimwsyemoewagcy:
        ManipulateArray::unset($yygmoeguaqyumuui, [self::ID]);
        goto aoaqwygkaagiuuws;
        aeiemwacaiygemmg:
        $ywoucyskcquysiwc = ["\157\166\x65\162\166\x69\x65\x77" => [self::ICON => IconFontawesomeInterface::ICON_EYE, self::TITLE => __("\117\x76\145\x72\166\x69\145\167", PR__CMN__FOUNDATION)]];
        goto yyqygaokeccgugos;
        aoaqwygkaagiuuws:
        $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui);
        goto esagiiawomyacuiw;
        sksgcusuyqcwqswe:
        yuoeumyiuqkuouey:
        goto ayceeyuocgowqwsa;
        yyqygaokeccgugos:
        foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) {
            goto aquqkiggamaoegoo;
            egesuwkqkmaigaoe:
            yssqmyoaokkksukc:
            goto syusgosewwkoagoq;
            mqimkwickkgqqeoi:
            if (!$icwicymcioeyeyek) {
                goto cwswueuqoamqasya;
            }
            goto kwyimqumkuuyaiku;
            koiscokkkaimiecq:
            if (!$ywoyoawciekocqao instanceof Model) {
                goto omykokikgocoikec;
            }
            goto owuuuiekkaeoeacq;
            ugogoekeckgcmuaw:
            csieaismmmocyacu:
            goto egesuwkqkmaigaoe;
            uscokkmquayiukag:
            omykokikgocoikec:
            goto ykqsuiyyosyeyscc;
            ykqsuiyyosyeyscc:
            $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [self::ICON => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::CONTENT => $ewgwqamkygiqaawc];
            goto ugogoekeckgcmuaw;
            igmmqwyawcuuckkq:
            if ($ewgwqamkygiqaawc) {
                goto suuskagowwgsouqw;
            }
            goto eouwacqiommmeaqc;
            sqwuqegeiisoiiuq:
            suuskagowwgsouqw:
            goto uscokkmquayiukag;
            agemwookwseyycqo:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto cquecqekuucwoumw;
            owuuuiekkaeoeacq:
            $momcykaoccoymeig = $ywoyoawciekocqao->cgswceaawqgeskua("\151\x6e\x64\145\x78");
            goto saauykgakaeiyoua;
            gsymkkskwsgggoic:
            ooqksueucyagyuoe:
            goto ugykmcouiwiscoqu;
            saauykgakaeiyoua:
            if (!$momcykaoccoymeig instanceof Index) {
                goto kgmeiwiakwicgkkk;
            }
            goto qwemkcoaseywkuuc;
            qwemkcoaseywkuuc:
            $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($aaqqkgyougeiueyq->mwikyscisascoeea(), $mksyucucyswaukig);
            goto mqimkwickkgqqeoi;
            kwyimqumkuuyaiku:
            $essikcmqiyqaqoaq = [];
            goto gkqiqaqecmoogmaa;
            eouwacqiommmeaqc:
            $ewgwqamkygiqaawc = ManipulateHTML::wegccueewucwyaew([self::CONTENT => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x54\x68\x65\162\x65\40\x61\x72\x65\x20\x6e\157\x74\x20\x25\163\x20\x79\145\x74\56", PR__CMN__FOUNDATION), $ywoyoawciekocqao->oyeskqayoscwciem()->giiayuqckuiecosm()))]);
            goto sqwuqegeiisoiiuq;
            ceiuqsiqgiuiekem:
            foreach ($icwicymcioeyeyek as $momcykaoccoymeig => $igqsaukqcqscimok) {
                goto kqyoakickmseyyeq;
                kaiesowkgwogqseg:
                osmmoyqkqoucsgow:
                goto kicwiowcogmauwiy;
                cwikoaeqmmoimmso:
                $essikcmqiyqaqoaq[$momcykaoccoymeig]["\164\x72\137\x61\164\x74\162\163"] = ["\x64\x61\164\141\x2d\150\x72\145\146" => $iwywmkygwewiamwm];
                goto egaymskkosukqeao;
                micceocwuwkyusic:
                foreach ($uykgysuswksgmwqy as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                    $essikcmqiyqaqoaq[$momcykaoccoymeig][$qgoqiacsiccwoawi] = $ywoyoawciekocqao->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, ManipulateArray::get($igqsaukqcqscimok, $qgoqiacsiccwoawi), $igqsaukqcqscimok);
                    iauwuugggmegwisk:
                }
                goto iwueukqcywkiyqge;
                iwueukqcywkiyqge:
                wgiygcmqaokywuqa:
                goto ykwasaaoeeiuomim;
                kqyoakickmseyyeq:
                $aokagokqyuysuksm = ManipulateArray::get($igqsaukqcqscimok, $ywoyoawciekocqao->kumuygiiqswoyasy());
                goto micceocwuwkyusic;
                acggikioyeueeowg:
                if (!$iwywmkygwewiamwm) {
                    goto aukucaieceiwesmm;
                }
                goto cwikoaeqmmoimmso;
                ykwasaaoeeiuomim:
                $iwywmkygwewiamwm = $ywoyoawciekocqao->uesweuocqoywoyms($aokagokqyuysuksm);
                goto acggikioyeueeowg;
                egaymskkosukqeao:
                aukucaieceiwesmm:
                goto kaiesowkgwogqseg;
                kicwiowcogmauwiy:
            }
            goto gsymkkskwsgggoic;
            gkqiqaqecmoogmaa:
            $uykgysuswksgmwqy = $momcykaoccoymeig->waeasakssissiuqg()->get_columns();
            goto mceucsaeouuwyumm;
            wiwoiyoakywqyaiy:
            kgmeiwiakwicgkkk:
            goto igmmqwyawcuuckkq;
            aquqkiggamaoegoo:
            if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) {
                goto csieaismmmocyacu;
            }
            goto mykiyqcqiegkiqys;
            mykiyqcqiegkiqys:
            $ewgwqamkygiqaawc = '';
            goto agemwookwseyycqo;
            mceucsaeouuwyumm:
            ManipulateArray::unset($uykgysuswksgmwqy, ["\143\x62", ManipulateString::ogimogiceeekegoi(ManipulateString::mkwcwqkqeqkqyggc($meywaqqsugaoeyys)) . self::_ID]);
            goto ceiuqsiqgiuiekem;
            isewysikysqewkis:
            cwswueuqoamqasya:
            goto wiwoiyoakywqyaiy;
            cquecqekuucwoumw:
            $ywoyoawciekocqao = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto koiscokkkaimiecq;
            ugykmcouiwiscoqu:
            $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy, ["\x63\x6c\x61\163\163" => "\x74\x61\142\154\x65\x2d\142\157\162\144\145\162\154\x65\163\x73\40\164\141\142\x6c\145\x2d\163\164\162\x69\x70\145\144\x20\146\157\156\164\55\x31\x36"]);
            goto isewysikysqewkis;
            syusgosewwkoagoq:
        }
        goto oeusomaaeekakake;
        awgmegueeqeyqamu:
        $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig));
        goto gqimwsyemoewagcy;
        icumkkykaoqycqqu:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto oeamoqweiueaueay;
        ayceeyuocgowqwsa:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto eyiwqgqcsqakwqss;
        }
        goto iuwkiyimqmgguose;
        yggseoaommssscwo:
        eyiwqgqcsqakwqss:
        goto aeiemwacaiygemmg;
        kwuckkyqaygwgcuy:
        echo $this->iuygowkemiiwqmiw("\x73\150\x6f\167", ["\x74\x61\x62\163" => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\162\155\x5f\x76\151\145\x77\137\x73\150\x6f\x77\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x74\141\x62\163"), $ywoucyskcquysiwc, $mksyucucyswaukig), "\156\141\x6d\x65" => $this->aakmagwggmkoiiyu(), "\x6f\x62\152\x65\143\164" => $mksyucucyswaukig, "\x6d\x6f\x64\145\x6c" => $this->mgogaykgkoogasim(), "\x69\164\145\155\x73" => array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)), "\164\151\164\154\x65" => $this->mmqossqsksemasay("\166\x69\145\x77\x5f\151\164\145\x6d"), "\x62\165\x74\164\x6f\156\163" => $ccowyogiqwikkkie, "\155\x61\151\x6e\x5f\153\x65\x79" => "\x6f\166\x65\162\166\151\x65\x77"]);
        goto giuccakymqymawgk;
        oeusomaaeekakake:
        sckioayasmkcoeoo:
        goto kwuckkyqaygwgcuy;
        qkyciyiwkmgkmquk:
        $ccowyogiqwikkkie[] = [self::LABEL => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\145\x64\x69\164\x5f\151\164\145\155"), self::COLOR => self::WARNING, self::LINK => $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm)];
        goto sksgcusuyqcwqswe;
        sicgyiyiocyygkoc:
    }
}
