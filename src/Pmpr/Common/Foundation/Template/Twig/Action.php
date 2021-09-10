<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\167\x69\147\x5f\162\x65\x6e\144\145\162\137\x66\151\x6c\x65\x6e\141\x6d\x65"), [$this, "\x6f\x6f\161\x65\x6b\x6d\147\163\x71\157\x6d\x73\141\x6b\x69\x6f"]);
        parent::kgquecmsgcouyaya();
    }
    public function aqiicausqkomqkqy()
    {
        goto cyiwyicwqagqigyw;
        ceyyuykckoayuosu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\x5f\x6e\165\x6d\x62\145\162", function ($eqgoocgaqwqcimie) {
            return is_numeric($eqgoocgaqwqcimie);
        });
        goto aumygwwssywsogem;
        igyikaemwiwqyeqq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\165\156\x69\x71\151\144", function () {
            return uniqid();
        });
        goto uwkuaykqqqkwgcey;
        uwkuaykqqqkwgcey:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x65\x63\x68\x6f", function ($sociqikgoyemqaac) {
            echo $sociqikgoyemqaac;
        });
        goto ceyyuykckoayuosu;
        cyiwyicwqagqigyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\x78\164\162\x61\143\164", function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                iaeuoauagoisyium:
            }
            qcsiiiieegyokook:
        }, ["\x6e\x65\x65\144\163\137\143\x6f\156\x74\145\x78\x74" => true]);
        goto caqisoicuegsemyy;
        caqisoicuegsemyy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x62\141\x73\x65\156\141\x6d\145", function ($mkomwsiykqigmqca) {
            return basename($mkomwsiykqigmqca);
        });
        goto suaiaeakuwkeaggc;
        suaiaeakuwkeaggc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x61\154\154\x5f\x75\163\145\x72\137\x66\x75\156\x63", function ($akemggqscawwikim, ...$qookweymeqawmcwo) {
            return call_user_func($akemggqscawwikim, ...$qookweymeqawmcwo);
        });
        goto igyikaemwiwqyeqq;
        aumygwwssywsogem:
    }
    public function sqmuqsscmimwqoki()
    {
        goto kwocuyyugaqsicqy;
        ksaoceiosgkgkeua:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\150\145\x5f\x63\157\156\x74\x65\x6e\164", function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) {
            return the_content($yauwwygqkmsmamik, $ecckicuukiesgaig);
        });
        goto wesmogqcyeemwqaq;
        gsscqquysycuswow:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\x74\x68\x65\x5f\160\157\x73\x74\x5f\164\150\x75\x6d\x62\x6e\x61\x69\154\137\x75\x72\154", function ($post, $oiegiwogmwmawkeo = "\160\157\x73\164\55\164\x68\x75\155\142\156\141\151\154") {
            return ManipulatePost::uamasysiccecccmw($oiegiwogmwmawkeo, $post);
        });
        goto uwcgosckamuosimw;
        meacamomoigoocks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\x5f\160\x61\x67\151\x6e\x61\164\151\157\156\137\154\151\155\151\164", function () {
            return ManipulateSetting::omkaowmygoqwsywq();
        });
        goto wmgmwseuygieasiq;
        eisoouawyymkasou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\164\x68\145\x5f\x70\x6f\x73\164\x5f\164\x68\x75\x6d\x62\x6e\x61\x69\x6c", function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) {
            return DecoratorPost::smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto gsscqquysycuswow;
        iksqmycekaokseuk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\x65\137\x74\x69\164\154\145", function () {
            return the_title();
        });
        goto yoikmmqgsuecwqse;
        uwcgosckamuosimw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\160\x6f\x73\x74\137\x63\x6c\x61\x73\163", function ($egkyssmuqcwaciya, $post = null) {
            post_class($egkyssmuqcwaciya, $post);
        });
        goto quycsusswssyiqek;
        osgggiswqmmcauic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\160\x6f\163\x74\137\x73\x74\x61\x74\165\163", function ($post = null) {
            return get_post_status($post);
        });
        goto kycuyyawyykwayum;
        aimoueqqomiogmwe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\137\x70\x61\x67\x65", function ($suaemuyiacqyugsm = null) {
            return is_page($suaemuyiacqyugsm);
        });
        goto osgggiswqmmcauic;
        ouiwcwgymiycmesy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\164\x69\164\154\145", function ($mksyucucyswaukig) {
            return ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig);
        });
        goto yamoqmeywqamiyee;
        kycuyyawyykwayum:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\137\143\141\164\x65\x67\x6f\162\171\x5f\154\x69\156\x6b", function ($guwumyyyakswawas) {
            return get_category_link($guwumyyyakswawas);
        });
        goto qayscesoyiskoeko;
        kmgimueiaqoamoiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\x61\163\137\145\170\143\145\162\x70\164", function ($post) {
            return DecoratorPost::seewsasmyoyciiee($post);
        });
        goto uyesmwqkkaeqyqsw;
        yumwmakewcuceeeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\164\x68\x65\x5f\164\x69\x74\154\145", function ($post = 0) {
            return ManipulatePost::qcgakseyaikigqco($post);
        });
        goto iksqmycekaokseuk;
        osuwwuwykkyioics:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\x5f\141\164\164\x61\x63\x68\x6d\x65\156\164", function ($post = null) {
            return ManipulateAttachment::aauyuieeeaakygki($post);
        });
        goto aimoueqqomiogmwe;
        qayscesoyiskoeko:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\160\157\163\164", function ($post = null) {
            return ManipulatePost::get($post);
        });
        goto ymaiyayeueqekkqu;
        ckcsasciyamuyeak:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\160\x6f\163\x74\137\155\x65\x74\x61", function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) {
            return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog);
        });
        goto rayeowssukccumsa;
        wycaemkqgqoqamga:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\160\157\x73\x74", function ($post = null, $cwwowqyuwccuykom = false) {
            return ManipulatePost::get($post, self::OBJECT, $cwwowqyuwccuykom) instanceof WP_Post;
        });
        goto osuwwuwykkyioics;
        aumiwewkmkcyqsic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\x70\x6f\163\164\x5f\164\x79\x70\145\x5f\x6f\x62\x6a\145\x63\x74", function ($post) {
            return ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post));
        });
        goto ukwaqucywiqsqcmw;
        waqwicwqkgsgaosm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\x61\x73\137\x70\157\163\x74\137\x74\150\x75\155\142\156\x61\151\154", function ($post) {
            return DecoratorPost::oaqimsyggeyyceig($post);
        });
        goto kmgimueiaqoamoiq;
        yamoqmeywqamiyee:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\x5f\x69\144", function ($mksyucucyswaukig) {
            goto qsiiueeogkusyayq;
            iyyoksuqkyayycyo:
            ugkuauswwusmgeak:
            goto qyauskeceyuommay;
            askmmowgaoaeucmg:
            cwsmkieawokgkqso:
            goto mcamcymgukiawmca;
            mgqoggoasugsqoqm:
            return $aokagokqyuysuksm;
            goto gquwcimccausouey;
            qsiiueeogkusyayq:
            $aokagokqyuysuksm = '';
            goto aoquaueqscawcquu;
            skuiqymemkkmcasa:
            mkuuaucmumoqmogc:
            goto mgqoggoasugsqoqm;
            wecwoieqkcmgyemy:
            if ($mksyucucyswaukig instanceof WP_Term) {
                goto skaswwgougcyyewo;
            }
            goto mkcqgkuwwkekeyea;
            waekkoqkywowucqm:
            goto mkuuaucmumoqmogc;
            goto iyyoksuqkyayycyo;
            mkcqgkuwwkekeyea:
            if (!is_numeric($mksyucucyswaukig)) {
                goto cwsmkieawokgkqso;
            }
            goto ymuwkueqksmiucek;
            ymuwkueqksmiucek:
            $aokagokqyuysuksm = $mksyucucyswaukig;
            goto askmmowgaoaeucmg;
            cwogqueiqawomkuc:
            gqyooycgsagyyeia:
            goto waekkoqkywowucqm;
            qyauskeceyuommay:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($mksyucucyswaukig);
            goto skuiqymemkkmcasa;
            aoquaueqscawcquu:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto ugkuauswwusmgeak;
            }
            goto wecwoieqkcmgyemy;
            mcamcymgukiawmca:
            goto gqyooycgsagyyeia;
            goto caeuciiioaqyuyug;
            caeuciiioaqyuyug:
            skaswwgougcyyewo:
            goto egkscycmsoysyukk;
            egkscycmsoysyukk:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($mksyucucyswaukig);
            goto cwogqueiqawomkuc;
            gquwcimccausouey:
        });
        goto eisoouawyymkasou;
        uyesmwqkkaeqyqsw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\x70\145\162\x6d\141\154\x69\x6e\153", function ($post, $cwwowqyuwccuykom = false) {
            return ManipulatePost::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom);
        });
        goto meacamomoigoocks;
        ieaumiwogamciyeq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x69\155\141\x67\x65", function ($post = null) {
            return ManipulateAttachment::qecqsmowoqmwgagu($post);
        });
        goto wycaemkqgqoqamga;
        ymaiyayeueqekkqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\164\x68\145\x5f\x64\x61\x74\145", function ($saqmwwmqiwmkiwaa = '', $post = null) {
            return ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post);
        });
        goto yumwmakewcuceeeq;
        kwocuyyugaqsicqy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\x5f\147\x65\164\137\141\164\164\x61\143\150\x6d\x65\156\x74\137\x75\x72\x6c", function ($qssimkkaqkwceqqs) {
            return DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
        });
        goto ckcsasciyamuyeak;
        ukwaqucywiqsqcmw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\160\x6f\x73\164\x5f\x74\x79\x70\145", function ($post) {
            return ManipulatePost::gueasuouwqysmomu($post);
        });
        goto waqwicwqkgsgaosm;
        rayeowssukccumsa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\160\137\x67\x65\164\x5f\x61\x74\x74\141\143\150\x6d\x65\156\x74\137\x69\155\141\147\x65\x5f\x75\x72\154", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') {
            goto swmkwwkoguyyoogq;
            amegcwiaikcwyuws:
            $eeamcawaiqocomwy = DecoratorAttachment::iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo);
            goto emcskqgacoswgmog;
            iuaauoycciukeqaw:
            gsaiaaeooukaeygk:
            goto amegcwiaikcwyuws;
            emcskqgacoswgmog:
            kokqmecseosgceak:
            goto guouwiieuysyiewm;
            guouwiieuysyiewm:
            return $eeamcawaiqocomwy;
            goto ycsgumakqqweigca;
            swmkwwkoguyyoogq:
            if ($oiegiwogmwmawkeo) {
                goto gsaiaaeooukaeygk;
            }
            goto oggqgmiqwuceekqm;
            iiyuccyiiyoguicm:
            goto kokqmecseosgceak;
            goto iuaauoycciukeqaw;
            oggqgmiqwuceekqm:
            $eeamcawaiqocomwy = DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
            goto iiyuccyiiyoguicm;
            ycsgumakqqweigca:
        });
        goto aumiwewkmkcyqsic;
        wesmogqcyeemwqaq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\x73\x5f\x63\x75\163\x74\157\x6d\x5f\160\157\x73\164\x5f\x74\x79\x70\145\x5f\x73\151\156\x67\154\145", function () {
            return is_singular(ManipulatePost::mwoyqeeigwqoamiw());
        });
        goto ieaumiwogamciyeq;
        yygiyieeyuuqucke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\137\164\x68\145\137\143\157\156\x74\x65\156\x74", function ($post) {
            return ManipulatePost::souwykwwmyygqyqi($post);
        });
        goto ksaoceiosgkgkeua;
        woimcikoqmikiiuo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\x65\x5f\x70\x6f\163\164", "\x74\x68\x65\137\160\157\163\164");
        goto yygiyieeyuuqucke;
        wmgmwseuygieasiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\141\166\x65\x5f\x70\x6f\x73\x74\163", function () {
            return ManipulatePost::ekwkywuguceaogsk();
        });
        goto woimcikoqmikiiuo;
        emwgmewoyckawiaa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\164\137\145\144\x69\164\137\154\151\156\153", function ($mksyucucyswaukig) {
            goto acaseyakoigmukmc;
            ygqwqqiowseokqyy:
            $iwywmkygwewiamwm = DecoratorPost::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto cckaqseuwsokgqky;
            acaseyakoigmukmc:
            $iwywmkygwewiamwm = "\x23";
            goto ioymoeauqmugekqw;
            cmqcmgwesykwwosy:
            soooekmauiwsaemc:
            goto ygqwqqiowseokqyy;
            ioymoeauqmugekqw:
            if ($mksyucucyswaukig instanceof WP_Post) {
                goto soooekmauiwsaemc;
            }
            goto oesewmcmiyceckae;
            oesewmcmiyceckae:
            if (!$mksyucucyswaukig instanceof WP_Term) {
                goto uismokoooeicygyy;
            }
            goto mkuwumgwoyasswam;
            aakueiomkcyiiows:
            return $iwywmkygwewiamwm;
            goto iauiowaaqsooooco;
            mkuwumgwoyasswam:
            $iwywmkygwewiamwm = ManipulateTerm::yyykkcyiksewsoqy($mksyucucyswaukig);
            goto mrocimywqwigwumc;
            eeuyyauaomyugqso:
            goto msokmumgqigwgwwc;
            goto cmqcmgwesykwwosy;
            cckaqseuwsokgqky:
            msokmumgqigwgwwc:
            goto aakueiomkcyiiows;
            mrocimywqwigwumc:
            uismokoooeicygyy:
            goto eeuyyauaomyugqso;
            iauiowaaqsooooco:
        });
        goto ouiwcwgymiycmesy;
        yoikmmqgsuecwqse:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\164\150\145\x5f\145\x78\x63\145\x72\160\x74", function ($post = null) {
            return ManipulatePost::masoymaamekuykso($post);
        });
        goto emwgmewoyckawiaa;
        quycsusswssyiqek:
    }
    public function ugugagoguiycqeys()
    {
        goto yoosmuokogseueas;
        ziqysygmaasemyem:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\162\144\x5f\x62\157\164\164\x6f\x6d\x5f\x6d\x61\162\147\151\x6e", function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) {
            $giwamsoicooomueg = ManipulateHTML::sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg);
            return $giwamsoicooomueg;
        });
        goto ocwegqcikuwygcos;
        yoosmuokogseueas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\141\156\x5f\x73\x68\157\167\x5f\x6f\x6e\137\147\162\x69\x64", function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) {
            goto sucgyiymguwououy;
            sucgyiymguwououy:
            $aqykuigiuwmmcieu = '';
            goto kcqewweqqqmekuwi;
            kcqewweqqqmekuwi:
            if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
                goto kskqckgmygiwqucm;
            }
            goto qkueegaowuyiimgw;
            cecomsiewwckuwqy:
            return rtrim($aqykuigiuwmmcieu);
            goto cgsuikiqggkikaae;
            wyokakscicekiums:
            cmogamoiwugoaaoo:
            goto ygywqwksoumccysq;
            ygywqwksoumccysq:
            kskqckgmygiwqucm:
            goto cecomsiewwckuwqy;
            qkueegaowuyiimgw:
            $uasyiiacieyekiia = ["\x78\163", "\x73\x6d", "\x6d\144", "\154\147", "\170\154"];
            goto aweayueuaeoasyms;
            aweayueuaeoasyms:
            foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) {
                goto swuwwcumqwckimwy;
                yeiwocswikqkwyew:
                $aqykuigiuwmmcieu .= "\40\x64\x2d{$ycuyiqagsmgikago}\x62\x6c\x6f\143\153";
                goto uyqsoayeaaumkace;
                kqscgsuaugsiwiwi:
                $ycuyiqagsmgikago .= "\x2d";
                goto gmskkukiiwweocwi;
                uqamuckwuksquqia:
                iayqwwsmsuwaykyw:
                goto gukawqgamokyceki;
                gukawqgamokyceki:
                $ycuyiqagsmgikago = '';
                goto mckkqgseimcgkcgu;
                cskesgswygwiqoim:
                $aqykuigiuwmmcieu .= "\40\144\x2d{$ycuyiqagsmgikago}\x6e\x6f\x6e\x65";
                goto guyeaeiscmgksacs;
                gmskkukiiwweocwi:
                goto gaqweioagqyciyaw;
                goto uqamuckwuksquqia;
                swuwwcumqwckimwy:
                $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, $ycuyiqagsmgikago, false);
                goto qsqwywcesyquykqq;
                guyeaeiscmgksacs:
                uyaweoaaqsagsqyi:
                goto keaaqaugoyquwsos;
                syqysaawasmesiqs:
                if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                    goto scioecswaikeacmy;
                }
                goto yeiwocswikqkwyew;
                mckkqgseimcgkcgu:
                gaqweioagqyciyaw:
                goto syqysaawasmesiqs;
                qsqwywcesyquykqq:
                if ($ycuyiqagsmgikago == "\x78\163") {
                    goto iayqwwsmsuwaykyw;
                }
                goto kqscgsuaugsiwiwi;
                keaaqaugoyquwsos:
                ycuksimueyoeugmi:
                goto ieacisiumswqewsq;
                ooayswecmkkqgskg:
                scioecswaikeacmy:
                goto cskesgswygwiqoim;
                uyqsoayeaaumkace:
                goto uyaweoaaqsagsqyi;
                goto ooayswecmkkqgskg;
                ieacisiumswqewsq:
            }
            goto wyokakscicekiums;
            cgsuikiqggkikaae:
        });
        goto moeqauuausuqygiq;
        osksqmgkikamgaui:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\162\145\x61\164\145", function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') {
            return ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
        });
        goto wagqsecuquyukiwc;
        moeqauuausuqygiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\165\156\x73\x65\164", function ($uomewyckeuqoqocu, $uusmaiomayssaecw) {
            ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            return $uomewyckeuqoqocu;
        });
        goto kmmwmccqeuasieoy;
        cycukssoyewuiyyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\151\x63\157\156", function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) {
            return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        });
        goto oaogeakeuqgouywe;
        igcusescocaiyqki:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\x74\x65\155\x70\x6c\141\x74\145", [$this, "\171\x69\x79\x71\145\143\x61\167\x69\x6f\x79\157\163\x6f\x61\x77"]);
        goto kakwaaemoyyusiek;
        ocwegqcikuwygcos:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\137\x73\145\164\164\x69\x6e\147", function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) {
            return WPSetting::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        });
        goto qmesaeogykqacemy;
        wagqsecuquyukiwc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x61\156\137\154\x61\172\x79\x5f\154\x6f\x61\x64", function () {
            return $this->sscegwueamckwmcy("\x63\x61\x6e\137\154\141\172\171\x5f\x6c\157\141\x64", true);
        });
        goto ziqysygmaasemyem;
        kmmwmccqeuasieoy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x64\x64\137\154\x6f\143\x61\164\x69\157\x6e", function ($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null) {
            ManipulateTemplate::kikcumcscysmmuos($qqscaoyqikuyeoaw, $skikiykssoocmmik, $ymqmyyeuycgmigyo, $post);
        });
        goto osksqmgkikamgaui;
        oaogeakeuqgouywe:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\163\x70\151\x6e\156\145\x72", function ($ywmkwiwkosakssii = []) {
            return ManipulateHTML::kqmkicmuscsgqeoi($ywmkwiwkosakssii);
        });
        goto igcusescocaiyqki;
        qmesaeogykqacemy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x75\162\x6c", function ($eeamcawaiqocomwy) {
            return ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy);
        });
        goto cycukssoyewuiyyw;
        kakwaaemoyyusiek:
    }
    public function render()
    {
        goto sqigasuoiqyqqokc;
        sqigasuoiqyqqokc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\145\x6e\x64\145\162\x5f\x75\163\x65\x72\137\144\x61\164\141", [$this, "\x6f\145\141\151\147\x63\x69\x73\153\x65\x77\163\151\x69\x65\x63"]);
        goto aosyiicmoiuswsce;
        aosyiicmoiuswsce:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x72\145\x6e\x64\x65\x72\137\141\165\x74\x68\x6f\x72\x5f\144\x61\x74\x61", [$this, "\x6f\145\141\x69\x67\143\x69\163\153\x65\167\163\151\x69\x65\143"]);
        goto eisakkewoaeqqeqi;
        eisakkewoaeqqeqi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\162\x65\x6e\144\x65\x72\x5f\160\x6f\x73\164\x5f\144\141\164\x61", function ($aiowsaccomcoikus = "\x74\151\164\x6c\x65", $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) {
            goto cwuiegmgmaoasqys;
            scmyekuemcoeeggy:
            imyyokaecggauwca:
            goto ykocaswauweieysc;
            mqkmsmceakcwuykg:
            $icwicymcioeyeyek = null;
            goto semsywguyogigssk;
            ykocaswauweieysc:
            mwsogcaisqkoyoyo:
            goto aaksksikokoywwqw;
            oqsgqmmoqoyoicia:
            if (!$ccamueccusigaaio) {
                goto usqgeieewckcwumm;
            }
            goto mqycugoiuasmyycy;
            coomeqeooeuaagwm:
            $post = ManipulatePost::get($ccamueccusigaaio, self::OBJECT, $cwwowqyuwccuykom);
            goto gkkywuycqkawqiuq;
            semsywguyogigssk:
            switch ($aiowsaccomcoikus) {
                case self::IMAGE:
                    goto aiouimmkquyuwagk;
                    aiqouoismmsiakak:
                    iiieosoykaeycaks:
                    goto qiygeqkamwuomgie;
                    msmyywuowokwiswe:
                    $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x61\164\164\x72\x73", []);
                    goto uaewuiuogmissaks;
                    aysgkuigyuqqcuae:
                    ciuaqmasmqyeioiy:
                    goto ykyauiwkesygwwyq;
                    uaewuiuogmissaks:
                    $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\163", "\151\x6d\147\x2d\163\x69\x7a\145\x20\x73\151\x7a\145\x2d{$oiegiwogmwmawkeo}");
                    goto iwcyguueicgkqmiq;
                    qiygeqkamwuomgie:
                    $icwicymcioeyeyek = ManipulateAttachment::qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto aysgkuigyuqqcuae;
                    iwcyguueicgkqmiq:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto iiieosoykaeycaks;
                    }
                    goto qswoesemmkuisiak;
                    aiouimmkquyuwagk:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\x69\x7a\x65", "\164\x68\165\155\x62\156\141\x69\x6c");
                    goto msmyywuowokwiswe;
                    qswoesemmkuisiak:
                    $icwicymcioeyeyek = DecoratorPost::smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    goto wyaiukacimqqkwso;
                    ykyauiwkesygwwyq:
                    goto mwsogcaisqkoyoyo;
                    goto kwacykquqegccocg;
                    wyaiukacimqqkwso:
                    goto ciuaqmasmqyeioiy;
                    goto aiqouoismmsiakak;
                    kwacykquqegccocg:
                case "\x69\155\x61\x67\145\x5f\x75\162\154":
                case "\x69\155\x61\x67\145\137\163\x72\143":
                    goto agwuqimeueqcgeig;
                    ewmswgookyygmeck:
                    wgcwoaukyqokqegs:
                    goto kmoguoggeuugwcuk;
                    eeemieuggkqicmcm:
                    $icwicymcioeyeyek = DecoratorPost::uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ywgasekuusqmywou;
                    agwuqimeueqcgeig:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\172\145", "\164\x68\165\x6d\x62\x6e\141\x69\x6c");
                    goto ioawqeykaygmcusq;
                    ioawqeykaygmcusq:
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        goto qaiqkuwcooimcsyc;
                    }
                    goto eeemieuggkqicmcm;
                    wcgeeoqqamawayyk:
                    $icwicymcioeyeyek = DecoratorAttachment::iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    goto ewmswgookyygmeck;
                    kmoguoggeuugwcuk:
                    goto mwsogcaisqkoyoyo;
                    goto iussoiiiygmaqoey;
                    uumsakwagcmcusai:
                    qaiqkuwcooimcsyc:
                    goto wcgeeoqqamawayyk;
                    ywgasekuusqmywou:
                    goto wgcwoaukyqokqegs;
                    goto uumsakwagcmcusai;
                    iussoiiiygmaqoey:
                case self::NAME:
                case self::TITLE:
                    $icwicymcioeyeyek = ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio);
                    goto mwsogcaisqkoyoyo;
                case "\144\x61\164\145":
                case "\164\x69\155\x65":
                case "\144\x61\164\x65\x74\151\x6d\145":
                    goto miigyyocoaqouyws;
                    wosiwcgiequysoiq:
                    $icwicymcioeyeyek = $this->eciukqcoqmyacwow(ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
                    goto ecicsgkwsukqmquo;
                    yymmsiqcoeikoges:
                    $somiuasmmwkuceag = ManipulateArray::get($ywmkwiwkosakssii, "\x6c\x6f\x63\141\154\145", "\146\141");
                    goto mycaymeeoakigqwk;
                    ecicsgkwsukqmquo:
                    goto mwsogcaisqkoyoyo;
                    goto cqkkmgicucyoeqca;
                    miigyyocoaqouyws:
                    switch ($aiowsaccomcoikus) {
                        case "\144\x61\x74\x65\x74\x69\x6d\145":
                            $ggauoeuaesiymgee = ManipulateSetting::yoaaussmackoisuw();
                            goto ccuiyiguswiossui;
                        case "\x74\x69\155\145":
                            $ggauoeuaesiymgee = ManipulateSetting::isiuiegyqiomccsw();
                            goto ccuiyiguswiossui;
                        case "\144\141\x74\x65":
                        default:
                            $ggauoeuaesiymgee = ManipulateSetting::uyomwmskouyyqyyq();
                            goto ccuiyiguswiossui;
                    }
                    goto oyiogyamekukoqce;
                    mycaymeeoakigqwk:
                    $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\x66\x6f\x72\x6d\x61\164", $ggauoeuaesiymgee);
                    goto wosiwcgiequysoiq;
                    oyiogyamekukoqce:
                    kouykoaqsyamwkow:
                    goto cwaksqcggwcaucmo;
                    cwaksqcggwcaucmo:
                    ccuiyiguswiossui:
                    goto yymmsiqcoeikoges;
                    cqkkmgicucyoeqca:
                case self::URL:
                case self::PERMALINK:
                    $icwicymcioeyeyek = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio);
                    goto mwsogcaisqkoyoyo;
                case "\144\x65\x73\143":
                case self::DESCRIPTION:
                    goto iiymmyommkikmyqa;
                    iiymmyommkikmyqa:
                    $gioggcykgoikcwiy = ManipulateArray::get($ywmkwiwkosakssii, "\x63\150\145\x63\153", true);
                    goto oicqseawwmwcgsua;
                    mqkkmgeccukekuus:
                    goto mwsogcaisqkoyoyo;
                    goto agosuskgagmqkcqq;
                    oicqseawwmwcgsua:
                    $icwicymcioeyeyek = ManipulatePost::masoymaamekuykso($ccamueccusigaaio, $gioggcykgoikcwiy);
                    goto mqkkmgeccukekuus;
                    agosuskgagmqkcqq:
            }
            goto scmyekuemcoeeggy;
            qiagugckeckokcas:
            usqgeieewckcwumm:
            goto coomeqeooeuaagwm;
            gkkywuycqkawqiuq:
            if (!$post) {
                goto qyggcimqgyscmcci;
            }
            goto swoiuaaoaceaaeou;
            aaksksikokoywwqw:
            return rawurldecode($icwicymcioeyeyek);
            goto kcsegweogmaqiwco;
            swoiuaaoaceaaeou:
            $ccamueccusigaaio = $post;
            goto eqewaacwikyoaswc;
            cwuiegmgmaoasqys:
            $cwwowqyuwccuykom = false;
            goto oqsgqmmoqoyoicia;
            mqycugoiuasmyycy:
            $cwwowqyuwccuykom = true;
            goto qiagugckeckokcas;
            eqewaacwikyoaswc:
            qyggcimqgyscmcci:
            goto mqkmsmceakcwuykg;
            kcsegweogmaqiwco:
        });
        goto mqckeqywkyewukku;
        mqckeqywkyewukku:
    }
    public function comment()
    {
        goto koyswyqcemwusuku;
        qqsiesyooukcuege:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\x64\x69\x74\x5f\x63\157\x6d\x6d\x65\156\x74\x5f\154\151\x6e\x6b", function ($cmwygeyygwqaemaq = null, $caacssaumiqeaoaw = '', $miisqgccsqqcscia = '') {
            return edit_comment_link($cmwygeyygwqaemaq, $caacssaumiqeaoaw, $miisqgccsqqcscia);
        });
        goto goiywqywgesicwsm;
        mqaemqqgquyscwgg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x63\x6f\x6d\x6d\145\156\164\137\x6c\x69\x6e\x6b", function ($aqqmosqmsuueyaes = null, $ywmkwiwkosakssii = []) {
            return get_comment_link($aqqmosqmsuueyaes, $ywmkwiwkosakssii);
        });
        goto aisciyiooggegcwa;
        gueqcauquesmkqym:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\143\x6f\155\x6d\145\156\x74", function ($aokagokqyuysuksm = null) {
            return ManipulateComment::get($aokagokqyuysuksm);
        });
        goto wwiiieggesogkwky;
        aisciyiooggegcwa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\x63\157\x6d\155\145\156\x74\137\164\x69\x6d\145", function ($saqmwwmqiwmkiwaa = '', $eqwyacwmcqusmwoq = false, $mcmaiqckgiuqayau = true) {
            return get_comment_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $mcmaiqckgiuqayau);
        });
        goto cymkyayecqkecsso;
        goiywqywgesicwsm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\156\145\x78\x74\137\143\157\x6d\155\145\x6e\x74\163\137\154\151\156\x6b", function ($pkyyagewkiyckmwy = '', $kmsquaeucgusuyio = 0) {
            return get_next_comments_link($pkyyagewkiyckmwy, $kmsquaeucgusuyio);
        });
        goto iuamoyacomwmyswu;
        somoaammcamiswiq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\x70\x72\x65\x76\x69\157\165\163\x5f\x63\x6f\155\x6d\145\x6e\x74\x73\137\154\x69\x6e\x6b", function ($pkyyagewkiyckmwy = '') {
            return get_previous_comments_link($pkyyagewkiyckmwy);
        });
        goto muiiokquumgiyaas;
        koyswyqcemwusuku:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x6f\x6d\x6d\x65\x6e\164\137\x69\144\x5f\146\151\145\154\144\163", function ($aokagokqyuysuksm = 0) {
            return comment_id_fields($aokagokqyuysuksm);
        });
        goto mqaemqqgquyscwgg;
        moicgacciggecuie:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\157\x6d\x6d\145\156\x74\137\162\145\x70\x6c\x79\137\154\x69\156\x6b", function ($ywmkwiwkosakssii = [], $aqqmosqmsuueyaes = null, $post = null) {
            return get_comment_reply_link($ywmkwiwkosakssii, $aqqmosqmsuueyaes, $post);
        });
        goto qqsiesyooukcuege;
        oosoeecugcecmoqu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\x63\x6f\x6d\x6d\x65\x6e\x74\x5f\x61\x75\164\x68\157\x72", function ($aqqmosqmsuueyaes = 0) {
            return ManipulateComment::mguqscccckuywsya($aqqmosqmsuueyaes);
        });
        goto kssaskooygaesyuq;
        kssaskooygaesyuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\143\x6f\x6d\x6d\145\x6e\x74\x73\x5f\x6e\165\155\x62\x65\x72\x5f\x74\145\x78\164", function ($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku) {
            return get_comments_number_text($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku);
        });
        goto somoaammcamiswiq;
        cymkyayecqkecsso:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\x5f\143\157\x6d\155\x65\156\x74\137\144\141\164\145", function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) {
            return ManipulateComment::squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma);
        });
        goto gueqcauquesmkqym;
        iuamoyacomwmyswu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\137\x63\157\155\155\145\156\x74\x5f\x61\165\x74\150\x6f\162\137\x6c\151\156\153", function ($aqqmosqmsuueyaes = 0) {
            return get_comment_author_link($aqqmosqmsuueyaes);
        });
        goto oosoeecugcecmoqu;
        wwiiieggesogkwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\137\143\x6f\x6d\x6d\x65\x6e\164\137\164\145\170\164", function ($aokagokqyuysuksm = null, $ywmkwiwkosakssii = []) {
            return get_comment_text($aokagokqyuysuksm, $ywmkwiwkosakssii);
        });
        goto moicgacciggecuie;
        muiiokquumgiyaas:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\143\x6f\155\x6d\x65\x6e\164\137\143\x6c\141\163\x73", function ($cmkqisoeyioisqaw, $aqqmosqmsuueyaes) {
            return comment_class($cmkqisoeyioisqaw, $aqqmosqmsuueyaes);
        });
        goto esiuqyuiuagocqce;
        esiuqyuiuagocqce:
    }
    public function mkukcsqosmkeeask()
    {
        goto syicggsyayqwywma;
        esaoimegkqmoakoo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\x6e\157\156\143\145\x5f\x66\x69\x65\154\144", function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) {
            return wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false);
        });
        goto yyicwymeasmimggy;
        yyicwymeasmimggy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\x61\x6e\x69\164\x69\172\145\137\164\151\x74\154\145", function ($cmwygeyygwqaemaq) {
            return sanitize_title($cmwygeyygwqaemaq);
        });
        goto oyoiceikawwqskai;
        syicggsyayqwywma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x64\x6d\151\x6e\137\x75\162\154", function ($mkomwsiykqigmqca, $aaceqemaqqeckueq = "\x61\144\x6d\x69\x6e") {
            return admin_url($mkomwsiykqigmqca, $aaceqemaqqeckueq);
        });
        goto ykmiqawqiommeyic;
        ekkswyasyksokemg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x75\x73\x65\x72\137\154\x6f\x67\x67\145\144\137\151\156", function () {
            return DecoratorUser::ksgkoukcicwkkaum();
        });
        goto mqsoccawiacgogca;
        ykmiqawqiommeyic:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\x5f\x6c\x6f\147\157\165\x74\x5f\165\x72\154", function ($gwqgmkqcgwwmweom = '') {
            return wp_logout_url($gwqgmkqcgwwmweom);
        });
        goto esaoimegkqmoakoo;
        oyoiceikawwqskai:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x75\x72\x72\x65\x6e\x74\x5f\165\163\145\162\137\x63\x61\x6e", function ($gkswkiicccswksiq) {
            return current_user_can($gkswkiicccswksiq);
        });
        goto ekkswyasyksokemg;
        mqsoccawiacgogca:
    }
    public function eeoeyakoiycwiuoa()
    {
        goto gcmiayguaqqeiese;
        auuqmasiciwyueek:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\x79\156\x61\155\151\x63\137\163\x69\144\145\142\141\x72", function ($momcykaoccoymeig) {
            DecoratorWidget::esuiacmywcmmsmao($momcykaoccoymeig);
        });
        goto ykeaeieyycoeqccm;
        eusygaeoggqeuuki:
        $this->sqmuqsscmimwqoki();
        goto skqiqqeyqokasmeg;
        ucgagqogckeuiewi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\x74\137\160\141\147\x65\x5f\142\171\x5f\160\141\164\150", function ($mkomwsiykqigmqca) {
            return ManipulatePage::ssacaeeassumyuws($mkomwsiykqigmqca);
        });
        goto weecgesamaiayuqo;
        usgcuuuscucqesug:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x74\x65\x72\x6d\137\154\x69\156\153", function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') {
            return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        });
        goto omoayecymwmcysyw;
        wwwsqwyegoowkmik:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\160\137\x67\145\x74\x5f\x61\x74\x74\x61\x63\x68\155\x65\x6e\164\137\x69\x6d\x61\147\x65", function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = "\x74\x68\x75\x6d\142\156\x61\151\x6c", $wisgiwskwawciiee = []) {
            return ManipulateAttachment::qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        goto igygkagcaiiiumqo;
        gsyagiygoyamakyu:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\x74\x5f\x6f\160\x74\x69\157\156", function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) {
            return DecoratorOption::get($omkysikckkcieckq, $ggauoeuaesiymgee);
        });
        goto ucgagqogckeuiewi;
        uaysaomocomaomaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\160\160\x6c\171\x5f\x66\151\154\164\145\x72\163", function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) {
            return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo);
        });
        goto kcyaqgaosmmscquy;
        weecgesamaiayuqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\141\144\155\151\156", function () {
            return is_admin();
        });
        goto eusygaeoggqeuuki;
        oqycocwaiqmyaeow:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\x6f\x64\x79\137\143\x6c\x61\163\163", "\142\x6f\144\x79\137\143\154\x61\x73\163");
        goto mkiiuusasqaucucm;
        uwsmweegoueoawau:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\x68\145\x63\x6b\145\x64", function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) {
            goto iqmymqqskgsgsiku;
            kqeemeukmoukyeiw:
            ukswuuooigiykaso:
            goto quikiokiqwkqsqys;
            ycogsiaoceaiaosi:
            qwyuoiycqcaaakcq:
            goto kqeemeukmoukyeiw;
            qyeiyecmaomycoks:
            if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc)) {
                goto yeqcqmakwyuoaayk;
            }
            goto qcqyawqiwksyicok;
            iqmymqqskgsgsiku:
            if (!is_array($yeacayasgueouoqc)) {
                goto ukswuuooigiykaso;
            }
            goto qyeiyecmaomycoks;
            ucewekmmuygqecqk:
            goto qwyuoiycqcaaakcq;
            goto ayymceqgcuqkqkmo;
            qcqyawqiwksyicok:
            $yeacayasgueouoqc = null;
            goto ucewekmmuygqecqk;
            gkskumckoocyioge:
            $yeacayasgueouoqc = $gmeoaiyogiokeeau;
            goto ycogsiaoceaiaosi;
            quikiokiqwkqsqys:
            return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false);
            goto asqimcomuseoqiue;
            ayymceqgcuqkqkmo:
            yeqcqmakwyuoaayk:
            goto gkskumckoocyioge;
            asqimcomuseoqiue:
        });
        goto uaysaomocomaomaw;
        cgckkkoaumakemuc:
        $this->mkukcsqosmkeeask();
        goto qiuouckkycciwuyo;
        ecikykuqgeaqamwk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x61\x64\x64\x5f\x74\150\151\143\153\142\157\170", function () {
            add_thickbox();
        });
        goto gekkisqyegwkwcmg;
        qoceommegsyqswsi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x70\157\163\x74\x5f\x74\x79\x70\x65\137\141\162\143\150\151\166\x65\137\x6c\151\x6e\x6b", function ($useksmwkuswkwcqg) {
            return ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg);
        });
        goto agukockguesiwmim;
        ykaymqwyewgaouaw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x68\145\137\167\x69\144\147\145\164", function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) {
            DecoratorWidget::assameyusgwogmce($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        });
        goto sceeeykswowqeqyi;
        ykeaeieyycoeqccm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\163\x5f\x61\143\164\x69\166\145\137\x73\x69\144\x65\142\141\x72", function ($momcykaoccoymeig) {
            return DecoratorWidget::ooksqgokuwcmoqcu($momcykaoccoymeig);
        });
        goto auguaocagomuuqqk;
        ygiycusyssyegauq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\142\154\157\147\151\156\146\x6f", function ($ekcswiguywieeeoc) {
            return get_bloginfo($ekcswiguywieeeoc);
        });
        goto qoceommegsyqswsi;
        gekkisqyegwkwcmg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\137\x73\x65\x61\162\x63\150\x5f\161\x75\x65\x72\x79", function ($sekkmwqwqwcayiwg = true) {
            return get_search_query($sekkmwqwqwcayiwg);
        });
        goto caicmucqkokaecsg;
        scoaiameyouasusa:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\150\141\163\137\x6e\x61\166\137\x6d\x65\x6e\165", "\150\x61\x73\x5f\156\141\166\x5f\155\x65\156\x75");
        goto qcykwgwoyuuqiicc;
        mggqockcmokwiwuq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\137\x61\144\155\151\x6e\137\x73\145\x61\x72\x63\x68\x5f\x71\165\145\162\x79", function () {
            _admin_search_query();
        });
        goto egyksgscyqmieque;
        omoayecymwmcysyw:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\164\x65\162\x6d\137\x64\x65\163\143\x72\x69\x70\164\x69\157\156", function ($iwewcwusemqaiggk = 0) {
            return term_description($iwewcwusemqaiggk);
        });
        goto weyegmawkwggekgi;
        qmiugaqisqiwooio:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\x65\164\x5f\x74\145\x72\155", function ($post = null, $kesssewsiegssiya = '', $qqgsimqiqyaugceg = true) {
            return ManipulatePost::kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg);
        });
        goto usgcuuuscucqesug;
        wqgmqkugcksgscke:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x5f\137", function ($cmwygeyygwqaemaq, $mokawwccycoiqeka = "\x64\145\146\141\165\154\164") {
            return __($cmwygeyygwqaemaq, $mokawwccycoiqeka);
        });
        goto mgykqueoqmyucwky;
        iaawmomcqiokucac:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\163\x65\x6c\x65\143\x74\x65\144", function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) {
            goto aamogomsaksgcsig;
            imuyoescowgckyyc:
            return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false);
            goto uiookuuakyqyuagw;
            soewwyoqiysyqsmm:
            $yeacayasgueouoqc = null;
            goto msqiamqqoiceauwy;
            iawimoagycsccyqw:
            muoeugawocmikiua:
            goto pmmcyycmwceweqck;
            pmmcyycmwceweqck:
            $yeacayasgueouoqc = $ymmmmaiuoocagigk;
            goto eakgamsscsuususi;
            eakgamsscsuususi:
            bgwomyaccmauskgm:
            goto coskskmacukoewgo;
            msqiamqqoiceauwy:
            goto bgwomyaccmauskgm;
            goto iawimoagycsccyqw;
            aamogomsaksgcsig:
            if (!is_array($yeacayasgueouoqc)) {
                goto cmsgsoqiskwwqywg;
            }
            goto kascwigwmyyywwom;
            kascwigwmyyywwom:
            if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc)) {
                goto muoeugawocmikiua;
            }
            goto soewwyoqiysyqsmm;
            coskskmacukoewgo:
            cmsgsoqiskwwqywg:
            goto imuyoescowgckyyc;
            uiookuuakyqyuagw:
        });
        goto uwsmweegoueoawau;
        cgcymuikeqwuqaks:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\144\157\x5f\155\145\x74\141\x5f\x62\157\170\x65\x73", function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) {
            do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig);
        });
        goto ykaymqwyewgaouaw;
        mcegmykimgwocisg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\x5f\146\x6f\x72\x6d\x61\x74\x5f\x66\162\x6f\x6d\x5f\x6d\151\155\145\x5f\x74\x79\160\x65", function ($qiwqkoiamayyqase) {
            goto ocwqeygqmqgawqqy;
            qawgegcsiawquqcm:
            qkkocwikmsocekwq:
            goto geakuimqwgsiaask;
            ymcqmgsqsggscmsi:
            $sqeykgyoooqysmca = "\160\x64\x66";
            goto qawgegcsiawquqcm;
            ekeokeoweycsyqos:
            return $sqeykgyoooqysmca;
            goto wcowkmqskaouuqsm;
            oggiokiewaqggaoc:
            if (!(strpos($qiwqkoiamayyqase, "\x70\144\x66") !== false)) {
                goto qkkocwikmsocekwq;
            }
            goto ymcqmgsqsggscmsi;
            wkigieqkikmiqqgw:
            cseseucmsoywsecu:
            goto ekeokeoweycsyqos;
            ukgsemksqoiukgoc:
            $sqeykgyoooqysmca = "\x69\x6d\141\147\x65";
            goto wkigieqkikmiqqgw;
            geakuimqwgsiaask:
            goto cseseucmsoywsecu;
            goto aoqycegeggwwkwya;
            aoqycegeggwwkwya:
            oqikauiqoeuyoeyc:
            goto ukgsemksqoiukgoc;
            ocwqeygqmqgawqqy:
            $sqeykgyoooqysmca = '';
            goto uqimycsoiocokgyi;
            uqimycsoiocokgyi:
            if (strpos($qiwqkoiamayyqase, "\151\155\x61\147\145") !== false) {
                goto oqikauiqoeuyoeyc;
            }
            goto oggiokiewaqggaoc;
            wcowkmqskaouuqsm:
        });
        goto wwwsqwyegoowkmik;
        kcyaqgaosmmscquy:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\145\144\x69\164\157\x72", function ($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck = []) {
            return wp_editor($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck);
        });
        goto mcegmykimgwocisg;
        agukockguesiwmim:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x68\x6f\x6d\x65\137\x75\x72\x6c", function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) {
            return ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
        });
        goto iaawmomcqiokucac;
        skqiqqeyqokasmeg:
        $this->comment();
        goto cgckkkoaumakemuc;
        eeusamaykaysmgoq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\x74\x5f\x74\x65\x72\155\137\x74\x69\164\154\145", function ($iwewcwusemqaiggk) {
            return ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
        });
        goto wqgmqkugcksgscke;
        sceeeykswowqeqyi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\x5f\x70\x61\x67\x65\x64", function () {
            return DecoratorQuery::sgeaogakoscmysgc();
        });
        goto swowyqmmmawuumkq;
        iwosowoeugcumagm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x63\157\x6d\x6d\x65\x6e\164\x73\137\164\145\x6d\160\x6c\141\x74\145", "\143\157\x6d\155\x65\156\164\163\137\x74\145\x6d\x70\154\141\x74\145");
        goto auuqmasiciwyueek;
        coegigeuyugiwuou:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\x6f\x5f\x73\145\x74\x74\151\x6e\147\163\x5f\163\x65\143\164\151\157\x6e\163", function ($awcmekyiwwkeyisq) {
            return do_settings_sections($awcmekyiwwkeyisq);
        });
        goto ecikykuqgeaqamwk;
        ugguwkkgqoyseuma:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\137\144\x72\x6f\x70\144\x6f\x77\156\137\143\x61\164\x65\147\157\162\x69\x65\163", function ($ywmkwiwkosakssii) {
            wp_dropdown_categories($ywmkwiwkosakssii);
        });
        goto qmiugaqisqiwooio;
        qicikuqekgkawwqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x74\150\x65\x5f\141\165\x74\x68\x6f\x72\137\155\145\164\141", function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) {
            return DecoratorAuthor::igawqaomowicuayw($aiowsaccomcoikus, ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce));
        });
        goto ommomcekkekaceme;
        mgykqueoqmyucwky:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x73\x75\142\x6d\151\164\x5f\142\x75\164\164\x6f\x6e", function () {
            return submit_button();
        });
        goto coegigeuyugiwuou;
        egyksgscyqmieque:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\151\x73\x5f\x61\x72\143\x68\151\x76\x65", function () {
            return DecoratorQuery::migkyseymeomymmy() || ManipulatePage::okiaumcqquyioqcy();
        });
        goto cgcymuikeqwuqaks;
        weyegmawkwggekgi:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\145\164\137\x74\145\x72\x6d\x5f\x63\x68\x69\154\x64\162\x65\x6e", function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) {
            return ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii);
        });
        goto eeusamaykaysmgoq;
        auguaocagomuuqqk:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\x66\162\x6f\x6e\164\137\160\141\x67\x65", function () {
            return DecoratorQuery::takycgcamoacksqw();
        });
        goto mggqockcmokwiwuq;
        goyyumqwuiywaimq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\167\x70\137\146\x6f\x6f\x74\x65\162", "\167\160\x5f\x66\x6f\157\x74\145\x72");
        goto oqycocwaiqmyaeow;
        mkiiuusasqaucucm:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\x5f\156\141\x76\x5f\155\145\x6e\x75", "\167\x70\x5f\156\x61\x76\137\x6d\x65\x6e\165");
        goto scoaiameyouasusa;
        ommomcekkekaceme:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\147\x65\164\x5f\141\x75\x74\150\x6f\x72\137\160\157\x73\164\163\x5f\165\x72\154", function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') {
            return DecoratorAuthor::mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum);
        });
        goto ugguwkkgqoyseuma;
        igygkagcaiiiumqo:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\141\166\141\x74\x61\x72", function ($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') {
            return ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee);
        });
        goto qicikuqekgkawwqo;
        gcmiayguaqqeiese:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x77\x70\137\x68\145\x61\144", "\x77\x70\137\x68\x65\141\x64");
        goto goyyumqwuiywaimq;
        qcykwgwoyuuqiicc:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x67\145\x74\x5f\x73\145\141\162\x63\x68\137\x66\x6f\x72\x6d", "\147\x65\x74\x5f\x73\145\x61\162\143\x68\137\x66\x6f\162\x6d");
        goto iwosowoeugcumagm;
        swowyqmmmawuumkq:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x69\163\137\164\141\x78", function ($kesssewsiegssiya = null) {
            return DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya);
        });
        goto ygiycusyssyegauq;
        caicmucqkokaecsg:
        $this->yyyewgugioamwckw()->kmmegqceukkkawme("\x64\x6f\137\x61\x63\x74\x69\157\156", function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) {
            $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo);
        });
        goto gsyagiygoyamakyu;
        qiuouckkycciwuyo:
    }
    public function iemaakgqgqosiecm()
    {
        goto gyuiwqyyauwqokmc;
        yiuwiekcyyquyuak:
        $this->eeoeyakoiycwiuoa();
        goto sgmqeqeuscaaegqk;
        oeqaiwecuckgoyky:
        $this->aqiicausqkomqkqy();
        goto ywiwqkssuiiukwuk;
        imucwaggwqomwwki:
        $this->ugugagoguiycqeys();
        goto yiuwiekcyyquyuak;
        ywiwqkssuiiukwuk:
        $this->render();
        goto imucwaggwqomwwki;
        gyuiwqyyauwqokmc:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x64\144\x5f\x74\167\151\147\137\146\165\x6e\143\164\151\157\156\x73"), $this->yyyewgugioamwckw());
        goto oeqaiwecuckgoyky;
        sgmqeqeuscaaegqk:
    }
    
    public function ooqekmgsqomsakio($wkcwykowmmmwioqs)
    {
        goto iumuosccokuokwiw;
        uikweusiocekgoey:
        $mumucmmgemqwqiia = wp_get_theme();
        goto ggyieuweamgwmwem;
        ueqmgcsqwciauqes:
        wuaokqmoyoikkkyu:
        goto wqyygmuggeegmuua;
        kqsyesawkomqwaqy:
        $yeacayasgueouoqc = ManipulateArray::get($uomewyckeuqoqocu, 0);
        goto kgquoqwyggyuiggk;
        kgquoqwyggyuiggk:
        $wksoawcgagcgoask = self::mqucqomkmisceawy(str_replace(self::AT_SYMBOL, '', $yeacayasgueouoqc));
        goto kuyiowwueugqewic;
        aqkukemyueoyscqi:
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs);
        goto kqsyesawkomqwaqy;
        ggyieuweamgwmwem:
        $woqmauweeqyeyymc = self::qmkyymgaecsmakqq("{$mumucmmgemqwqiia->get_theme_root()}\x2f{$mumucmmgemqwqiia->get_stylesheet()}");
        goto wiiuaaemwsioueik;
        umquossmsyaiciag:
        wmiakgoosqcoaeki:
        goto ggooeiyqcockogcy;
        swekyeqkosmecgsk:
        $ymqmyyeuycgmigyo = ManipulateArray::get(explode("\137\137", $yeacayasgueouoqc), 2, $yeacayasgueouoqc);
        goto ykemuogoaemeuaoy;
        ggooeiyqcockogcy:
        return $wkcwykowmmmwioqs;
        goto acuusyssiosuysmg;
        kuyiowwueugqewic:
        if (!$wksoawcgagcgoask) {
            goto wymawskeqaagkwuo;
        }
        goto uikweusiocekgoey;
        cqkgaiiysokkuwsm:
        if (!($yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq())) {
            goto sgguiaisyueoswkk;
        }
        goto swekyeqkosmecgsk;
        gegweammscwsquwi:
        $wkcwykowmmmwioqs = $cqygeiuceemyuywc;
        goto mmmcsikmcyocmgiw;
        osmmmeymmeueymog:
        if (!$this->yyyewgugioamwckw()->exists($cqygeiuceemyuywc)) {
            goto wawmuaweemsioqms;
        }
        goto gegweammscwsquwi;
        cmsgueemsueayawi:
        $wkcwykowmmmwioqs = ManipulateFile::cgwcgscqeqauaagi($wkcwykowmmmwioqs);
        goto aqkukemyueoyscqi;
        wqyygmuggeegmuua:
        sgguiaisyueoswkk:
        goto awqycuuoeeoioskq;
        awqycuuoeeoioskq:
        mueeqqskseeiykwg:
        goto uoykoouwyqwskyqs;
        yguemqosugisymku:
        $cqygeiuceemyuywc = ManipulateString::wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}\57{$wksoawcgagcgoask->gueasuouwqysmomu()}\x2f{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs);
        goto osmmmeymmeueymog;
        iumuosccokuokwiw:
        if (!(!is_admin() || ManipulateAjax::mcgoysmkqsqooceq())) {
            goto wmiakgoosqcoaeki;
        }
        goto cmsgueemsueayawi;
        ykemuogoaemeuaoy:
        if (!is_string($ymqmyyeuycgmigyo)) {
            goto wuaokqmoyoikkkyu;
        }
        goto yguemqosugisymku;
        uoykoouwyqwskyqs:
        wymawskeqaagkwuo:
        goto umquossmsyaiciag;
        wiiuaaemwsioueik:
        if (!$woqmauweeqyeyymc) {
            goto mueeqqskseeiykwg;
        }
        goto cqkgaiiysokkuwsm;
        mmmcsikmcyocmgiw:
        wawmuaweemsioqms:
        goto ueqmgcsqwciauqes;
        acuusyssiosuysmg:
    }
    public function oeaigciskewsiiec($aiowsaccomcoikus = "\x6e\x61\155\145", $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = [])
    {
        goto qqcciieyaqwkcasi;
        ckicaukcwwiukieg:
        if (!$mkucggyaiaukqoce) {
            goto icageksksqqgmqom;
        }
        goto ooeaciyoeskuouqi;
        yemciswoecayuoga:
        return $icwicymcioeyeyek;
        goto mumegakqsumekgcs;
        eqkakgkyqqaewqiu:
        kiqaiwiwmeesaagy:
        goto iqcwoosugwmkmcas;
        oyskccqkmomukcoi:
        if ($mkucggyaiaukqoce) {
            goto sgyickkqymqecksi;
        }
        goto sckwuwwueomkksag;
        uukskyequmqsieuk:
        sgyickkqymqecksi:
        goto eaqoyysesmoykmqa;
        sckwuwwueomkksag:
        $mkucggyaiaukqoce = ManipulatePost::mguqscccckuywsya($mkucggyaiaukqoce);
        goto uukskyequmqsieuk;
        eaqoyysesmoykmqa:
        $icwicymcioeyeyek = null;
        goto ckicaukcwwiukieg;
        iqcwoosugwmkmcas:
        aqiiysigquiqsgeg:
        goto uaymiioykwgkmoeo;
        uaymiioykwgkmoeo:
        icageksksqqgmqom:
        goto yemciswoecayuoga;
        ooeaciyoeskuouqi:
        switch ($aiowsaccomcoikus) {
            case "\x75\162\x6c":
                $icwicymcioeyeyek = DecoratorAuthor::mkaiaewoyaimieqg($mkucggyaiaukqoce);
                goto aqiiysigquiqsgeg;
            case "\x6e\141\x6d\145":
                $icwicymcioeyeyek = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\144\151\x73\x70\x6c\141\171\x5f\156\x61\x6d\x65");
                goto aqiiysigquiqsgeg;
            case "\141\166\x61\164\141\x72":
                goto euosgyacescsiqgc;
                euosgyacescsiqgc:
                $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, "\163\151\172\145", 64);
                goto eickyskkcemimcqy;
                eickyskkcemimcqy:
                $icwicymcioeyeyek = ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __("\x55\x73\145\162\x20\x41\x76\141\x74\141\162", PR__THM__PMPR));
                goto eygwumawcmyaisee;
                eygwumawcmyaisee:
                goto aqiiysigquiqsgeg;
                goto ikusickyaccgogwg;
                ikusickyaccgogwg:
        }
        goto eqkakgkyqqaewqiu;
        qqcciieyaqwkcasi:
        $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce, true);
        goto oyskccqkmomukcoi;
        mumegakqsumekgcs:
    }
    
    public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, $cwwowqyuwccuykom = false)
    {
        goto kmqyoeosqckuaqsi;
        mwomsussaikumyme:
        $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "\x2f{$ccamueccusigaaio}";
        goto myskascmmkymmmgm;
        wcoywkwsguoyysay:
        if (!$ccamueccusigaaio) {
            goto eeaeuuuiukckywcg;
        }
        goto yweawggqmecqgaqe;
        cecwiqciigmgyoem:
        iqgqagswgiwgksco:
        goto uwqqmumicaygiukc;
        quumaygcyqkgwyaq:
        if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) {
            goto egkyuaemcsesciio;
        }
        goto wassuqquwikiawos;
        ekswgqyowkoaksqi:
        swcmoacumikkuwma:
        goto gguiykqamegqmqki;
        ekkyqawesagkmqwi:
        if ($qqscaoyqikuyeoaw !== "\151\156\144\x65\170" && !$cwwowqyuwccuykom) {
            goto weiwkwaagqqcwkoq;
        }
        goto souoecscwyauueko;
        wqwogycsmygawouy:
        weiwkwaagqqcwkoq:
        goto auiosgoysmeuswoi;
        esyeigyikuqioumu:
        $ekwsasieesaqcsiw .= "\164\167\151\x67";
        goto qwuqiimucosmgmei;
        mgcieuiwescwqymy:
        ioqaysioauoiookm:
        goto uyyomesiccsqemog;
        aeeoymcoceusaems:
        goto owawwqcgcwwygkcy;
        goto ycqcgecgwiaioguy;
        ycqcgecgwiaioguy:
        egkyuaemcsesciio:
        goto kegqauaaamqicscy;
        uyyomesiccsqemog:
        foreach ($ccamueccusigaaio as $igqsaukqcqscimok) {
            goto sqmwqsayaqygocqo;
            queqqoyiueiikgus:
            goto swcmoacumikkuwma;
            goto ccaecemqggkcesym;
            icguisyymukwkoac:
            agugmwweyecagkue:
            goto wwcyucesakwqmigu;
            sqmwqsayaqygocqo:
            if (!($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true))) {
                goto eyyqgqyikeoiuusw;
            }
            goto queqqoyiueiikgus;
            ccaecemqggkcesym:
            eyyqgqyikeoiuusw:
            goto icguisyymukwkoac;
            wwcyucesakwqmigu:
        }
        goto ekswgqyowkoaksqi;
        wsycuswmoucikqam:
        if (!(!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu))) {
            goto yckakqcyqksckiwg;
        }
        goto ekkyqawesagkmqwi;
        wgaqwowmmwgqcgio:
        $aqykuigiuwmmcieu = preg_replace("\x2f\50{$ymqmyyeuycgmigyo}\50\x3f\x21\x2e\52{$ymqmyyeuycgmigyo}\x29\x29\57", $qqscaoyqikuyeoaw, $yeacayasgueouoqc);
        goto ycmmugqamooccaoe;
        yuqwoywsqguaiooq:
        yimaquocemaqgkew:
        goto qaioiokqgaomscqo;
        ykassqsuwccwksyg:
        tguuykuocgscwigs:
        goto wsycuswmoucikqam;
        qumgeeowggyeimes:
        if (!($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu)) {
            goto saugoksiwmswowqy;
        }
        goto ugqqumgemgqkgowm;
        egqeaugqciqqaais:
        $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc);
        goto qumgeeowggyeimes;
        igyukcioksgyuumo:
        eeaeuuuiukckywcg:
        goto egqeaugqciqqaais;
        gguiykqamegqmqki:
        caeywemyokumoaki:
        goto igyukcioksgyuumo;
        qgqckcyimogeucws:
        $aqykuigiuwmmcieu = $this->sscegwueamckwmcy("\x74\150\x65\155\145\x5f\x74\x65\x6d\160\x6c\x61\164\x65\137\x72\145\x71\x75\x69\x72\145\x6d\x65\156\x74\163", $aqykuigiuwmmcieu);
        goto wyqumeogqqakouyw;
        comoagswmewckyoi:
        $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw));
        goto wgaqwowmmwgqcgio;
        yweawggqmecqgaqe:
        if (is_array($ccamueccusigaaio)) {
            goto ioqaysioauoiookm;
        }
        goto mwomsussaikumyme;
        ugqqumgemgqkgowm:
        $ekwsasieesaqcsiw = "\x2e";
        goto woeskwkwwgwgmowo;
        eewacyseykeqcsgi:
        $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu);
        goto iekkoiwkmagacmui;
        auiosgoysmeuswoi:
        $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw("\x69\x6e\x64\x65\170", $aqykuigiuwmmcieu);
        goto yuqwoywsqguaiooq;
        mmukumekuuysequy:
        $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg();
        goto cecwiqciigmgyoem;
        qaioiokqgaomscqo:
        yckakqcyqksckiwg:
        goto iiqwwquosouwiqma;
        oiiiwwmwokesyqwo:
        if (!$yeacayasgueouoqc) {
            goto tguuykuocgscwigs;
        }
        goto wcoywkwsguoyysay;
        wyqumeogqqakouyw:
        makewcmuowqeuqqo:
        goto aeeoymcoceusaems;
        uaqawigsyseeuymm:
        return $aqykuigiuwmmcieu;
        goto qawsuswmossykiuo;
        iiqwwquosouwiqma:
        if (!$aqykuigiuwmmcieu) {
            goto makewcmuowqeuqqo;
        }
        goto qgqckcyimogeucws;
        scowusmowqywueme:
        owawwqcgcwwygkcy:
        goto hosygawmqsywcsuu;
        souoecscwyauueko:
        $aqykuigiuwmmcieu = null;
        goto kaukomgswmysiuus;
        kmqyoeosqckuaqsi:
        $aqykuigiuwmmcieu = null;
        goto kaeuoeawkcwsycoe;
        iekkoiwkmagacmui:
        iyseosekyuousmcs:
        goto uaqawigsyseeuymm;
        kaukomgswmysiuus:
        goto yimaquocemaqgkew;
        goto wqwogycsmygawouy;
        kegqauaaamqicscy:
        $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw;
        goto scowusmowqywueme;
        qwuqiimucosmgmei:
        ocqcqsmmqaiiayis:
        goto comoagswmewckyoi;
        myskascmmkymmmgm:
        goto caeywemyokumoaki;
        goto mgcieuiwescwqymy;
        kaeuoeawkcwsycoe:
        $eyoesceegakeygsi = $this->yyyewgugioamwckw();
        goto quumaygcyqkgwyaq;
        hosygawmqsywcsuu:
        if (!$aqykuigiuwmmcieu) {
            goto iyseosekyuousmcs;
        }
        goto eewacyseykeqcsgi;
        woeskwkwwgwgmowo:
        if (!preg_match("\57\x5c\56\x5b\x30\x2d\71\141\x2d\x7a\x5d\53\x24\x2f\x69", $qqscaoyqikuyeoaw)) {
            goto ocqcqsmmqaiiayis;
        }
        goto esyeigyikuqioumu;
        ycmmugqamooccaoe:
        saugoksiwmswowqy:
        goto ykassqsuwccwksyg;
        uwqqmumicaygiukc:
        $yeacayasgueouoqc = str_replace("\x2f\57", "\x2f", $yeacayasgueouoqc);
        goto oiiiwwmwokesyqwo;
        wassuqquwikiawos:
        if ($yeacayasgueouoqc) {
            goto iqgqagswgiwgksco;
        }
        goto mmukumekuuysequy;
        qawsuswmossykiuo:
    }
}
