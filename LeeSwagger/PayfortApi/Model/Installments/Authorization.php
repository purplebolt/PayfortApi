<?php


namespace LeeSwagger\PayfortApi\Model\Installments;

use \LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInputInterface;

class Authorization implements \LeeSwagger\PayfortApi\Api\Installments\AuthorizationInterface{

    /**
     * @var \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface
     */
    protected $_payfortData;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Signature\PayfortSignatureInterface;
     */
    protected $_payfortSignature;


    /**
     * @var \LeeSwagger\PayfortApi\Model\ManageRequests
     */
    protected $_requestManager;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInputInterface
     */
    protected $_inputAuthorizationData;

    /**
     * @var  \LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInterface
     */
    protected $_outputAuthorizationData;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
     protected $_storeManager;

    /**
     * @var  \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface
     */
    protected $_baseParamInput;

    /**
     * @var  \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface
     */
    protected $_urlInterface;

    public function __construct(\LeeSwagger\PayfortApi\Model\ManageRequests $requestManager,
                                AuthorizationInputInterface $inputAuthorizationData,
                                \LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInterface $outputAuthorizationData,
                                \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $payfortData,
                                \LeeSwagger\PayfortApi\Api\Signature\PayfortSignatureInterface $payfortSignature,
                                \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface $baseParamInput,
                                \Magento\Store\Model\StoreManagerInterface $storeManager,
                                \Magento\Framework\UrlInterface $urlInterface){

        $this->_requestManager = $requestManager;

        $this->_inputAuthorizationData = $inputAuthorizationData;

        $this->_outputAuthorizationData = $outputAuthorizationData;

        $this->_payfortData = $payfortData;

        $this->_payfortSignature = $payfortSignature;

        $this->_storeManager = $storeManager;

        $this->_baseParamInput = $baseParamInput;

        $this->_urlInterface = $urlInterface;

    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorization($data){

        $params = $this->getPostData($data->getData());

        $endpoint = $this->_payfortData->getAuthorizationEndpoint();

        $response = $this->_requestManager->sendRequest($params, 'POST', $endpoint);
        $response = $this->_requestManager->getBodyMessage($response);
        return $this->_outputAuthorizationData->setData($response);

    }

    /**
     * Gets token data for Transaction authorization
     *
     * @param \Panemirates\PayfortEMI\Api\Data\Authorization\InputAuthorizationDataInterface $data
     *
     * @return []
     *
     **/
    public function getPostData($data){

        $requestParams = $this->_baseParamInput->mergeInputParams(
            array_merge($this->getAdditionalInput(), $data)
        );
        $requestParams[AuthorizationInputInterface::AMOUNT] = $this->getAmount($requestParams['amount'],
                                                                                $requestParams['currency']);
        $signature = $this->_payfortSignature->getSignature($requestParams);
        $requestParams = $this->_payfortSignature->appendSignature($requestParams, $signature);
        return $requestParams;
    }


    public function getAdditionalInput(){

        $returnUrl = $this->_urlInterface->getUrl('payfortapi/authorization/index');
        $currency = $this->getCurrencyCode();
        $customer_ip = $this->getClientIp();

        return [AuthorizationInputInterface::COMMAND_KEY=>AuthorizationInputInterface::COMMAND_VALUE,
                AuthorizationInputInterface::RETURN_URL=>$returnUrl,
                AuthorizationInputInterface::CURRENCY=>$currency,
                AuthorizationInputInterface::CUSTOMER_IP=>$customer_ip,
            AuthorizationInputInterface::INSTALLMENTS=>AuthorizationInputInterface::INSTALLMENTS_VALUE];
    }

    /**
     * Converts amount to iso currency value
     *
     * @param float $amount
     * @param string $currency
     *
     * @return int
     */
    public function getAmount($amount, $currency){

        $pow = $this->_payfortData->getCurrencyPow($currency);
        $multiplication = pow(10, $pow);

        return $amount*$multiplication;
    }

    /**
     * Converts store's currency code
     *
     * @return string
     */
    public function getCurrencyCode(){

        return $this->_storeManager->getStore()
                    ->getCurrentCurrency()
                    ->getCode();
    }

    function getClientIp() {

        if (getenv('HTTP_CLIENT_IP'))
            $ipAddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipAddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipAddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipAddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipAddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipAddress = getenv('REMOTE_ADDR');
        else
            $ipAddress = 'UNKNOWN';

        return $ipAddress;
    }

}