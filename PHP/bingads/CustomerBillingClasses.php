<?php
// Generated on 4/10/2014 3:04:17 PM

namespace BingAds\CustomerBilling
{
    use DateTime;

    final class CustomerBillingServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/Billing/v9';
        const ProductionEndpoint = 'https://clientcenter.api.bingads.microsoft.com/Api/Billing/v9/CustomerBillingService.svc';
        const SandboxEndpoint = 'https://sharedservices.api.sandbox.bingads.microsoft.com/Api/Billing/v9/CustomerBillingService.svc';
    }

    /**
     * Defines the possible formats in which to generate the billing document.
     * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.90).aspx DataType Value Set
     * 
     * @used-by BillingDocument
     * @used-by GetBillingDocumentsRequest
     * @used-by GetDisplayInvoicesRequest
     */
    final class DataType
    {
        /** Use PDF format. */
        const Pdf = 'Pdf';

        /** Use XML format. */
        const Xml = 'Xml';
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169104(v=msads.90).aspx AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the base object from which all fault detail objects derive.
     * @link http://msdn.microsoft.com/en-us/library/dn169107(v=msads.90).aspx ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     * @link http://msdn.microsoft.com/en-us/library/dn169105(v=msads.90).aspx AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/dn169108(v=msads.90).aspx ApiFault Data Object
     * 
     * @uses OperationError
     */
    class ApiFault extends ApplicationFault
    {
        public $OperationErrors;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/dn169102(v=msads.90).aspx ApiBatchFault Data Object
     * 
     * @uses BatchError
     */
    final class ApiBatchFault extends ApiFault
    {
        /**
         * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;
    }

    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/dn169101(v=msads.90).aspx BatchError Data Object
     * 
     * @used-by ApiBatchFault
     */
    final class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines a billing document.
     * @link http://msdn.microsoft.com/en-us/library/dn469177(v=msads.90).aspx BillingDocument Data Object
     * 
     * @uses DataType
     * @used-by GetBillingDocumentsResponse
     * @used-by GetDisplayInvoicesResponse
     * @used-by GetKOHIOInvoicesResponse
     */
    final class BillingDocument
    {
        /**
         * The billing document.
         * @var base64Binary
         */
        public $Data;

        /**
         * The identifier of the billing document.
         * @var integer
         */
        public $Id;

        /**
         * The format of the billing document.
         * @var DataType
         */
        public $Type;
    }

    /**
     * Defines a billing document identification object that contains information about a billing document, such as the billing document identifier, billing document amount, and account identifier.
     * @link http://msdn.microsoft.com/en-us/library/dn469176(v=msads.90).aspx BillingDocumentInfo Data Object
     * 
     * @used-by GetBillingDocumentsInfoResponse
     */
    final class BillingDocumentInfo
    {
        /**
         * The identifier of the account for which the billing document was generated.
         * @var integer
         */
        public $AccountId;

        /**
         * The account name.
         * @var string
         */
        public $AccountName;

        /**
         * The account number.
         * @var string
         */
        public $AccountNumber;

        /**
         * The amount of the billing document.
         * @var double
         */
        public $Amount;

        /**
         * The currency of the billing document.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The date of the billing document.
         * @var \DateTime
         */
        public $DocumentDate;

        /**
         * An identifier of the billing document.
         * @var integer
         */
        public $DocumentId;
    }

    /**
     * Defines an insertion order.
     * @link http://msdn.microsoft.com/en-us/library/ff728378(v=msads.90).aspx InsertionOrder Data Object
     * 
     * @used-by AddInsertionOrderRequest
     * @used-by GetInsertionOrdersByAccountResponse
     * @used-by UpdateInsertionOrderRequest
     */
    final class InsertionOrder
    {
        /**
         * The identifier of the account to which the insertion order applies.
         * @var integer
         */
        public $AccountId;

        /**
         * The running balance of the insertion order.
         * @var double
         */
        public $BalanceAmount;

        /**
         * A code that identifies the country/region in which the account operates.
         * @var string
         */
        public $BookingCountryCode;

        /**
         * A description of the insertion order.
         * @var string
         */
        public $Comment;

        /**
         * The date that the insertion order expires.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * A system generated identifier that identifies the insertion order.
         * @var integer
         */
        public $InsertionOrderId;

        /**
         * An identifier of the last user to update the insertion order.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the insertion order was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * A percentage of the budget that has been spent.
         * @var double
         */
        public $NotificationThreshold;

        /**
         * Internal use only.
         * @var integer
         */
        public $ReferenceId;

        /**
         * The budget for this insertion order.
         * @var double
         */
        public $SpendCapAmount;

        /**
         * The date that the insertion order can begin accruing charges.
         * @var \DateTime
         */
        public $StartDate;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169103(v=msads.90).aspx OperationError Data Object
     * 
     * @used-by ApiFault
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    final class AddInsertionOrderRequest
    {
        public $InsertionOrder;
    }

    final class AddInsertionOrderResponse
    {
        public $InsertionOrderId;
        public $CreateTime;
    }

    /**
     * Gets the amount spent by the account in the specified month.
     * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpend Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendRequest
    {
        public $AccountId;
        public $MonthYear;
    }

    /**
     * Gets the amount spent by the account in the specified month.
     * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpend Response Object
     * 
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendResponse
    {
        /**
         * The amount spent by the account in the specified period.
         * @var double
         */
        public $Amount;
    }

    /**
     * Gets the specified billing documents.
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Request Object
     * 
     * @uses DataType
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsRequest
    {
        /**
         * A list of identifiers of the billing documents to get.
         * @var integer[]
         */
        public $DocumentIds;

        /**
         * The format to use to generate the billing document.
         * @var DataType
         */
        public $Type;
    }

    /**
     * Gets the specified billing documents.
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Response Object
     * 
     * @uses BillingDocument
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsResponse
    {
        /**
         * The list of billing documents that were retrieved.
         * @var BillingDocument[]
         */
        public $BillingDocuments;
    }

    /**
     * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
     * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfo Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
     */
    final class GetBillingDocumentsInfoRequest
    {
        /**
         * A list of identifiers of the accounts whose billing document information you want to get.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The start date to use for specifying the billing documents to get.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The end date to use for specifying the billing documents to get.
         * @var \DateTime
         */
        public $EndDate;
    }

    /**
     * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.
     * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfo Response Object
     * 
     * @uses BillingDocumentInfo
     * @used-by BingAdsCustomerBillingService::GetBillingDocumentsInfo
     */
    final class GetBillingDocumentsInfoResponse
    {
        /**
         * The list of billing document information objects that were retrieved.
         * @var BillingDocumentInfo[]
         */
        public $BillingDocumentsInfo;
    }

    final class GetDisplayInvoicesRequest
    {
        public $InvoiceIds;
        public $Type;
    }

    final class GetDisplayInvoicesResponse
    {
        public $BillingDocuments;
    }

    /**
     * Gets a list of insertion orders for the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccount Request Object
     * 
     * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
     */
    final class GetInsertionOrdersByAccountRequest
    {
        /**
         * The identifier of the account that contains the insertion orders to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of identifiers of the insertion orders to get.
         * @var integer[]
         */
        public $InsertionOrderIds;
    }

    /**
     * Gets a list of insertion orders for the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccount Response Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::GetInsertionOrdersByAccount
     */
    final class GetInsertionOrdersByAccountResponse
    {
        /**
         * A list of insertion orders.
         * @var InsertionOrder[]
         */
        public $InsertionOrders;
    }

    final class GetKOHIOInvoicesRequest
    {
        public $InvoiceIds;
    }

    final class GetKOHIOInvoicesResponse
    {
        public $BillingDocuments;
    }

    final class UpdateInsertionOrderRequest
    {
        public $InsertionOrder;
    }

    final class UpdateInsertionOrderResponse
    {
        public $LastModifiedTime;
    }
}
