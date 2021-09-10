<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\x61\x74\164\162\151\142\165\x74\x65\137\x69\144";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto ywswgoesmiwgckcu;
        ummiwuqqisqgwoco:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\x61\164\x74\x72\x69\142\165\x74\145\x5f\x6d\145\164\141")->muuwuqssqkaieqge(__("\x41\164\164\162\151\142\165\164\x65\x20\x4d\x65\x74\x61\163", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\x41\164\x74\162\x69\x62\165\164\145\40\115\145\164\141", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto myikgqcgseikimwa;
        myikgqcgseikimwa:
        parent::ckgmycmaukqgkosk();
        goto ooyyuaswogikyggu;
        ywswgoesmiwgckcu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ummiwuqqisqgwoco;
        ooyyuaswogikyggu:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\x41\164\164\x72\151\142\x75\164\145", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\x4d\145\x74\141\x20\x4b\145\171", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\x4d\145\164\141\x20\x56\141\x6c\x75\x65", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto ugwqwcgoswkkwcee;
        kgigsakiwsqqioim:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto aosmakasyommmioc;
        swmkkiiauusieuqw:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto keigessgsgawiyyo;
        }
        goto sgqaaocqgayiigos;
        aosmakasyommmioc:
        if (!$icwicymcioeyeyek) {
            goto saueosiwcgqsmgmk;
        }
        goto swmkkiiauusieuqw;
        sgqaaocqgayiigos:
        
        return;
        goto wmyagwwmquqeyyok;
        mocauoaugmiuacuu:
        goto kgmwmmiemqggaqeq;
        goto eoawekcguswgyykc;
        iwkwesmeiywuuugk:
        kgmwmmiemqggaqeq:
        goto akymcmmokgskeqiu;
        wwiasiiquqqmmqay:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto iwkwesmeiywuuugk;
        ugwqwcgoswkkwcee:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto cigcsyiesymkuywu;
        }
        goto kgigsakiwsqqioim;
        vgggsmmgmwumikmc:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto ycomuqussgiacuom;
        wmyagwwmquqeyyok:
        keigessgsgawiyyo:
        goto mocauoaugmiuacuu;
        akymcmmokgskeqiu:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto vgggsmmgmwumikmc;
        eoawekcguswgyykc:
        saueosiwcgqsmgmk:
        goto wwiasiiquqqmmqay;
        ycomuqussgiacuom:
        cigcsyiesymkuywu:
        goto yuuyqoyguaqsswey;
        yuuyqoyguaqsswey:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto iwigaaoiqyugwacm;
        iwigaaoiqyugwacm:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto yqismiumwaaeqgwu;
        yqismiumwaaeqgwu:
        if (!$mksyucucyswaukig) {
            goto uqekawymqmyaqaao;
        }
        goto wusuosaiqosakcqq;
        iieykwekyukgsias:
        uqekawymqmyaqaao:
        goto yiuwqcqesuysmegs;
        kaueiekkeciiaswy:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto iieykwekyukgsias;
        wusuosaiqosakcqq:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto kaueiekkeciiaswy;
        yiuwqcqesuysmegs:
        return $mksyucucyswaukig;
        goto mauoymckskucuemc;
        mauoymckskucuemc:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
