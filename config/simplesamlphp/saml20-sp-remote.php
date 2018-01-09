<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
    'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
    'SingleLogoutService' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
    'validate.authnrequest' => TRUE,
    'certData' => getenv('SIMPLESAMLPHP_SP_CERT_DATA'),
    'signature.algorithm' => getenv('SIMPLESAMLPHP_SP_SIGNATURE_ALGORITHM') ? getenv('SIMPLESAMLPHP_SP_SIGNATURE_ALGORITHM') : 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
);
