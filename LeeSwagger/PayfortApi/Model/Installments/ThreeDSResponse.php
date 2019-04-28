<?php

namespace LeeSwagger\PayfortApi\Model\Installments;


class ThreeDSResponse implements \LeeSwagger\PayfortApi\Api\Installments\ThreeDSResponseInterface{

    /**
     * @var \LeeSwagger\PayfortApi\Model\ManageRequests
     */
    protected $_requestManager;

    /**
     * @var  \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInterface
     */
    protected $_dataOutput;

    /**
     * @param \Zend\Dom\Query
     */
    protected $_domQuery;
    /**
     * @param \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface
     */
    protected $_payfortData;

    public function __construct(\LeeSwagger\PayfortApi\Model\ManageRequests $requestManager,
                                \LeeSwagger\PayfortApi\Api\Data\Installments\ThreeDSResponse\ThreeDSResponseInterfaceFactory $dataOutput,
                                \Zend\Dom\Query $domQuery,
                                \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $payfortData){

        $this->_requestManager = $requestManager;
        $this->_dataOutput = $dataOutput;
        $this->_domQuery = $domQuery;
        $this->_payfortData = $payfortData;
    }

    /**
     * {@inheritdoc}
     */
    public function getThreeDSResponse($data){

        $endpoint = $data;

        $htmlString = $this->_requestManager->sendFormRequest([], $endpoint, CURLOPT_HTTPGET);
        $dom = $this->_domQuery->setDocumentHtml($htmlString);

        $fields = $dom->execute('form input');

        $params = [];
        foreach($fields as $field){
            $value = $field->getAttribute('value');
            $key = $field->getAttribute('name');
            $params[$key] = $value;
        }
        $params['deviceOs'] = 'WINDOWS';
        $params['deviceType'] = 'DESKTOP';
        $params['browserType'] = 'CHROME';
        $params['screenWidth'] = 1536;
        $params['screenHeight'] = 864;
        $endpoint = $this->_payfortData->getThreeDSEndpoint();
        $response = $this->_requestManager->sendFormRequest($params, $endpoint, CURLOPT_POST);

        $output = $this->_dataOutput
                        ->create()
                        ->setData((array)json_decode($response));
        return $output;
    }

}