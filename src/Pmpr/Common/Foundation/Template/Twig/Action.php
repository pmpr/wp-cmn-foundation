<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\167\151\x67\x5f\162\x65\x6e\x64\x65\x72\137\146\x69\x6c\145\x6e\141\155\x65"), [$this, "\x6f\x6f\161\145\x6b\x6d\147\x73\x71\157\155\x73\x61\x6b\x69\157"]);
        parent::kgquecmsgcouyaya();
    }
    public function aqiicausqkomqkqy()
    {
        goto igyikaemwiwqyeqq;
        uwkuaykqqqkwgcey:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\x61\163\145\156\x61\155\145", function ($mkomwsiykqigmqca) {
            return basename($mkomwsiykqigmqca);
        });
        goto ceyyuykckoayuosu;
        aumygwwssywsogem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\165\x6e\151\161\x69\x64", function () {
            return uniqid();
        });
        goto gsaiaaeooukaeygk;
        ceyyuykckoayuosu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x61\154\154\x5f\165\163\145\162\x5f\146\x75\156\x63", function ($akemggqscawwikim, ...$qookweymeqawmcwo) {
            return call_user_func($akemggqscawwikim, ...$qookweymeqawmcwo);
        });
        goto aumygwwssywsogem;
        gsaiaaeooukaeygk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\143\x68\x6f", function ($sociqikgoyemqaac) {
            echo $sociqikgoyemqaac;
        });
        goto kokqmecseosgceak;
        igyikaemwiwqyeqq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\x78\164\x72\141\x63\164", function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                suaiaeakuwkeaggc:
            }
            caqisoicuegsemyy:
        }, ["\156\x65\145\x64\x73\137\143\157\x6e\x74\145\170\x74" => true]);
        goto uwkuaykqqqkwgcey;
        kokqmecseosgceak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\x6e\x75\155\142\145\162", function ($eqgoocgaqwqcimie) {
            return is_numeric($eqgoocgaqwqcimie);
        });
        goto swmkwwkoguyyoogq;
        swmkwwkoguyyoogq:
    }
    public function sqmuqsscmimwqoki()
    {
        goto aumiwewkmkcyqsic;
        quycsusswssyiqek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\164\x68\145\137\x70\x6f\x73\x74\x5f\164\x68\165\x6d\x62\156\141\x69\x6c", function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) {
            return DecoratorPost::smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto cmogamoiwugoaaoo;
        iksqmycekaokseuk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\160\157\x73\164", function ($post = null) {
            return ManipulatePost::get($post);
        });
        goto yoikmmqgsuecwqse;
        gsscqquysycuswow:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\164\151\164\154\x65", function ($mksyucucyswaukig) {
            return ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig);
        });
        goto uwcgosckamuosimw;
        yumwmakewcuceeeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\x63\141\x74\x65\147\157\x72\171\137\154\151\x6e\153", function ($guwumyyyakswawas) {
            return get_category_link($guwumyyyakswawas);
        });
        goto iksqmycekaokseuk;
        kmgimueiaqoamoiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x70\157\163\x74\x5f\164\x79\x70\145\x5f\x6f\142\152\145\x63\x74", function ($post) {
            return ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post));
        });
        goto uyesmwqkkaeqyqsw;
        yoikmmqgsuecwqse:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\164\150\145\x5f\x64\x61\164\x65", function ($saqmwwmqiwmkiwaa = '', $post = null) {
            return ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post);
        });
        goto emwgmewoyckawiaa;
        ymaiyayeueqekkqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\x70\x6f\x73\164\137\x73\x74\141\x74\x75\163", function ($post = null) {
            return get_post_status($post);
        });
        goto yumwmakewcuceeeq;
        qayscesoyiskoeko:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\160\141\x67\145", function ($suaemuyiacqyugsm = null) {
            return is_page($suaemuyiacqyugsm);
        });
        goto ymaiyayeueqekkqu;
        uyesmwqkkaeqyqsw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x70\x6f\x73\x74\x5f\164\171\160\145", function ($post) {
            return ManipulatePost::gueasuouwqysmomu($post);
        });
        goto meacamomoigoocks;
        aumiwewkmkcyqsic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\147\x65\x74\137\x61\x74\x74\141\x63\x68\155\145\156\164\137\165\x72\x6c", function ($qssimkkaqkwceqqs) {
            return DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
        });
        goto ukwaqucywiqsqcmw;
        ycuksimueyoeugmi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x70\x6f\163\x74\137\143\154\141\163\x73", function ($egkyssmuqcwaciya, $post = null) {
            post_class($egkyssmuqcwaciya, $post);
        });
        goto iayqwwsmsuwaykyw;
        aimoueqqomiogmwe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\x69\155\x61\147\x65", function ($post = null) {
            return ManipulateAttachment::qecqsmowoqmwgagu($post);
        });
        goto osgggiswqmmcauic;
        ieaumiwogamciyeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\x74\x68\145\x5f\143\x6f\156\164\x65\156\164", function ($post) {
            return ManipulatePost::souwykwwmyygqyqi($post);
        });
        goto wycaemkqgqoqamga;
        cmogamoiwugoaaoo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\164\x68\145\137\160\157\163\x74\x5f\164\x68\x75\155\142\156\141\151\x6c\137\165\x72\154", function ($post, $oiegiwogmwmawkeo = "\x70\x6f\163\x74\x2d\x74\150\x75\155\142\x6e\x61\151\x6c") {
            return ManipulatePost::uamasysiccecccmw($oiegiwogmwmawkeo, $post);
        });
        goto ycuksimueyoeugmi;
        wycaemkqgqoqamga:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\x65\x5f\x63\157\156\164\x65\x6e\x74", function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) {
            return the_content($yauwwygqkmsmamik, $ecckicuukiesgaig);
        });
        goto osuwwuwykkyioics;
        wmgmwseuygieasiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\141\x73\137\145\x78\143\x65\x72\x70\x74", function ($post) {
            return DecoratorPost::seewsasmyoyciiee($post);
        });
        goto woimcikoqmikiiuo;
        kycuyyawyykwayum:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\137\141\164\x74\141\x63\150\155\145\156\164", function ($post = null) {
            return ManipulateAttachment::aauyuieeeaakygki($post);
        });
        goto qayscesoyiskoeko;
        emwgmewoyckawiaa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x74\150\x65\137\x74\x69\164\154\x65", function ($post = 0) {
            return ManipulatePost::qcgakseyaikigqco($post);
        });
        goto ouiwcwgymiycmesy;
        yygiyieeyuuqucke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x70\141\x67\151\x6e\141\x74\151\157\x6e\x5f\154\x69\x6d\151\x74", function () {
            return ManipulateSetting::omkaowmygoqwsywq();
        });
        goto ksaoceiosgkgkeua;
        osgggiswqmmcauic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\x70\157\163\x74", function ($post = null, $cwwowqyuwccuykom = false) {
            return ManipulatePost::get($post, self::OBJECT, $cwwowqyuwccuykom) instanceof WP_Post;
        });
        goto kycuyyawyykwayum;
        osuwwuwykkyioics:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\143\165\163\x74\x6f\x6d\x5f\x70\x6f\163\164\x5f\164\171\x70\145\137\x73\151\x6e\x67\x6c\145", function () {
            return is_singular(ManipulatePost::mwoyqeeigwqoamiw());
        });
        goto aimoueqqomiogmwe;
        ksaoceiosgkgkeua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\x76\145\137\160\x6f\x73\164\163", function () {
            return ManipulatePost::ekwkywuguceaogsk();
        });
        goto wesmogqcyeemwqaq;
        uwcgosckamuosimw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x69\144", function ($mksyucucyswaukig) {
            goto mkcqgkuwwkekeyea;
            ymuwkueqksmiucek:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto aoquaueqscawcquu;
            }
            goto askmmowgaoaeucmg;
            cwogqueiqawomkuc:
            goto qsiiueeogkusyayq;
            goto waekkoqkywowucqm;
            egkscycmsoysyukk:
            ugkuauswwusmgeak:
            goto cwogqueiqawomkuc;
            mgqoggoasugsqoqm:
            aoquaueqscawcquu:
            goto gquwcimccausouey;
            gquwcimccausouey:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($mksyucucyswaukig);
            goto kwocuyyugaqsicqy;
            skuiqymemkkmcasa:
            goto wecwoieqkcmgyemy;
            goto mgqoggoasugsqoqm;
            caeuciiioaqyuyug:
            $aokagokqyuysuksm = $mksyucucyswaukig;
            goto egkscycmsoysyukk;
            askmmowgaoaeucmg:
            if ($mksyucucyswaukig instanceof WP_Term) {
                goto mkuuaucmumoqmogc;
            }
            goto mcamcymgukiawmca;
            waekkoqkywowucqm:
            mkuuaucmumoqmogc:
            goto iyyoksuqkyayycyo;
            iyyoksuqkyayycyo:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($mksyucucyswaukig);
            goto qyauskeceyuommay;
            ckcsasciyamuyeak:
            return $aokagokqyuysuksm;
            goto rayeowssukccumsa;
            qyauskeceyuommay:
            qsiiueeogkusyayq:
            goto skuiqymemkkmcasa;
            mcamcymgukiawmca:
            if (!is_numeric($mksyucucyswaukig)) {
                goto ugkuauswwusmgeak;
            }
            goto caeuciiioaqyuyug;
            kwocuyyugaqsicqy:
            wecwoieqkcmgyemy:
            goto ckcsasciyamuyeak;
            mkcqgkuwwkekeyea:
            $aokagokqyuysuksm = '';
            goto ymuwkueqksmiucek;
            rayeowssukccumsa:
        });
        goto quycsusswssyiqek;
        meacamomoigoocks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\x61\163\137\x70\157\x73\x74\x5f\164\x68\x75\155\x62\x6e\141\x69\x6c", function ($post) {
            return DecoratorPost::oaqimsyggeyyceig($post);
        });
        goto wmgmwseuygieasiq;
        ouiwcwgymiycmesy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\145\x5f\164\151\164\x6c\145", function () {
            return the_title();
        });
        goto yamoqmeywqamiyee;
        woimcikoqmikiiuo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\160\x65\x72\155\x61\154\151\x6e\153", function ($post, $cwwowqyuwccuykom = false) {
            return ManipulatePost::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom);
        });
        goto yygiyieeyuuqucke;
        waqwicwqkgsgaosm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\147\145\164\x5f\141\x74\x74\141\143\x68\155\x65\156\164\x5f\151\155\x61\x67\145\137\165\x72\x6c", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') {
            goto iuaauoycciukeqaw;
            ycsgumakqqweigca:
            $eeamcawaiqocomwy = DecoratorAttachment::iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo);
            goto uismokoooeicygyy;
            guouwiieuysyiewm:
            oggqgmiqwuceekqm:
            goto ycsgumakqqweigca;
            soooekmauiwsaemc:
            return $eeamcawaiqocomwy;
            goto msokmumgqigwgwwc;
            iuaauoycciukeqaw:
            if ($oiegiwogmwmawkeo) {
                goto oggqgmiqwuceekqm;
            }
            goto amegcwiaikcwyuws;
            emcskqgacoswgmog:
            goto iiyuccyiiyoguicm;
            goto guouwiieuysyiewm;
            amegcwiaikcwyuws:
            $eeamcawaiqocomwy = DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
            goto emcskqgacoswgmog;
            uismokoooeicygyy:
            iiyuccyiiyoguicm:
            goto soooekmauiwsaemc;
            msokmumgqigwgwwc:
        });
        goto kmgimueiaqoamoiq;
        eisoouawyymkasou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\145\x64\151\x74\137\x6c\x69\x6e\x6b", function ($mksyucucyswaukig) {
            goto mkuwumgwoyasswam;
            ygqwqqiowseokqyy:
            acaseyakoigmukmc:
            goto cckaqseuwsokgqky;
            eeuyyauaomyugqso:
            if (!$mksyucucyswaukig instanceof WP_Term) {
                goto acaseyakoigmukmc;
            }
            goto cmqcmgwesykwwosy;
            mrocimywqwigwumc:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto ioymoeauqmugekqw;
            }
            goto eeuyyauaomyugqso;
            cwsmkieawokgkqso:
            oesewmcmiyceckae:
            goto skaswwgougcyyewo;
            cmqcmgwesykwwosy:
            $iwywmkygwewiamwm = ManipulateTerm::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto ygqwqqiowseokqyy;
            skaswwgougcyyewo:
            return $iwywmkygwewiamwm;
            goto gqyooycgsagyyeia;
            iauiowaaqsooooco:
            $iwywmkygwewiamwm = DecoratorPost::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto cwsmkieawokgkqso;
            mkuwumgwoyasswam:
            $iwywmkygwewiamwm = "\43";
            goto mrocimywqwigwumc;
            aakueiomkcyiiows:
            ioymoeauqmugekqw:
            goto iauiowaaqsooooco;
            cckaqseuwsokgqky:
            goto oesewmcmiyceckae;
            goto aakueiomkcyiiows;
            gqyooycgsagyyeia:
        });
        goto gsscqquysycuswow;
        wesmogqcyeemwqaq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\145\137\x70\x6f\163\164", "\164\x68\145\x5f\160\x6f\163\164");
        goto ieaumiwogamciyeq;
        yamoqmeywqamiyee:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\164\x68\x65\x5f\145\170\x63\145\162\160\164", function ($post = null) {
            return ManipulatePost::masoymaamekuykso($post);
        });
        goto eisoouawyymkasou;
        ukwaqucywiqsqcmw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x70\x6f\163\164\137\155\145\x74\141", function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) {
            return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog);
        });
        goto waqwicwqkgsgaosm;
        iayqwwsmsuwaykyw:
    }
    public function ugugagoguiycqeys()
    {
        goto osksqmgkikamgaui;
        ocwegqcikuwygcos:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x72\145\141\x74\145", function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') {
            return ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
        });
        goto qmesaeogykqacemy;
        qyggcimqgyscmcci:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\x74\145\155\x70\154\141\x74\x65", [$this, "\171\x69\x79\x71\145\x63\141\167\151\x6f\171\157\x73\157\x61\x77"]);
        goto mwsogcaisqkoyoyo;
        osksqmgkikamgaui:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\141\x6e\137\163\150\x6f\x77\137\x6f\x6e\137\x67\x72\x69\144", function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) {
            goto aweayueuaeoasyms;
            aweayueuaeoasyms:
            $aqykuigiuwmmcieu = '';
            goto wyokakscicekiums;
            ygywqwksoumccysq:
            $uasyiiacieyekiia = ["\x78\x73", "\163\155", "\155\144", "\x6c\147", "\170\154"];
            goto cecomsiewwckuwqy;
            cgsuikiqggkikaae:
            gaqweioagqyciyaw:
            goto yoosmuokogseueas;
            wyokakscicekiums:
            if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
                goto qkueegaowuyiimgw;
            }
            goto ygywqwksoumccysq;
            cecomsiewwckuwqy:
            foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) {
                goto gmskkukiiwweocwi;
                uyqsoayeaaumkace:
                swuwwcumqwckimwy:
                goto ooayswecmkkqgskg;
                mckkqgseimcgkcgu:
                goto swuwwcumqwckimwy;
                goto syqysaawasmesiqs;
                gukawqgamokyceki:
                $ycuyiqagsmgikago .= "\55";
                goto mckkqgseimcgkcgu;
                gmskkukiiwweocwi:
                $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, $ycuyiqagsmgikago, false);
                goto uqamuckwuksquqia;
                keaaqaugoyquwsos:
                qsqwywcesyquykqq:
                goto ieacisiumswqewsq;
                uqamuckwuksquqia:
                if ($ycuyiqagsmgikago == "\x78\x73") {
                    goto uyaweoaaqsagsqyi;
                }
                goto gukawqgamokyceki;
                cskesgswygwiqoim:
                $aqykuigiuwmmcieu .= "\x20\144\55{$ycuyiqagsmgikago}\x62\x6c\x6f\143\x6b";
                goto guyeaeiscmgksacs;
                yeiwocswikqkwyew:
                $ycuyiqagsmgikago = '';
                goto uyqsoayeaaumkace;
                guyeaeiscmgksacs:
                goto kqscgsuaugsiwiwi;
                goto keaaqaugoyquwsos;
                syqysaawasmesiqs:
                uyaweoaaqsagsqyi:
                goto yeiwocswikqkwyew;
                kskqckgmygiwqucm:
                kqscgsuaugsiwiwi:
                goto sucgyiymguwououy;
                ieacisiumswqewsq:
                $aqykuigiuwmmcieu .= "\40\x64\55{$ycuyiqagsmgikago}\x6e\x6f\x6e\145";
                goto kskqckgmygiwqucm;
                sucgyiymguwououy:
                scioecswaikeacmy:
                goto kcqewweqqqmekuwi;
                ooayswecmkkqgskg:
                if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                    goto qsqwywcesyquykqq;
                }
                goto cskesgswygwiqoim;
                kcqewweqqqmekuwi:
            }
            goto cgsuikiqggkikaae;
            moeqauuausuqygiq:
            return rtrim($aqykuigiuwmmcieu);
            goto kmmwmccqeuasieoy;
            yoosmuokogseueas:
            qkueegaowuyiimgw:
            goto moeqauuausuqygiq;
            kmmwmccqeuasieoy:
        });
        goto wagqsecuquyukiwc;
        wagqsecuquyukiwc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\165\156\x73\x65\164", function ($uomewyckeuqoqocu, $uusmaiomayssaecw) {
            ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            return $uomewyckeuqoqocu;
        });
        goto ziqysygmaasemyem;
        cycukssoyewuiyyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\x72\144\137\x62\x6f\164\164\x6f\x6d\137\x6d\141\x72\x67\151\156", function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) {
            $giwamsoicooomueg = ManipulateHTML::sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg);
            return $giwamsoicooomueg;
        });
        goto oaogeakeuqgouywe;
        usqgeieewckcwumm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\x73\x70\151\156\x6e\145\162", function ($ywmkwiwkosakssii = []) {
            return ManipulateHTML::kqmkicmuscsgqeoi($ywmkwiwkosakssii);
        });
        goto qyggcimqgyscmcci;
        igcusescocaiyqki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\x75\162\x6c", function ($eeamcawaiqocomwy) {
            return ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy);
        });
        goto kakwaaemoyyusiek;
        qmesaeogykqacemy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\141\156\x5f\x6c\141\172\171\x5f\x6c\x6f\x61\144", function () {
            return $this->sscegwueamckwmcy("\143\x61\156\x5f\x6c\x61\172\x79\x5f\154\x6f\141\x64", true);
        });
        goto cycukssoyewuiyyw;
        ziqysygmaasemyem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\141\144\144\137\154\157\143\141\x74\x69\x6f\156", function ($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null) {
            ManipulateTemplate::kikcumcscysmmuos($qqscaoyqikuyeoaw, $skikiykssoocmmik, $ymqmyyeuycgmigyo, $post);
        });
        goto ocwegqcikuwygcos;
        kakwaaemoyyusiek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\151\143\x6f\x6e", function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) {
            return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        });
        goto usqgeieewckcwumm;
        oaogeakeuqgouywe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\x5f\163\145\164\x74\151\156\147", function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) {
            return WPSetting::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        });
        goto igcusescocaiyqki;
        mwsogcaisqkoyoyo:
    }
    public function render()
    {
        goto mqckeqywkyewukku;
        mqaemqqgquyscwgg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\x65\x6e\144\145\x72\x5f\x70\157\163\164\137\144\x61\164\x61", function ($aiowsaccomcoikus = "\164\151\164\154\145", $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) {
            goto qiagugckeckokcas;
            swoiuaaoaceaaeou:
            imyyokaecggauwca:
            goto eqewaacwikyoaswc;
            kcsegweogmaqiwco:
            aiouimmkquyuwagk:
            goto sqigasuoiqyqqokc;
            qiagugckeckokcas:
            $cwwowqyuwccuykom = false;
            goto coomeqeooeuaagwm;
            sqigasuoiqyqqokc:
            ciuaqmasmqyeioiy:
            goto aosyiicmoiuswsce;
            coomeqeooeuaagwm:
            if (!$ccamueccusigaaio) {
                goto imyyokaecggauwca;
            }
            goto gkkywuycqkawqiuq;
            aaksksikokoywwqw:
            switch ($aiowsaccomcoikus) {
                case self::IMAGE:
                    goto iwcyguueicgkqmiq;
                    iwcyguueicgkqmiq:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\x69\x7a\x65", "\x74\x68\165\155\x62\156\x61\x69\154");
                    goto qswoesemmkuisiak;
                    ykyauiwkesygwwyq:
                    msmyywuowokwiswe:
                    goto kwacykquqegccocg;
                    aiqouoismmsiakak:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto msmyywuowokwiswe;
                    }
                    goto qiygeqkamwuomgie;
                    kwacykquqegccocg:
                    $icwicymcioeyeyek = ManipulateAttachment::qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto qaiqkuwcooimcsyc;
                    qaiqkuwcooimcsyc:
                    uaewuiuogmissaks:
                    goto wgcwoaukyqokqegs;
                    wyaiukacimqqkwso:
                    $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\x73\163", "\151\x6d\147\55\x73\151\172\145\x20\163\151\172\x65\x2d{$oiegiwogmwmawkeo}");
                    goto aiqouoismmsiakak;
                    qswoesemmkuisiak:
                    $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x61\164\x74\x72\163", []);
                    goto wyaiukacimqqkwso;
                    aysgkuigyuqqcuae:
                    goto uaewuiuogmissaks;
                    goto ykyauiwkesygwwyq;
                    qiygeqkamwuomgie:
                    $icwicymcioeyeyek = DecoratorPost::smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto aysgkuigyuqqcuae;
                    wgcwoaukyqokqegs:
                    goto ciuaqmasmqyeioiy;
                    goto agwuqimeueqcgeig;
                    agwuqimeueqcgeig:
                case "\151\x6d\141\x67\145\x5f\165\x72\x6c":
                case "\151\x6d\141\147\145\137\x73\162\143":
                    goto ywgasekuusqmywou;
                    kouykoaqsyamwkow:
                    goto ciuaqmasmqyeioiy;
                    goto miigyyocoaqouyws;
                    kmoguoggeuugwcuk:
                    ioawqeykaygmcusq:
                    goto iussoiiiygmaqoey;
                    ywgasekuusqmywou:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\172\x65", "\x74\150\x75\155\142\156\x61\x69\x6c");
                    goto uumsakwagcmcusai;
                    ccuiyiguswiossui:
                    eeemieuggkqicmcm:
                    goto kouykoaqsyamwkow;
                    wcgeeoqqamawayyk:
                    $icwicymcioeyeyek = DecoratorPost::uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ewmswgookyygmeck;
                    ewmswgookyygmeck:
                    goto eeemieuggkqicmcm;
                    goto kmoguoggeuugwcuk;
                    uumsakwagcmcusai:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto ioawqeykaygmcusq;
                    }
                    goto wcgeeoqqamawayyk;
                    iussoiiiygmaqoey:
                    $icwicymcioeyeyek = DecoratorAttachment::iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ccuiyiguswiossui;
                    miigyyocoaqouyws:
                case self::NAME:
                case self::TITLE:
                    $icwicymcioeyeyek = ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio);
                    goto ciuaqmasmqyeioiy;
                case "\144\141\x74\x65":
                case "\x74\151\x6d\x65":
                case "\144\141\x74\145\164\151\x6d\x65":
                    goto yymmsiqcoeikoges;
                    iiymmyommkikmyqa:
                    $icwicymcioeyeyek = $this->eciukqcoqmyacwow(ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
                    goto oicqseawwmwcgsua;
                    yymmsiqcoeikoges:
                    switch ($aiowsaccomcoikus) {
                        case "\x64\x61\164\145\x74\151\155\x65":
                            $ggauoeuaesiymgee = ManipulateSetting::yoaaussmackoisuw();
                            goto oyiogyamekukoqce;
                        case "\x74\x69\155\x65":
                            $ggauoeuaesiymgee = ManipulateSetting::isiuiegyqiomccsw();
                            goto oyiogyamekukoqce;
                        case "\x64\x61\x74\x65":
                        default:
                            $ggauoeuaesiymgee = ManipulateSetting::uyomwmskouyyqyyq();
                            goto oyiogyamekukoqce;
                    }
                    goto mycaymeeoakigqwk;
                    wosiwcgiequysoiq:
                    oyiogyamekukoqce:
                    goto ecicsgkwsukqmquo;
                    mycaymeeoakigqwk:
                    cwaksqcggwcaucmo:
                    goto wosiwcgiequysoiq;
                    oicqseawwmwcgsua:
                    goto ciuaqmasmqyeioiy;
                    goto mqkkmgeccukekuus;
                    cqkkmgicucyoeqca:
                    $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\146\x6f\x72\155\141\164", $ggauoeuaesiymgee);
                    goto iiymmyommkikmyqa;
                    ecicsgkwsukqmquo:
                    $somiuasmmwkuceag = ManipulateArray::get($ywmkwiwkosakssii, "\x6c\x6f\143\141\x6c\145", "\146\x61");
                    goto cqkkmgicucyoeqca;
                    mqkkmgeccukekuus:
                case self::URL:
                case self::PERMALINK:
                    $icwicymcioeyeyek = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio);
                    goto ciuaqmasmqyeioiy;
                case "\144\x65\x73\143":
                case self::DESCRIPTION:
                    goto agosuskgagmqkcqq;
                    oqsgqmmoqoyoicia:
                    goto ciuaqmasmqyeioiy;
                    goto mqycugoiuasmyycy;
                    cwuiegmgmaoasqys:
                    $icwicymcioeyeyek = ManipulatePost::masoymaamekuykso($ccamueccusigaaio, $gioggcykgoikcwiy);
                    goto oqsgqmmoqoyoicia;
                    agosuskgagmqkcqq:
                    $gioggcykgoikcwiy = ManipulateArray::get($ywmkwiwkosakssii, "\143\150\145\x63\x6b", true);
                    goto cwuiegmgmaoasqys;
                    mqycugoiuasmyycy:
            }
            goto kcsegweogmaqiwco;
            gkkywuycqkawqiuq:
            $cwwowqyuwccuykom = true;
            goto swoiuaaoaceaaeou;
            aosyiicmoiuswsce:
            return rawurldecode($icwicymcioeyeyek);
            goto eisakkewoaeqqeqi;
            mqkmsmceakcwuykg:
            if (!$post) {
                goto iiieosoykaeycaks;
            }
            goto semsywguyogigssk;
            ykocaswauweieysc:
            $icwicymcioeyeyek = null;
            goto aaksksikokoywwqw;
            scmyekuemcoeeggy:
            iiieosoykaeycaks:
            goto ykocaswauweieysc;
            semsywguyogigssk:
            $ccamueccusigaaio = $post;
            goto scmyekuemcoeeggy;
            eqewaacwikyoaswc:
            $post = ManipulatePost::get($ccamueccusigaaio, self::OBJECT, $cwwowqyuwccuykom);
            goto mqkmsmceakcwuykg;
            eisakkewoaeqqeqi:
        });
        goto aisciyiooggegcwa;
        koyswyqcemwusuku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\145\156\x64\x65\162\x5f\141\x75\164\150\x6f\162\137\144\141\164\141", [$this, "\157\145\x61\x69\x67\x63\x69\163\153\x65\167\163\151\x69\x65\x63"]);
        goto mqaemqqgquyscwgg;
        mqckeqywkyewukku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\x65\x6e\144\145\x72\x5f\165\163\145\x72\137\x64\x61\164\141", [$this, "\157\x65\141\151\147\x63\151\x73\153\x65\167\x73\151\x69\x65\143"]);
        goto koyswyqcemwusuku;
        aisciyiooggegcwa:
    }
    public function comment()
    {
        goto cymkyayecqkecsso;
        oosoeecugcecmoqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\x64\x69\164\x5f\x63\157\155\155\x65\156\x74\x5f\x6c\x69\156\x6b", function ($cmwygeyygwqaemaq = null, $caacssaumiqeaoaw = '', $miisqgccsqqcscia = '') {
            return edit_comment_link($cmwygeyygwqaemaq, $caacssaumiqeaoaw, $miisqgccsqqcscia);
        });
        goto kssaskooygaesyuq;
        syicggsyayqwywma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\160\162\x65\166\151\157\165\x73\137\143\157\155\x6d\145\156\x74\163\137\x6c\151\156\153", function ($pkyyagewkiyckmwy = '') {
            return get_previous_comments_link($pkyyagewkiyckmwy);
        });
        goto ykmiqawqiommeyic;
        ykmiqawqiommeyic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\157\155\155\145\156\164\x5f\x63\x6c\141\x73\x73", function ($cmkqisoeyioisqaw, $aqqmosqmsuueyaes) {
            return comment_class($cmkqisoeyioisqaw, $aqqmosqmsuueyaes);
        });
        goto esaoimegkqmoakoo;
        somoaammcamiswiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\143\157\x6d\x6d\x65\x6e\164\137\x61\165\164\x68\x6f\x72\137\x6c\x69\156\x6b", function ($aqqmosqmsuueyaes = 0) {
            return get_comment_author_link($aqqmosqmsuueyaes);
        });
        goto muiiokquumgiyaas;
        moicgacciggecuie:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\143\x6f\x6d\155\x65\156\x74\137\x64\141\x74\x65", function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) {
            return ManipulateComment::squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma);
        });
        goto qqsiesyooukcuege;
        goiywqywgesicwsm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\143\157\155\155\145\156\164\137\164\x65\170\164", function ($aokagokqyuysuksm = null, $ywmkwiwkosakssii = []) {
            return get_comment_text($aokagokqyuysuksm, $ywmkwiwkosakssii);
        });
        goto iuamoyacomwmyswu;
        cymkyayecqkecsso:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x6f\x6d\155\x65\x6e\x74\x5f\x69\144\137\x66\x69\x65\x6c\x64\163", function ($aokagokqyuysuksm = 0) {
            return comment_id_fields($aokagokqyuysuksm);
        });
        goto gueqcauquesmkqym;
        muiiokquumgiyaas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x63\x6f\x6d\x6d\x65\x6e\164\x5f\x61\165\164\150\x6f\x72", function ($aqqmosqmsuueyaes = 0) {
            return ManipulateComment::mguqscccckuywsya($aqqmosqmsuueyaes);
        });
        goto esiuqyuiuagocqce;
        kssaskooygaesyuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\156\145\x78\x74\x5f\x63\157\155\155\145\156\164\x73\x5f\154\x69\156\153", function ($pkyyagewkiyckmwy = '', $kmsquaeucgusuyio = 0) {
            return get_next_comments_link($pkyyagewkiyckmwy, $kmsquaeucgusuyio);
        });
        goto somoaammcamiswiq;
        wwiiieggesogkwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\143\157\x6d\x6d\145\x6e\164\137\x74\151\155\x65", function ($saqmwwmqiwmkiwaa = '', $eqwyacwmcqusmwoq = false, $mcmaiqckgiuqayau = true) {
            return get_comment_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $mcmaiqckgiuqayau);
        });
        goto moicgacciggecuie;
        esiuqyuiuagocqce:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\x63\157\155\155\x65\x6e\164\163\x5f\156\x75\x6d\142\145\x72\x5f\x74\145\170\164", function ($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku) {
            return get_comments_number_text($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku);
        });
        goto syicggsyayqwywma;
        gueqcauquesmkqym:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\143\157\x6d\155\x65\x6e\x74\x5f\154\x69\156\153", function ($aqqmosqmsuueyaes = null, $ywmkwiwkosakssii = []) {
            return get_comment_link($aqqmosqmsuueyaes, $ywmkwiwkosakssii);
        });
        goto wwiiieggesogkwky;
        qqsiesyooukcuege:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\x63\157\x6d\155\145\x6e\164", function ($aokagokqyuysuksm = null) {
            return ManipulateComment::get($aokagokqyuysuksm);
        });
        goto goiywqywgesicwsm;
        iuamoyacomwmyswu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\157\155\155\x65\x6e\x74\x5f\x72\x65\x70\154\x79\137\x6c\151\156\x6b", function ($ywmkwiwkosakssii = [], $aqqmosqmsuueyaes = null, $post = null) {
            return get_comment_reply_link($ywmkwiwkosakssii, $aqqmosqmsuueyaes, $post);
        });
        goto oosoeecugcecmoqu;
        esaoimegkqmoakoo:
    }
    public function mkukcsqosmkeeask()
    {
        goto yyicwymeasmimggy;
        ekkswyasyksokemg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\137\x6e\157\x6e\143\x65\x5f\146\151\x65\154\144", function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) {
            return wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false);
        });
        goto mqsoccawiacgogca;
        oyoiceikawwqskai:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\154\x6f\147\157\x75\164\137\165\x72\x6c", function ($gwqgmkqcgwwmweom = '') {
            return wp_logout_url($gwqgmkqcgwwmweom);
        });
        goto ekkswyasyksokemg;
        yyicwymeasmimggy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\144\x6d\151\x6e\137\165\162\x6c", function ($mkomwsiykqigmqca, $aaceqemaqqeckueq = "\141\144\x6d\x69\156") {
            return admin_url($mkomwsiykqigmqca, $aaceqemaqqeckueq);
        });
        goto oyoiceikawwqskai;
        muoeugawocmikiua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x75\x72\162\145\x6e\164\x5f\x75\163\145\162\137\x63\141\x6e", function ($gkswkiicccswksiq) {
            return current_user_can($gkswkiicccswksiq);
        });
        goto bgwomyaccmauskgm;
        mqsoccawiacgogca:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\141\x6e\x69\164\x69\x7a\x65\137\x74\x69\x74\154\x65", function ($cmwygeyygwqaemaq) {
            return sanitize_title($cmwygeyygwqaemaq);
        });
        goto muoeugawocmikiua;
        bgwomyaccmauskgm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\x75\x73\x65\162\x5f\154\157\x67\x67\145\144\137\151\156", function () {
            return DecoratorUser::ksgkoukcicwkkaum();
        });
        goto cmsgsoqiskwwqywg;
        cmsgsoqiskwwqywg:
    }
    public function eeoeyakoiycwiuoa()
    {
        goto mkiiuusasqaucucm;
        omoayecymwmcysyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\144\x72\x6f\x70\144\x6f\x77\x6e\x5f\143\141\x74\x65\x67\x6f\162\151\145\x73", function ($ywmkwiwkosakssii) {
            wp_dropdown_categories($ywmkwiwkosakssii);
        });
        goto weyegmawkwggekgi;
        qoceommegsyqswsi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\160\141\x67\x65\144", function () {
            return DecoratorQuery::sgeaogakoscmysgc();
        });
        goto agukockguesiwmim;
        oeqaiwecuckgoyky:
        $this->mkukcsqosmkeeask();
        goto ywiwqkssuiiukwuk;
        weecgesamaiayuqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\x6f\137\141\143\x74\x69\x6f\156", function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) {
            $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo);
        });
        goto eusygaeoggqeuuki;
        uaysaomocomaomaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\157\x6d\145\137\165\162\x6c", function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) {
            return ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
        });
        goto kcyaqgaosmmscquy;
        auguaocagomuuqqk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x6f\155\x6d\x65\x6e\164\x73\137\x74\x65\155\x70\x6c\141\164\x65", "\x63\x6f\x6d\x6d\x65\156\164\163\137\164\x65\x6d\160\154\141\164\x65");
        goto mggqockcmokwiwuq;
        weyegmawkwggekgi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\x74\x65\x72\155", function ($post = null, $kesssewsiegssiya = '', $qqgsimqiqyaugceg = true) {
            return ManipulatePost::kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg);
        });
        goto eeusamaykaysmgoq;
        wwwsqwyegoowkmik:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\160\160\x6c\x79\x5f\x66\151\x6c\x74\145\x72\x73", function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) {
            return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo);
        });
        goto igygkagcaiiiumqo;
        iwosowoeugcumagm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\137\x6e\141\166\137\x6d\145\x6e\x75", "\167\160\137\156\x61\166\x5f\x6d\145\x6e\165");
        goto auuqmasiciwyueek;
        eeusamaykaysmgoq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\x74\x65\162\155\x5f\154\151\156\153", function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') {
            return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        });
        goto wqgmqkugcksgscke;
        ucgagqogckeuiewi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x73\145\141\x72\x63\x68\x5f\161\165\x65\162\171", function ($sekkmwqwqwcayiwg = true) {
            return get_search_query($sekkmwqwqwcayiwg);
        });
        goto weecgesamaiayuqo;
        ygiycusyssyegauq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\x65\137\167\151\144\x67\145\x74", function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) {
            DecoratorWidget::assameyusgwogmce($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        });
        goto qoceommegsyqswsi;
        ommomcekkekaceme:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\147\x65\x74\137\x61\x74\164\x61\x63\x68\x6d\145\156\164\137\151\155\x61\147\145", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = "\x74\150\165\155\142\x6e\141\151\154", $wisgiwskwawciiee = []) {
            return ManipulateAttachment::qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto ugguwkkgqoyseuma;
        ecikykuqgeaqamwk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x5f\137", function ($cmwygeyygwqaemaq, $mokawwccycoiqeka = "\x64\x65\x66\x61\165\x6c\164") {
            return __($cmwygeyygwqaemaq, $mokawwccycoiqeka);
        });
        goto gekkisqyegwkwcmg;
        qcykwgwoyuuqiicc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\157\144\171\137\x63\x6c\141\x73\163", "\x62\x6f\144\x79\137\x63\x6c\141\163\163");
        goto iwosowoeugcumagm;
        ykaymqwyewgaouaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\137\141\144\155\x69\156\x5f\163\145\x61\162\143\x68\x5f\x71\165\x65\162\171", function () {
            _admin_search_query();
        });
        goto sceeeykswowqeqyi;
        gyuiwqyyauwqokmc:
        $this->comment();
        goto oeqaiwecuckgoyky;
        coegigeuyugiwuou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\164\x65\x72\155\137\x74\x69\x74\x6c\145", function ($iwewcwusemqaiggk) {
            return ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
        });
        goto ecikykuqgeaqamwk;
        auuqmasiciwyueek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\x61\x73\137\x6e\x61\166\x5f\155\145\x6e\x75", "\150\x61\x73\137\x6e\141\x76\137\155\145\156\165");
        goto ykeaeieyycoeqccm;
        uwsmweegoueoawau:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\160\x6f\163\x74\x5f\x74\x79\x70\145\137\141\x72\x63\x68\x69\x76\145\x5f\x6c\151\x6e\153", function ($useksmwkuswkwcqg) {
            return ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg);
        });
        goto uaysaomocomaomaw;
        kcyaqgaosmmscquy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\163\145\x6c\145\143\x74\x65\x64", function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) {
            goto msqiamqqoiceauwy;
            eakgamsscsuususi:
            goto kascwigwmyyywwom;
            goto coskskmacukoewgo;
            qwyuoiycqcaaakcq:
            return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false);
            goto ukswuuooigiykaso;
            yeqcqmakwyuoaayk:
            soewwyoqiysyqsmm:
            goto qwyuoiycqcaaakcq;
            pmmcyycmwceweqck:
            $yeacayasgueouoqc = null;
            goto eakgamsscsuususi;
            msqiamqqoiceauwy:
            if (!is_array($yeacayasgueouoqc)) {
                goto soewwyoqiysyqsmm;
            }
            goto iawimoagycsccyqw;
            imuyoescowgckyyc:
            $yeacayasgueouoqc = $ymmmmaiuoocagigk;
            goto uiookuuakyqyuagw;
            coskskmacukoewgo:
            aamogomsaksgcsig:
            goto imuyoescowgckyyc;
            iawimoagycsccyqw:
            if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc)) {
                goto aamogomsaksgcsig;
            }
            goto pmmcyycmwceweqck;
            uiookuuakyqyuagw:
            kascwigwmyyywwom:
            goto yeqcqmakwyuoaayk;
            ukswuuooigiykaso:
        });
        goto mcegmykimgwocisg;
        agukockguesiwmim:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\164\x61\170", function ($kesssewsiegssiya = null) {
            return DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya);
        });
        goto iaawmomcqiokucac;
        usgcuuuscucqesug:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\141\165\x74\150\x6f\x72\137\160\x6f\x73\164\x73\x5f\165\162\x6c", function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') {
            return DecoratorAuthor::mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum);
        });
        goto omoayecymwmcysyw;
        scoaiameyouasusa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\137\146\x6f\x6f\164\145\x72", "\x77\160\137\146\x6f\157\x74\x65\162");
        goto qcykwgwoyuuqiicc;
        gekkisqyegwkwcmg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\163\x75\x62\x6d\151\164\x5f\x62\x75\x74\164\x6f\156", function () {
            return submit_button();
        });
        goto caicmucqkokaecsg;
        mcegmykimgwocisg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x68\145\143\153\145\144", function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) {
            goto ucewekmmuygqecqk;
            kqeemeukmoukyeiw:
            iqmymqqskgsgsiku:
            goto quikiokiqwkqsqys;
            qkkocwikmsocekwq:
            qcqyawqiwksyicok:
            goto oqikauiqoeuyoeyc;
            quikiokiqwkqsqys:
            $yeacayasgueouoqc = $gmeoaiyogiokeeau;
            goto asqimcomuseoqiue;
            ucewekmmuygqecqk:
            if (!is_array($yeacayasgueouoqc)) {
                goto qcqyawqiwksyicok;
            }
            goto ayymceqgcuqkqkmo;
            asqimcomuseoqiue:
            qyeiyecmaomycoks:
            goto qkkocwikmsocekwq;
            ayymceqgcuqkqkmo:
            if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc)) {
                goto iqmymqqskgsgsiku;
            }
            goto gkskumckoocyioge;
            oqikauiqoeuyoeyc:
            return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false);
            goto cseseucmsoywsecu;
            gkskumckoocyioge:
            $yeacayasgueouoqc = null;
            goto ycogsiaoceaiaosi;
            ycogsiaoceaiaosi:
            goto qyeiyecmaomycoks;
            goto kqeemeukmoukyeiw;
            cseseucmsoywsecu:
        });
        goto wwwsqwyegoowkmik;
        igygkagcaiiiumqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\x64\151\x74\x6f\162", function ($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck = []) {
            return wp_editor($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck);
        });
        goto qicikuqekgkawwqo;
        qmiugaqisqiwooio:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\150\145\x5f\141\165\x74\150\157\162\137\155\x65\x74\x61", function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) {
            return DecoratorAuthor::igawqaomowicuayw($aiowsaccomcoikus, ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce));
        });
        goto usgcuuuscucqesug;
        ugguwkkgqoyseuma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\x61\x76\141\164\x61\162", function ($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') {
            return ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee);
        });
        goto qmiugaqisqiwooio;
        qicikuqekgkawwqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\146\x6f\162\155\x61\x74\137\x66\x72\x6f\155\x5f\x6d\151\155\x65\137\x74\171\160\x65", function ($qiwqkoiamayyqase) {
            goto ymcqmgsqsggscmsi;
            ekeokeoweycsyqos:
            uqimycsoiocokgyi:
            goto wcowkmqskaouuqsm;
            goyyumqwuiywaimq:
            return $sqeykgyoooqysmca;
            goto oqycocwaiqmyaeow;
            geakuimqwgsiaask:
            if (!(strpos($qiwqkoiamayyqase, "\160\x64\x66") !== false)) {
                goto ocwqeygqmqgawqqy;
            }
            goto aoqycegeggwwkwya;
            gcmiayguaqqeiese:
            oggiokiewaqggaoc:
            goto goyyumqwuiywaimq;
            qawgegcsiawquqcm:
            if (strpos($qiwqkoiamayyqase, "\151\155\141\147\x65") !== false) {
                goto uqimycsoiocokgyi;
            }
            goto geakuimqwgsiaask;
            wkigieqkikmiqqgw:
            goto oggiokiewaqggaoc;
            goto ekeokeoweycsyqos;
            ymcqmgsqsggscmsi:
            $sqeykgyoooqysmca = '';
            goto qawgegcsiawquqcm;
            wcowkmqskaouuqsm:
            $sqeykgyoooqysmca = "\151\155\141\x67\145";
            goto gcmiayguaqqeiese;
            ukgsemksqoiukgoc:
            ocwqeygqmqgawqqy:
            goto wkigieqkikmiqqgw;
            aoqycegeggwwkwya:
            $sqeykgyoooqysmca = "\x70\144\x66";
            goto ukgsemksqoiukgoc;
            oqycocwaiqmyaeow:
        });
        goto ommomcekkekaceme;
        skqiqqeyqokasmeg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\160\141\x67\145\137\x62\x79\x5f\x70\141\164\x68", function ($mkomwsiykqigmqca) {
            return ManipulatePage::ssacaeeassumyuws($mkomwsiykqigmqca);
        });
        goto cgckkkoaumakemuc;
        caicmucqkokaecsg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\157\x5f\163\x65\x74\164\x69\156\147\163\x5f\x73\145\143\x74\x69\157\156\163", function ($awcmekyiwwkeyisq) {
            return do_settings_sections($awcmekyiwwkeyisq);
        });
        goto gsyagiygoyamakyu;
        eusygaeoggqeuuki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\157\160\164\151\x6f\156", function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) {
            return DecoratorOption::get($omkysikckkcieckq, $ggauoeuaesiymgee);
        });
        goto skqiqqeyqokasmeg;
        wqgmqkugcksgscke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\145\162\155\137\x64\145\x73\x63\x72\151\x70\x74\x69\x6f\156", function ($iwewcwusemqaiggk = 0) {
            return term_description($iwewcwusemqaiggk);
        });
        goto mgykqueoqmyucwky;
        mggqockcmokwiwuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\171\x6e\141\155\151\x63\x5f\163\x69\144\x65\x62\141\162", function ($momcykaoccoymeig) {
            DecoratorWidget::esuiacmywcmmsmao($momcykaoccoymeig);
        });
        goto egyksgscyqmieque;
        iaawmomcqiokucac:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\154\157\x67\151\x6e\x66\x6f", function ($ekcswiguywieeeoc) {
            return get_bloginfo($ekcswiguywieeeoc);
        });
        goto uwsmweegoueoawau;
        qiuouckkycciwuyo:
        $this->sqmuqsscmimwqoki();
        goto gyuiwqyyauwqokmc;
        cgckkkoaumakemuc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\x5f\x61\144\155\x69\156", function () {
            return is_admin();
        });
        goto qiuouckkycciwuyo;
        egyksgscyqmieque:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\141\143\164\x69\166\x65\137\x73\151\144\x65\x62\x61\162", function ($momcykaoccoymeig) {
            return DecoratorWidget::ooksqgokuwcmoqcu($momcykaoccoymeig);
        });
        goto cgcymuikeqwuqaks;
        ykeaeieyycoeqccm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x73\145\x61\162\x63\150\137\146\157\162\155", "\147\145\164\x5f\163\x65\141\x72\143\x68\x5f\x66\x6f\162\x6d");
        goto auguaocagomuuqqk;
        swowyqmmmawuumkq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\x6f\x5f\x6d\x65\164\141\137\x62\x6f\x78\x65\163", function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) {
            do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig);
        });
        goto ygiycusyssyegauq;
        gsyagiygoyamakyu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\144\144\137\164\x68\151\x63\153\142\157\x78", function () {
            add_thickbox();
        });
        goto ucgagqogckeuiewi;
        mgykqueoqmyucwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\164\x65\162\x6d\137\x63\150\151\154\x64\x72\x65\156", function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) {
            return ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii);
        });
        goto coegigeuyugiwuou;
        cgcymuikeqwuqaks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\x5f\146\162\x6f\x6e\164\x5f\x70\x61\x67\x65", function () {
            return DecoratorQuery::takycgcamoacksqw();
        });
        goto ykaymqwyewgaouaw;
        mkiiuusasqaucucm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\x5f\150\145\x61\x64", "\x77\x70\137\x68\145\x61\x64");
        goto scoaiameyouasusa;
        sceeeykswowqeqyi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\137\x61\162\x63\x68\151\166\145", function () {
            return DecoratorQuery::migkyseymeomymmy() || ManipulatePage::okiaumcqquyioqcy();
        });
        goto swowyqmmmawuumkq;
        ywiwqkssuiiukwuk:
    }
    public function iemaakgqgqosiecm()
    {
        goto imucwaggwqomwwki;
        imucwaggwqomwwki:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x64\x64\x5f\x74\167\151\x67\x5f\146\165\x6e\x63\164\x69\x6f\x6e\163"), $this->yyyewgugioamwckw());
        goto yiuwiekcyyquyuak;
        sgmqeqeuscaaegqk:
        $this->render();
        goto wawmuaweemsioqms;
        wawmuaweemsioqms:
        $this->ugugagoguiycqeys();
        goto wuaokqmoyoikkkyu;
        wuaokqmoyoikkkyu:
        $this->eeoeyakoiycwiuoa();
        goto sgguiaisyueoswkk;
        yiuwiekcyyquyuak:
        $this->aqiicausqkomqkqy();
        goto sgmqeqeuscaaegqk;
        sgguiaisyueoswkk:
    }
    
    public function ooqekmgsqomsakio($wkcwykowmmmwioqs)
    {
        goto kqsyesawkomqwaqy;
        ggooeiyqcockogcy:
        iumuosccokuokwiw:
        goto acuusyssiosuysmg;
        ueqmgcsqwciauqes:
        if (!$this->yyyewgugioamwckw()->exists($cqygeiuceemyuywc)) {
            goto mueeqqskseeiykwg;
        }
        goto wqyygmuggeegmuua;
        yguemqosugisymku:
        if (!($yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq())) {
            goto wmiakgoosqcoaeki;
        }
        goto osmmmeymmeueymog;
        wqyygmuggeegmuua:
        $wkcwykowmmmwioqs = $cqygeiuceemyuywc;
        goto awqycuuoeeoioskq;
        mmmcsikmcyocmgiw:
        $cqygeiuceemyuywc = ManipulateString::wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}\x2f{$wksoawcgagcgoask->gueasuouwqysmomu()}\57{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs);
        goto ueqmgcsqwciauqes;
        kuyiowwueugqewic:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs);
        goto uikweusiocekgoey;
        wiiuaaemwsioueik:
        if (!$wksoawcgagcgoask) {
            goto cmsgueemsueayawi;
        }
        goto cqkgaiiysokkuwsm;
        cqkgaiiysokkuwsm:
        $mumucmmgemqwqiia = wp_get_theme();
        goto swekyeqkosmecgsk;
        acuusyssiosuysmg:
        cmsgueemsueayawi:
        goto sgyickkqymqecksi;
        ykemuogoaemeuaoy:
        if (!$woqmauweeqyeyymc) {
            goto iumuosccokuokwiw;
        }
        goto yguemqosugisymku;
        uikweusiocekgoey:
        $yeacayasgueouoqc = ManipulateArray::get($uomewyckeuqoqocu, 0);
        goto ggyieuweamgwmwem;
        uoykoouwyqwskyqs:
        wymawskeqaagkwuo:
        goto umquossmsyaiciag;
        swekyeqkosmecgsk:
        $woqmauweeqyeyymc = self::qmkyymgaecsmakqq("{$mumucmmgemqwqiia->get_theme_root()}\x2f{$mumucmmgemqwqiia->get_stylesheet()}");
        goto ykemuogoaemeuaoy;
        umquossmsyaiciag:
        wmiakgoosqcoaeki:
        goto ggooeiyqcockogcy;
        awqycuuoeeoioskq:
        mueeqqskseeiykwg:
        goto uoykoouwyqwskyqs;
        gegweammscwsquwi:
        if (!is_string($ymqmyyeuycgmigyo)) {
            goto wymawskeqaagkwuo;
        }
        goto mmmcsikmcyocmgiw;
        osmmmeymmeueymog:
        $ymqmyyeuycgmigyo = ManipulateArray::get(explode("\137\137", $yeacayasgueouoqc), 2, $yeacayasgueouoqc);
        goto gegweammscwsquwi;
        aqiiysigquiqsgeg:
        return $wkcwykowmmmwioqs;
        goto kiqaiwiwmeesaagy;
        ggyieuweamgwmwem:
        $wksoawcgagcgoask = self::mqucqomkmisceawy(str_replace(self::AT_SYMBOL, '', $yeacayasgueouoqc));
        goto wiiuaaemwsioueik;
        sgyickkqymqecksi:
        aqkukemyueoyscqi:
        goto aqiiysigquiqsgeg;
        kqsyesawkomqwaqy:
        if (!(!is_admin() || ManipulateAjax::mcgoysmkqsqooceq())) {
            goto aqkukemyueoyscqi;
        }
        goto kgquoqwyggyuiggk;
        kgquoqwyggyuiggk:
        $wkcwykowmmmwioqs = ManipulateFile::cgwcgscqeqauaagi($wkcwykowmmmwioqs);
        goto kuyiowwueugqewic;
        kiqaiwiwmeesaagy:
    }
    public function oeaigciskewsiiec($aiowsaccomcoikus = "\x6e\141\155\x65", $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = [])
    {
        goto uukskyequmqsieuk;
        ooeaciyoeskuouqi:
        euosgyacescsiqgc:
        goto eqkakgkyqqaewqiu;
        yemciswoecayuoga:
        eygwumawcmyaisee:
        goto mumegakqsumekgcs;
        iqcwoosugwmkmcas:
        if (!$mkucggyaiaukqoce) {
            goto sckwuwwueomkksag;
        }
        goto uaymiioykwgkmoeo;
        swcmoacumikkuwma:
        return $icwicymcioeyeyek;
        goto agugmwweyecagkue;
        ckicaukcwwiukieg:
        $mkucggyaiaukqoce = ManipulatePost::mguqscccckuywsya($mkucggyaiaukqoce);
        goto ooeaciyoeskuouqi;
        uaymiioykwgkmoeo:
        switch ($aiowsaccomcoikus) {
            case "\x75\162\154":
                $icwicymcioeyeyek = DecoratorAuthor::mkaiaewoyaimieqg($mkucggyaiaukqoce);
                goto eickyskkcemimcqy;
            case "\156\x61\x6d\x65":
                $icwicymcioeyeyek = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\x73\x70\154\141\171\x5f\x6e\x61\155\145");
                goto eickyskkcemimcqy;
            case "\141\x76\x61\x74\x61\x72":
                goto ikusickyaccgogwg;
                ikusickyaccgogwg:
                $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\151\172\145", 64);
                goto icageksksqqgmqom;
                icageksksqqgmqom:
                $icwicymcioeyeyek = ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __("\x55\x73\145\162\x20\x41\x76\x61\x74\x61\x72", PR__THM__PMPR));
                goto qqcciieyaqwkcasi;
                qqcciieyaqwkcasi:
                goto eickyskkcemimcqy;
                goto oyskccqkmomukcoi;
                oyskccqkmomukcoi:
        }
        goto yemciswoecayuoga;
        iqgqagswgiwgksco:
        sckwuwwueomkksag:
        goto swcmoacumikkuwma;
        eaqoyysesmoykmqa:
        if ($mkucggyaiaukqoce) {
            goto euosgyacescsiqgc;
        }
        goto ckicaukcwwiukieg;
        eqkakgkyqqaewqiu:
        $icwicymcioeyeyek = null;
        goto iqcwoosugwmkmcas;
        mumegakqsumekgcs:
        eickyskkcemimcqy:
        goto iqgqagswgiwgksco;
        uukskyequmqsieuk:
        $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce, true);
        goto eaqoyysesmoykmqa;
        agugmwweyecagkue:
    }
    
    public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, $cwwowqyuwccuykom = false)
    {
        goto wassuqquwikiawos;
        souoecscwyauueko:
        yckakqcyqksckiwg:
        goto kaukomgswmysiuus;
        oiiiwwmwokesyqwo:
        $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg();
        goto wcoywkwsguoyysay;
        auiosgoysmeuswoi:
        $aqykuigiuwmmcieu = null;
        goto yuqwoywsqguaiooq;
        mmukumekuuysequy:
        $eyoesceegakeygsi = $this->yyyewgugioamwckw();
        goto cecwiqciigmgyoem;
        yuqwoywsqguaiooq:
        goto egkyuaemcsesciio;
        goto qaioiokqgaomscqo;
        woeskwkwwgwgmowo:
        $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc);
        goto esyeigyikuqioumu;
        uaqawigsyseeuymm:
        if (!$aqykuigiuwmmcieu) {
            goto quumaygcyqkgwyaq;
        }
        goto qawsuswmossykiuo;
        kaukomgswmysiuus:
        if (!(!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu))) {
            goto owawwqcgcwwygkcy;
        }
        goto wqwogycsmygawouy;
        qawsuswmossykiuo:
        $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu);
        goto iqumoawsgyyywwsq;
        wgaqwowmmwgqcgio:
        $ekwsasieesaqcsiw .= "\164\x77\x69\x67";
        goto ycmmugqamooccaoe;
        yweawggqmecqgaqe:
        $yeacayasgueouoqc = str_replace("\x2f\57", "\57", $yeacayasgueouoqc);
        goto mwomsussaikumyme;
        egqeaugqciqqaais:
        sqmwqsayaqygocqo:
        goto qumgeeowggyeimes;
        wyqumeogqqakouyw:
        owawwqcgcwwygkcy:
        goto aeeoymcoceusaems;
        scowusmowqywueme:
        goto kaeuoeawkcwsycoe;
        goto hosygawmqsywcsuu;
        qumgeeowggyeimes:
        saugoksiwmswowqy:
        goto ugqqumgemgqkgowm;
        mueuscommwusykqi:
        return $aqykuigiuwmmcieu;
        goto eiyiymqwqgyqcgkw;
        kegqauaaamqicscy:
        iyseosekyuousmcs:
        goto scowusmowqywueme;
        iekkoiwkmagacmui:
        kaeuoeawkcwsycoe:
        goto uaqawigsyseeuymm;
        qaioiokqgaomscqo:
        makewcmuowqeuqqo:
        goto iiqwwquosouwiqma;
        hosygawmqsywcsuu:
        kmqyoeosqckuaqsi:
        goto eewacyseykeqcsgi;
        cecwiqciigmgyoem:
        if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) {
            goto kmqyoeosqckuaqsi;
        }
        goto uwqqmumicaygiukc;
        wassuqquwikiawos:
        $aqykuigiuwmmcieu = null;
        goto mmukumekuuysequy;
        ycmmugqamooccaoe:
        weiwkwaagqqcwkoq:
        goto ykassqsuwccwksyg;
        qwuqiimucosmgmei:
        $ekwsasieesaqcsiw = "\56";
        goto comoagswmewckyoi;
        wqwogycsmygawouy:
        if ($qqscaoyqikuyeoaw !== "\151\x6e\144\145\x78" && !$cwwowqyuwccuykom) {
            goto makewcmuowqeuqqo;
        }
        goto auiosgoysmeuswoi;
        ekkyqawesagkmqwi:
        yimaquocemaqgkew:
        goto souoecscwyauueko;
        aeeoymcoceusaems:
        if (!$aqykuigiuwmmcieu) {
            goto iyseosekyuousmcs;
        }
        goto ycqcgecgwiaioguy;
        gguiykqamegqmqki:
        ocqcqsmmqaiiayis:
        goto igyukcioksgyuumo;
        ekswgqyowkoaksqi:
        goto saugoksiwmswowqy;
        goto gguiykqamegqmqki;
        uyyomesiccsqemog:
        $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "\x2f{$ccamueccusigaaio}";
        goto ekswgqyowkoaksqi;
        ugqqumgemgqkgowm:
        tguuykuocgscwigs:
        goto woeskwkwwgwgmowo;
        mwomsussaikumyme:
        if (!$yeacayasgueouoqc) {
            goto yckakqcyqksckiwg;
        }
        goto myskascmmkymmmgm;
        ykassqsuwccwksyg:
        $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw));
        goto wsycuswmoucikqam;
        wcoywkwsguoyysay:
        eyyqgqyikeoiuusw:
        goto yweawggqmecqgaqe;
        myskascmmkymmmgm:
        if (!$ccamueccusigaaio) {
            goto tguuykuocgscwigs;
        }
        goto mgcieuiwescwqymy;
        iiqwwquosouwiqma:
        $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw("\x69\x6e\144\x65\170", $aqykuigiuwmmcieu);
        goto qgqckcyimogeucws;
        ycqcgecgwiaioguy:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy("\x74\x68\145\x6d\x65\137\x74\x65\x6d\x70\x6c\141\164\145\x5f\x72\x65\x71\x75\x69\162\x65\155\x65\x6e\164\x73", $aqykuigiuwmmcieu);
        goto kegqauaaamqicscy;
        uwqqmumicaygiukc:
        if ($yeacayasgueouoqc) {
            goto eyyqgqyikeoiuusw;
        }
        goto oiiiwwmwokesyqwo;
        mgcieuiwescwqymy:
        if (is_array($ccamueccusigaaio)) {
            goto ocqcqsmmqaiiayis;
        }
        goto uyyomesiccsqemog;
        wsycuswmoucikqam:
        $aqykuigiuwmmcieu = preg_replace("\57\x28{$ymqmyyeuycgmigyo}\x28\x3f\x21\56\52{$ymqmyyeuycgmigyo}\51\x29\57", $qqscaoyqikuyeoaw, $yeacayasgueouoqc);
        goto ekkyqawesagkmqwi;
        eewacyseykeqcsgi:
        $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw;
        goto iekkoiwkmagacmui;
        qgqckcyimogeucws:
        egkyuaemcsesciio:
        goto wyqumeogqqakouyw;
        iqumoawsgyyywwsq:
        quumaygcyqkgwyaq:
        goto mueuscommwusykqi;
        igyukcioksgyuumo:
        foreach ($ccamueccusigaaio as $igqsaukqcqscimok) {
            goto icguisyymukwkoac;
            icguisyymukwkoac:
            if (!($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true))) {
                goto ccaecemqggkcesym;
            }
            goto wwcyucesakwqmigu;
            wwcyucesakwqmigu:
            goto sqmwqsayaqygocqo;
            goto ioqaysioauoiookm;
            caeywemyokumoaki:
            queqqoyiueiikgus:
            goto eeaeuuuiukckywcg;
            ioqaysioauoiookm:
            ccaecemqggkcesym:
            goto caeywemyokumoaki;
            eeaeuuuiukckywcg:
        }
        goto egqeaugqciqqaais;
        comoagswmewckyoi:
        if (!preg_match("\x2f\134\x2e\x5b\60\55\71\x61\55\172\135\x2b\x24\57\x69", $qqscaoyqikuyeoaw)) {
            goto weiwkwaagqqcwkoq;
        }
        goto wgaqwowmmwgqcgio;
        esyeigyikuqioumu:
        if (!($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu)) {
            goto yimaquocemaqgkew;
        }
        goto qwuqiimucosmgmei;
        eiyiymqwqgyqcgkw:
    }
}
