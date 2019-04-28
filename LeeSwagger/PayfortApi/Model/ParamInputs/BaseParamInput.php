<?php

namespace LeeSwagger\PayfortApi\Model\ParamInputs;

class BaseParamInput extends \Magento\Framework\DataObject
    implements \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface
{
    /**
     * @var \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $_configGetter
     */
    private $_configGetter;


    public function __construct(\LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $configGetter,
                                array $data = [])
    {

        parent::__construct($data);

        $this->_configGetter = $configGetter;
    }

    /**
     * Merges Inputs received from client with Server defined
     * configurations
     *
     * @param array $input
     * @param bool $removeEmptyFields
     *
     * @return array
     *
     */
    public function mergeInputParams(array $input, $removeEmptyFields = true){

        $adminConfig = $this->_configGetter->getRequestConfig();

        $merged = array_merge($adminConfig, $input);
        if($removeEmptyFields){
            $merged =  $this->removeEmptyFields($merged);
        }
        return $merged;
    }

    /**
     * Removes empty fields from supplied input
     *
     * @param array $merged
     *
     * @return array
     **/

    public static function removeEmptyFields($merged){

        foreach ($merged as $key=>$value){
            if(empty($value) || !isset($value))
                unset($merged[$key]);
        }
        return $merged;
    }


}
