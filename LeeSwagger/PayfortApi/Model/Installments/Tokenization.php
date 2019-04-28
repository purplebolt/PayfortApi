<?php

namespace LeeSwagger\PayfortApi\Model\Installments;


use \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface;

class Tokenization implements \LeeSwagger\PayfortApi\Api\Installments\TokenizationInterface{

    const SERVICE_COMMAND_VALUE = 'TOKENIZATION';

    /**
     * @var \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface
     */
    protected $_payfortData;

    /**
     * @var array
     */
    protected $_mergedInputs;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Signature\PayfortSignatureInterface
     */
    protected $_payfortSignature;

    /**
     * @var \Magento\Framework\Math\Random
     */
    protected $_random;

    /**
     * @var \LeeSwagger\PayfortApi\Model\ManageRequests
     */
    protected $_requestManager;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface
     */
    protected $_paramInput;

    /**
     * @var  \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface
     */
    protected $_baseParamInput;
    /**
     * @var  \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInterface
     */
    protected $_dataOutput;
    /**
     * @var  \Magento\Framework\UrlInterface
     */
    protected $_urlInterface;


    public function __construct(\LeeSwagger\PayfortApi\Model\ManageRequests $requestManager,
                                \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $payfortData,
                                \LeeSwagger\PayfortApi\Api\Signature\PayfortSignatureInterface $payfortSignature,
                                \Magento\Framework\Math\Random $random,
                                TokenizationInputInterface $paramInput,
                                \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface $baseParamInput,
                                \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInterfaceFactory $dataOutput,
                                \Magento\Framework\UrlInterface $urlInterface){

        $this->_requestManager = $requestManager;

        $this->_payfortData = $payfortData;

        $this->_payfortSignature = $payfortSignature;

        $this->_random = $random;

        $this->_paramInput = $paramInput;

        $this->_baseParamInput = $baseParamInput;

        $this->_dataOutput = $dataOutput;

        $this->_urlInterface = $urlInterface;

    }

    /**
     * {@inheritdoc}
     */
    public function getToken($data){

        $params = $this->getPostData($data->getData());
        $tokenResponse = $this->requestToken($params);

        $output = $this->_dataOutput
                        ->create()
                        ->setData((array)json_decode($tokenResponse));
        return $output;
    }

    /**
     * Gets token data for Transaction authorization
     *
     * @param array $cardData
     *
     * @return []
     *
     **/
    public function getPostData($cardData){

        $requestParams = $this->_baseParamInput->mergeInputParams(
                     array_merge($this->getAdditionalInput(), $cardData)
                    );

        $remove = [TokenizationInputInterface::CARD_NUMBER,
                   TokenizationInputInterface::EXPIRY_DATE,
                   TokenizationInputInterface::CARD_HOLDER_NAME,
                   TokenizationInputInterface::CARD_SECURITY_CODE];
        $input = [];

        foreach ($requestParams as $key=>$value){
            if(!in_array($key, $remove)){
                $input[$key]=$value;
            }
        }

        $signature = $this->_payfortSignature->getSignature($input);
        $requestParams = $this->_payfortSignature
                                ->appendSignature($requestParams, $signature);

        return $requestParams;
    }


    public function getAdditionalInput(){
        $returnUrl = $this->_urlInterface->getUrl('payfortapi/tokenization/index');

        return [TokenizationInputInterface::SERVICE_COMMAND=>self::SERVICE_COMMAND_VALUE,
                TokenizationInputInterface::MERCHANT_REFERENCE=>$this->_random->getUniqueHash(),
                TokenizationInputInterface::RETURN_URL=>$returnUrl
             ];
    }

    private function requestToken($data){
        $endpoint = $this->_payfortData->getTokenCreationEndpoint();
        $result =  $this->_requestManager->sendFormRequest($data, $endpoint, CURLOPT_POST);
        return $result;
    }


}