<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const PAGINATION_QUERY_VAR = "\x70\x61\147\x65\x6e\165\155";
    public function render()
    {
        goto eweaaismksecwagy;
        yggseoaommssscwo:
        eyiwqgqcsqakwqss:
        goto aeiemwacaiygemmg;
        sksgcusuyqcwqswe:
        yuoeumyiuqkuouey:
        goto ayceeyuocgowqwsa;
        aeiemwacaiygemmg:
        $ywoucyskcquysiwc = ["\x6f\166\x65\x72\166\x69\x65\167" => [self::ICON => IconFontawesomeInterface::ICON_EYE, self::TITLE => __("\117\x76\145\x72\166\x69\145\x77", PR__CMN__FOUNDATION)]];
        goto yyqygaokeccgugos;
        kwuckkyqaygwgcuy:
        echo $this->iuygowkemiiwqmiw("\163\150\157\x77", ["\x74\x61\x62\163" => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6f\x72\x6d\137\166\151\x65\167\137\163\150\157\x77\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\x74\141\x62\163"), $ywoucyskcquysiwc, $mksyucucyswaukig), "\156\x61\x6d\145" => $this->aakmagwggmkoiiyu(), "\157\142\x6a\145\x63\164" => $mksyucucyswaukig, "\x6d\157\144\x65\154" => $this->mgogaykgkoogasim(), "\x69\164\x65\x6d\163" => array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)), "\x74\151\164\x6c\x65" => $this->mmqossqsksemasay("\x76\151\145\x77\x5f\x69\x74\145\155"), "\142\165\x74\x74\x6f\156\163" => $ccowyogiqwikkkie, "\155\141\x69\x6e\137\153\x65\x79" => "\x6f\166\x65\x72\x76\x69\x65\167"]);
        goto giuccakymqymawgk;
        awgmegueeqeyqamu:
        $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig));
        goto gqimwsyemoewagcy;
        aoaqwygkaagiuuws:
        $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui);
        goto esagiiawomyacuiw;
        esagiiawomyacuiw:
        $ccowyogiqwikkkie = [];
        goto maaisuqwkymeguys;
        ayceeyuocgowqwsa:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto eyiwqgqcsqakwqss;
        }
        goto iuwkiyimqmgguose;
        maaisuqwkymeguys:
        if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) {
            goto yuoeumyiuqkuouey;
        }
        goto qkyciyiwkmgkmquk;
        qkyciyiwkmgkmquk:
        $ccowyogiqwikkkie[] = [self::LABEL => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\145\144\x69\164\x5f\151\x74\145\155"), self::COLOR => self::WARNING, self::LINK => $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm)];
        goto sksgcusuyqcwqswe;
        owgsameoayaogsma:
        if (!$mksyucucyswaukig) {
            goto mcqucouuiuoagqwc;
        }
        goto kyiwsiakwgiwouyi;
        gqimwsyemoewagcy:
        ManipulateArray::unset($yygmoeguaqyumuui, [self::ID]);
        goto aoaqwygkaagiuuws;
        kyiwsiakwgiwouyi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto awgmegueeqeyqamu;
        oeusomaaeekakake:
        sckioayasmkcoeoo:
        goto kwuckkyqaygwgcuy;
        yyqygaokeccgugos:
        foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) {
            goto aquqkiggamaoegoo;
            eouwacqiommmeaqc:
            $ewgwqamkygiqaawc = ManipulateHTML::wegccueewucwyaew([self::CONTENT => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\124\x68\x65\x72\145\40\141\162\x65\40\x6e\157\x74\x20\45\x73\40\171\145\164\56", PR__CMN__FOUNDATION), $ywoyoawciekocqao->oyeskqayoscwciem()->giiayuqckuiecosm()))]);
            goto sqwuqegeiisoiiuq;
            ceiuqsiqgiuiekem:
            foreach ($icwicymcioeyeyek as $momcykaoccoymeig => $igqsaukqcqscimok) {
                goto kqyoakickmseyyeq;
                kqyoakickmseyyeq:
                $aokagokqyuysuksm = ManipulateArray::get($igqsaukqcqscimok, $ywoyoawciekocqao->kumuygiiqswoyasy());
                goto micceocwuwkyusic;
                cwikoaeqmmoimmso:
                $essikcmqiyqaqoaq[$momcykaoccoymeig]["\x74\x72\x5f\141\164\164\162\163"] = ["\x64\141\x74\x61\55\150\x72\x65\x66" => $iwywmkygwewiamwm];
                goto egaymskkosukqeao;
                acggikioyeueeowg:
                if (!$iwywmkygwewiamwm) {
                    goto aukucaieceiwesmm;
                }
                goto cwikoaeqmmoimmso;
                iwueukqcywkiyqge:
                wgiygcmqaokywuqa:
                goto ykwasaaoeeiuomim;
                kaiesowkgwogqseg:
                osmmoyqkqoucsgow:
                goto kicwiowcogmauwiy;
                ykwasaaoeeiuomim:
                $iwywmkygwewiamwm = $ywoyoawciekocqao->uesweuocqoywoyms($aokagokqyuysuksm);
                goto acggikioyeueeowg;
                egaymskkosukqeao:
                aukucaieceiwesmm:
                goto kaiesowkgwogqseg;
                micceocwuwkyusic:
                foreach ($uykgysuswksgmwqy as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                    $essikcmqiyqaqoaq[$momcykaoccoymeig][$qgoqiacsiccwoawi] = $ywoyoawciekocqao->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, ManipulateArray::get($igqsaukqcqscimok, $qgoqiacsiccwoawi), $igqsaukqcqscimok);
                    iauwuugggmegwisk:
                }
                goto iwueukqcywkiyqge;
                kicwiowcogmauwiy:
            }
            goto gsymkkskwsgggoic;
            saauykgakaeiyoua:
            if (!$momcykaoccoymeig instanceof Index) {
                goto kgmeiwiakwicgkkk;
            }
            goto qwemkcoaseywkuuc;
            mqimkwickkgqqeoi:
            if (!$icwicymcioeyeyek) {
                goto cwswueuqoamqasya;
            }
            goto kwyimqumkuuyaiku;
            mceucsaeouuwyumm:
            ManipulateArray::unset($uykgysuswksgmwqy, ["\x63\x62", ManipulateString::ogimogiceeekegoi(ManipulateString::mkwcwqkqeqkqyggc($meywaqqsugaoeyys)) . self::_ID]);
            goto ceiuqsiqgiuiekem;
            cquecqekuucwoumw:
            $ywoyoawciekocqao = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto koiscokkkaimiecq;
            wiwoiyoakywqyaiy:
            kgmeiwiakwicgkkk:
            goto igmmqwyawcuuckkq;
            gkqiqaqecmoogmaa:
            $uykgysuswksgmwqy = $momcykaoccoymeig->waeasakssissiuqg()->get_columns();
            goto mceucsaeouuwyumm;
            koiscokkkaimiecq:
            if (!$ywoyoawciekocqao instanceof Model) {
                goto omykokikgocoikec;
            }
            goto owuuuiekkaeoeacq;
            ugogoekeckgcmuaw:
            csieaismmmocyacu:
            goto egesuwkqkmaigaoe;
            gsymkkskwsgggoic:
            ooqksueucyagyuoe:
            goto ugykmcouiwiscoqu;
            qwemkcoaseywkuuc:
            $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($aaqqkgyougeiueyq->mwikyscisascoeea(), $mksyucucyswaukig);
            goto mqimkwickkgqqeoi;
            egesuwkqkmaigaoe:
            yssqmyoaokkksukc:
            goto syusgosewwkoagoq;
            mykiyqcqiegkiqys:
            $ewgwqamkygiqaawc = '';
            goto agemwookwseyycqo;
            igmmqwyawcuuckkq:
            if ($ewgwqamkygiqaawc) {
                goto suuskagowwgsouqw;
            }
            goto eouwacqiommmeaqc;
            aquqkiggamaoegoo:
            if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) {
                goto csieaismmmocyacu;
            }
            goto mykiyqcqiegkiqys;
            sqwuqegeiisoiiuq:
            suuskagowwgsouqw:
            goto uscokkmquayiukag;
            uscokkmquayiukag:
            omykokikgocoikec:
            goto ykqsuiyyosyeyscc;
            owuuuiekkaeoeacq:
            $momcykaoccoymeig = $ywoyoawciekocqao->cgswceaawqgeskua("\x69\x6e\144\145\x78");
            goto saauykgakaeiyoua;
            isewysikysqewkis:
            cwswueuqoamqasya:
            goto wiwoiyoakywqyaiy;
            ykqsuiyyosyeyscc:
            $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [self::ICON => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::CONTENT => $ewgwqamkygiqaawc];
            goto ugogoekeckgcmuaw;
            agemwookwseyycqo:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto cquecqekuucwoumw;
            kwyimqumkuuyaiku:
            $essikcmqiyqaqoaq = [];
            goto gkqiqaqecmoogmaa;
            ugykmcouiwiscoqu:
            $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy, ["\143\154\141\163\x73" => "\164\141\x62\x6c\145\55\x62\157\162\x64\145\x72\154\145\163\x73\x20\164\141\142\154\145\55\x73\x74\162\x69\160\x65\144\40\146\157\x6e\164\x2d\x31\x36"]);
            goto isewysikysqewkis;
            syusgosewwkoagoq:
        }
        goto oeusomaaeekakake;
        icumkkykaoqycqqu:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto oeamoqweiueaueay;
        oeamoqweiueaueay:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto owgsameoayaogsma;
        giuccakymqymawgk:
        mcqucouuiuoagqwc:
        goto sicgyiyiocyygkoc;
        iuwkiyimqmgguose:
        $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\145\x66" => "\43", "\143\x6c\141\x73\x73" => "\142\164\156\40\x74\145\x78\164\x2d\x64\x65\143\x6f\162\x61\x74\x69\157\156\x2d\x6e\x6f\156\145\x20\142\x74\x6e\x2d\x64\x61\x6e\147\145\x72\x20\x70\162\x2d\143\157\156\x66\151\x72\x6d\141\142\x6c\x65\x2d\141\143\164\151\157\156", "\144\141\x74\141\55\143\x6f\156\146\x69\x67" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))], $this->oyeskqayoscwciem()->uikgwcuascgeissw("\162\x65\x6d\x6f\x76\x65\137\151\x74\145\x6d"));
        goto yggseoaommssscwo;
        eweaaismksecwagy:
        parent::render();
        goto icumkkykaoqycqqu;
        sicgyiyiocyygkoc:
    }
}
