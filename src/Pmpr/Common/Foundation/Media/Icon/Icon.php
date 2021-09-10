<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media\Icon;

use DirectoryIterator;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Common;
use WP_Post;

class Icon extends Common
{
    const IS_ICON = 'is_icon';
    const ICONS_PATH = 'img/svg/icon';
    
    protected ?string $root = null;
    
    public function ikeqsmumgwwuqmkw() : ?string
    {
        return $this->root;
    }
    
    public function __construct()
    {
        $this->root = self::cmewgsgomuwkkoou();
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'ucqcyyiuiwewsugk'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw('icon_html_render'), [$this, 'render'], 10, 3);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('edit_attachment', [$this, 'cqowuigmwcqqccus'])->cecaguuoecmccuse($this->ygyygikyocoymgaw('icon_svg2base64'), [$this, 'oauesaioaycwyygy'])->cecaguuoecmccuse('escaped_icons_dropdown', [$this, 'wcsycosoosawcmcu'], 10, 2)->cecaguuoecmccuse('attachment_fields_to_edit', [$this, 'wuwocaoiieiweyyo'], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw('icon_html_filter'), [$this, 'wcsiwkcyeokamike'], 10, 3);
        parent::kgquecmsgcouyaya();
    }
    
    public function kwagkemgawuoacwy($ywmkwiwkosakssii = [])
    {
        return ManipulatePost::qgisekcaywsmigga('attachment', self::IS_ICON, 1, $ywmkwiwkosakssii);
    }
    
    public function umqsskakomkwuamy($aiooqyausygaasqm) : bool
    {
        return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('attachment_is_svg'), false, $aiooqyausygaasqm);
    }
    
    public function wcsycosoosawcmcu($ykiyyumywksqcisg, $gskuwmeemyeuwogc)
    {
        $aieaqakyuyewkkwe = $this->kwagkemgawuoacwy();
        foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) {
            if ($aiooqyausygaasqm instanceof WP_Post) {
                $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($aiooqyausygaasqm);
                $wkaqekwwgqsqwcoi = ManipulateAttachment::qaeeusqkgwagwaqc($aokagokqyuysuksm, 'twitter', ['class' => 'pr-icon icon-xs'], true);
                $ykiyyumywksqcisg[$aokagokqyuysuksm] = sprintf($gskuwmeemyeuwogc, ManipulatePost::qcgakseyaikigqco($aiooqyausygaasqm), $wkaqekwwgqsqwcoi);
            }
            gamqcwuwkikwqoay:
        }
        ieqesiiageaauiuw:
        return $ykiyyumywksqcisg;
    }
    
    public function wuwocaoiieiweyyo($ikgwqyuyckaewsow, $post)
    {
        if ($this->umqsskakomkwuamy($post)) {
            $amwuugigousqwmey = ManipulatePost::igawqaomowicuayw(self::IS_ICON, $post, true);
            $ikgwqyuyckaewsow[self::IS_ICON] = ['label' => __('Use For Icon', PR__THM__FOUNDATION), 'input' => 'html', 'html' => MetaBox::wcwmusaouiqaqeww(self::IS_ICON)->iygyugseyaqwywyg($amwuugigousqwmey ? $amwuugigousqwmey : 'off')->render(), 'helps' => __('Check if you want show this attachment in icon list.', PR__CMN__FOUNDATION)];
        }
        return $ikgwqyuyckaewsow;
    }
    
    public function render($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = 'thumbnail')
    {
        echo $this->wcsiwkcyeokamike($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $oiegiwogmwmawkeo);
    }
    
    public function cqowuigmwcqqccus($post)
    {
        $post = ManipulatePost::mwikyscisascoeea($post);
        if ($this->umqsskakomkwuamy($post)) {
            $amwuugigousqwmey = ManipulateServer::ayueggmoqeeukqmq(self::IS_ICON);
            if ($amwuugigousqwmey === 'on') {
                ManipulatePost::ksmqawcowkmegigw(self::IS_ICON, $amwuugigousqwmey, $post);
            } else {
                ManipulatePost::smqukgcyacswysqa(self::IS_ICON, $post);
            }
        }
        return $post;
    }
    
    public function wcsiwkcyeokamike($wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], string $oiegiwogmwmawkeo = 'thumbnail') : string
    {
        $post = ManipulatePost::mwikyscisascoeea($wkaqekwwgqsqwcoi, true);
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', "pr-icon icon-{$oiegiwogmwmawkeo}");
        if ($post) {
            $nsmgceoqaqogqmuw = ManipulateAttachment::qaeeusqkgwagwaqc($post, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
        } else {
            $wwgucssaecqekuek = $this->sscegwueamckwmcy('wp_get_attachment_image_attributes', $wwgucssaecqekuek, $wkaqekwwgqsqwcoi, $oiegiwogmwmawkeo);
            $nsmgceoqaqogqmuw = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public function compress($waoisqguweoociwe)
    {
        $waoisqguweoociwe = preg_replace('/<!--.*-->/', '', $waoisqguweoociwe);
        $waoisqguweoociwe = preg_replace('/<g>[\\n\\r\\s]*<\\/g>/', '', $waoisqguweoociwe);
        $waoisqguweoociwe = preg_replace('/\\n/', ' ', $waoisqguweoociwe);
        $waoisqguweoociwe = preg_replace('/\\t/', ' ', $waoisqguweoociwe);
        $waoisqguweoociwe = preg_replace('/\\s\\s+/', ' ', $waoisqguweoociwe);
        $waoisqguweoociwe = str_replace('> <', '><', $waoisqguweoociwe);
        $waoisqguweoociwe = str_replace(';"', '"', $waoisqguweoociwe);
        return $waoisqguweoociwe;
    }
    
    public function smemegymuqekcaui($ycskuuyucyuqisaq) : string
    {
        $wayeqowwwmqyscea = '';
        $eomsgokgyssmwmai = strlen($ycskuuyucyuqisaq);
        $ciyackuwsqkoqese = 0;
        iesekaeqeomeuaui:
        if (!($ciyackuwsqkoqese < $eomsgokgyssmwmai)) {
            goto mscyggqcesgqqksu;
        }
        if ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == '%' && $ycskuuyucyuqisaq[$ciyackuwsqkoqese + 1] == 'u') {
            $uiymkeeaukcyqqik = hexdec(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese + 2, 4));
            if ($uiymkeeaukcyqqik < 0x7f) {
                $wayeqowwwmqyscea .= chr($uiymkeeaukcyqqik);
            } elseif ($uiymkeeaukcyqqik < 0x800) {
                $wayeqowwwmqyscea .= chr(0xc0 | $uiymkeeaukcyqqik >> 6) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
            } else {
                $wayeqowwwmqyscea .= chr(0xe0 | $uiymkeeaukcyqqik >> 12) . chr(0x80 | $uiymkeeaukcyqqik >> 6 & 0x3f) . chr(0x80 | $uiymkeeaukcyqqik & 0x3f);
            }
            $ciyackuwsqkoqese += 5;
        } elseif ($ycskuuyucyuqisaq[$ciyackuwsqkoqese] == '%') {
            $wayeqowwwmqyscea .= urldecode(substr($ycskuuyucyuqisaq, $ciyackuwsqkoqese, 3));
            $ciyackuwsqkoqese += 2;
        } else {
            $wayeqowwwmqyscea .= $ycskuuyucyuqisaq[$ciyackuwsqkoqese];
        }
        oyeyomcgkmgymogq:
        $ciyackuwsqkoqese++;
        goto iesekaeqeomeuaui;
        mscyggqcesgqqksu:
        return $wayeqowwwmqyscea;
    }
    
    public function oauesaioaycwyygy($waoisqguweoociwe) : string
    {
        $waoisqguweoociwe = $this->miocmcoykayoyyau()->eyamqkqiykagecsw($waoisqguweoociwe, true);
        $owyiccmocukoumyy = base64_encode($this->smemegymuqekcaui(rawurlencode($waoisqguweoociwe)));
        return "data:image/svg+xml;base64,{$owyiccmocukoumyy}";
    }
    public function ucqcyyiuiwewsugk()
    {
        if (!ManipulateAjax::mcgoysmkqsqooceq() && ManipulateSetting::esoowymaimwcuecq()) {
            $mkomwsiykqigmqca = $this->ikeqsmumgwwuqmkw() . '/asset/' . self::ICONS_PATH;
            $gwgkqsyaesmocmsk = __DIR__ . '/Interfaces';
            $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
            if ($iiaumsgauuyeqksw->uuegkqwagymmusiy($gwgkqsyaesmocmsk, 3)) {
                $owuckwsseckgeweg = $this->guyeewccesqeokww($mkomwsiykqigmqca);
                if (is_array($owuckwsseckgeweg) && $owuckwsseckgeweg) {
                    foreach ($owuckwsseckgeweg as $ymqmyyeuycgmigyo => $ykiyyumywksqcisg) {
                        if (is_array($ykiyyumywksqcisg) && $ykiyyumywksqcisg) {
                            $oouysqigwayiqgkk = 'Icon' . ucfirst($ymqmyyeuycgmigyo) . 'Interface';
                            $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
                            $ymqmyyeuycgmigyo = ManipulateString::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
                            $aiieyweysaukqemc = str_replace("{$ymqmyyeuycgmigyo}\\", '', $egkyssmuqcwaciya) . '\\Interfaces';
                            $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw('interface.php', ['namespace' => $aiieyweysaukqemc, 'interface' => $oouysqigwayiqgkk, 'icons' => $ykiyyumywksqcisg]);
                            $iiaumsgauuyeqksw->cmsiuoqwaiwceuqq($gwgkqsyaesmocmsk, "{$oouysqigwayiqgkk}.php", $ewgwqamkygiqaawc);
                        }
                        mogkoocsoeuyoqqa:
                    }
                    wsesqmcqoiyyqkqi:
                }
            }
        }
    }
    
    public function guyeewccesqeokww($mkomwsiykqigmqca, $yuwymayicwwqiske = null) : array
    {
        $ykiyyumywksqcisg = [];
        $ucasskoyoewwmmii = ManipulateFile::kiygcugekegoqauw($mkomwsiykqigmqca);
        foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
            if ($qogsmwakwacwqogk instanceof DirectoryIterator && !ManipulateFile::qkuqsuugayciskek($qogsmwakwacwqogk)) {
                $mkomwsiykqigmqca = ManipulateFile::scikcaaaiwcsqowm($qogsmwakwacwqogk);
                $ymqmyyeuycgmigyo = ManipulateFile::mawoacksgosuccme($qogsmwakwacwqogk);
                if (ManipulateFile::oagwcgcemwwykokc($qogsmwakwacwqogk)) {
                    $ykiyyumywksqcisg = array_merge($ykiyyumywksqcisg, $this->guyeewccesqeokww($mkomwsiykqigmqca, $ymqmyyeuycgmigyo));
                } else {
                    
                    $ymqmyyeuycgmigyo = preg_replace('/\\.[^.\\s]{3,4}$/', '', $ymqmyyeuycgmigyo);
                    $ykiyyumywksqcisg[$yuwymayicwwqiske][$ymqmyyeuycgmigyo] = "{$yuwymayicwwqiske}/{$ymqmyyeuycgmigyo}";
                }
            }
            oimkeqocuguqqsqk:
        }
        wkwamkgkwykeqkec:
        return $ykiyyumywksqcisg;
    }
}
