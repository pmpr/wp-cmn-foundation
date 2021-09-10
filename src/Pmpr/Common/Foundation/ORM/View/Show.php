<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const PAGINATION_QUERY_VAR = "\x70\141\147\145\156\x75\155";
    public function render()
    {
        goto eweaaismksecwagy;
        oeamoqweiueaueay:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto owgsameoayaogsma;
        iuwkiyimqmgguose:
        $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => "\x23", "\x63\x6c\x61\163\163" => "\142\x74\156\40\x74\145\x78\x74\x2d\x64\x65\x63\157\x72\x61\x74\x69\157\156\55\156\x6f\x6e\x65\40\142\164\156\55\144\141\156\147\x65\x72\x20\x70\x72\x2d\143\x6f\x6e\146\x69\162\x6d\x61\142\x6c\x65\x2d\x61\143\x74\x69\x6f\156", "\x64\141\x74\x61\x2d\x63\157\156\146\151\147" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))], $this->oyeskqayoscwciem()->uikgwcuascgeissw("\162\145\x6d\x6f\166\145\137\x69\164\145\155"));
        goto yggseoaommssscwo;
        giuccakymqymawgk:
        mcqucouuiuoagqwc:
        goto sicgyiyiocyygkoc;
        ayceeyuocgowqwsa:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto eyiwqgqcsqakwqss;
        }
        goto iuwkiyimqmgguose;
        kyiwsiakwgiwouyi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto awgmegueeqeyqamu;
        yyqygaokeccgugos:
        foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) {
            goto aquqkiggamaoegoo;
            gsymkkskwsgggoic:
            ooqksueucyagyuoe:
            goto ugykmcouiwiscoqu;
            sqwuqegeiisoiiuq:
            suuskagowwgsouqw:
            goto uscokkmquayiukag;
            qwemkcoaseywkuuc:
            $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($aaqqkgyougeiueyq->mwikyscisascoeea(), $mksyucucyswaukig);
            goto mqimkwickkgqqeoi;
            wiwoiyoakywqyaiy:
            kgmeiwiakwicgkkk:
            goto igmmqwyawcuuckkq;
            ceiuqsiqgiuiekem:
            foreach ($icwicymcioeyeyek as $momcykaoccoymeig => $igqsaukqcqscimok) {
                goto kqyoakickmseyyeq;
                acggikioyeueeowg:
                if (!$iwywmkygwewiamwm) {
                    goto aukucaieceiwesmm;
                }
                goto cwikoaeqmmoimmso;
                ykwasaaoeeiuomim:
                $iwywmkygwewiamwm = $ywoyoawciekocqao->uesweuocqoywoyms($aokagokqyuysuksm);
                goto acggikioyeueeowg;
                iwueukqcywkiyqge:
                wgiygcmqaokywuqa:
                goto ykwasaaoeeiuomim;
                kqyoakickmseyyeq:
                $aokagokqyuysuksm = ManipulateArray::get($igqsaukqcqscimok, $ywoyoawciekocqao->kumuygiiqswoyasy());
                goto micceocwuwkyusic;
                egaymskkosukqeao:
                aukucaieceiwesmm:
                goto kaiesowkgwogqseg;
                cwikoaeqmmoimmso:
                $essikcmqiyqaqoaq[$momcykaoccoymeig]["\x74\162\x5f\141\x74\164\162\163"] = ["\x64\141\164\x61\x2d\150\162\x65\x66" => $iwywmkygwewiamwm];
                goto egaymskkosukqeao;
                kaiesowkgwogqseg:
                osmmoyqkqoucsgow:
                goto kicwiowcogmauwiy;
                micceocwuwkyusic:
                foreach ($uykgysuswksgmwqy as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                    $essikcmqiyqaqoaq[$momcykaoccoymeig][$qgoqiacsiccwoawi] = $ywoyoawciekocqao->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, ManipulateArray::get($igqsaukqcqscimok, $qgoqiacsiccwoawi), $igqsaukqcqscimok);
                    iauwuugggmegwisk:
                }
                goto iwueukqcywkiyqge;
                kicwiowcogmauwiy:
            }
            goto gsymkkskwsgggoic;
            uscokkmquayiukag:
            omykokikgocoikec:
            goto ykqsuiyyosyeyscc;
            agemwookwseyycqo:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto cquecqekuucwoumw;
            kwyimqumkuuyaiku:
            $essikcmqiyqaqoaq = [];
            goto gkqiqaqecmoogmaa;
            aquqkiggamaoegoo:
            if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) {
                goto csieaismmmocyacu;
            }
            goto mykiyqcqiegkiqys;
            ugogoekeckgcmuaw:
            csieaismmmocyacu:
            goto egesuwkqkmaigaoe;
            cquecqekuucwoumw:
            $ywoyoawciekocqao = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto koiscokkkaimiecq;
            ykqsuiyyosyeyscc:
            $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [self::ICON => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::CONTENT => $ewgwqamkygiqaawc];
            goto ugogoekeckgcmuaw;
            mceucsaeouuwyumm:
            ManipulateArray::unset($uykgysuswksgmwqy, ["\x63\x62", ManipulateString::ogimogiceeekegoi(ManipulateString::mkwcwqkqeqkqyggc($meywaqqsugaoeyys)) . self::_ID]);
            goto ceiuqsiqgiuiekem;
            eouwacqiommmeaqc:
            $ewgwqamkygiqaawc = ManipulateHTML::wegccueewucwyaew([self::CONTENT => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\124\150\145\x72\x65\40\x61\162\145\x20\x6e\157\164\40\x25\x73\x20\171\145\x74\56", PR__CMN__FOUNDATION), $ywoyoawciekocqao->oyeskqayoscwciem()->giiayuqckuiecosm()))]);
            goto sqwuqegeiisoiiuq;
            mqimkwickkgqqeoi:
            if (!$icwicymcioeyeyek) {
                goto cwswueuqoamqasya;
            }
            goto kwyimqumkuuyaiku;
            mykiyqcqiegkiqys:
            $ewgwqamkygiqaawc = '';
            goto agemwookwseyycqo;
            gkqiqaqecmoogmaa:
            $uykgysuswksgmwqy = $momcykaoccoymeig->waeasakssissiuqg()->get_columns();
            goto mceucsaeouuwyumm;
            egesuwkqkmaigaoe:
            yssqmyoaokkksukc:
            goto syusgosewwkoagoq;
            ugykmcouiwiscoqu:
            $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy, ["\x63\154\141\x73\163" => "\x74\x61\x62\x6c\x65\x2d\x62\157\x72\144\145\162\x6c\145\x73\x73\40\x74\141\x62\154\145\55\x73\164\x72\x69\160\x65\x64\x20\x66\x6f\x6e\164\x2d\61\x36"]);
            goto isewysikysqewkis;
            owuuuiekkaeoeacq:
            $momcykaoccoymeig = $ywoyoawciekocqao->cgswceaawqgeskua("\x69\x6e\x64\x65\x78");
            goto saauykgakaeiyoua;
            koiscokkkaimiecq:
            if (!$ywoyoawciekocqao instanceof Model) {
                goto omykokikgocoikec;
            }
            goto owuuuiekkaeoeacq;
            isewysikysqewkis:
            cwswueuqoamqasya:
            goto wiwoiyoakywqyaiy;
            saauykgakaeiyoua:
            if (!$momcykaoccoymeig instanceof Index) {
                goto kgmeiwiakwicgkkk;
            }
            goto qwemkcoaseywkuuc;
            igmmqwyawcuuckkq:
            if ($ewgwqamkygiqaawc) {
                goto suuskagowwgsouqw;
            }
            goto eouwacqiommmeaqc;
            syusgosewwkoagoq:
        }
        goto oeusomaaeekakake;
        aoaqwygkaagiuuws:
        $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui);
        goto esagiiawomyacuiw;
        sksgcusuyqcwqswe:
        yuoeumyiuqkuouey:
        goto ayceeyuocgowqwsa;
        oeusomaaeekakake:
        sckioayasmkcoeoo:
        goto kwuckkyqaygwgcuy;
        esagiiawomyacuiw:
        $ccowyogiqwikkkie = [];
        goto maaisuqwkymeguys;
        aeiemwacaiygemmg:
        $ywoucyskcquysiwc = ["\x6f\x76\x65\x72\166\x69\x65\167" => [self::ICON => IconFontawesomeInterface::ICON_EYE, self::TITLE => __("\x4f\166\x65\162\x76\151\x65\x77", PR__CMN__FOUNDATION)]];
        goto yyqygaokeccgugos;
        owgsameoayaogsma:
        if (!$mksyucucyswaukig) {
            goto mcqucouuiuoagqwc;
        }
        goto kyiwsiakwgiwouyi;
        gqimwsyemoewagcy:
        ManipulateArray::unset($yygmoeguaqyumuui, [self::ID]);
        goto aoaqwygkaagiuuws;
        awgmegueeqeyqamu:
        $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig));
        goto gqimwsyemoewagcy;
        kwuckkyqaygwgcuy:
        echo $this->iuygowkemiiwqmiw("\x73\x68\157\167", ["\164\141\x62\x73" => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x72\155\137\166\151\145\167\137\163\150\157\167\137{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\x5f\164\141\x62\x73"), $ywoucyskcquysiwc, $mksyucucyswaukig), "\x6e\x61\x6d\145" => $this->aakmagwggmkoiiyu(), "\x6f\x62\152\145\x63\x74" => $mksyucucyswaukig, "\155\x6f\x64\x65\x6c" => $this->mgogaykgkoogasim(), "\x69\x74\145\155\x73" => array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)), "\164\x69\164\x6c\145" => $this->mmqossqsksemasay("\x76\151\x65\167\x5f\151\x74\145\x6d"), "\x62\165\164\164\157\156\x73" => $ccowyogiqwikkkie, "\155\141\151\156\137\153\x65\171" => "\x6f\166\x65\x72\x76\x69\x65\167"]);
        goto giuccakymqymawgk;
        icumkkykaoqycqqu:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto oeamoqweiueaueay;
        yggseoaommssscwo:
        eyiwqgqcsqakwqss:
        goto aeiemwacaiygemmg;
        qkyciyiwkmgkmquk:
        $ccowyogiqwikkkie[] = [self::LABEL => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\145\x64\x69\164\137\151\x74\145\155"), self::COLOR => self::WARNING, self::LINK => $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm)];
        goto sksgcusuyqcwqswe;
        eweaaismksecwagy:
        parent::render();
        goto icumkkykaoqycqqu;
        maaisuqwkymeguys:
        if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) {
            goto yuoeumyiuqkuouey;
        }
        goto qkyciyiwkmgkmquk;
        sicgyiyiocyygkoc:
    }
}
