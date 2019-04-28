<?php

namespace LeeSwagger\PayfortApi\Helper\Config;


use \Magento\Framework\Exception\NotFoundException;
use \Magento\Framework\Phrase;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
        implements \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface{

    const INSTALLMENT_DEVELOPMENT_END_POINT = 'https://sbpaymentservices.payfort.com/FortAPI/paymentApi';

    const INSTALLMENT_PRODUCTION_END_POINT = 'https://paymentservices.payfort.com/FortAPI/paymentApi';


    const AUTHORIZATION_DEVELOPMENT_END_POINT = 'https://sbpaymentservices.payfort.com/FortAPI/paymentApi';

    const AUTHORIZATION_PRODUCTION_END_POINT = 'https://paymentservices.payfort.com/FortAPI/paymentApi';


    const CREATE_TOKEN_DEVELOPMENT_END_POINT = 'https://sbcheckout.payfort.com/FortAPI/paymentPage';

    const CREATE_TOKEN_PRODUCTION_END_POINT = 'https://checkout.payfort.com/FortAPI/paymentPage';


    const THREE_DS_DEVELOPMENT_END_POINT = 'https://sbcheckout.payfort.com/FortAPI/redirectionResponse/return3DsTnxStatus';

    const THREE_DS_PRODUCTION_END_POINT = 'https://checkout.payfort.com/FortAPI/redirectionResponse/return3DsTnxStatus';


    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface;
     */
    protected $_scopeConfig;

    /**
     * @var \Payfort\Fort\Helper\Data
     */
    protected $_fortDataHelper;


	public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
                                \Payfort\Fort\Helper\Data $fortDataHelper){

		$this->_scopeConfig = $scopeConfig;

		$this->_fortDataHelper = $fortDataHelper;
	}
	
	/**
     * Gets Merchant Identifier Code
     *
	 * @return string
	 *
	 **/

    public function getMerchantIdentifier(){
        return $this->_fortDataHelper->getMainConfigData('merchant_identifier');
    }


    /**
     * Gets Access Code
     *
     * @return string
     *
     **/
    public function getAccessCode(){
        return $this->_fortDataHelper->getMainConfigData('access_code');
    }

    /**
     * Gets Request Passphrase
     *
     * @return string
     *
     **/
    public function getRequestPassphrase(){
        return $this->_fortDataHelper->getMainConfigData('sha_in_pass_phrase');
    }

    /**
     * Gets Response passphrase
     *
     * @return string
     *
     **/
    public function getResponsePassphrase(){
        return $this->_fortDataHelper->getMainConfigData('sha_out_pass_phrase');

    }

    /**
     * Gets gets the hashing algorithm that will be used to generate Signature
     *
     * @return string
     *
     **/
    public function getHashingAlgorithm(){
        return $this->_fortDataHelper->getMainConfigData('sha_type');
    }

    /**
     * Gets the hashing algorithm that will be used to generate Signature
     *
     * @return string
     *
     **/
    public function getLanguage(){
        return $this->_fortDataHelper->getLanguage();
    }

    /**
     * Gets Query Command
     *
     * @return string
     *
     **/
    public function getQueryCommand(){
        return 'GET_INSTALLMENTS_PLANS';
    }

    /**
     * Gets the issuer code
     *
     * @return string
     *
     **/
    public function getIssuerCode(){
        return '';
    }

    public function isSandBoxMode(){
       return $this->_fortDataHelper->getMainConfigData('sandbox_mode');

    }

    public function getInstallmentEndpoint(){
        if($this->isSandBoxMode())
            return self::INSTALLMENT_DEVELOPMENT_END_POINT;
        else
            return self::INSTALLMENT_PRODUCTION_END_POINT;
    }


    public function getTokenCreationEndpoint(){
        if($this->isSandBoxMode())
            return self::CREATE_TOKEN_DEVELOPMENT_END_POINT;
        else
            return self::CREATE_TOKEN_PRODUCTION_END_POINT;
    }

    public function getAuthorizationEndpoint(){
        if($this->isSandBoxMode())
            return self::AUTHORIZATION_DEVELOPMENT_END_POINT;
        else
            return self::AUTHORIZATION_PRODUCTION_END_POINT;
    }

    public function getThreeDSEndpoint(){
        if($this->isSandBoxMode())
            return self::THREE_DS_DEVELOPMENT_END_POINT;
        else
            return self::THREE_DS_PRODUCTION_END_POINT;
    }

    public function getRequestConfig(){
        $merchant_identifier = $this->getMerchantIdentifier();
        $access_code = $this->getAccessCode();
        $language = $this->getLanguage();
        $issuer_code = $this->getIssuerCode();

        $merged = compact('merchant_identifier', 'access_code',
            'language', 'issuer_code');

        return $merged;
    }

    /**
     * For getting country list and currency code
     * as well as multiplication values in compliance
     * ISO 3 code
     *
     * @return array
     *
     */
    public static function getAvailableCurrencyCodes(){

        return ['AFN' => 2,
			'ALL' => 2,
			'DZD' => 2,
			'USD' => 2,
			'EUR' => 2,
			'AOA' => 2,
			'XCD' => 2,
			'ARS' => 2,
			'AMD' => 2,
			'AWG' => 2,
			'AUD' => 2,
			'AZN' => 2,
			'BSD' => 2,
			'BHD' => 3,
			'BDT' => 2,
			'BBD' => 2,
			'BYR' => 0,
			'BZD' => 2,
			'XOF' => 0,
			'BMD' => 2,
			'BTN' => 2,
			'BOB' => 2,
			'BAM' => 2,
			'BWP' => 2,
			'NOK' => 2,
			'BRL' => 2,
			'BND' => 2,
			'BGN' => 2,
			'BIF' => 0,
			'KHR' => 2,
			'XAF' => 0,
			'CAD' => 2,
			'CVE' => 2,
			'KYD' => 2,
			'CLP' => 0,
			'CNY' => 2,
			'HKD' => 2,
			'COP' => 2,
			'KMF' => 0,
			'CDF' => 2,
			'NZD' => 2,
			'CRC' => 2,
			'HRK' => 2,
			'CUP' => 2,
			'CZK' => 2,
			'DKK' => 2,
			'DJF' => 0,
			'DOP' => 2,
			'ECS' => 0,
			'EGP' => 2,
			'SVC' => 2,
			'ERN' => 2,
			'ETB' => 2,
			'FKP' => 2,
			'FJD' => 2,
			'GMD' => 2,
			'GEL' => 2,
			'GHS' => 2,
			'GIP' => 2,
			'GTQ' => 2,
			'GNF' => 0,
			'GYD' => 2,
			'HTG' => 2,
			'HNL' => 2,
			'HUF' => 2,
			'ISK' => 0,
			'INR' => 2,
			'IDR' => 2,
			'IRR' => 2,
			'IQD' => 3,
			'GBP' => 2,
			'ILS' => 2,
			'JMD' => 2,
			'JPY' => 0,
			'JOD' => 3,
			'KZT' => 2,
			'KES' => 2,
			'KPW' => 2,
			'KRW' => 0,
			'KWD' => 3,
			'KGS' => 2,
			'LAK' => 2,
			'LBP' => 2,
			'LSL' => 2,
			'LRD' => 2,
			'LYD' => 3,
			'CHF' => 2,
			'MKD' => 2,
			'MGF' => 2,
			'MWK' => 2,
			'MYR' => 2,
			'MVR' => 2,
			'MRO' => 2,
			'MUR' => 2,
			'MXN' => 2,
			'MDL' => 2,
			'MNT' => 2,
			'MAD' => 2,
			'MZN' => 2,
			'MMK' => 2,
			'NAD' => 2,
			'NPR' => 2,
			'ANG' => 2,
			'XPF' => 0,
			'NIO' => 2,
			'NGN' => 2,
			'OMR' => 3,
			'PKR' => 2,
			'PAB' => 2,
			'PGK' => 2,
			'PYG' => 0,
			'PEN' => 2,
			'PHP' => 2,
			'PLN' => 2,
			'QAR' => 2,
			'RON' => 2,
			'RUB' => 2,
			'RWF' => 0,
			'SHP' => 2,
			'WST' => 2,
			'STD' => 2,
			'SAR' => 2,
			'RSD' => 2,
			'SCR' => 2,
			'SLL' => 2,
			'SGD' => 2,
			'SBD' => 2,
			'SOS' => 2,
			'ZAR' => 2,
			'SSP' => 2,
			'LKR' => 2,
			'SDG' => 2,
			'SRD' => 2,
			'SZL' => 2,
			'SEK' => 2,
			'SYP' => 2,
			'TWD' => 2,
			'TJS' => 2,
			'TZS' => 2,
			'THB' => 2,
			'TOP' => 2,
			'TTD' => 2,
			'TND' => 3,
			'TRY' => 2,
			'TMT' => 2,
			'UGX' => 0,
			'UAH' => 2,
			'AED' => 2,
			'UYU' => 2,
			'UZS' => 2,
			'VUV' => 0,
			'VEF' => 2,
			'VND' => 0,
			'YER' => 2,
			'ZMW' => 2,
            'UYI' => 2,
            'UYW' => 4,
			'ZWD' => 2];
    }

    /**
     * @param $currencyCode
     *
     * @throws \Magento\Framework\Exception\NotFoundException
     *
     * @return int
     */
    public static function getCurrencyPow($currencyCode){

        $list = self::getAvailableCurrencyCodes();

        if(!in_array($currencyCode, array_keys($list))){
            throw new NotFoundException(new Phrase("currency code $currencyCode does not exist in the list of available codes"));
        }

        return $list[$currencyCode];
    }

}