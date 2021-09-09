<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\x2f\143\x6c\141\x73\x73\x2d\x77\x70\55\151\x6d\141\x67\145\x2d\x65\x64\x69\x74\157\x72\56\160\x68\x70";
require_once ABSPATH . WPINC . "\x2f\x63\x6c\x61\163\x73\55\167\160\x2d\x69\x6d\141\x67\x65\55\145\x64\151\x74\157\x72\x2d\x67\x64\x2e\x70\150\160";

class Editor extends WP_Image_Editor_GD
{
    const TOLERANCE = 0.01;
    const MIN_WIDTH_16_9 = 1200;
    const MIN_HEIGHT_16_9 = 675;
    const MIN_WIDTH_4_3 = 1200;
    const MIN_HEIGHT_4_3 = 900;
    const MIN_WIDTH_1_1 = 1200;
    const MIN_HEIGHT_1_1 = 1200;
    
    public function generate_filename($yuwymayicwwqiske = null, $dest_path = null, $uwumuuykwookaauo = null)
    {
        goto cksesgscmiccmigi;
        eiykgwsymemeaowg:
        wsqucoqquuoimgoi:
        goto ciwsqasmaysciuiq;
        uiicuwmmeceaccge:
        $prefix_array[1] = (int) $prefix_array[1];
        goto ukwecsumaqaceoke;
        yoqmekyaqscyywgw:
        $prefix_array[0] = (int) $prefix_array[0];
        goto uiicuwmmeceaccge;
        yacqaemukikwauew:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\x2e{$new_ext}";
        goto usmwsquyeukawsmo;
        iewagmumgcysgkiw:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto oomsemgiwqioyoqy;
        }
        goto aqwiceqiawoaykoo;
        oiiwycewowouacmm:
        ukggwygocweoasce:
        goto wmqgsukikoasweka;
        ocmckmgisuwsyuwc:
        owigmucmmkisusqa:
        goto qkowogwggmgksqce;
        ksowgysucgksmeiu:
        oomsemgiwqioyoqy:
        goto aeuwgwcuycgqgmcm;
        uwwsqewmquccsqkc:
        goto icsgwagqaioccsgg;
        goto wkemaqyiomkkescs;
        awwiymymcoewykws:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto yacqaemukikwauew;
        aeuwgwcuycgqgmcm:
        if (!(self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1])) {
            goto owkicamwkyumewim;
        }
        goto ewyccsuswogsksoq;
        wkemaqyiomkkescs:
        qcqikccascwsikim:
        goto wqiwicgmusisugqc;
        aqwiceqiawoaykoo:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto yyesyssasgoyqaas;
        }
        goto uwwsqewmquccsqkc;
        yimsysqkmmuaskge:
        if (!(1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1]))) {
            goto wsqucoqquuoimgoi;
        }
        goto yoqmekyaqscyywgw;
        yeuauqgwkmycsuss:
        yyesyssasgoyqaas:
        goto momssmiweesyaiqm;
        yagqeyemyasuakyq:
        if ('' != $mwweeceqggqmogwk) {
            goto eguiciymwgcukgcw;
        }
        goto awwiymymcoewykws;
        scwyoqesmseysyca:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\x2e{$yucgcsieomwqgwws}");
        goto wgusqquuucyeigcw;
        gkuwksowwuqsosye:
        sqsykywuswmcsuys:
        goto mwmkykmeugewswss;
        qkowogwggmgksqce:
        goto icsgwagqaioccsgg;
        goto ksowgysucgksmeiu;
        ewyccsuswogsksoq:
        $mwweeceqggqmogwk = "\x34\x78\63";
        goto waiqksgggkmmgkms;
        cksesgscmiccmigi:
        
        if ($yuwymayicwwqiske) {
            goto qmuawywgqcaqwoqg;
        }
        goto guwcsuucwigkukmu;
        ukwecsumaqaceoke:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto qcqikccascwsikim;
        }
        goto iewagmumgcysgkiw;
        imsioswwqucagyiq:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\170\x74\145\x6e\163\x69\x6f\x6e"];
        goto scwyoqesmseysyca;
        uawqiywkcgeowkye:
        $prefix_array = explode("\170", $yuwymayicwwqiske);
        goto igesyssomuuqqoky;
        waiqksgggkmmgkms:
        owkicamwkyumewim:
        goto qiqsuscoooigcqiu;
        wqiwicgmusisugqc:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto owigmucmmkisusqa;
        }
        goto iigwkuykiykukwky;
        sgiqkgawyeuymoks:
        eguiciymwgcukgcw:
        goto bsicsscqymyycqcs;
        usmwsquyeukawsmo:
        goto ukggwygocweoasce;
        goto sgiqkgawyeuymoks;
        ecgaykgwooyuawqk:
        waiwusckekwoeasa:
        goto yagqeyemyasuakyq;
        mwmkykmeugewswss:
        icsgwagqaioccsgg:
        goto eiykgwsymemeaowg;
        eiweyioigakomama:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\151\162\x6e\x61\155\x65"];
        goto imsioswwqucagyiq;
        wgusqquuucyeigcw:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto ecaiosueicqamwwc;
        gauiaqeaegyowuyg:
        $mwweeceqggqmogwk = "\61\170\x31";
        goto gkuwksowwuqsosye;
        igesyssomuuqqoky:
        $mwweeceqggqmogwk = '';
        goto yimsysqkmmuaskge;
        iigwkuykiykukwky:
        $mwweeceqggqmogwk = "\x31\66\170\71";
        goto ocmckmgisuwsyuwc;
        bsicsscqymyycqcs:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\x2e{$new_ext}";
        goto oiiwycewowouacmm;
        qiqsuscoooigcqiu:
        goto icsgwagqaioccsgg;
        goto yeuauqgwkmycsuss;
        guwcsuucwigkukmu:
        $yuwymayicwwqiske = $this->get_suffix();
        goto kygiwieeewgocwgs;
        kygiwieeewgocwgs:
        qmuawywgqcaqwoqg:
        goto uawqiywkcgeowkye;
        owykgucmwkqsmcsg:
        $miawkwqioaeasiig = $_dest_path;
        goto ecgaykgwooyuawqk;
        momssmiweesyaiqm:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto sqsykywuswmcsuys;
        }
        goto gauiaqeaegyowuyg;
        ciwsqasmaysciuiq:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto eiweyioigakomama;
        ecaiosueicqamwwc:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto waiwusckekwoeasa;
        }
        goto owykgucmwkqsmcsg;
        wmqgsukikoasweka:
    }
}
