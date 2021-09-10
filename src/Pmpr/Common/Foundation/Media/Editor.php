<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Media;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use WP_Image_Editor_GD;
require_once ABSPATH . WPINC . "\57\143\154\x61\x73\163\x2d\167\x70\x2d\x69\155\141\147\145\x2d\x65\x64\x69\x74\x6f\162\x2e\x70\150\x70";
require_once ABSPATH . WPINC . "\x2f\x63\x6c\x61\x73\163\x2d\x77\160\55\x69\155\x61\147\x65\x2d\145\x64\x69\164\x6f\162\x2d\147\144\56\x70\150\x70";

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
        goto kigmywmmywoouoge;
        eqmawsymeeaswsew:
        $mwweeceqggqmogwk = "\61\66\x78\x39";
        goto weqsciomuwmoocke;
        qmkyaaiuymgieqmy:
        ysmqigiqiwsyymcc:
        goto gmyocwoeuugkoiyu;
        yigoymociiyaeeqe:
        $miawkwqioaeasiig = $_dest_path;
        goto gcguaakuuuiymwci;
        gmyocwoeuugkoiyu:
        if (!(self::MIN_WIDTH_16_9 <= $prefix_array[0] && self::MIN_HEIGHT_16_9 <= $prefix_array[1])) {
            goto ieccammaemyeuucg;
        }
        goto eqmawsymeeaswsew;
        kigmywmmywoouoge:
        
        if ($yuwymayicwwqiske) {
            goto geuawgeawaosgskq;
        }
        goto sggsqoimcswqyoii;
        sqwieygmgqomaksy:
        $mwweeceqggqmogwk = "\x34\x78\x33";
        goto gyqumicuqcwwcess;
        oooqmgaaiwkcyyyy:
        if (!(1 == DecoratorOption::get(Image::ASPECT_RATION_URLS) && 2 == sizeof($prefix_array) && !empty($prefix_array[1]))) {
            goto sesuwiiwmyccwaum;
        }
        goto ieosoksooeowgwuo;
        ooiaiemksqmaswks:
        $prefix_array = explode("\x78", $yuwymayicwwqiske);
        goto ioawmqwmiwwawcms;
        qkcasgegweeoeqao:
        if (!(self::MIN_WIDTH_1_1 <= $prefix_array[0] && self::MIN_HEIGHT_1_1 <= $prefix_array[1])) {
            goto myaageuswgawcqak;
        }
        goto meseuyammmyuuwgs;
        cmkicwoqsokugmuu:
        geuawgeawaosgskq:
        goto ooiaiemksqmaswks;
        gmkissoyacsksyko:
        mkkwkugqkmyoqmuw:
        goto eyasmquoaokeamwq;
        eyasmquoaokeamwq:
        
        return trailingslashit($miawkwqioaeasiig) . "{$mwweeceqggqmogwk}\57{$ymqmyyeuycgmigyo}\x2e{$new_ext}";
        goto qmmewcqkiaugaass;
        sggsqoimcswqyoii:
        $yuwymayicwwqiske = $this->get_suffix();
        goto cmkicwoqsokugmuu;
        mumqecckiuimiqei:
        if ('' != $mwweeceqggqmogwk) {
            goto mkkwkugqkmyoqmuw;
        }
        goto caigegksaaycqqgy;
        iqismgeasiycywoq:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 4 / 3)) {
            goto qqsieucekawaiwww;
        }
        goto yimewosgeusckeeo;
        rsgyucycsycgesiq:
        if (!(self::MIN_WIDTH_4_3 <= $prefix_array[0] && self::MIN_HEIGHT_4_3 <= $prefix_array[1])) {
            goto oeisoogqeyacokug;
        }
        goto sqwieygmgqomaksy;
        wwwcqcsimcgkkgqg:
        goto aaqwwyccekouwawg;
        goto gemykaoaqwicmeag;
        qmmewcqkiaugaass:
        kskywmmcaugieuiw:
        goto ieqcwaqqkgqecogy;
        caigegksaaycqqgy:
        
        $scqcgogsiaiksiiq = $this->get_suffix();
        goto woaeegswqqamukke;
        iwmgiqogkaqyoqck:
        goto aaqwwyccekouwawg;
        goto qmkyaaiuymgieqmy;
        mgukmsekywicuigc:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 16 / 9)) {
            goto ysmqigiqiwsyymcc;
        }
        goto iqismgeasiycywoq;
        cmmwsqyociiokaiu:
        myaageuswgawcqak:
        goto kyoaukgysoyeawwi;
        oucqgwwoisakkgsa:
        qqsieucekawaiwww:
        goto rsgyucycsycgesiq;
        ikuyswyameomqgyo:
        sesuwiiwmyccwaum:
        goto ciauiegykcqkccqq;
        meseuyammmyuuwgs:
        $mwweeceqggqmogwk = "\61\170\x31";
        goto cmmwsqyociiokaiu;
        cekyyawuusagaggk:
        $prefix_array[1] = (int) $prefix_array[1];
        goto mgukmsekywicuigc;
        ioawmqwmiwwawcms:
        $mwweeceqggqmogwk = '';
        goto oooqmgaaiwkcyyyy;
        gcguaakuuuiymwci:
        eugokmswcmogmgik:
        goto mumqecckiuimiqei;
        miwaociiwmomieeg:
        goto kskywmmcaugieuiw;
        goto gmkissoyacsksyko;
        yeouiccygkgcauiq:
        $miawkwqioaeasiig = $yyimiwcuegayoskq["\x64\x69\x72\156\x61\155\145"];
        goto ayysiuycoqkgikks;
        ieosoksooeowgwuo:
        $prefix_array[0] = (int) $prefix_array[0];
        goto cekyyawuusagaggk;
        gemykaoaqwicmeag:
        imeseaegeeiguiqs:
        goto qkcasgegweeoeqao;
        yimewosgeusckeeo:
        if (self::TOLERANCE >= abs($prefix_array[0] / $prefix_array[1] - 1)) {
            goto imeseaegeeiguiqs;
        }
        goto iwmgiqogkaqyoqck;
        woaeegswqqamukke:
        
        return trailingslashit($miawkwqioaeasiig) . "{$ymqmyyeuycgmigyo}\x2d{$scqcgogsiaiksiiq}\56{$new_ext}";
        goto miwaociiwmomieeg;
        kyoaukgysoyeawwi:
        aaqwwyccekouwawg:
        goto ikuyswyameomqgyo;
        ookqckwksqwoekiy:
        
        $new_ext = strtolower($uwumuuykwookaauo ? $uwumuuykwookaauo : $yucgcsieomwqgwws);
        goto xumakocukyysuseg;
        xumakocukyysuseg:
        
        if (!(!is_null($dest_path) && ($_dest_path = realpath($dest_path)))) {
            goto eugokmswcmogmgik;
        }
        goto yigoymociiyaeeqe;
        weqsciomuwmoocke:
        ieccammaemyeuucg:
        goto suqkayoqgmsgqaqm;
        ciauiegykcqkccqq:
        
        $yyimiwcuegayoskq = pathinfo($this->file);
        goto yeouiccygkgcauiq;
        suqkayoqgmsgqaqm:
        goto aaqwwyccekouwawg;
        goto oucqgwwoisakkgsa;
        ayysiuycoqkgikks:
        $yucgcsieomwqgwws = $yyimiwcuegayoskq["\145\170\x74\x65\x6e\x73\x69\157\x6e"];
        goto asqgmcaauoaeoeos;
        gyqumicuqcwwcess:
        oeisoogqeyacokug:
        goto wwwcqcsimcgkkgqg;
        asqgmcaauoaeoeos:
        
        $ymqmyyeuycgmigyo = wp_basename($this->file, "\x2e{$yucgcsieomwqgwws}");
        goto ookqckwksqwoekiy;
        ieqcwaqqkgqecogy:
    }
}
