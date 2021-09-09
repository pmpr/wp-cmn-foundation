<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const PAGINATION_QUERY_VAR = "\x70\141\147\x65\156\165\x6d";
    public function render()
    {
        goto eweaaismksecwagy;
        yyqygaokeccgugos:
        foreach ($meywaqqsugaoeyys->oyeskqayoscwciem()->aeosueemgsygqese() as $aaqqkgyougeiueyq) {
            goto aquqkiggamaoegoo;
            mykiyqcqiegkiqys:
            $ewgwqamkygiqaawc = '';
            goto agemwookwseyycqo;
            ykqsuiyyosyeyscc:
            $ywoucyskcquysiwc[$aaqqkgyougeiueyq->mwikyscisascoeea()] = [self::ICON => $ywoyoawciekocqao->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::TITLE => $aaqqkgyougeiueyq->qcgakseyaikigqco(), self::CONTENT => $ewgwqamkygiqaawc];
            goto ugogoekeckgcmuaw;
            isewysikysqewkis:
            cwswueuqoamqasya:
            goto wiwoiyoakywqyaiy;
            mqimkwickkgqqeoi:
            if (!$icwicymcioeyeyek) {
                goto cwswueuqoamqasya;
            }
            goto kwyimqumkuuyaiku;
            mceucsaeouuwyumm:
            ManipulateArray::unset($uykgysuswksgmwqy, ["\x63\x62", ManipulateString::ogimogiceeekegoi(ManipulateString::mkwcwqkqeqkqyggc($meywaqqsugaoeyys)) . self::_ID]);
            goto ceiuqsiqgiuiekem;
            igmmqwyawcuuckkq:
            if ($ewgwqamkygiqaawc) {
                goto suuskagowwgsouqw;
            }
            goto eouwacqiommmeaqc;
            saauykgakaeiyoua:
            if (!$momcykaoccoymeig instanceof Index) {
                goto kgmeiwiakwicgkkk;
            }
            goto qwemkcoaseywkuuc;
            agemwookwseyycqo:
            $egkyssmuqcwaciya = $aaqqkgyougeiueyq->uecyuoauykiqqkey();
            goto cquecqekuucwoumw;
            ugogoekeckgcmuaw:
            csieaismmmocyacu:
            goto egesuwkqkmaigaoe;
            kwyimqumkuuyaiku:
            $essikcmqiyqaqoaq = [];
            goto gkqiqaqecmoogmaa;
            wiwoiyoakywqyaiy:
            kgmeiwiakwicgkkk:
            goto igmmqwyawcuuckkq;
            gkqiqaqecmoogmaa:
            $uykgysuswksgmwqy = $momcykaoccoymeig->waeasakssissiuqg()->get_columns();
            goto mceucsaeouuwyumm;
            ugykmcouiwiscoqu:
            $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy, ["\x63\154\x61\x73\163" => "\164\141\x62\154\145\x2d\x62\x6f\162\x64\145\162\154\145\x73\163\x20\164\x61\142\154\x65\x2d\163\164\162\151\x70\x65\144\x20\146\157\x6e\x74\x2d\x31\66"]);
            goto isewysikysqewkis;
            cquecqekuucwoumw:
            $ywoyoawciekocqao = $egkyssmuqcwaciya::symcgieuakksimmu();
            goto koiscokkkaimiecq;
            owuuuiekkaeoeacq:
            $momcykaoccoymeig = $ywoyoawciekocqao->cgswceaawqgeskua("\151\156\144\x65\x78");
            goto saauykgakaeiyoua;
            gsymkkskwsgggoic:
            ooqksueucyagyuoe:
            goto ugykmcouiwiscoqu;
            koiscokkkaimiecq:
            if (!$ywoyoawciekocqao instanceof Model) {
                goto omykokikgocoikec;
            }
            goto owuuuiekkaeoeacq;
            egesuwkqkmaigaoe:
            yssqmyoaokkksukc:
            goto syusgosewwkoagoq;
            sqwuqegeiisoiiuq:
            suuskagowwgsouqw:
            goto uscokkmquayiukag;
            qwemkcoaseywkuuc:
            $icwicymcioeyeyek = $meywaqqsugaoeyys->iscemaoqqckmkago($aaqqkgyougeiueyq->mwikyscisascoeea(), $mksyucucyswaukig);
            goto mqimkwickkgqqeoi;
            aquqkiggamaoegoo:
            if (!($aaqqkgyougeiueyq instanceof Foreign && $aaqqkgyougeiueyq->gumeeckcowwoyoci())) {
                goto csieaismmmocyacu;
            }
            goto mykiyqcqiegkiqys;
            eouwacqiommmeaqc:
            $ewgwqamkygiqaawc = ManipulateHTML::wegccueewucwyaew([self::CONTENT => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\124\150\x65\x72\145\x20\141\x72\x65\40\156\x6f\x74\40\x25\x73\x20\171\x65\x74\56", PR__CMN__FOUNDATION), $ywoyoawciekocqao->oyeskqayoscwciem()->giiayuqckuiecosm()))]);
            goto sqwuqegeiisoiiuq;
            uscokkmquayiukag:
            omykokikgocoikec:
            goto ykqsuiyyosyeyscc;
            ceiuqsiqgiuiekem:
            foreach ($icwicymcioeyeyek as $momcykaoccoymeig => $igqsaukqcqscimok) {
                goto kqyoakickmseyyeq;
                ykwasaaoeeiuomim:
                $iwywmkygwewiamwm = $ywoyoawciekocqao->uesweuocqoywoyms($aokagokqyuysuksm);
                goto acggikioyeueeowg;
                micceocwuwkyusic:
                foreach ($uykgysuswksgmwqy as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
                    $essikcmqiyqaqoaq[$momcykaoccoymeig][$qgoqiacsiccwoawi] = $ywoyoawciekocqao->kamyqikiiuwqiiuw($qgoqiacsiccwoawi, ManipulateArray::get($igqsaukqcqscimok, $qgoqiacsiccwoawi), $igqsaukqcqscimok);
                    iauwuugggmegwisk:
                }
                goto iwueukqcywkiyqge;
                kqyoakickmseyyeq:
                $aokagokqyuysuksm = ManipulateArray::get($igqsaukqcqscimok, $ywoyoawciekocqao->kumuygiiqswoyasy());
                goto micceocwuwkyusic;
                egaymskkosukqeao:
                aukucaieceiwesmm:
                goto kaiesowkgwogqseg;
                kaiesowkgwogqseg:
                osmmoyqkqoucsgow:
                goto kicwiowcogmauwiy;
                cwikoaeqmmoimmso:
                $essikcmqiyqaqoaq[$momcykaoccoymeig]["\x74\x72\137\x61\x74\x74\162\163"] = ["\x64\141\164\x61\x2d\x68\x72\145\146" => $iwywmkygwewiamwm];
                goto egaymskkosukqeao;
                iwueukqcywkiyqge:
                wgiygcmqaokywuqa:
                goto ykwasaaoeeiuomim;
                acggikioyeueeowg:
                if (!$iwywmkygwewiamwm) {
                    goto aukucaieceiwesmm;
                }
                goto cwikoaeqmmoimmso;
                kicwiowcogmauwiy:
            }
            goto gsymkkskwsgggoic;
            syusgosewwkoagoq:
        }
        goto oeusomaaeekakake;
        icumkkykaoqycqqu:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto oeamoqweiueaueay;
        eweaaismksecwagy:
        parent::render();
        goto icumkkykaoqycqqu;
        oeusomaaeekakake:
        sckioayasmkcoeoo:
        goto kwuckkyqaygwgcuy;
        owgsameoayaogsma:
        if (!$mksyucucyswaukig) {
            goto mcqucouuiuoagqwc;
        }
        goto kyiwsiakwgiwouyi;
        qkyciyiwkmgkmquk:
        $ccowyogiqwikkkie[] = [self::LABEL => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\145\144\x69\x74\x5f\151\164\145\x6d"), self::COLOR => self::WARNING, self::LINK => $meywaqqsugaoeyys->yyykkcyiksewsoqy($aokagokqyuysuksm)];
        goto sksgcusuyqcwqswe;
        aoaqwygkaagiuuws:
        $yygmoeguaqyumuui = $meywaqqsugaoeyys->giiqwciomksuiymm($yygmoeguaqyumuui);
        goto esagiiawomyacuiw;
        sksgcusuyqcwqswe:
        yuoeumyiuqkuouey:
        goto ayceeyuocgowqwsa;
        iuwkiyimqmgguose:
        $ccowyogiqwikkkie[] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\145\x66" => "\43", "\143\x6c\x61\x73\x73" => "\142\x74\x6e\x20\164\145\170\164\55\144\x65\x63\x6f\162\x61\x74\x69\x6f\156\x2d\156\157\x6e\x65\40\x62\x74\156\x2d\x64\141\156\147\x65\162\x20\x70\162\x2d\143\157\156\146\x69\162\155\141\x62\154\x65\55\x61\143\x74\x69\x6f\156", "\x64\x61\164\x61\55\x63\x6f\x6e\x66\151\x67" => $meywaqqsugaoeyys->ymaommgoigkakyes($meywaqqsugaoeyys->cgccmsewskigcuig($aokagokqyuysuksm))], $this->oyeskqayoscwciem()->uikgwcuascgeissw("\162\x65\155\157\x76\145\x5f\151\164\x65\x6d"));
        goto yggseoaommssscwo;
        oeamoqweiueaueay:
        $mksyucucyswaukig = $this->imgymusqgccqsqqq();
        goto owgsameoayaogsma;
        gqimwsyemoewagcy:
        ManipulateArray::unset($yygmoeguaqyumuui, [self::ID]);
        goto aoaqwygkaagiuuws;
        ayceeyuocgowqwsa:
        if (!$meywaqqsugaoeyys->mukyysqkgaimcygs()) {
            goto eyiwqgqcsqakwqss;
        }
        goto iuwkiyimqmgguose;
        giuccakymqymawgk:
        mcqucouuiuoagqwc:
        goto sicgyiyiocyygkoc;
        esagiiawomyacuiw:
        $ccowyogiqwikkkie = [];
        goto maaisuqwkymeguys;
        awgmegueeqeyqamu:
        $yygmoeguaqyumuui = array_filter(array_keys((array) $mksyucucyswaukig));
        goto gqimwsyemoewagcy;
        yggseoaommssscwo:
        eyiwqgqcsqakwqss:
        goto aeiemwacaiygemmg;
        maaisuqwkymeguys:
        if (!$meywaqqsugaoeyys->ggwyugcggywuwcse()) {
            goto yuoeumyiuqkuouey;
        }
        goto qkyciyiwkmgkmquk;
        kwuckkyqaygwgcuy:
        echo $this->iuygowkemiiwqmiw("\x73\x68\157\x77", ["\164\141\x62\x73" => $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\157\x72\155\137\166\151\x65\167\x5f\x73\150\157\167\x5f{$meywaqqsugaoeyys->miwqiiqeegeqcwis()}\137\164\141\x62\163"), $ywoucyskcquysiwc, $mksyucucyswaukig), "\x6e\141\155\x65" => $this->aakmagwggmkoiiyu(), "\x6f\142\152\145\x63\x74" => $mksyucucyswaukig, "\155\x6f\x64\x65\154" => $this->mgogaykgkoogasim(), "\x69\x74\145\x6d\x73" => array_filter($meywaqqsugaoeyys->eukyqwmmeyakcyoo($mksyucucyswaukig, $yygmoeguaqyumuui)), "\x74\151\x74\154\145" => $this->mmqossqsksemasay("\x76\x69\x65\167\137\x69\x74\145\155"), "\142\165\164\164\157\156\x73" => $ccowyogiqwikkkie, "\x6d\141\x69\156\137\x6b\145\x79" => "\157\x76\x65\x72\x76\151\x65\x77"]);
        goto giuccakymqymawgk;
        aeiemwacaiygemmg:
        $ywoucyskcquysiwc = ["\x6f\x76\x65\162\x76\x69\145\x77" => [self::ICON => IconFontawesomeInterface::ICON_EYE, self::TITLE => __("\x4f\x76\x65\162\166\151\x65\167", PR__CMN__FOUNDATION)]];
        goto yyqygaokeccgugos;
        kyiwsiakwgiwouyi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto awgmegueeqeyqamu;
        sicgyiyiocyygkoc:
    }
}
