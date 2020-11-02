<?php

/*
$conf = array (
    'AWS_REGION' => 'us-west-2',
    'eCourtPage' => 'cms',
    'eCourtSystem' => '',
    'JTI_ENCRYPT_KEY' => 'jti',
    'AWS_ACCESS_KEY_ID' => 'AKIAIIZFJJF6QSVGOTAA',
    'JTI_HASH_HMAC_KEY' => 'test',
    'cloudPayCancelUrl' => 'http://portal1.journal-dev.com/transactionRedirect.php',
    'cloudPayReturnUrl' => 'http://portal1.journal-dev.com/transactionRedirect.php',
    'paymentGatewayUrl' => 'https://test.authorize.net/gateway/transact.dll',
    'AWS_S3_BUCKET_NAME' => 'jti-portal-dev',
    'cloudPayGatewayUrl' => 'https://test.authorize.net/gateway/transact.dll',
    'cloudDeploymentCode' => 'efsp.sandbox',
    'eCourt_API_Password' => 'kadmin',
    'eCourt_API_URL_BASE' => 'https://cms-sandbox.ecourt.com',
    'eCourt_API_Username' => 'kadmin',
    'AWS_SECRET_ACCESS_KEY' => 'PwTKQXT3w4wrxQda1v9uzvdDwbqxsBnUXU68LK//',
    'Calendar_API_Password' => 'pass',
    'Calendar_API_Username' => 'jti-crs',
    'authDotNet_WebServiceURL' => 'https://apitest.authorize.net/xml/v1/request.api',
    'cloudPayRedirectCancelUrl' => 'http://portal1.journal-dev.com/transactionRedirect.php',
    'cloudPayRedirectReturnUrl' => 'http://portal1.journal-dev.com/transactionRedirect.php',
    'efsp_confidentialCategory' => '3201,3801,3401,3101',
    'paymentGatewayAccountName' => '8NLpNg22Xz',
    'cloudPayGatewayAccountName' => '8NLpNg22Xz',
    'cloudPayRedirectGatewayUrl' => 'https://test.authorize.net/gateway/transact.dll',
    'CourtRecordMDE_API_Password' => 'pass',
    'CourtRecordMDE_API_URL_BASE' => 'https://efm-sandbox.ecourt.com',
    'CourtRecordMDE_API_Username' => 'kadmin',
    'paymentGatewaySslVerifyPeer' => '1',
    'FilingReviewFeeWaiverDocName' => 'Request to Waive Court Fees',
    'FilingReviewFeeWaiverDocType' => 'FW001',
    'FilingReviewMDE_API_Password' => 'pass',
    'FilingReviewMDE_API_URL_BASE' => 'https://efm-sandbox.ecourt.com',
    'FilingReviewMDE_API_Username' => 'kadmin',
    'authDotNet_responseHashValue' => 'test',
    'paymentGatewayTransactionKey' => '2873h2k3B7qCwX59',
    'cloudPayAuthNetApiEndpointUrl' => 'https://apitest.authorize.net/xml/v1/request.api',
    'cloudPayGatewayTransactionKey' => '2873h2k3B7qCwX59',
    'authDotNet_hostedFormReturnURL' => 'http://localhost/public-portal/?q=paymentProfile',
    'efsp_name_extension_form_group' => 'EFNE,EFNE_REQ',
    'cloudPayAuthNetResponseHashValue' => 'test',
    'efsp_caseInit_docList_formGroups' => 'EFCI,EFCI_LEAD',
    'DirectCourtRecordMDE_API_Password' => 'pass',
    'DirectCourtRecordMDE_API_URL_BASE' => 'https://cms-sandbox.ecourt.com',
    'DirectCourtRecordMDE_API_Username' => 'jti-crs',
    'cloudPayGatewayPublicApplicationKey' => '76Ck28qyq64b48a6xr4wUehAB322FR3srxX45Y34RL9xc6GXZrp79csEsnv7Q6ew',
    'eCourtPublicForm_fileStorageLocation' => '/var/www/s3vol',
    'authDotNet_managePaymentProfileFormActionURL' => 'https://test.a.net/profile/manage',
    'cloudPayAuthNetManagePaymentProfileFormActionUrl' => 'https://test.authorize.net/profile/manage'
);
*/


$conf = array(
    'eCourt_API_URL_BASE' => 'https://cms-sandbox.ecourt.com',
    'eCourt_API_Username' => 'kadmin',
    'eCourt_API_Password' => 'kadmin',
    'eCourtPublicForm_fileStorageLocation' => '',
    'eCourtSystem' => '',
    'eCourtPage' => 'cms',
);



$update_free_access = FALSE;

$databases = array (
    'default' =>
        array (
            'default' =>
                array (
                    'driver' => 'mysql',
                    'database' => 'public-portal',
                    'username' => 'root',
                    'password' => 'dbpass',
                    'host' => 'train-mysql',
                    'port' => '3306',
                ),
        ),
);
ini_set('arg_separator.output', '&amp;');
ini_set('session.cache_expire', 1200);
ini_set('session.cache_limiter', 'none');
ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 1200);
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid', 0);
ini_set('url_rewriter.tags', '');
ini_set('memory_limit', '1024M');
ini_set('max_input_time', '900');
ini_set('max_execution_time', '900');

ini_set('post_max_size', '100M');
ini_set('upload_max_filesize', '25M');