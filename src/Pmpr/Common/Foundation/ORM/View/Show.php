<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const PAGINATION_QUERY_VAR = "\x70\141\147\x65\156\x75\x6d";
    public function render()
    {
        goto eweaaismksecwagy;
        icumkkykaoqycqqu:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto oeamoqweiueaueay;
        awgmegueeqeyqamu:
        $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig));
        goto gqimwsyemoewagcy;
        iuwkiyimqmgguose:
        $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\146" => "\43", "\x63\x6c\141\163\163" => "\142\164\x6e\x20\164\145\170\164\x2d\144\x65\143\x6f\x72\141\164\151\x6f\156\x2d\x6e\157\x6e\145\40\142\x74\156\x2d\x64\x61\156\x67\x65\x72\x20\x70\162\x2d\x63\157\156\x66\151\x72\155\x61\x62\154\x65\x2d\141\143\x74\151\157\156", "\x64\x61\x74\141\55\x63\x6f\x6e\x66\x69\147" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))], $this->oyeskqayoscwciem()->uikgwcuascgeissw("\162\145\x6d\x6f\x76\x65\137\151\x74\145\155"));
        goto yggseoaommssscwo;
        gqimwsyemoewagcy:
        ManipulateArray::unset($yygmoeguaqyumuui, [self::ID]);
        goto aoaqwygkaagiuuws;
        eweaaismksecwagy:
        parent::render();
        goto icumkkykaoqycqqu;
        sksgcusuyqcwqswe:
        yuoeumyiuqkuouey:
        goto ayceeyuocgowqwsa;
        aoaqwygkaagiuuws:
        $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui);
        goto esagiiawomyacuiw;
        esagiiawomyacuiw:
        $ccowyogiqwikkkie = [];
        goto maaisuqwkymeguys;
        kwuckkyqaygwgcuy:
        echo $this->iuygowkemiiwqmiw("\x73\x68\157\x77", ["\x74\141\x62\x73" => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\162\x6d\137\166\151\145\167\x5f\163\150\x6f\167\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x74\141\x62\x73"), $ywoucyskcquysiwc, $mksyucucyswaukig), "\156\141\x6d\145" => $this->aakmagwggmkoiiyu(), "\x6f\142\x6a\145\x63\164" => $mksyucucyswaukig, "\155\157\144\145\154" => $this->mgogaykgkoogasim(), "\151\x74\145\x6d\x73" => array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)), "\x74\x69\164\x6c\145" => $this->mmqossqsksemasay("\166\151\145\x77\137\151\x74\x65\155"), "\142\165\164\x74\157\x6e\163" => $ccowyogiqwikkkie, "\155\x61\x69\x6e\x5f\x6b\145\x79" => "\x6f\166\145\x72\x76\x69\145\x77"]);
        goto giuccakymqymawgk;
        oeusomaaeekakake:
        sckioayasmkcoeoo:
        goto kwuckkyqaygwgcuy;
        yggseoaommssscwo:
        eyiwqgqcsqakwqss:
        goto aeiemwacaiygemmg;
        yyqygaokeccgugos:
        foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) {
            goto aquqkiggamaoegoo;
            mceucsaeouuwyumm:
            ManipulateArray::unset($uykgysuswksgmwqy, ["\x63\x62", ManipulateString::ogimogiceeekegoi(ManipulateString::mkwcwqkqeqkqyggc($meywaqqsugaoeyys)) . self::_ID]);
            goto ceiuqsiqgiuiekem;
            agemwookwseyycqo:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto cquecqekuucwoumw;
            mykiyqcqiegkiqys:
            $ewgwqamkygiqaawc = '';
            goto agemwookwseyycqo;
            cquecqekuucwoumw:
            $ywoyoawciekocqao = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto koiscokkkaimiecq;
            qwemkcoaseywkuuc:
            $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($aaqqkgyougeiueyq->mwikyscisascoeea(), $mksyucucyswaukig);
            goto mqimkwickkgqqeoi;
            isewysikysqewkis:
            cwswueuqoamqasya:
            goto wiwoiyoakywqyaiy;
            koiscokkkaimiecq:
            if (!$ywoyoawciekocqao instanceof Model) {
                goto omykokikgocoikec;
            }
            goto owuuuiekkaeoeacq;
            uscokkmquayiukag:
            omykokikgocoikec:
            goto ykqsuiyyosyeyscc;
            gsymkkskwsgggoic:
            ooqksueucyagyuoe:
            goto ugykmcouiwiscoqu;
            saauykgakaeiyoua:
            if (!$momcykaoccoymeig instanceof Index) {
                goto kgmeiwiakwicgkkk;
            }
            goto qwemkcoaseywkuuc;
            wiwoiyoakywqyaiy:
            kgmeiwiakwicgkkk:
            goto igmmqwyawcuuckkq;
            ugykmcouiwiscoqu:
            $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy, ["\x63\154\141\x73\x73" => "\x74\141\142\x6c\145\55\x62\x6f\162\144\x65\162\154\145\x73\163\40\x74\141\142\x6c\145\x2d\163\x74\162\151\x70\145\144\40\x66\157\156\164\55\61\66"]);
            goto isewysikysqewkis;
            owuuuiekkaeoeacq:
            $momcykaoccoymeig = $ywoyoawciekocqao->cgswceaawqgeskua("\151\156\x64\x65\170");
            goto saauykgakaeiyoua;
            egesuwkqkmaigaoe:
            yssqmyoaokkksukc:
            goto syusgosewwkoagoq;
            aquqkiggamaoegoo:
            if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) {
                goto csieaismmmocyacu;
            }
            goto mykiyqcqiegkiqys;
            kwyimqumkuuyaiku:
            $essikcmqiyqaqoaq = [];
            goto gkqiqaqecmoogmaa;
            eouwacqiommmeaqc:
            $ewgwqamkygiqaawc = ManipulateHTML::wegccueewucwyaew([self::CONTENT => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\x54\150\x65\162\x65\x20\x61\162\145\x20\x6e\x6f\x74\x20\45\163\x20\171\145\164\56", PR__CMN__FOUNDATION), $ywoyoawciekocqao->oyeskqayoscwciem()->giiayuqckuiecosm()))]);
            goto sqwuqegeiisoiiuq;
            ceiuqsiqgiuiekem:
            foreach ($icwicymcioeyeyek as $momcykaoccoymeig => $igqsaukqcqscimok) {
                goto kqyoakickmseyyeq;
                acggikioyeueeowg:
                if (!$iwywmkygwewiamwm) {
                    goto aukucaieceiwesmm;
                }
                goto cwikoaeqmmoimmso;
                kqyoakickmseyyeq:
                $aokagokqyuysuksm = ManipulateArray::get($igqsaukqcqscimok, $ywoyoawciekocqao->kumuygiiqswoyasy());
                goto micceocwuwkyusic;
                egaymskkosukqeao:
                aukucaieceiwesmm:
                goto kaiesowkgwogqseg;
                iwueukqcywkiyqge:
                wgiygcmqaokywuqa:
                goto ykwasaaoeeiuomim;
                ykwasaaoeeiuomim:
                $iwywmkygwewiamwm = $ywoyoawciekocqao->uesweuocqoywoyms($aokagokqyuysuksm);
                goto acggikioyeueeowg;
                kaiesowkgwogqseg:
                osmmoyqkqoucsgow:
                goto kicwiowcogmauwiy;
                cwikoaeqmmoimmso:
                $essikcmqiyqaqoaq[$momcykaoccoymeig]["\x74\x72\137\141\x74\164\x72\x73"] = ["\x64\141\164\x61\x2d\150\x72\145\x66" => $iwywmkygwewiamwm];
                goto egaymskkosukqeao;
                micceocwuwkyusic:
                foreach ($uykgysuswksgmwqy as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                    $essikcmqiyqaqoaq[$momcykaoccoymeig][$qgoqiacsiccwoawi] = $ywoyoawciekocqao->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, ManipulateArray::get($igqsaukqcqscimok, $qgoqiacsiccwoawi), $igqsaukqcqscimok);
                    iauwuugggmegwisk:
                }
                goto iwueukqcywkiyqge;
                kicwiowcogmauwiy:
            }
            goto gsymkkskwsgggoic;
            ykqsuiyyosyeyscc:
            $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [self::ICON => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::CONTENT => $ewgwqamkygiqaawc];
            goto ugogoekeckgcmuaw;
            mqimkwickkgqqeoi:
            if (!$icwicymcioeyeyek) {
                goto cwswueuqoamqasya;
            }
            goto kwyimqumkuuyaiku;
            sqwuqegeiisoiiuq:
            suuskagowwgsouqw:
            goto uscokkmquayiukag;
            igmmqwyawcuuckkq:
            if ($ewgwqamkygiqaawc) {
                goto suuskagowwgsouqw;
            }
            goto eouwacqiommmeaqc;
            gkqiqaqecmoogmaa:
            $uykgysuswksgmwqy = $momcykaoccoymeig->waeasakssissiuqg()->get_columns();
            goto mceucsaeouuwyumm;
            ugogoekeckgcmuaw:
            csieaismmmocyacu:
            goto egesuwkqkmaigaoe;
            syusgosewwkoagoq:
        }
        goto oeusomaaeekakake;
        qkyciyiwkmgkmquk:
        $ccowyogiqwikkkie[] = [self::LABEL => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\145\144\151\x74\137\x69\x74\x65\x6d"), self::COLOR => self::WARNING, self::LINK => $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm)];
        goto sksgcusuyqcwqswe;
        giuccakymqymawgk:
        mcqucouuiuoagqwc:
        goto sicgyiyiocyygkoc;
        oeamoqweiueaueay:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto owgsameoayaogsma;
        kyiwsiakwgiwouyi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto awgmegueeqeyqamu;
        aeiemwacaiygemmg:
        $ywoucyskcquysiwc = ["\157\166\x65\162\166\151\145\x77" => [self::ICON => IconFontawesomeInterface::ICON_EYE, self::TITLE => __("\x4f\166\145\162\166\x69\145\167", PR__CMN__FOUNDATION)]];
        goto yyqygaokeccgugos;
        ayceeyuocgowqwsa:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto eyiwqgqcsqakwqss;
        }
        goto iuwkiyimqmgguose;
        owgsameoayaogsma:
        if (!$mksyucucyswaukig) {
            goto mcqucouuiuoagqwc;
        }
        goto kyiwsiakwgiwouyi;
        maaisuqwkymeguys:
        if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) {
            goto yuoeumyiuqkuouey;
        }
        goto qkyciyiwkmgkmquk;
        sicgyiyiocyygkoc:
    }
}
