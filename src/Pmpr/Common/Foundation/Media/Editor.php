<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\57\x63\154\x61\x73\163\55\167\x70\x2d\151\155\141\x67\145\55\145\x64\151\x74\x6f\x72\56\160\x68\x70";
require_once ABSPATH . WPINC . "\57\143\x6c\141\163\163\55\167\x70\55\151\155\141\x67\145\55\x65\144\151\x74\157\162\55\x67\144\56\x70\x68\160";

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
        qyqqmmieeeuceawg:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\x2f{$ymqmyyeuycgmigyo}\56{$new_ext}";
        goto kwcwakssmquiykuc;
        oucqgwwoisakkgsa:
        $mwweeceqggqmogwk = "\x31\x36\x78\x39";
        goto rsgyucycsycgesiq;
        suqkayoqgmsgqaqm:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto aaqwwyccekouwawg;
        }
        goto oucqgwwoisakkgsa;
        qkcasgegweeoeqao:
        ysmqigiqiwsyymcc:
        goto meseuyammmyuuwgs;
        gcguaakuuuiymwci:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto mumqecckiuimiqei;
        gemykaoaqwicmeag:
        $mwweeceqggqmogwk = "\x34\170\63";
        goto qkcasgegweeoeqao;
        oooqmgaaiwkcyyyy:
        myaageuswgawcqak:
        goto ieosoksooeowgwuo;
        xumakocukyysuseg:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\x65\170\164\145\x6e\163\x69\x6f\x6e"];
        goto yigoymociiyaeeqe;
        caigegksaaycqqgy:
        $miawkwqioaeasiig = $_dest_path;
        goto woaeegswqqamukke;
        kyoaukgysoyeawwi:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto qqsieucekawaiwww;
        }
        goto ikuyswyameomqgyo;
        cekyyawuusagaggk:
        $mwweeceqggqmogwk = '';
        goto mgukmsekywicuigc;
        ieqcwaqqkgqecogy:
        sggsqoimcswqyoii:
        goto qyqqmmieeeuceawg;
        ookqckwksqwoekiy:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\144\x69\162\x6e\x61\x6d\x65"];
        goto xumakocukyysuseg;
        ieosoksooeowgwuo:
        $prefix_array = explode("\170", $yuwymayicwwqiske);
        goto cekyyawuusagaggk;
        ayysiuycoqkgikks:
        kskywmmcaugieuiw:
        goto asqgmcaauoaeoeos;
        woaeegswqqamukke:
        kigmywmmywoouoge:
        goto miwaociiwmomieeg;
        wwwcqcsimcgkkgqg:
        if (!(self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1])) {
            goto ysmqigiqiwsyymcc;
        }
        goto gemykaoaqwicmeag;
        iwmgiqogkaqyoqck:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto sesuwiiwmyccwaum;
        }
        goto qmkyaaiuymgieqmy;
        mumqecckiuimiqei:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto kigmywmmywoouoge;
        }
        goto caigegksaaycqqgy;
        mgukmsekywicuigc:
        if (!(1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1]))) {
            goto kskywmmcaugieuiw;
        }
        goto iqismgeasiycywoq;
        gyqumicuqcwwcess:
        eugokmswcmogmgik:
        goto wwwcqcsimcgkkgqg;
        ioawmqwmiwwawcms:
        $yuwymayicwwqiske = $this->get_suffix();
        goto oooqmgaaiwkcyyyy;
        gmyocwoeuugkoiyu:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto mkkwkugqkmyoqmuw;
        }
        goto eqmawsymeeaswsew;
        eyasmquoaokeamwq:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\55{$scqcgogsiaiksiiq}\56{$new_ext}";
        goto qmmewcqkiaugaass;
        ciauiegykcqkccqq:
        qqsieucekawaiwww:
        goto yeouiccygkgcauiq;
        yeouiccygkgcauiq:
        imeseaegeeiguiqs:
        goto ayysiuycoqkgikks;
        yimewosgeusckeeo:
        $prefix_array[1] = (int) $prefix_array[1];
        goto iwmgiqogkaqyoqck;
        yigoymociiyaeeqe:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\56{$yucgcsieomwqgwws}");
        goto gcguaakuuuiymwci;
        iqismgeasiycywoq:
        $prefix_array[0] = (int) $prefix_array[0];
        goto yimewosgeusckeeo;
        miwaociiwmomieeg:
        if ('' != $mwweeceqggqmogwk) {
            goto sggsqoimcswqyoii;
        }
        goto gmkissoyacsksyko;
        gmkissoyacsksyko:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto eyasmquoaokeamwq;
        meseuyammmyuuwgs:
        goto imeseaegeeiguiqs;
        goto cmmwsqyociiokaiu;
        sqwieygmgqomaksy:
        goto imeseaegeeiguiqs;
        goto gyqumicuqcwwcess;
        rsgyucycsycgesiq:
        aaqwwyccekouwawg:
        goto sqwieygmgqomaksy;
        kwcwakssmquiykuc:
        cmkicwoqsokugmuu:
        goto uwseyususaysawwm;
        weqsciomuwmoocke:
        sesuwiiwmyccwaum:
        goto suqkayoqgmsgqaqm;
        asqgmcaauoaeoeos:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto ookqckwksqwoekiy;
        ikuyswyameomqgyo:
        $mwweeceqggqmogwk = "\61\170\x31";
        goto ciauiegykcqkccqq;
        qmkyaaiuymgieqmy:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto eugokmswcmogmgik;
        }
        goto gmyocwoeuugkoiyu;
        qmmewcqkiaugaass:
        goto cmkicwoqsokugmuu;
        goto ieqcwaqqkgqecogy;
        eqmawsymeeaswsew:
        goto imeseaegeeiguiqs;
        goto weqsciomuwmoocke;
        cmmwsqyociiokaiu:
        mkkwkugqkmyoqmuw:
        goto kyoaukgysoyeawwi;
        ooiaiemksqmaswks:
        
        if ($yuwymayicwwqiske) {
            goto myaageuswgawcqak;
        }
        goto ioawmqwmiwwawcms;
        uwseyususaysawwm:
    }
}
