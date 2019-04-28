<?php


namespace LeeSwagger\PayfortApi\Model\Signature;

class PayfortSignature implements \LeeSwagger\PayfortApi\Api\Signature\PayfortSignatureInterface{

    /**
     * @var \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface;
     */
    protected $_payfortData;

    /**
     * @var $_mergedInputs;
     */
    protected $_mergedInputs;

    /**
     * @var \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface $_paramInput;
     */
    protected $_paramInput;


	
	public function __construct(\LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface $paramInput,
                                \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $payfortData){

	    $this->_payfortData = $payfortData;

	    $this->_paramInput = $paramInput;

	}
	
	/**
     * {@inheritdoc}
	 *
     **/
    public function getSignature($data){

        $input = is_array($data) ? $data : $data->getData();
        $output =  $this->_paramInput->mergeInputParams($input);
        $output = $this->_paramInput->removeEmptyFields($output);
        $output = $this->trimData($output);
        $output = $this->arrangeData($output);
        $output = $this->convertDataToString($output);
        $output = $this->addPassphrase($output);
        $output = $this->makeHash($output);
        return $output;
    }


    /**
     * Arranges data received in Alphabetical order as specified in Payfort's API
     *
     * @param array $data
     *
     * @return []
     **/
    private function arrangeData($data){
        ksort($data);
        return $data;
    }

    /**
     * Removes all leading and trailing white Spaces
     *
     * @param array $data
     *
     * @return []
     **/

    private function trimData($data){
        $result = [];
        foreach($data as $key=>$value){
            $result[trim($key)] = trim($value);
        }
        return $result;
    }


    /**
     * Converts array to string and removes all leading and trailing white Spaces
     *
     * @param array $data
     *
     * @return string
     **/
    private function convertDataToString($data){

        $output = '';

        foreach($data as $key=>$value){
            $output.=$key . '=' . $value;
        }

        return $output;
    }

    /**
     * Concatenates Merchant's passphrase to supplied parameter
     *
     * @param string $data
     *
     * @return strings
     **/
    private function addPassphrase($data){
        $requestPassphrase = $this->_payfortData->getRequestPassphrase();

       return $requestPassphrase . $data . $requestPassphrase;
    }


    /**
     * Generates a sha256 hash based on supplied parameter
     *
     * @param string $data
     *
     * @return string
     **/
    private function makeHash($data){
        return hash('sha256', $data);
    }

    private function getRequestData(){
        return $this->_coreRegistry->registry('paymentData');
    }


    public function appendSignature($data, $signature){
        $data['signature'] = $signature;
        return $data;
    }

}