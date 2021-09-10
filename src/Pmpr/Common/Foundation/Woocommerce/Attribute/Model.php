<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = 'attribute_id';
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        $quowyokcwswmuois = self::akuociswqmoigkas();
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig('attribute_meta')->muuwuqssqkaieqge(__('Attribute Metas', PR__CMN__FOUNDATION))->guiaswksukmgageq(__('Attribute Meta', PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        parent::ckgmycmaukqgkosk();
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__('Attribute', PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__('Meta Key', PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__('Meta Value', PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        if ($ymkomoccmymcoiea && $uusmaiomayssaecw) {
            $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
            if (!$icwicymcioeyeyek) {
                $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
            } else {
                if (ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie) {
                    
                    return;
                }
            }
            ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
            $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        }
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        if ($mksyucucyswaukig) {
            $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
            $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        }
        return $mksyucucyswaukig;
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
