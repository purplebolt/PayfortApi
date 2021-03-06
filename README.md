# A Merchant 2.0 Payfort Magento 2 API Module for installmental Payment Integration

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

### PURPOSE
This module was created to allow API calls to payfort’s payment gateway using Magento 2 as the e-commerce platform.

### DEPENDENCIES
Before installing this module, payfort’s payment module available here (https://github.com/payfort/magento2-payfort) must be installed first.

### INSTALLATION
  -  If Payfort/Fort module has not been installed, visit (https://github.com/payfort/magento2-payfort) and follow the instructions to install Payfort/Fort.
  - Download this module and locate the LeeSwagger folder.
  -  Navigate to magento root folder, Copy LeeSwagger folder and its content to the app/code folder.
  -  Go back to magento root folder and run the following commands.
        `php bin/magento setup:upgrade`
        `php bin/magento setup:static-content:deploy -f`


# USAGE

### _Default Value_
Please note that this module will attempt to fallback to the values specified in Stores -> Configuration -> Sale -> Payment Methods -> PayFort Fort Payment Methods if none is sent with the request body during API call. It is OK to ommit `access_code`, `merchant_identifier`, and `language` as they can be handled by this module.

# OVERVIEW
Payfort has four payment methods. They are
  - `payfort_fort_cc`
  - `payfort_fort_installments`
  - `payfort_fort_naps`
  - `payfort_fort_sadad`
This module exposes the following set of APIs for one of these payment methods which is `payfort_fort_installments`. The APIs are listed below.
> * `<base-url>/rest/V1/payfort/getinstallments` [_POST_]
> * `<base-url>/rest/V1/payfort/tokenize` [_POST_]
> * `<base-url>/rest/V1/payfort/authorize` [_POST_]
> * `<base-url>/rest/V1/payfort/3dscheck` [_POST_]

## BRIEF WALKTHROUGH
### STEP 1
Send
```sh
{"data":{"amount":600.50}} //Replace specified value with your own value
```
to this endpoint 
`(<base-url>/rest/V1/payfort/getinstallments [POST]).`
Take note of the `plan_code`, `issuer_code`, `interest`, `recurrent_pay`, `number_of_installment` in the response body.
`interest`, `recurrent_pay`, `number_of_installments` and `currency_code` should be rendered to the user to enable selection of a choice in a dropdown.
`plan_code` and associated `issuer_code` will be needed in **STEP 3**. 

### STEP 2
Send
```sh
{"data":{"card_number": "4188870000000002",
"language": "ar",
"expiry_date": "0521",
"card_holder_name": "Bob Lee Swagger",
"card_security_code": "123"}} //Replace specified values with your own value
```
to this endpoint 
`(<base-url>/rest/V1/payfort/tokenize [POST])`
Take note of the `token_name` value in the json response body. You will need it in **STEP 3**. 


### STEP 3
Send
```sh
{"data":{"token_name":<Supply token_name from STEP 2>,
"language":"en",
"amount":840,
"merchant_reference":"4IMv8fl6Lj8zEjKim4qShlL4gWpYpeNW",
"customer_email": "purplescroll@gmail.com",
"payment_option": "VISA",
"plan_code": <supply user chosen plan_code from STEP 1>,
"issuer_code": <supply issuer_code associated with chosen plan_code from STEP 1>}}
```
to this endpoint 
`(<base-url>/rest/V1/payfort/authorize [POST])`
Take note of the `3ds_url` value in the json response body. You will need it in **STEP 4**. 

### STEP 4
Send
```sh
{"data":"<Supply 3ds_url value from STEP 3>"}
```
to this endpoint 
`(<base-url>/rest/V1/payfort/3dscheck [POST]).`
If a `success` response is received, you have successfully processed the installment payment.

## DETAILED DESCRIPTION
##### `<base-url>/rest/V1/payfort/getinstallments [POST]`
This endpoint lists out all available installment plans.
**Sample/basic payload for POST request**
```sh
{"data":{{"amount":870.43}}
```
**Sample Response**
```sh
{
    "response_code": "62000",
    "response_message": "Success",
    "signature": "<SIGNATURE GENERATED BY SERVER>",
    "query_command": "GET_INSTALLMENTS_PLANS",
    "installment_detail": {
        "issuer_detail": [
            {
                "issuer_code": "zaQnN1",
                "issuer_name_ar": "بنك الإمارات دبي الوطني",
                "issuer_name_en": "Emirates NBD UAE",
                "terms_and_condition_ar": "http://cdn.emiratesnbd.com/en/assets/File/CREDIT_CARD_INSTALMENT_PLAN_T&C.pdf",
                "terms_and_condition_en": "http://cdn.emiratesnbd.com/en/assets/File/CREDIT_CARD_INSTALMENT_PLAN_T&C.pdf",
                "country_code": "ARE",
                "issuer_logo_ar": "https://sbstatic.payfort.com/frontend/files/logos/issuer/logo_ar_162.png",
                "issuer_logo_en": "https://sbstatic.payfort.com/frontend/files/logos/issuer/logo_en_162.png",
                "banking_system": "Non Islamic",
                "formula": "(amount + (amount * (effective rate/100))) / period",
                "plan_details": [
                    {
                        "plan_code": "DNsycOSu",
                        "currency_code": "AED",
                        "number_of_installment": 12,
                        "fees_type": "Fixed",
                        "fees_amount": 1800,
                        "processing_fees_type": "Fixed",
                        "processing_fees_amount": 2000,
                        "rate_type": "Flat",
                        "plan_merchant_type": "Non Partner",
                        "plan_type": "Cross-Border",
                        "fee_display_value": 200,
                        "minimum_amount": 75000,
                        "maximum_amount": 100000000000,
                        "interest": 2,
                        "recurrent_pay": 74.04
                    },
                    {
                        "plan_code": "26ge87",
                        "currency_code": "AED",
                        "number_of_installment": 36,
                        "fees_type": "Percentage",
                        "fees_amount": 5364,
                        "processing_fees_type": "Percentage",
                        "processing_fees_amount": 0,
                        "rate_type": "Flat",
                        "plan_merchant_type": "Non Partner",
                        "plan_type": "Local",
                        "fee_display_value": 149,
                        "minimum_amount": 75000,
                        "maximum_amount": 100000000000,
                        "interest": 1.49,
                        "recurrent_pay": 37.15
                    },
                    {
                        "plan_code": "V1rqnl",
                        "currency_code": "AED",
                        "number_of_installment": 24,
                        "fees_type": "Percentage",
                        "fees_amount": 3576,
                        "processing_fees_type": "Percentage",
                        "processing_fees_amount": 0,
                        "rate_type": "Flat",
                        "plan_merchant_type": "Non Partner",
                        "plan_type": "Local",
                        "fee_display_value": 149,
                        "minimum_amount": 75000,
                        "maximum_amount": 100000000000,
                        "interest": 1.49,
                        "recurrent_pay": 49.24
                    },
                    {
                        "plan_code": "PGyD2b",
                        "currency_code": "AED",
                        "number_of_installment": 12,
                        "fees_type": "Percentage",
                        "fees_amount": 1788,
                        "processing_fees_type": "Percentage",
                        "processing_fees_amount": 0,
                        "rate_type": "Flat",
                        "plan_merchant_type": "Non Partner",
                        "plan_type": "Local",
                        "fee_display_value": 149,
                        "minimum_amount": 75000,
                        "maximum_amount": 100000000000,
                        "interest": 1.49,
                        "recurrent_pay": 85.51
                    },
                    {
                        "plan_code": "M9mv5Z",
                        "currency_code": "AED",
                        "number_of_installment": 6,
                        "fees_type": "Percentage",
                        "fees_amount": 894,
                        "processing_fees_type": "Fixed",
                        "processing_fees_amount": 0,
                        "rate_type": "Flat",
                        "plan_merchant_type": "Non Partner",
                        "plan_type": "Local",
                        "fee_display_value": 149,
                        "minimum_amount": 75000,
                        "maximum_amount": 100000000000,
                        "interest": 1.49,
                        "recurrent_pay": 158.04
                    }
                ],
                "confirmation_message_en": "The Bank will convert your transaction into an installment plan within two working days.",
                "processing_fees_message_en": "The Bank interest rate is calculated per month"
            }
        ]
    },
    "status": "62",
    "access_code": "<Your ACCESS CODE>",
    "merchant_identifier": "<Your MERCHANT IDENTIFIER>",
    "language": "en"
}
```

**List of acceptable parameters for request customization**
  -  `query_command` – `string`(**optional**) – Default value is `GET_INSTALLMENTS_PLANS`. It is recommended to always ommit this field.
  -  `amount` – `float`(**required**) – The grand total amount  pre or post-checkout.


##### `<base-url>/rest/V1/payfort/tokenize [POST]`

This endpoint accepts credit/debit card details, and generates a token that will be used to process the transaction.
**Sample/basic payload for POST request**
```sh
{"data":{"card_number": "4188870000000002",
	"expiry_date": "2105",
	"card_holder_name": "Bob Lee Swagger",
	"card_security_code": "123"
}}
```
**Sample Response**
```sh
{
    "access_code": "<Your ACCESS CODE>",
    "merchant_identifier": "<Your MERCHANT IDENTIFIER>",
    "language": "en",
    "service_command": "TOKENIZATION",
    "merchant_reference": "gO3spGnMYzS9XfQFTB0qgFPHmcAxk4F1",
    "card_number": "418887******0002",
    "expiry_date": 2105,
    "card_holder_name": "Bob Lee Swagger",
    "card_security_code": null,
    "token_name": "87951B04D47763F6E053321E320AE155",
    "signature": "<SIGNATURE GENERATED BY SERVER>",
    "remember_me": null,
    "return_url": "purpleboltng.com/payfortapi/tokenization/index/",
    "response_message": "Success",
    "response_code": 18000,
    "status": 18,
    "card_bin": 418887
}
```
**List of acceptable parameters for request customization**
  -  `service_command` – `string`(**optional**) – Default value is `TOKENIZATION` and should never be overridden.
  -  `merchant_reference` – `string`(**required**) – This should be the `order Id` after successfully placing the order. If no `merchant_reference` is provided in the request payload, one is generated by default automatically. Sample auto-generated `merchant_reference` is `ZH9O2vpsDn6Xayk7YR1FRhvdd5NIrZhh`.
  -  `card_number` – `string`(**required**) – This is the 15 to 19 digits credit/debit card number. It must always be provided as part of request payload.
  -  `expiry_date` – `int`(**required**) – This is the expiry date of the credit/debit card.
  -  `card_holder_name` – `string`(**required**) – This is the credit/debit card’s holder name.
  -  `card_security_code` – `int`(**required**) – This is the CVV value 
  -  `signature` – `string`(**optional**) – It is strongly recommended that this value is not overridden because it is generated on the server-side by default.
  -  `remember_me` – `string`(**optional**) – Acceptable values are `YES` or `NO`.
  -  `return_url` – `string`(**optional**) – unless you wish to use a different controller to handle requests, a default controller has been created to handle this request so it’s best to not override it. If you have created a different controller, you should specify it here. Sample – `http://purpleboltng.com/<frontname>/<controller-name>/<action-name>`

##### `base-url>/rest/V1/payfort/authorize [POST]`
This endpoint attempts the actual payment.

**Sample/basic payload for POST request**
```sh
{"data":{"token_name":"871D3392E340259FE053321E320A1340",
"language": "en", 
"amount":840.60, 
"merchant_reference":"4IMv8fl6Lj8zEjKim4qShlL4gWpYpeNW", 
"customer_email": "boblee_swagger@youssuph.com", 
"payment_option": "VISA", 
"plan_code": "DNsycOSu",
"issuer_code": "zaQnN1"}}
```
**Sample Response**
```sh
{
    "access_code": "<Your ACCESS CODE>",
    "merchant_identifier": "<Your MERCHANT IDENTIFIER>",
    "language": "en",
    "command": "PURCHASE",
    "merchant_reference": "gO3spGnMYzS9XfQFTB0qgFPHmcAxk4F1",
    "amount": 84000,
    "currency": "AED",
    "customer_email": "boblee_swagger@youssuph.com",
    "token_name": null,
    "signature": "<SIGNATURE GENERATED BY SERVER>",
    "payment_option": "VISA",
    "eci": "ECOMMERCE",
    "order_description": null,
    "card_security_code": null,
    "customer_ip": "127.0.0.1",
    "customer_name": null,
    "merchant_extra": null,
    "merchant_extra1": null,
    "merchant_extra2": null,
    "merchant_extra3": null,
    "merchant_extra4": null,
    "remember_me": null,
    "phone_number": null,
    "settlement_reference": null,
    "fort_id": 155645106800028754,
    "authorization_code": null,
    "response_message": "3-D Secure check requested",
    "response_code": 20064,
    "expiry_date": 2105,
    "card_number": "418887******0002",
    "status": 20,
    "card_holder_name": "Bob Lee Swagger",
    "3ds_url": "https://sbsimulator.payfort.com/secure3dsSimulator?FORTSESSIONID=112c39ee12819b9b5491be050e71b703&paymentId=5740559166725965820&DOID=C70BAA4D83511CCADAEC071226C925FB&o=pt&action=retry",
    "plan_code": null,
    "issuer_code": "zaQnN1",
    "installments": "HOSTED"
}
```
**List of acceptable parameters for request customization**
  -  `command` – `string`(**required**) – There are two possible values. They are `PURCHASE` and `AUTHORIZATION`. When not sure of which value to use, do not override. The default backend value is `PURCHASE`.
  -  `merchant_reference` – `string`(**required**) – The `order Id` value after successfully placing an order. It should be the same as the `order Id` value specified for `TOKENIZATION`.
  -  `amount` – `float`(**required**) – This is the grand total value of the item being bought. For example, if grand total is `800.50AED`, it is perfectly acceptable to specify `800.50` as amount.
  -  `currency` – `string`(**optional**) – If currency is not specified, the default currency of magento store is used.
  -  `customer_email` – `string`(**required**) – Customer’s mail address.
  -  `token_name` – `string`(**required**) – The `token_name` received as response from `rest/V1/payfort/tokenize` request.
  -  `plan_code` – `string`(**required**) – This is the `plan_code` chosen by the customer.
  -  `issuer_code` – `string`(**required**) – This is the `issuer_code` associated with the installment plan chosen by the customer.
  -  `signature` – `string`(**optional**) – It is strongly recommended that this value is not overridden because it is generated on the server-side by default.
  -  `payment_option` – `string`(optional) – possible payment options. Possible values are – `MASTERCARD, VISA, AMEX,  MADA, MEEZA`.
  -  `eci` – `string` (**optional**) – E-commerce Indicator. Possible values are – `ECOMMERCE, MOTO.`
  -  `order_description` – `string` (**optional**) – Description of the order, probably a summarized list of items bought.
  -  `card_security_code` – `int` (**optional**) – This is the CVV value. `token_name` works with `card_security_code`. A `token_name` that has been successfully used to process a transaction will be stored by payfort. If it is to be used again, during the `AUTHORIZE` phase, supply same `token_name` alongside `card_security_code` (cvv). If the `token_name` has not been used to successfully process a transaction, `card_security_code` should be omitted in the list of parameters being sent to the server. If you don’t want customer to keep entering credit card details each time they want to checkout, you can save the `token_name` and associate it with their account so that they will only have to enter the `card_security_code`(cvv). Use `card_security_code` together with `token_name` for a smoother and faster checkout experience.
  -  `customer_ip` – `string`(**optional**) – This is the IP address of the client.
  -  `customer_name` – `string`(**required**) – Name of customer.
  -  `merchant_extra` – `string`(**optional**) – Extra data sent by merchant. Will be received and sent back as received. It will not be displayed in any report. There are also `merchant_extra1, merchant_extra2, merchant_extra3, merchant_extra4`. They all have the same purpose.
  -  `remember_me` – `string`(**optional**) - This parameter provides you with an indication to whether to save this token for the user based on the user selection. The Tokenization service MUST be activated in order to be able to send `remember_me` parameter. Possible values are `YES`, `NO`.
  -  `phone_number` – `string`(**optional**) – customer’s phone number.
  -  `settlement_reference` – `string`(optional) – This value is submitted to the FORT. The value is then passed to the Acquiring bank and displayed to the merchant in the Acquirer settlement file.
  -  `return_url` – `string`(**optional**) - The URL of the page to be displayed to the customer when the order is processed successfully. Since this is an API and web pages are not being rendered. This parameter can be ignored.


##### `base-url>/rest/V1/payfort/3dscheck [POST]`
This endpoint carries out 3D secure check.

**Sample/basic payload for POST request**
```sh
{"data":"https://sbsimulator.payfort.com/secure3dsSimulator?FORTSESSIONID=0ab97df6343ac4575c87e750b0b6a572&paymentId=5740559166725965820&DOID=C70BAA4D83511CCADAEC071226C925FB&o=pt&action=retry"}
```
**Sample Response**
```sh
{
    "access_code": "<Your ACCESS CODE>",
    "merchant_identifier": "<Your MERCHANT IDENTIFIER>",
    "language": "en",
    "amount": 84000,
    "response_code": 14000,
    "card_number": "418887******0002",
    "card_holder_name": "Bob Lee Swagger",
    "signature": "<SIGNATURE GENERATED BY SERVER>",
    "payment_option": "VISA",
    "expiry_date": 2105,
    "customer_ip": "127.0.0.1",
    "eci": "ECOMMERCE",
    "fort_id": 155645106800028754,
    "command": "PURCHASE",
    "response_message": "Success",
    "merchant_reference": "gO3spGnMYzS9XfQFTB0qgFPHmcAxk4F1",
    "authorization_code": "278119",
    "customer_email": "boblee_swagger@youssuph.com",
    "token_name": "87951B04D47763F6E053321E320AE155",
    "currency": "AED",
    "status": 14
}
```
**List of acceptable parameters for request customization**

  -  `3ds_url` - `string`(**required**) - This is the value of `3ds_url` field from the json response of `/rest/V1/payfort/authorize` request.

## FUTURE ADDITIONS
Right now, this API only supports `installment payments`. `payfort_fort_cc`,  `payfort_fort_naps`, and `payfort_fort_sadad` can be added later.
Thanks for your time.
