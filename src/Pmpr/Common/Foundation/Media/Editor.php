<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\57\143\154\141\163\163\55\x77\160\55\x69\155\x61\147\145\55\145\x64\151\x74\157\x72\56\x70\x68\x70";
require_once ABSPATH . WPINC . "\57\143\x6c\x61\x73\163\55\x77\x70\55\x69\x6d\x61\x67\145\x2d\x65\x64\151\164\157\x72\x2d\147\144\56\x70\x68\160";

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
        goto ooiaiemksqmaswks;
        eyasmquoaokeamwq:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\x2e{$new_ext}";
        goto qmmewcqkiaugaass;
        weqsciomuwmoocke:
        sesuwiiwmyccwaum:
        goto suqkayoqgmsgqaqm;
        ayysiuycoqkgikks:
        kskywmmcaugieuiw:
        goto asqgmcaauoaeoeos;
        eqmawsymeeaswsew:
        goto imeseaegeeiguiqs;
        goto weqsciomuwmoocke;
        yeouiccygkgcauiq:
        imeseaegeeiguiqs:
        goto ayysiuycoqkgikks;
        wwwcqcsimcgkkgqg:
        if (!(self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1])) {
            goto ysmqigiqiwsyymcc;
        }
        goto gemykaoaqwicmeag;
        miwaociiwmomieeg:
        if ('' != $mwweeceqggqmogwk) {
            goto sggsqoimcswqyoii;
        }
        goto gmkissoyacsksyko;
        oucqgwwoisakkgsa:
        $mwweeceqggqmogwk = "\x31\x36\170\x39";
        goto rsgyucycsycgesiq;
        suqkayoqgmsgqaqm:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto aaqwwyccekouwawg;
        }
        goto oucqgwwoisakkgsa;
        gemykaoaqwicmeag:
        $mwweeceqggqmogwk = "\x34\170\63";
        goto qkcasgegweeoeqao;
        ookqckwksqwoekiy:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\x64\x69\162\156\141\155\x65"];
        goto xumakocukyysuseg;
        oooqmgaaiwkcyyyy:
        myaageuswgawcqak:
        goto ieosoksooeowgwuo;
        qmmewcqkiaugaass:
        goto cmkicwoqsokugmuu;
        goto ieqcwaqqkgqecogy;
        mgukmsekywicuigc:
        if (!(1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1]))) {
            goto kskywmmcaugieuiw;
        }
        goto iqismgeasiycywoq;
        asqgmcaauoaeoeos:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto ookqckwksqwoekiy;
        yimewosgeusckeeo:
        $prefix_array[1] = (int) $prefix_array[1];
        goto iwmgiqogkaqyoqck;
        ieqcwaqqkgqecogy:
        sggsqoimcswqyoii:
        goto qyqqmmieeeuceawg;
        gcguaakuuuiymwci:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto mumqecckiuimiqei;
        woaeegswqqamukke:
        kigmywmmywoouoge:
        goto miwaociiwmomieeg;
        xumakocukyysuseg:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\x78\164\145\156\x73\x69\157\156"];
        goto yigoymociiyaeeqe;
        gmyocwoeuugkoiyu:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto mkkwkugqkmyoqmuw;
        }
        goto eqmawsymeeaswsew;
        qmkyaaiuymgieqmy:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto eugokmswcmogmgik;
        }
        goto gmyocwoeuugkoiyu;
        cmmwsqyociiokaiu:
        mkkwkugqkmyoqmuw:
        goto kyoaukgysoyeawwi;
        caigegksaaycqqgy:
        $miawkwqioaeasiig = $_dest_path;
        goto woaeegswqqamukke;
        gmkissoyacsksyko:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto eyasmquoaokeamwq;
        iwmgiqogkaqyoqck:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto sesuwiiwmyccwaum;
        }
        goto qmkyaaiuymgieqmy;
        qyqqmmieeeuceawg:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\x2e{$new_ext}";
        goto kwcwakssmquiykuc;
        mumqecckiuimiqei:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto kigmywmmywoouoge;
        }
        goto caigegksaaycqqgy;
        ooiaiemksqmaswks:
        
        if ($yuwymayicwwqiske) {
            goto myaageuswgawcqak;
        }
        goto ioawmqwmiwwawcms;
        rsgyucycsycgesiq:
        aaqwwyccekouwawg:
        goto sqwieygmgqomaksy;
        sqwieygmgqomaksy:
        goto imeseaegeeiguiqs;
        goto gyqumicuqcwwcess;
        ikuyswyameomqgyo:
        $mwweeceqggqmogwk = "\61\170\x31";
        goto ciauiegykcqkccqq;
        ioawmqwmiwwawcms:
        $yuwymayicwwqiske = $this->get_suffix();
        goto oooqmgaaiwkcyyyy;
        kwcwakssmquiykuc:
        cmkicwoqsokugmuu:
        goto uwseyususaysawwm;
        cekyyawuusagaggk:
        $mwweeceqggqmogwk = '';
        goto mgukmsekywicuigc;
        kyoaukgysoyeawwi:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto qqsieucekawaiwww;
        }
        goto ikuyswyameomqgyo;
        iqismgeasiycywoq:
        $prefix_array[0] = (int) $prefix_array[0];
        goto yimewosgeusckeeo;
        yigoymociiyaeeqe:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}");
        goto gcguaakuuuiymwci;
        meseuyammmyuuwgs:
        goto imeseaegeeiguiqs;
        goto cmmwsqyociiokaiu;
        gyqumicuqcwwcess:
        eugokmswcmogmgik:
        goto wwwcqcsimcgkkgqg;
        ieosoksooeowgwuo:
        $prefix_array = explode("\x78", $yuwymayicwwqiske);
        goto cekyyawuusagaggk;
        qkcasgegweeoeqao:
        ysmqigiqiwsyymcc:
        goto meseuyammmyuuwgs;
        ciauiegykcqkccqq:
        qqsieucekawaiwww:
        goto yeouiccygkgcauiq;
        uwseyususaysawwm:
    }
}
