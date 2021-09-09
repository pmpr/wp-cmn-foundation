<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\ManipulateWidget;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\WPSetting;
use WP_Post;
use WP_Term;

class Action extends Callback
{
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\x77\x69\x67\x5f\162\145\x6e\144\x65\x72\137\x66\151\x6c\x65\x6e\x61\x6d\x65"), [$this, "\157\157\161\x65\x6b\155\147\163\x71\157\x6d\163\141\x6b\x69\157"]);
        parent::kgquecmsgcouyaya();
    }
    public function aqiicausqkomqkqy()
    {
        goto aossqywwekqqikqg;
        gmcgckcqceckmacq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x61\x6c\154\137\x75\163\x65\162\x5f\x66\165\x6e\143", function ($akemggqscawwikim, ...$qookweymeqawmcwo) {
            return call_user_func($akemggqscawwikim, ...$qookweymeqawmcwo);
        });
        goto qmuyumaoyqiiqqki;
        okimiwmewgssqemo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\x61\x73\145\156\141\155\x65", function ($mkomwsiykqigmqca) {
            return basename($mkomwsiykqigmqca);
        });
        goto gmcgckcqceckmacq;
        qmuyumaoyqiiqqki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x75\x6e\x69\x71\x69\144", function () {
            return uniqid();
        });
        goto omkocsuyieykumsw;
        aossqywwekqqikqg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\170\164\162\x61\x63\164", function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                mwyiogaoucouuymy:
            }
            aokygwoioiokcaoc:
        }, ["\x6e\145\x65\x64\163\x5f\x63\157\x6e\164\x65\x78\164" => true]);
        goto okimiwmewgssqemo;
        iwoueqiswogoyeuk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x6e\x75\155\142\145\x72", function ($eqgoocgaqwqcimie) {
            return is_numeric($eqgoocgaqwqcimie);
        });
        goto ycyigosuicckquco;
        omkocsuyieykumsw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\143\150\x6f", function ($sociqikgoyemqaac) {
            echo $sociqikgoyemqaac;
        });
        goto iwoueqiswogoyeuk;
        ycyigosuicckquco:
    }
    public function sqmuqsscmimwqoki()
    {
        goto eyeayegkquuoikii;
        eyeayegkquuoikii:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\147\x65\x74\x5f\141\x74\164\141\x63\x68\x6d\x65\x6e\164\x5f\165\162\x6c", function ($qssimkkaqkwceqqs) {
            return DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
        });
        goto omwseuoiosmmksik;
        cyiwyicwqagqigyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\160\141\147\145", function ($suaemuyiacqyugsm = null) {
            return is_page($suaemuyiacqyugsm);
        });
        goto caqisoicuegsemyy;
        wwuoaqqiaaguyyiu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\x76\x65\137\160\x6f\163\x74\x73", function () {
            return ManipulatePost::ekwkywuguceaogsk();
        });
        goto uccmgkcygwcoqqmc;
        gsaiaaeooukaeygk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\164\x68\145\137\145\170\x63\x65\162\x70\164", function ($post = null) {
            return ManipulatePost::masoymaamekuykso($post);
        });
        goto kokqmecseosgceak;
        gsikauqawyoasewq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\x70\141\x67\x69\x6e\x61\164\x69\x6f\156\x5f\x6c\151\x6d\151\x74", function () {
            return ManipulateSetting::omkaowmygoqwsywq();
        });
        goto wwuoaqqiaaguyyiu;
        aumygwwssywsogem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\x65\137\164\151\164\x6c\145", function () {
            return the_title();
        });
        goto gsaiaaeooukaeygk;
        ceyyuykckoayuosu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\150\x65\x5f\164\x69\164\x6c\x65", function ($post = 0) {
            return ManipulatePost::qcgakseyaikigqco($post);
        });
        goto aumygwwssywsogem;
        uwkuaykqqqkwgcey:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\164\150\145\137\144\x61\164\x65", function ($saqmwwmqiwmkiwaa = '', $post = null) {
            return ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post);
        });
        goto ceyyuykckoayuosu;
        caqisoicuegsemyy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x70\157\163\164\x5f\x73\x74\x61\x74\x75\163", function ($post = null) {
            return get_post_status($post);
        });
        goto suaiaeakuwkeaggc;
        amegcwiaikcwyuws:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\160\157\163\164\137\x63\x6c\x61\163\163", function ($egkyssmuqcwaciya, $post = null) {
            post_class($egkyssmuqcwaciya, $post);
        });
        goto emcskqgacoswgmog;
        qouwgawyockmkiqw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\x61\x73\x5f\x65\x78\x63\x65\x72\160\164", function ($post) {
            return DecoratorPost::seewsasmyoyciiee($post);
        });
        goto wqeeammwsuusmyum;
        kwywuqumeioqgcme:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\x65\137\x63\157\x6e\x74\145\x6e\x74", function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) {
            return the_content($yauwwygqkmsmamik, $ecckicuukiesgaig);
        });
        goto ueuqqoamggagceok;
        ikaeueycwmsyseia:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\137\x67\145\164\137\141\x74\164\141\x63\150\x6d\145\156\164\137\151\155\x61\x67\x65\137\165\162\x6c", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') {
            goto umuseoycuocwmkwq;
            sugmesswcyyuwame:
            $eeamcawaiqocomwy = DecoratorAttachment::iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo);
            goto kgkuyiqwqsyqques;
            sceaocsemeoiyuge:
            ygawggoccwiqyaqy:
            goto sugmesswcyyuwame;
            cygwqimwgaceaogu:
            $eeamcawaiqocomwy = DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
            goto aakuioygmuqkiueu;
            aakuioygmuqkiueu:
            goto wiiyoqsikgcqqygi;
            goto sceaocsemeoiyuge;
            umuseoycuocwmkwq:
            if ($oiegiwogmwmawkeo) {
                goto ygawggoccwiqyaqy;
            }
            goto cygwqimwgaceaogu;
            deigmocesygywwwq:
            return $eeamcawaiqocomwy;
            goto awcawqaigquqqywo;
            kgkuyiqwqsyqques:
            wiiyoqsikgcqqygi:
            goto deigmocesygywwwq;
            awcawqaigquqqywo:
        });
        goto waukqcouoysuesec;
        swmkwwkoguyyoogq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\x74\x69\164\154\x65", function ($mksyucucyswaukig) {
            return ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig);
        });
        goto oggqgmiqwuceekqm;
        wwswgqyqcewsqkek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\151\x6d\x61\x67\145", function ($post = null) {
            return ManipulateAttachment::qecqsmowoqmwgagu($post);
        });
        goto qcsiiiieegyokook;
        iuaauoycciukeqaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\150\145\137\x70\157\x73\164\x5f\164\150\165\155\142\156\141\151\x6c\x5f\165\x72\x6c", function ($post, $oiegiwogmwmawkeo = "\x70\157\163\164\x2d\x74\x68\x75\155\x62\x6e\141\x69\x6c") {
            return ManipulatePost::uamasysiccecccmw($oiegiwogmwmawkeo, $post);
        });
        goto amegcwiaikcwyuws;
        caeakwsemagcwswc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\160\157\x73\x74\137\164\171\x70\145", function ($post) {
            return ManipulatePost::gueasuouwqysmomu($post);
        });
        goto qwcmwosyocyqyomq;
        suaiaeakuwkeaggc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\143\141\164\145\x67\157\x72\171\137\154\x69\156\153", function ($guwumyyyakswawas) {
            return get_category_link($guwumyyyakswawas);
        });
        goto igyikaemwiwqyeqq;
        iiyuccyiiyoguicm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\x5f\x74\x68\145\x5f\x70\x6f\x73\x74\x5f\164\x68\165\155\142\156\x61\151\x6c", function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) {
            return DecoratorPost::smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto iuaauoycciukeqaw;
        qwcmwosyocyqyomq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\x73\x5f\160\157\x73\x74\x5f\164\150\x75\155\x62\x6e\x61\151\x6c", function ($post) {
            return DecoratorPost::oaqimsyggeyyceig($post);
        });
        goto qouwgawyockmkiqw;
        wqeeammwsuusmyum:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x70\x65\x72\155\x61\154\151\156\x6b", function ($post, $cwwowqyuwccuykom = false) {
            return ManipulatePost::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom);
        });
        goto gsikauqawyoasewq;
        kokqmecseosgceak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x65\x64\151\164\x5f\x6c\x69\156\153", function ($mksyucucyswaukig) {
            goto mkqikqqsikqoqgwy;
            somiowsyicsqgggg:
            goto egukkoceuuaqqwqu;
            goto aoyasgammyaegmqk;
            aoyasgammyaegmqk:
            hkcqsqgccmogcyim:
            goto wwagacmausicisuq;
            omusesiokggskasg:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto hkcqsqgccmogcyim;
            }
            goto ygasycygmaumayys;
            ygasycygmaumayys:
            if (!$mksyucucyswaukig instanceof WP_Term) {
                goto rkqioecyciickiga;
            }
            goto cwcegeayeuuqccgs;
            cwcegeayeuuqccgs:
            $iwywmkygwewiamwm = ManipulateTerm::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto egcsgekkgiikcmsc;
            mkqikqqsikqoqgwy:
            $iwywmkygwewiamwm = "\43";
            goto omusesiokggskasg;
            wuiecqogyoemkmyo:
            return $iwywmkygwewiamwm;
            goto nmkyycyeioimqmcc;
            egcsgekkgiikcmsc:
            rkqioecyciickiga:
            goto somiowsyicsqgggg;
            wwagacmausicisuq:
            $iwywmkygwewiamwm = DecoratorPost::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto omgqccwciyuekagc;
            omgqccwciyuekagc:
            egukkoceuuaqqwqu:
            goto wuiecqogyoemkmyo;
            nmkyycyeioimqmcc:
        });
        goto swmkwwkoguyyoogq;
        iaeuoauagoisyium:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\141\x74\x74\141\143\x68\x6d\145\x6e\x74", function ($post = null) {
            return ManipulateAttachment::aauyuieeeaakygki($post);
        });
        goto cyiwyicwqagqigyw;
        igyikaemwiwqyeqq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x70\157\x73\x74", function ($post = null) {
            return ManipulatePost::get($post);
        });
        goto uwkuaykqqqkwgcey;
        waukqcouoysuesec:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x70\157\163\164\x5f\164\x79\x70\145\137\157\142\x6a\x65\143\164", function ($post) {
            return ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post));
        });
        goto caeakwsemagcwswc;
        omwseuoiosmmksik:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\160\157\x73\x74\137\x6d\x65\x74\x61", function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) {
            return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog);
        });
        goto ikaeueycwmsyseia;
        ueuqqoamggagceok:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\143\x75\163\x74\x6f\155\x5f\160\157\x73\x74\137\x74\x79\x70\145\x5f\163\x69\x6e\147\x6c\x65", function () {
            return is_singular(ManipulatePost::mwoyqeeigwqoamiw());
        });
        goto wwswgqyqcewsqkek;
        uccmgkcygwcoqqmc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\x68\x65\137\160\x6f\163\164", "\x74\x68\145\137\x70\x6f\163\164");
        goto wwuiqmaaemswyeas;
        wwuiqmaaemswyeas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\164\x68\145\137\x63\x6f\156\164\145\x6e\164", function ($post) {
            return ManipulatePost::souwykwwmyygqyqi($post);
        });
        goto kwywuqumeioqgcme;
        qcsiiiieegyokook:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\x70\157\163\x74", function ($post = null, $cwwowqyuwccuykom = false) {
            return ManipulatePost::get($post, self::OBJECT, $cwwowqyuwccuykom) instanceof WP_Post;
        });
        goto iaeuoauagoisyium;
        oggqgmiqwuceekqm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\151\x64", function ($mksyucucyswaukig) {
            goto kwyiqscekoommuog;
            aaiwsawyuaucyeas:
            $aokagokqyuysuksm = $mksyucucyswaukig;
            goto ecoikiciouuikmgs;
            geuasysqogwouqaa:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto igkaiscayyickgkg;
            }
            goto uwoyauwaiqakumuy;
            eakqkewcgqyewkee:
            igkaiscayyickgkg:
            goto ggmkcyyawgwomqmo;
            keyoygyawmmuiysi:
            return $aokagokqyuysuksm;
            goto muamuiocsyikcmou;
            esyqewcegauewswi:
            cmkiiseesikwqgou:
            goto keyoygyawmmuiysi;
            asgweagmgkwuaeey:
            eacucucugqmmwees:
            goto awqyqyqeqkciygcg;
            macuoqyigoeqkkwa:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($mksyucucyswaukig);
            goto asgweagmgkwuaeey;
            ecoikiciouuikmgs:
            yoggkcicgggcyesq:
            goto yawqcawaywkgqkkq;
            uwoyauwaiqakumuy:
            if ($mksyucucyswaukig instanceof WP_Term) {
                goto uqucqgwcgoqomyuk;
            }
            goto yauywgkiwqgwmoge;
            cskuqsmksmimaewq:
            uqucqgwcgoqomyuk:
            goto macuoqyigoeqkkwa;
            ggmkcyyawgwomqmo:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($mksyucucyswaukig);
            goto esyqewcegauewswi;
            kwyiqscekoommuog:
            $aokagokqyuysuksm = '';
            goto geuasysqogwouqaa;
            yawqcawaywkgqkkq:
            goto eacucucugqmmwees;
            goto cskuqsmksmimaewq;
            yauywgkiwqgwmoge:
            if (!is_numeric($mksyucucyswaukig)) {
                goto yoggkcicgggcyesq;
            }
            goto aaiwsawyuaucyeas;
            awqyqyqeqkciygcg:
            goto cmkiiseesikwqgou;
            goto eakqkewcgqyewkee;
            muamuiocsyikcmou:
        });
        goto iiyuccyiiyoguicm;
        emcskqgacoswgmog:
    }
    public function ugugagoguiycqeys()
    {
        goto cwogqueiqawomkuc;
        waekkoqkywowucqm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x75\x6e\163\x65\164", function ($uomewyckeuqoqocu, $uusmaiomayssaecw) {
            ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            return $uomewyckeuqoqocu;
        });
        goto iyyoksuqkyayycyo;
        qyauskeceyuommay:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x72\x65\x61\164\145", function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') {
            return ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
        });
        goto skuiqymemkkmcasa;
        ckcsasciyamuyeak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\x69\143\x6f\x6e", function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) {
            return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        });
        goto rayeowssukccumsa;
        kwocuyyugaqsicqy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\x75\162\x6c", function ($eeamcawaiqocomwy) {
            return ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy);
        });
        goto ckcsasciyamuyeak;
        cwogqueiqawomkuc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\141\156\x5f\163\x68\x6f\167\137\x6f\156\x5f\147\162\x69\x64", function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) {
            goto aoquaueqscawcquu;
            mcamcymgukiawmca:
            qsiiueeogkusyayq:
            goto caeuciiioaqyuyug;
            mkcqgkuwwkekeyea:
            $uasyiiacieyekiia = ["\170\163", "\x73\x6d", "\155\144", "\x6c\147", "\x78\x6c"];
            goto ymuwkueqksmiucek;
            caeuciiioaqyuyug:
            return rtrim($aqykuigiuwmmcieu);
            goto egkscycmsoysyukk;
            ymuwkueqksmiucek:
            foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) {
                goto ioymoeauqmugekqw;
                eeuyyauaomyugqso:
                uismokoooeicygyy:
                goto cmqcmgwesykwwosy;
                cmqcmgwesykwwosy:
                $ycuyiqagsmgikago = '';
                goto ygqwqqiowseokqyy;
                mkuwumgwoyasswam:
                $ycuyiqagsmgikago .= "\55";
                goto mrocimywqwigwumc;
                cckaqseuwsokgqky:
                if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                    goto msokmumgqigwgwwc;
                }
                goto aakueiomkcyiiows;
                aakueiomkcyiiows:
                $aqykuigiuwmmcieu .= "\x20\x64\55{$ycuyiqagsmgikago}\x62\x6c\x6f\x63\x6b";
                goto iauiowaaqsooooco;
                mrocimywqwigwumc:
                goto soooekmauiwsaemc;
                goto eeuyyauaomyugqso;
                ioymoeauqmugekqw:
                $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, $ycuyiqagsmgikago, false);
                goto oesewmcmiyceckae;
                iauiowaaqsooooco:
                goto acaseyakoigmukmc;
                goto cwsmkieawokgkqso;
                oesewmcmiyceckae:
                if ($ycuyiqagsmgikago == "\x78\163") {
                    goto uismokoooeicygyy;
                }
                goto mkuwumgwoyasswam;
                gqyooycgsagyyeia:
                acaseyakoigmukmc:
                goto ugkuauswwusmgeak;
                cwsmkieawokgkqso:
                msokmumgqigwgwwc:
                goto skaswwgougcyyewo;
                ygqwqqiowseokqyy:
                soooekmauiwsaemc:
                goto cckaqseuwsokgqky;
                ugkuauswwusmgeak:
                ycsgumakqqweigca:
                goto mkuuaucmumoqmogc;
                skaswwgougcyyewo:
                $aqykuigiuwmmcieu .= "\x20\x64\x2d{$ycuyiqagsmgikago}\156\x6f\156\145";
                goto gqyooycgsagyyeia;
                mkuuaucmumoqmogc:
            }
            goto askmmowgaoaeucmg;
            wecwoieqkcmgyemy:
            if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
                goto qsiiueeogkusyayq;
            }
            goto mkcqgkuwwkekeyea;
            askmmowgaoaeucmg:
            guouwiieuysyiewm:
            goto mcamcymgukiawmca;
            aoquaueqscawcquu:
            $aqykuigiuwmmcieu = '';
            goto wecwoieqkcmgyemy;
            egkscycmsoysyukk:
        });
        goto waekkoqkywowucqm;
        rayeowssukccumsa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\x73\x70\x69\156\x6e\x65\162", function ($ywmkwiwkosakssii = []) {
            return ManipulateHTML::kqmkicmuscsgqeoi($ywmkwiwkosakssii);
        });
        goto aumiwewkmkcyqsic;
        skuiqymemkkmcasa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\141\156\137\154\141\172\171\137\154\x6f\141\144", function () {
            return $this->sscegwueamckwmcy("\x63\141\x6e\137\x6c\x61\172\x79\137\154\157\x61\x64", true);
        });
        goto mgqoggoasugsqoqm;
        aumiwewkmkcyqsic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x74\145\155\160\154\141\164\145", [$this, "\x79\151\171\x71\x65\143\x61\167\x69\157\171\157\x73\157\141\x77"]);
        goto ukwaqucywiqsqcmw;
        iyyoksuqkyayycyo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x64\x64\137\154\x6f\x63\x61\x74\x69\x6f\156", function ($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null) {
            ManipulateTemplate::kikcumcscysmmuos($qqscaoyqikuyeoaw, $skikiykssoocmmik, $ymqmyyeuycgmigyo, $post);
        });
        goto qyauskeceyuommay;
        mgqoggoasugsqoqm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x61\162\144\x5f\x62\157\164\x74\157\155\x5f\x6d\141\162\x67\151\156", function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) {
            $giwamsoicooomueg = ManipulateHTML::sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg);
            return $giwamsoicooomueg;
        });
        goto gquwcimccausouey;
        gquwcimccausouey:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\x5f\x73\145\x74\x74\151\156\x67", function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) {
            return WPSetting::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        });
        goto kwocuyyugaqsicqy;
        ukwaqucywiqsqcmw:
    }
    public function render()
    {
        goto cgsuikiqggkikaae;
        moeqauuausuqygiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\145\x6e\x64\145\162\x5f\x70\157\x73\164\137\x64\141\164\141", function ($aiowsaccomcoikus = "\164\x69\x74\154\x65", $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) {
            goto uyqsoayeaaumkace;
            kcqewweqqqmekuwi:
            $icwicymcioeyeyek = null;
            goto qkueegaowuyiimgw;
            ygywqwksoumccysq:
            return rawurldecode($icwicymcioeyeyek);
            goto cecomsiewwckuwqy;
            uyqsoayeaaumkace:
            $cwwowqyuwccuykom = false;
            goto ooayswecmkkqgskg;
            guyeaeiscmgksacs:
            waqwicwqkgsgaosm:
            goto keaaqaugoyquwsos;
            kskqckgmygiwqucm:
            $ccamueccusigaaio = $post;
            goto sucgyiymguwououy;
            ooayswecmkkqgskg:
            if (!$ccamueccusigaaio) {
                goto waqwicwqkgsgaosm;
            }
            goto cskesgswygwiqoim;
            ieacisiumswqewsq:
            if (!$post) {
                goto kmgimueiaqoamoiq;
            }
            goto kskqckgmygiwqucm;
            sucgyiymguwououy:
            kmgimueiaqoamoiq:
            goto kcqewweqqqmekuwi;
            qkueegaowuyiimgw:
            switch ($aiowsaccomcoikus) {
                case self::IMAGE:
                    goto yygiyieeyuuqucke;
                    kycuyyawyykwayum:
                    woimcikoqmikiiuo:
                    goto qayscesoyiskoeko;
                    wycaemkqgqoqamga:
                    $icwicymcioeyeyek = DecoratorPost::smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto osuwwuwykkyioics;
                    osgggiswqmmcauic:
                    $icwicymcioeyeyek = ManipulateAttachment::qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto kycuyyawyykwayum;
                    yygiyieeyuuqucke:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x7a\145", "\x74\x68\x75\155\x62\x6e\141\151\154");
                    goto ksaoceiosgkgkeua;
                    ieaumiwogamciyeq:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto wmgmwseuygieasiq;
                    }
                    goto wycaemkqgqoqamga;
                    osuwwuwykkyioics:
                    goto woimcikoqmikiiuo;
                    goto aimoueqqomiogmwe;
                    wesmogqcyeemwqaq:
                    $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\x73", "\x69\155\147\x2d\x73\151\172\145\x20\x73\151\x7a\x65\x2d{$oiegiwogmwmawkeo}");
                    goto ieaumiwogamciyeq;
                    qayscesoyiskoeko:
                    goto uyesmwqkkaeqyqsw;
                    goto ymaiyayeueqekkqu;
                    aimoueqqomiogmwe:
                    wmgmwseuygieasiq:
                    goto osgggiswqmmcauic;
                    ksaoceiosgkgkeua:
                    $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x61\x74\x74\162\163", []);
                    goto wesmogqcyeemwqaq;
                    ymaiyayeueqekkqu:
                case "\x69\155\141\x67\145\137\x75\162\154":
                case "\x69\x6d\141\x67\x65\137\163\162\x63":
                    goto yoikmmqgsuecwqse;
                    yamoqmeywqamiyee:
                    goto iksqmycekaokseuk;
                    goto eisoouawyymkasou;
                    uwcgosckamuosimw:
                    iksqmycekaokseuk:
                    goto quycsusswssyiqek;
                    emwgmewoyckawiaa:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto yumwmakewcuceeeq;
                    }
                    goto ouiwcwgymiycmesy;
                    yoikmmqgsuecwqse:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\151\x7a\x65", "\x74\x68\165\x6d\x62\x6e\141\x69\154");
                    goto emwgmewoyckawiaa;
                    ouiwcwgymiycmesy:
                    $icwicymcioeyeyek = DecoratorPost::uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto yamoqmeywqamiyee;
                    eisoouawyymkasou:
                    yumwmakewcuceeeq:
                    goto gsscqquysycuswow;
                    quycsusswssyiqek:
                    goto uyesmwqkkaeqyqsw;
                    goto cmogamoiwugoaaoo;
                    gsscqquysycuswow:
                    $icwicymcioeyeyek = DecoratorAttachment::iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto uwcgosckamuosimw;
                    cmogamoiwugoaaoo:
                case self::NAME:
                case self::TITLE:
                    $icwicymcioeyeyek = ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio);
                    goto uyesmwqkkaeqyqsw;
                case "\x64\x61\164\145":
                case "\164\x69\x6d\x65":
                case "\x64\141\164\x65\164\x69\x6d\x65":
                    goto gaqweioagqyciyaw;
                    swuwwcumqwckimwy:
                    $somiuasmmwkuceag = ManipulateArray::get($ywmkwiwkosakssii, "\154\157\143\141\x6c\x65", "\146\x61");
                    goto qsqwywcesyquykqq;
                    gmskkukiiwweocwi:
                    goto uyesmwqkkaeqyqsw;
                    goto uqamuckwuksquqia;
                    uyaweoaaqsagsqyi:
                    ycuksimueyoeugmi:
                    goto swuwwcumqwckimwy;
                    qsqwywcesyquykqq:
                    $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\x66\157\162\155\x61\164", $ggauoeuaesiymgee);
                    goto kqscgsuaugsiwiwi;
                    kqscgsuaugsiwiwi:
                    $icwicymcioeyeyek = $this->eciukqcoqmyacwow(ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
                    goto gmskkukiiwweocwi;
                    gaqweioagqyciyaw:
                    switch ($aiowsaccomcoikus) {
                        case "\144\141\164\x65\164\x69\x6d\x65":
                            $ggauoeuaesiymgee = ManipulateSetting::yoaaussmackoisuw();
                            goto ycuksimueyoeugmi;
                        case "\164\x69\x6d\145":
                            $ggauoeuaesiymgee = ManipulateSetting::isiuiegyqiomccsw();
                            goto ycuksimueyoeugmi;
                        case "\144\x61\164\145":
                        default:
                            $ggauoeuaesiymgee = ManipulateSetting::uyomwmskouyyqyyq();
                            goto ycuksimueyoeugmi;
                    }
                    goto scioecswaikeacmy;
                    scioecswaikeacmy:
                    iayqwwsmsuwaykyw:
                    goto uyaweoaaqsagsqyi;
                    uqamuckwuksquqia:
                case self::URL:
                case self::PERMALINK:
                    $icwicymcioeyeyek = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio);
                    goto uyesmwqkkaeqyqsw;
                case "\144\145\163\143":
                case self::DESCRIPTION:
                    goto gukawqgamokyceki;
                    syqysaawasmesiqs:
                    goto uyesmwqkkaeqyqsw;
                    goto yeiwocswikqkwyew;
                    mckkqgseimcgkcgu:
                    $icwicymcioeyeyek = ManipulatePost::masoymaamekuykso($ccamueccusigaaio, $gioggcykgoikcwiy);
                    goto syqysaawasmesiqs;
                    gukawqgamokyceki:
                    $gioggcykgoikcwiy = ManipulateArray::get($ywmkwiwkosakssii, "\143\150\x65\143\x6b", true);
                    goto mckkqgseimcgkcgu;
                    yeiwocswikqkwyew:
            }
            goto aweayueuaeoasyms;
            aweayueuaeoasyms:
            meacamomoigoocks:
            goto wyokakscicekiums;
            cskesgswygwiqoim:
            $cwwowqyuwccuykom = true;
            goto guyeaeiscmgksacs;
            wyokakscicekiums:
            uyesmwqkkaeqyqsw:
            goto ygywqwksoumccysq;
            keaaqaugoyquwsos:
            $post = ManipulatePost::get($ccamueccusigaaio, self::OBJECT, $cwwowqyuwccuykom);
            goto ieacisiumswqewsq;
            cecomsiewwckuwqy:
        });
        goto kmmwmccqeuasieoy;
        cgsuikiqggkikaae:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\x65\156\x64\145\x72\x5f\165\163\x65\162\137\x64\141\164\141", [$this, "\x6f\145\141\151\x67\x63\151\163\153\x65\x77\x73\151\151\145\143"]);
        goto yoosmuokogseueas;
        yoosmuokogseueas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\x65\x6e\144\145\162\137\x61\x75\x74\150\157\162\x5f\x64\x61\x74\x61", [$this, "\x6f\145\x61\151\147\x63\151\x73\x6b\x65\167\x73\x69\x69\145\143"]);
        goto moeqauuausuqygiq;
        kmmwmccqeuasieoy:
    }
    public function comment()
    {
        goto osksqmgkikamgaui;
        osksqmgkikamgaui:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x6f\155\155\145\156\x74\x5f\x69\144\137\x66\x69\x65\x6c\144\x73", function ($aokagokqyuysuksm = 0) {
            return comment_id_fields($aokagokqyuysuksm);
        });
        goto wagqsecuquyukiwc;
        qyggcimqgyscmcci:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\143\x6f\155\x6d\145\x6e\x74\137\x61\x75\x74\150\x6f\162", function ($aqqmosqmsuueyaes = 0) {
            return ManipulateComment::mguqscccckuywsya($aqqmosqmsuueyaes);
        });
        goto mwsogcaisqkoyoyo;
        ocwegqcikuwygcos:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\x63\x6f\x6d\155\x65\x6e\x74\x5f\144\141\x74\x65", function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) {
            return ManipulateComment::squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma);
        });
        goto qmesaeogykqacemy;
        usqgeieewckcwumm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\x63\x6f\155\x6d\x65\156\164\x5f\141\x75\x74\x68\157\162\137\x6c\151\x6e\153", function ($aqqmosqmsuueyaes = 0) {
            return get_comment_author_link($aqqmosqmsuueyaes);
        });
        goto qyggcimqgyscmcci;
        ziqysygmaasemyem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x63\x6f\155\155\x65\156\164\137\x74\x69\x6d\x65", function ($saqmwwmqiwmkiwaa = '', $eqwyacwmcqusmwoq = false, $mcmaiqckgiuqayau = true) {
            return get_comment_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $mcmaiqckgiuqayau);
        });
        goto ocwegqcikuwygcos;
        imyyokaecggauwca:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x70\x72\145\166\x69\x6f\165\x73\137\143\x6f\x6d\x6d\x65\156\164\x73\x5f\154\151\x6e\153", function ($pkyyagewkiyckmwy = '') {
            return get_previous_comments_link($pkyyagewkiyckmwy);
        });
        goto iiieosoykaeycaks;
        oaogeakeuqgouywe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x6f\x6d\x6d\x65\156\x74\137\x72\145\x70\154\x79\x5f\x6c\151\156\x6b", function ($ywmkwiwkosakssii = [], $aqqmosqmsuueyaes = null, $post = null) {
            return get_comment_reply_link($ywmkwiwkosakssii, $aqqmosqmsuueyaes, $post);
        });
        goto igcusescocaiyqki;
        igcusescocaiyqki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\x64\x69\x74\x5f\x63\x6f\x6d\155\x65\x6e\x74\x5f\x6c\151\x6e\153", function ($cmwygeyygwqaemaq = null, $caacssaumiqeaoaw = '', $miisqgccsqqcscia = '') {
            return edit_comment_link($cmwygeyygwqaemaq, $caacssaumiqeaoaw, $miisqgccsqqcscia);
        });
        goto kakwaaemoyyusiek;
        iiieosoykaeycaks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\157\155\155\145\x6e\164\x5f\143\x6c\141\163\x73", function ($cmkqisoeyioisqaw, $aqqmosqmsuueyaes) {
            return comment_class($cmkqisoeyioisqaw, $aqqmosqmsuueyaes);
        });
        goto ciuaqmasmqyeioiy;
        wagqsecuquyukiwc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\143\x6f\155\155\x65\x6e\164\137\x6c\x69\x6e\153", function ($aqqmosqmsuueyaes = null, $ywmkwiwkosakssii = []) {
            return get_comment_link($aqqmosqmsuueyaes, $ywmkwiwkosakssii);
        });
        goto ziqysygmaasemyem;
        cycukssoyewuiyyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x63\157\x6d\155\x65\156\164\x5f\x74\145\170\x74", function ($aokagokqyuysuksm = null, $ywmkwiwkosakssii = []) {
            return get_comment_text($aokagokqyuysuksm, $ywmkwiwkosakssii);
        });
        goto oaogeakeuqgouywe;
        kakwaaemoyyusiek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x6e\x65\x78\x74\x5f\x63\x6f\155\x6d\x65\156\164\163\x5f\154\151\156\x6b", function ($pkyyagewkiyckmwy = '', $kmsquaeucgusuyio = 0) {
            return get_next_comments_link($pkyyagewkiyckmwy, $kmsquaeucgusuyio);
        });
        goto usqgeieewckcwumm;
        mwsogcaisqkoyoyo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x63\157\x6d\155\145\x6e\x74\163\137\x6e\x75\155\142\x65\x72\137\164\145\x78\x74", function ($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku) {
            return get_comments_number_text($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku);
        });
        goto imyyokaecggauwca;
        qmesaeogykqacemy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x63\157\155\155\145\x6e\164", function ($aokagokqyuysuksm = null) {
            return ManipulateComment::get($aokagokqyuysuksm);
        });
        goto cycukssoyewuiyyw;
        ciuaqmasmqyeioiy:
    }
    public function mkukcsqosmkeeask()
    {
        goto aiouimmkquyuwagk;
        iwcyguueicgkqmiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\x61\156\151\164\x69\172\145\x5f\x74\x69\x74\x6c\x65", function ($cmwygeyygwqaemaq) {
            return sanitize_title($cmwygeyygwqaemaq);
        });
        goto qswoesemmkuisiak;
        qswoesemmkuisiak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x75\x72\162\145\156\164\137\x75\x73\145\x72\x5f\143\141\156", function ($gkswkiicccswksiq) {
            return current_user_can($gkswkiicccswksiq);
        });
        goto wyaiukacimqqkwso;
        uaewuiuogmissaks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\x6e\x6f\x6e\143\145\x5f\x66\151\x65\x6c\x64", function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) {
            return wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false);
        });
        goto iwcyguueicgkqmiq;
        aiouimmkquyuwagk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\141\144\x6d\151\156\x5f\165\x72\154", function ($mkomwsiykqigmqca, $aaceqemaqqeckueq = "\141\144\x6d\151\156") {
            return admin_url($mkomwsiykqigmqca, $aaceqemaqqeckueq);
        });
        goto msmyywuowokwiswe;
        wyaiukacimqqkwso:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\165\x73\145\x72\x5f\x6c\157\x67\147\145\144\137\151\x6e", function () {
            return DecoratorUser::ksgkoukcicwkkaum();
        });
        goto aiqouoismmsiakak;
        msmyywuowokwiswe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\x5f\154\x6f\x67\x6f\165\164\x5f\x75\162\154", function ($gwqgmkqcgwwmweom = '') {
            return wp_logout_url($gwqgmkqcgwwmweom);
        });
        goto uaewuiuogmissaks;
        aiqouoismmsiakak:
    }
    public function eeoeyakoiycwiuoa()
    {
        goto ykocaswauweieysc;
        eisakkewoaeqqeqi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\163\145\x61\162\143\150\x5f\x66\x6f\162\155", "\147\x65\x74\137\x73\x65\x61\162\x63\150\137\x66\x6f\162\155");
        goto mqckeqywkyewukku;
        mqaemqqgquyscwgg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\x61\x63\164\151\166\145\137\163\151\144\145\142\141\162", function ($momcykaoccoymeig) {
            return DecoratorWidget::ooksqgokuwcmoqcu($momcykaoccoymeig);
        });
        goto aisciyiooggegcwa;
        ykocaswauweieysc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\137\150\145\x61\144", "\x77\x70\137\150\145\141\x64");
        goto aaksksikokoywwqw;
        gueqcauquesmkqym:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\141\x72\x63\150\151\166\x65", function () {
            return DecoratorQuery::migkyseymeomymmy() || ManipulatePage::okiaumcqquyioqcy();
        });
        goto wwiiieggesogkwky;
        aisciyiooggegcwa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x66\x72\157\x6e\164\x5f\160\141\147\145", function () {
            return DecoratorQuery::takycgcamoacksqw();
        });
        goto cymkyayecqkecsso;
        aamogomsaksgcsig:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\145\162\155\x5f\143\x68\x69\154\x64\x72\145\156", function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) {
            return ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii);
        });
        goto kascwigwmyyywwom;
        koyswyqcemwusuku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\x79\156\x61\x6d\151\143\x5f\x73\x69\144\145\142\x61\162", function ($momcykaoccoymeig) {
            DecoratorWidget::esuiacmywcmmsmao($momcykaoccoymeig);
        });
        goto mqaemqqgquyscwgg;
        aaksksikokoywwqw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\137\x66\157\x6f\x74\x65\162", "\x77\x70\x5f\x66\x6f\x6f\164\x65\162");
        goto kcsegweogmaqiwco;
        oosoeecugcecmoqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x70\157\163\164\x5f\x74\x79\x70\145\137\141\162\x63\150\x69\x76\x65\x5f\x6c\151\156\x6b", function ($useksmwkuswkwcqg) {
            return ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg);
        });
        goto kssaskooygaesyuq;
        uiookuuakyqyuagw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x70\x61\147\x65\137\x62\171\x5f\160\x61\x74\x68", function ($mkomwsiykqigmqca) {
            return ManipulatePage::ssacaeeassumyuws($mkomwsiykqigmqca);
        });
        goto yeqcqmakwyuoaayk;
        muoeugawocmikiua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\145\x72\155", function ($post = null, $kesssewsiegssiya = '', $qqgsimqiqyaugceg = true) {
            return ManipulatePost::kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg);
        });
        goto bgwomyaccmauskgm;
        cmsgsoqiskwwqywg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\145\162\x6d\137\144\x65\x73\143\x72\x69\160\164\151\x6f\156", function ($iwewcwusemqaiggk = 0) {
            return term_description($iwewcwusemqaiggk);
        });
        goto aamogomsaksgcsig;
        bgwomyaccmauskgm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\x74\x65\162\155\x5f\154\151\156\x6b", function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') {
            return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        });
        goto cmsgsoqiskwwqywg;
        ekkswyasyksokemg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\141\165\164\x68\x6f\x72\x5f\160\157\163\x74\163\137\x75\x72\154", function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') {
            return DecoratorAuthor::mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum);
        });
        goto mqsoccawiacgogca;
        syicggsyayqwywma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\x64\151\164\x6f\x72", function ($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck = []) {
            return wp_editor($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck);
        });
        goto ykmiqawqiommeyic;
        kcsegweogmaqiwco:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\157\x64\171\137\x63\154\x61\163\x73", "\x62\157\x64\171\x5f\143\x6c\141\x73\x73");
        goto sqigasuoiqyqqokc;
        ukswuuooigiykaso:
        $this->comment();
        goto iqmymqqskgsgsiku;
        oyoiceikawwqskai:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\150\x65\137\x61\165\x74\150\157\x72\137\x6d\x65\x74\141", function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) {
            return DecoratorAuthor::igawqaomowicuayw($aiowsaccomcoikus, ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce));
        });
        goto ekkswyasyksokemg;
        kssaskooygaesyuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\157\x6d\x65\137\165\x72\154", function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) {
            return ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
        });
        goto somoaammcamiswiq;
        goiywqywgesicwsm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\x74\141\170", function ($kesssewsiegssiya = null) {
            return DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya);
        });
        goto iuamoyacomwmyswu;
        msqiamqqoiceauwy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\x75\142\155\x69\x74\x5f\142\x75\164\164\x6f\x6e", function () {
            return submit_button();
        });
        goto iawimoagycsccyqw;
        imuyoescowgckyyc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x6f\x70\164\151\157\156", function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) {
            return DecoratorOption::get($omkysikckkcieckq, $ggauoeuaesiymgee);
        });
        goto uiookuuakyqyuagw;
        cymkyayecqkecsso:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x5f\x61\144\x6d\151\156\137\163\x65\x61\162\x63\x68\x5f\x71\x75\x65\x72\x79", function () {
            _admin_search_query();
        });
        goto gueqcauquesmkqym;
        yyicwymeasmimggy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x61\166\141\164\x61\162", function ($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') {
            return ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee);
        });
        goto oyoiceikawwqskai;
        qwyuoiycqcaaakcq:
        $this->sqmuqsscmimwqoki();
        goto ukswuuooigiykaso;
        eakgamsscsuususi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\163\145\141\162\x63\x68\x5f\161\165\x65\162\171", function ($sekkmwqwqwcayiwg = true) {
            return get_search_query($sekkmwqwqwcayiwg);
        });
        goto coskskmacukoewgo;
        mqsoccawiacgogca:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\137\x64\x72\x6f\160\x64\x6f\x77\156\137\143\141\x74\145\x67\157\x72\151\x65\163", function ($ywmkwiwkosakssii) {
            wp_dropdown_categories($ywmkwiwkosakssii);
        });
        goto muoeugawocmikiua;
        esaoimegkqmoakoo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\x67\145\x74\137\x61\164\164\141\143\x68\x6d\145\156\x74\x5f\x69\155\x61\147\x65", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = "\164\x68\165\x6d\142\156\x61\151\154", $wisgiwskwawciiee = []) {
            return ManipulateAttachment::qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto yyicwymeasmimggy;
        iqmymqqskgsgsiku:
        $this->mkukcsqosmkeeask();
        goto qyeiyecmaomycoks;
        moicgacciggecuie:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\145\137\167\151\x64\147\x65\x74", function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) {
            DecoratorWidget::assameyusgwogmce($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        });
        goto qqsiesyooukcuege;
        wwiiieggesogkwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\157\x5f\x6d\x65\164\141\x5f\142\157\x78\145\x73", function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) {
            do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig);
        });
        goto moicgacciggecuie;
        coskskmacukoewgo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\157\137\x61\143\164\151\157\x6e", function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) {
            $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo);
        });
        goto imuyoescowgckyyc;
        iuamoyacomwmyswu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\154\x6f\147\151\x6e\146\x6f", function ($ekcswiguywieeeoc) {
            return get_bloginfo($ekcswiguywieeeoc);
        });
        goto oosoeecugcecmoqu;
        kascwigwmyyywwom:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\164\145\x72\x6d\x5f\x74\151\x74\x6c\x65", function ($iwewcwusemqaiggk) {
            return ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
        });
        goto soewwyoqiysyqsmm;
        pmmcyycmwceweqck:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\141\x64\144\137\x74\150\151\x63\x6b\142\x6f\x78", function () {
            add_thickbox();
        });
        goto eakgamsscsuususi;
        muiiokquumgiyaas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x68\x65\143\153\145\144", function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) {
            goto kouykoaqsyamwkow;
            cwaksqcggwcaucmo:
            goto iussoiiiygmaqoey;
            goto yymmsiqcoeikoges;
            wosiwcgiequysoiq:
            iussoiiiygmaqoey:
            goto ecicsgkwsukqmquo;
            kouykoaqsyamwkow:
            if (!is_array($yeacayasgueouoqc)) {
                goto ccuiyiguswiossui;
            }
            goto miigyyocoaqouyws;
            mycaymeeoakigqwk:
            $yeacayasgueouoqc = $gmeoaiyogiokeeau;
            goto wosiwcgiequysoiq;
            oyiogyamekukoqce:
            $yeacayasgueouoqc = null;
            goto cwaksqcggwcaucmo;
            miigyyocoaqouyws:
            if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc)) {
                goto kmoguoggeuugwcuk;
            }
            goto oyiogyamekukoqce;
            cqkkmgicucyoeqca:
            return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false);
            goto iiymmyommkikmyqa;
            yymmsiqcoeikoges:
            kmoguoggeuugwcuk:
            goto mycaymeeoakigqwk;
            ecicsgkwsukqmquo:
            ccuiyiguswiossui:
            goto cqkkmgicucyoeqca;
            iiymmyommkikmyqa:
        });
        goto esiuqyuiuagocqce;
        sqigasuoiqyqqokc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\x5f\x6e\x61\166\137\155\x65\156\165", "\167\x70\x5f\x6e\141\x76\x5f\155\x65\156\x75");
        goto aosyiicmoiuswsce;
        iawimoagycsccyqw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\157\x5f\x73\x65\164\x74\x69\156\x67\163\137\x73\145\x63\x74\151\x6f\156\x73", function ($awcmekyiwwkeyisq) {
            return do_settings_sections($awcmekyiwwkeyisq);
        });
        goto pmmcyycmwceweqck;
        ykmiqawqiommeyic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\x66\x6f\x72\x6d\141\x74\x5f\146\x72\157\x6d\137\155\x69\155\x65\x5f\164\171\x70\145", function ($qiwqkoiamayyqase) {
            goto cwuiegmgmaoasqys;
            semsywguyogigssk:
            return $sqeykgyoooqysmca;
            goto scmyekuemcoeeggy;
            mqkmsmceakcwuykg:
            agosuskgagmqkcqq:
            goto semsywguyogigssk;
            gkkywuycqkawqiuq:
            goto agosuskgagmqkcqq;
            goto swoiuaaoaceaaeou;
            swoiuaaoaceaaeou:
            mqkkmgeccukekuus:
            goto eqewaacwikyoaswc;
            oqsgqmmoqoyoicia:
            if (strpos($qiwqkoiamayyqase, "\x69\155\141\147\x65") !== false) {
                goto mqkkmgeccukekuus;
            }
            goto mqycugoiuasmyycy;
            cwuiegmgmaoasqys:
            $sqeykgyoooqysmca = '';
            goto oqsgqmmoqoyoicia;
            coomeqeooeuaagwm:
            oicqseawwmwcgsua:
            goto gkkywuycqkawqiuq;
            eqewaacwikyoaswc:
            $sqeykgyoooqysmca = "\151\x6d\141\147\x65";
            goto mqkmsmceakcwuykg;
            mqycugoiuasmyycy:
            if (!(strpos($qiwqkoiamayyqase, "\160\144\x66") !== false)) {
                goto oicqseawwmwcgsua;
            }
            goto qiagugckeckokcas;
            qiagugckeckokcas:
            $sqeykgyoooqysmca = "\x70\x64\146";
            goto coomeqeooeuaagwm;
            scmyekuemcoeeggy:
        });
        goto esaoimegkqmoakoo;
        aosyiicmoiuswsce:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\x61\x73\x5f\x6e\x61\x76\x5f\155\145\156\165", "\x68\x61\x73\x5f\x6e\141\166\x5f\x6d\x65\156\x75");
        goto eisakkewoaeqqeqi;
        yeqcqmakwyuoaayk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\x61\144\155\151\x6e", function () {
            return is_admin();
        });
        goto qwyuoiycqcaaakcq;
        mqckeqywkyewukku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\157\155\155\145\156\x74\x73\137\164\145\155\160\x6c\141\x74\x65", "\143\x6f\x6d\155\145\x6e\x74\x73\x5f\x74\145\155\160\154\x61\164\145");
        goto koyswyqcemwusuku;
        qqsiesyooukcuege:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\160\141\147\145\144", function () {
            return DecoratorQuery::sgeaogakoscmysgc();
        });
        goto goiywqywgesicwsm;
        somoaammcamiswiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\145\154\145\143\x74\x65\144", function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) {
            goto kwacykquqegccocg;
            qaiqkuwcooimcsyc:
            if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc)) {
                goto qiygeqkamwuomgie;
            }
            goto wgcwoaukyqokqegs;
            kwacykquqegccocg:
            if (!is_array($yeacayasgueouoqc)) {
                goto ykyauiwkesygwwyq;
            }
            goto qaiqkuwcooimcsyc;
            ioawqeykaygmcusq:
            qiygeqkamwuomgie:
            goto eeemieuggkqicmcm;
            eeemieuggkqicmcm:
            $yeacayasgueouoqc = $ymmmmaiuoocagigk;
            goto ywgasekuusqmywou;
            agwuqimeueqcgeig:
            goto aysgkuigyuqqcuae;
            goto ioawqeykaygmcusq;
            wcgeeoqqamawayyk:
            return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false);
            goto ewmswgookyygmeck;
            uumsakwagcmcusai:
            ykyauiwkesygwwyq:
            goto wcgeeoqqamawayyk;
            wgcwoaukyqokqegs:
            $yeacayasgueouoqc = null;
            goto agwuqimeueqcgeig;
            ywgasekuusqmywou:
            aysgkuigyuqqcuae:
            goto uumsakwagcmcusai;
            ewmswgookyygmeck:
        });
        goto muiiokquumgiyaas;
        soewwyoqiysyqsmm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\137\x5f", function ($cmwygeyygwqaemaq, $mokawwccycoiqeka = "\x64\145\146\141\165\x6c\164") {
            return __($cmwygeyygwqaemaq, $mokawwccycoiqeka);
        });
        goto msqiamqqoiceauwy;
        esiuqyuiuagocqce:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\160\x70\154\171\x5f\146\151\154\164\x65\162\x73", function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) {
            return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo);
        });
        goto syicggsyayqwywma;
        qyeiyecmaomycoks:
    }
    public function iemaakgqgqosiecm()
    {
        goto qcqyawqiwksyicok;
        qcqyawqiwksyicok:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\144\x64\137\164\x77\x69\x67\137\x66\165\x6e\x63\164\151\x6f\x6e\x73"), $this->yyyewgugioamwckw());
        goto ucewekmmuygqecqk;
        ayymceqgcuqkqkmo:
        $this->render();
        goto gkskumckoocyioge;
        ycogsiaoceaiaosi:
        $this->eeoeyakoiycwiuoa();
        goto kqeemeukmoukyeiw;
        ucewekmmuygqecqk:
        $this->aqiicausqkomqkqy();
        goto ayymceqgcuqkqkmo;
        gkskumckoocyioge:
        $this->ugugagoguiycqeys();
        goto ycogsiaoceaiaosi;
        kqeemeukmoukyeiw:
    }
    
    public function ooqekmgsqomsakio($wkcwykowmmmwioqs)
    {
        goto uqimycsoiocokgyi;
        goyyumqwuiywaimq:
        if (!is_string($ymqmyyeuycgmigyo)) {
            goto asqimcomuseoqiue;
        }
        goto oqycocwaiqmyaeow;
        aoqycegeggwwkwya:
        if (!$wksoawcgagcgoask) {
            goto cseseucmsoywsecu;
        }
        goto ukgsemksqoiukgoc;
        mkiiuusasqaucucm:
        if (!$this->yyyewgugioamwckw()->exists($cqygeiuceemyuywc)) {
            goto quikiokiqwkqsqys;
        }
        goto scoaiameyouasusa;
        oqycocwaiqmyaeow:
        $cqygeiuceemyuywc = ManipulateString::wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}\x2f{$wksoawcgagcgoask->gueasuouwqysmomu()}\57{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs);
        goto mkiiuusasqaucucm;
        ukgsemksqoiukgoc:
        $mumucmmgemqwqiia = wp_get_theme();
        goto wkigieqkikmiqqgw;
        iwosowoeugcumagm:
        asqimcomuseoqiue:
        goto auuqmasiciwyueek;
        egyksgscyqmieque:
        return $wkcwykowmmmwioqs;
        goto cgcymuikeqwuqaks;
        uqimycsoiocokgyi:
        if (!(!is_admin() || ManipulateAjax::mcgoysmkqsqooceq())) {
            goto ocwqeygqmqgawqqy;
        }
        goto oggiokiewaqggaoc;
        qcykwgwoyuuqiicc:
        quikiokiqwkqsqys:
        goto iwosowoeugcumagm;
        ykeaeieyycoeqccm:
        oqikauiqoeuyoeyc:
        goto auguaocagomuuqqk;
        geakuimqwgsiaask:
        $wksoawcgagcgoask = self::mqucqomkmisceawy(str_replace(self::AT_SYMBOL, '', $yeacayasgueouoqc));
        goto aoqycegeggwwkwya;
        qawgegcsiawquqcm:
        $yeacayasgueouoqc = ManipulateArray::get($uomewyckeuqoqocu, 0);
        goto geakuimqwgsiaask;
        gcmiayguaqqeiese:
        $ymqmyyeuycgmigyo = ManipulateArray::get(explode("\x5f\137", $yeacayasgueouoqc), 2, $yeacayasgueouoqc);
        goto goyyumqwuiywaimq;
        auguaocagomuuqqk:
        cseseucmsoywsecu:
        goto mggqockcmokwiwuq;
        wkigieqkikmiqqgw:
        $woqmauweeqyeyymc = self::qmkyymgaecsmakqq("{$mumucmmgemqwqiia->get_theme_root()}\57{$mumucmmgemqwqiia->get_stylesheet()}");
        goto ekeokeoweycsyqos;
        wcowkmqskaouuqsm:
        if (!($yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq())) {
            goto qkkocwikmsocekwq;
        }
        goto gcmiayguaqqeiese;
        mggqockcmokwiwuq:
        ocwqeygqmqgawqqy:
        goto egyksgscyqmieque;
        auuqmasiciwyueek:
        qkkocwikmsocekwq:
        goto ykeaeieyycoeqccm;
        oggiokiewaqggaoc:
        $wkcwykowmmmwioqs = ManipulateFile::cgwcgscqeqauaagi($wkcwykowmmmwioqs);
        goto ymcqmgsqsggscmsi;
        scoaiameyouasusa:
        $wkcwykowmmmwioqs = $cqygeiuceemyuywc;
        goto qcykwgwoyuuqiicc;
        ymcqmgsqsggscmsi:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs);
        goto qawgegcsiawquqcm;
        ekeokeoweycsyqos:
        if (!$woqmauweeqyeyymc) {
            goto oqikauiqoeuyoeyc;
        }
        goto wcowkmqskaouuqsm;
        cgcymuikeqwuqaks:
    }
    public function oeaigciskewsiiec($aiowsaccomcoikus = "\156\141\155\145", $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = [])
    {
        goto uaysaomocomaomaw;
        qmiugaqisqiwooio:
        sceeeykswowqeqyi:
        goto usgcuuuscucqesug;
        ugguwkkgqoyseuma:
        swowyqmmmawuumkq:
        goto qmiugaqisqiwooio;
        igygkagcaiiiumqo:
        $icwicymcioeyeyek = null;
        goto qicikuqekgkawwqo;
        qicikuqekgkawwqo:
        if (!$mkucggyaiaukqoce) {
            goto uwsmweegoueoawau;
        }
        goto ommomcekkekaceme;
        kcyaqgaosmmscquy:
        if ($mkucggyaiaukqoce) {
            goto ykaymqwyewgaouaw;
        }
        goto mcegmykimgwocisg;
        ommomcekkekaceme:
        switch ($aiowsaccomcoikus) {
            case "\165\162\154":
                $icwicymcioeyeyek = DecoratorAuthor::mkaiaewoyaimieqg($mkucggyaiaukqoce);
                goto sceeeykswowqeqyi;
            case "\156\x61\155\x65":
                $icwicymcioeyeyek = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\x73\x70\x6c\141\x79\137\156\141\155\145");
                goto sceeeykswowqeqyi;
            case "\x61\x76\141\x74\141\162":
                goto ygiycusyssyegauq;
                ygiycusyssyegauq:
                $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\x69\x7a\145", 64);
                goto qoceommegsyqswsi;
                agukockguesiwmim:
                goto sceeeykswowqeqyi;
                goto iaawmomcqiokucac;
                qoceommegsyqswsi:
                $icwicymcioeyeyek = ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __("\x55\163\145\162\40\x41\166\141\164\x61\162", PR__THM__PMPR));
                goto agukockguesiwmim;
                iaawmomcqiokucac:
        }
        goto ugguwkkgqoyseuma;
        usgcuuuscucqesug:
        uwsmweegoueoawau:
        goto omoayecymwmcysyw;
        omoayecymwmcysyw:
        return $icwicymcioeyeyek;
        goto weyegmawkwggekgi;
        wwwsqwyegoowkmik:
        ykaymqwyewgaouaw:
        goto igygkagcaiiiumqo;
        mcegmykimgwocisg:
        $mkucggyaiaukqoce = ManipulatePost::mguqscccckuywsya($mkucggyaiaukqoce);
        goto wwwsqwyegoowkmik;
        uaysaomocomaomaw:
        $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce, true);
        goto kcyaqgaosmmscquy;
        weyegmawkwggekgi:
    }
    
    public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, $cwwowqyuwccuykom = false)
    {
        goto sgguiaisyueoswkk;
        swekyeqkosmecgsk:
        wqgmqkugcksgscke:
        goto ykemuogoaemeuaoy;
        yemciswoecayuoga:
        return $aqykuigiuwmmcieu;
        goto mumegakqsumekgcs;
        kuyiowwueugqewic:
        if (is_array($ccamueccusigaaio)) {
            goto weecgesamaiayuqo;
        }
        goto uikweusiocekgoey;
        kqsyesawkomqwaqy:
        if (!$yeacayasgueouoqc) {
            goto gyuiwqyyauwqokmc;
        }
        goto kgquoqwyggyuiggk;
        euosgyacescsiqgc:
        goto ywiwqkssuiiukwuk;
        goto eickyskkcemimcqy;
        ggyieuweamgwmwem:
        goto eusygaeoggqeuuki;
        goto wiiuaaemwsioueik;
        sgyickkqymqecksi:
        if (!(!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu))) {
            goto imucwaggwqomwwki;
        }
        goto aqiiysigquiqsgeg;
        eickyskkcemimcqy:
        oeqaiwecuckgoyky:
        goto eygwumawcmyaisee;
        cqkgaiiysokkuwsm:
        foreach ($ccamueccusigaaio as $igqsaukqcqscimok) {
            goto ecikykuqgeaqamwk;
            gekkisqyegwkwcmg:
            goto wqgmqkugcksgscke;
            goto caicmucqkokaecsg;
            ecikykuqgeaqamwk:
            if (!($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true))) {
                goto coegigeuyugiwuou;
            }
            goto gekkisqyegwkwcmg;
            caicmucqkokaecsg:
            coegigeuyugiwuou:
            goto gsyagiygoyamakyu;
            gsyagiygoyamakyu:
            mgykqueoqmyucwky:
            goto ucgagqogckeuiewi;
            ucgagqogckeuiewi:
        }
        goto swekyeqkosmecgsk;
        eaqoyysesmoykmqa:
        sgmqeqeuscaaegqk:
        goto ckicaukcwwiukieg;
        umquossmsyaiciag:
        $aqykuigiuwmmcieu = preg_replace("\57\x28{$ymqmyyeuycgmigyo}\x28\77\41\x2e\x2a{$ymqmyyeuycgmigyo}\x29\x29\x2f", $qqscaoyqikuyeoaw, $yeacayasgueouoqc);
        goto ggooeiyqcockogcy;
        iumuosccokuokwiw:
        $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg();
        goto cmsgueemsueayawi;
        wymawskeqaagkwuo:
        if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) {
            goto sgmqeqeuscaaegqk;
        }
        goto wmiakgoosqcoaeki;
        iqcwoosugwmkmcas:
        $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu);
        goto uaymiioykwgkmoeo;
        uikweusiocekgoey:
        $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "\57{$ccamueccusigaaio}";
        goto ggyieuweamgwmwem;
        qqcciieyaqwkcasi:
        if (!$aqykuigiuwmmcieu) {
            goto yiuwiekcyyquyuak;
        }
        goto oyskccqkmomukcoi;
        oyskccqkmomukcoi:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy("\164\x68\145\155\145\137\164\145\155\x70\x6c\141\x74\x65\137\x72\x65\161\165\x69\x72\145\x6d\x65\x6e\164\x73", $aqykuigiuwmmcieu);
        goto sckwuwwueomkksag;
        ikusickyaccgogwg:
        ywiwqkssuiiukwuk:
        goto icageksksqqgmqom;
        gegweammscwsquwi:
        if (!($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu)) {
            goto qiuouckkycciwuyo;
        }
        goto mmmcsikmcyocmgiw;
        eqkakgkyqqaewqiu:
        if (!$aqykuigiuwmmcieu) {
            goto wuaokqmoyoikkkyu;
        }
        goto iqcwoosugwmkmcas;
        mueeqqskseeiykwg:
        $eyoesceegakeygsi = $this->yyyewgugioamwckw();
        goto wymawskeqaagkwuo;
        icageksksqqgmqom:
        imucwaggwqomwwki:
        goto qqcciieyaqwkcasi;
        sgguiaisyueoswkk:
        $aqykuigiuwmmcieu = null;
        goto mueeqqskseeiykwg;
        ykemuogoaemeuaoy:
        eusygaeoggqeuuki:
        goto yguemqosugisymku;
        wmiakgoosqcoaeki:
        if ($yeacayasgueouoqc) {
            goto eeusamaykaysmgoq;
        }
        goto iumuosccokuokwiw;
        wqyygmuggeegmuua:
        $ekwsasieesaqcsiw .= "\x74\167\x69\147";
        goto awqycuuoeeoioskq;
        uaymiioykwgkmoeo:
        wuaokqmoyoikkkyu:
        goto yemciswoecayuoga;
        aqiiysigquiqsgeg:
        if ($qqscaoyqikuyeoaw !== "\151\x6e\x64\x65\170" && !$cwwowqyuwccuykom) {
            goto oeqaiwecuckgoyky;
        }
        goto kiqaiwiwmeesaagy;
        cmsgueemsueayawi:
        eeusamaykaysmgoq:
        goto aqkukemyueoyscqi;
        eygwumawcmyaisee:
        $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw("\x69\156\144\145\x78", $aqykuigiuwmmcieu);
        goto ikusickyaccgogwg;
        acuusyssiosuysmg:
        gyuiwqyyauwqokmc:
        goto sgyickkqymqecksi;
        awqycuuoeeoioskq:
        cgckkkoaumakemuc:
        goto uoykoouwyqwskyqs;
        kiqaiwiwmeesaagy:
        $aqykuigiuwmmcieu = null;
        goto euosgyacescsiqgc;
        uoykoouwyqwskyqs:
        $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw));
        goto umquossmsyaiciag;
        osmmmeymmeueymog:
        $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc);
        goto gegweammscwsquwi;
        sckwuwwueomkksag:
        yiuwiekcyyquyuak:
        goto uukskyequmqsieuk;
        kgquoqwyggyuiggk:
        if (!$ccamueccusigaaio) {
            goto skqiqqeyqokasmeg;
        }
        goto kuyiowwueugqewic;
        ueqmgcsqwciauqes:
        if (!preg_match("\57\x5c\x2e\133\60\x2d\x39\x61\55\172\135\x2b\44\57\151", $qqscaoyqikuyeoaw)) {
            goto cgckkkoaumakemuc;
        }
        goto wqyygmuggeegmuua;
        ooeaciyoeskuouqi:
        wawmuaweemsioqms:
        goto eqkakgkyqqaewqiu;
        mmmcsikmcyocmgiw:
        $ekwsasieesaqcsiw = "\x2e";
        goto ueqmgcsqwciauqes;
        ckicaukcwwiukieg:
        $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw;
        goto ooeaciyoeskuouqi;
        yguemqosugisymku:
        skqiqqeyqokasmeg:
        goto osmmmeymmeueymog;
        ggooeiyqcockogcy:
        qiuouckkycciwuyo:
        goto acuusyssiosuysmg;
        wiiuaaemwsioueik:
        weecgesamaiayuqo:
        goto cqkgaiiysokkuwsm;
        uukskyequmqsieuk:
        goto wawmuaweemsioqms;
        goto eaqoyysesmoykmqa;
        aqkukemyueoyscqi:
        $yeacayasgueouoqc = str_replace("\x2f\57", "\57", $yeacayasgueouoqc);
        goto kqsyesawkomqwaqy;
        mumegakqsumekgcs:
    }
}
