<?php

// Include the BingAds\v10 namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include '../vendor/autoload.php';

// Specify the BingAds\CampaignManagement objects that will be used.
use BingAds\v10\CampaignManagement\AddNegativeKeywordsToEntitiesRequest;
use BingAds\v10\CampaignManagement\DeleteNegativeKeywordsFromEntitiesRequest;
use BingAds\v10\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest;
use BingAds\v10\CampaignManagement\AddSharedEntityRequest;
use BingAds\v10\CampaignManagement\GetSharedEntitiesByAccountIdRequest;
use BingAds\v10\CampaignManagement\UpdateSharedEntitiesRequest;
use BingAds\v10\CampaignManagement\DeleteSharedEntitiesRequest;
use BingAds\v10\CampaignManagement\AddListItemsToSharedListRequest;
use BingAds\v10\CampaignManagement\GetListItemsBySharedListRequest;
use BingAds\v10\CampaignManagement\DeleteListItemsFromSharedListRequest;
use BingAds\v10\CampaignManagement\SetSharedEntityAssociationsRequest;
use BingAds\v10\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest;
use BingAds\v10\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest;
use BingAds\v10\CampaignManagement\DeleteSharedEntityAssociationsRequest;
use BingAds\v10\CampaignManagement\AddCampaignsRequest;
use BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use BingAds\v10\CampaignManagement\Campaign;
use BingAds\v10\CampaignManagement\EntityNegativeKeyword;
use BingAds\v10\CampaignManagement\SharedEntityAssociation;
use BingAds\v10\CampaignManagement\SharedEntity;
use BingAds\v10\CampaignManagement\SharedList;
use BingAds\v10\CampaignManagement\SharedListItem;
use BingAds\v10\CampaignManagement\NegativeKeyword;
use BingAds\v10\CampaignManagement\NegativeKeywordList;
use BingAds\v10\CampaignManagement\BudgetLimitType;
use BingAds\v10\CampaignManagement\MatchType;

// Specify the BingAds\Proxy objects that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$CustomerId = <CustomerIdGoesHere>;
$AccountId = <AccountIdGoesHere>;


// Campaign Management WSDL

$wsdl = "https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc?singleWsdl";

try
{
    $proxy = ClientProxy::ConstructWithAccountAndCustomerId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, null, null);

    // Specify one or more campaigns.

    $campaigns = array();

    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::MonthlyBudgetSpendUntilDepleted;
    $campaign->MonthlyBudget = 1000.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    $campaigns[] = $campaign;

    // Add the campaign
    $campaignIds = AddCampaigns($proxy, $AccountId, $campaigns);

    // Print the new assigned campaign identifier
    PrintCampaignIdentifiers($campaignIds);

    // You may choose to associate an exclusive set of negative keywords to an individual campaign
    // or ad group. An exclusive set of negative keywords cannot be shared with other campaigns
    // or ad groups. This sample only associates negative keywords with a campaign.

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->MatchType = MatchType::Phrase;
    $negativeKeyword->Text = "auto";

    $entityNegativeKeyword = new EntityNegativeKeyword();
    $entityNegativeKeyword->EntityId = $campaignIds[0];
    $entityNegativeKeyword->EntityType = "Campaign";
    $entityNegativeKeyword->NegativeKeywords = array($negativeKeyword);

    $addNegativeKeywordsToEntitiesResponse = AddNegativeKeywordsToEntities($proxy, array($entityNegativeKeyword));
    if((count((array)$addNegativeKeywordsToEntitiesResponse->NestedPartialErrors) == 0)
        || !is_array($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors->BatchErrorCollection))
    {
        print "Added an exclusive set of negative keywords to the Campaign.\n\n";
        PrintNegativeKeywordIds($addNegativeKeywordsToEntitiesResponse->NegativeKeywordIds->IdCollection);
    }
    else
    {
        PrintNestedPartialErrors($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors->BatchErrorCollection);
    }

    $getNegativeKeywordsByEntityIdsResponse = GetNegativeKeywordsByEntityIds($proxy, $campaignIds, "Campaign", $AccountId);
    if((count((array)$getNegativeKeywordsByEntityIdsResponse->PartialErrors) == 0)
        || !is_array($getNegativeKeywordsByEntityIdsResponse->PartialErrors->BatchError))
    {
        print "Retrieved an exclusive set of negative keywords for the Campaign.\n\n";
        PrintEntityNegativeKeywords($getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    }
    else
    {
        PrintPartialErrors($getNegativeKeywordsByEntityIdsResponse->PartialErrors->BatchError);
    }

    // If you attempt to delete a negative keyword without an identifier the operation will
    // succeed but will return partial errors corresponding to the index of the negative keyword
    // that was not deleted.
    $nestedPartialErrors = DeleteNegativeKeywordsFromEntities($proxy, array($entityNegativeKeyword));
    if ((count((array)$nestedPartialErrors) == 0) || !is_array($nestedPartialErrors->BatchErrorCollection))
    {
        print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";
    }
    else
    {
        print "Attempt to DeleteNegativeKeywordsFromEntities without NegativeKeyword identifier partially fails by design.\n\n";
        PrintNestedPartialErrors($nestedPartialErrors->BatchErrorCollection);
    }

    // Delete the negative keywords with identifiers that were returned above.
    $nestedPartialErrors = DeleteNegativeKeywordsFromEntities($proxy, $getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    if ((count((array)$nestedPartialErrors) == 0) || !is_array($nestedPartialErrors->BatchErrorCollection))
    {
        print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";
    }
    else
    {
        PrintNestedPartialErrors($nestedPartialErrors->BatchErrorCollection);
    }

    // Negative keywords can also be added and deleted from a shared negative keyword list.
    // The negative keyword list can be shared or associated with multiple campaigns.
    // NegativeKeywordList inherits from SharedList which inherits from SharedEntity.

    $negativeKeywordList = new NegativeKeywordList();
    $negativeKeywordList->Name = "My Negative Keyword List";
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $proxy->GetNamespace());

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $proxy->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $proxy->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    // You can create a new list for negative keywords with or without negative keywords.

    $addSharedEntityResponse = AddSharedEntity($proxy, $encodedNegativeKeywordList, $negativeKeywords);
    $sharedEntityId = $addSharedEntityResponse->SharedEntityId;
    $listItemIds = $addSharedEntityResponse->ListItemIds;

    printf("NegativeKeywordList successfully added to account library and assigned identifer %d\n\n", $sharedEntityId);

    PrintNegativeKeywordResults(
        $sharedEntityId,
        $negativeKeywords,
        $listItemIds->long,
        $addSharedEntityResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywordList->Id = $sharedEntityId;
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $proxy->GetNamespace());
    $negativeKeywords = GetListItemsBySharedList($proxy, $encodedNegativeKeywordList);

    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        PrintNegativeKeywords($negativeKeywords->SharedListItem);
    }

    // To update the list of negative keywords, you must either add or remove from the list
    // using the respective AddListItemsToSharedList or DeleteListItemsFromSharedList operations.
    // To remove the negative keywords from the list pass the negative keyword identifers
    // and negative keyword list (SharedEntity) identifer.

    $partialErrors = DeleteListItemsFromSharedList($proxy, $listItemIds, $encodedNegativeKeywordList);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        print "Deleted most recently added negative keywords from negative keyword list.\n\n";

    }
    else
    {
        PrintPartialErrors($partialErrors);
    }

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywords = GetListItemsBySharedList($proxy, $encodedNegativeKeywordList);
    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        PrintNegativeKeywords($negativeKeywords->SharedListItem);
    }

    // Whether you created the list with or without negative keywords, more can be added
    // using the AddListItemsToSharedList operation.

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "auto";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $proxy->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "auto";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $proxy->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $addListItemsToSharedListResponse = AddListItemsToSharedList(
        $proxy,
        $negativeKeywords,
        $encodedNegativeKeywordList);
    $listItemIds = $addListItemsToSharedListResponse->ListItemIds;

    PrintNegativeKeywordResults(
        $sharedEntityId,
        $negativeKeywords,
        $listItemIds->long,
        $addListItemsToSharedListResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywords = GetListItemsBySharedList($proxy, $encodedNegativeKeywordList);
    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        PrintNegativeKeywords($negativeKeywords->SharedListItem);
    }

    // You can update the name of the negative keyword list.

    $negativeKeywordList->Name = "My Updated Negative Keyword List";
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $proxy->GetNamespace());

    $partialErrors = UpdateSharedEntities($proxy, array($encodedNegativeKeywordList));
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Updated Negative Keyword List Name to %s.\n\n", $negativeKeywordList->Name);
    }
    else
    {
        PrintPartialErrors($partialErrors);
    }

    // Get and print the negative keyword lists and return the list of identifiers.

    $sharedEntityType = "NegativeKeywordList";
    $sharedEntityIds = GetAndPrintSharedEntityIdentifiers($proxy, $sharedEntityType);

    // Negative keywords were added to the negative keyword list above. You can associate the
    // shared list of negative keywords with a campaign with or without negative keywords.
    // Shared negative keyword lists cannot be associated with an ad group. An ad group can only
    // be assigned an exclusive set of negative keywords.

    $associations = array();
    $association = new SharedEntityAssociation();
    $association->EntityId = $campaignIds[0];
    $association->EntityType = "Campaign";
    $association->SharedEntityId = $sharedEntityId;
    $association->SharedEntityType = "NegativeKeywordList";
    $associations[] = $association;

    $partialErrors = SetSharedEntityAssociations($proxy, $associations);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Associated CampaignId %d with Negative Keyword List Id %d.\n\n", $campaignIds[0], $sharedEntityId);
    }
    else
    {
        PrintPartialErrors($partialErrors);
    }

    // Get and print the associations either by Campaign or NegativeKeywordList identifier.
    $getSharedEntityAssociationsByEntityIdsResponse =
        GetSharedEntityAssociationsByEntityIds($proxy, array($campaignIds[0]), "Campaign", "NegativeKeywordList");
    PrintSharedEntityAssociations($getSharedEntityAssociationsByEntityIdsResponse->Associations->SharedEntityAssociation);
    PrintPartialErrors($getSharedEntityAssociationsByEntityIdsResponse->PartialErrors);

    $getSharedEntityAssociationsBySharedEntityIdsResponse =
        GetSharedEntityAssociationsBySharedEntityIds($proxy, "Campaign", array($sharedEntityIds[count(array($sharedEntityIds))-1]), "NegativeKeywordList");
    PrintSharedEntityAssociations($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations->SharedEntityAssociation);
    PrintPartialErrors($getSharedEntityAssociationsBySharedEntityIdsResponse->PartialErrors);

    // Explicitly delete the association between the campaign and the negative keyword list.

    $partialErrors = DeleteSharedEntityAssociations($proxy, $associations);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        print "Deleted NegativeKeywordList associations\n\n";
    }
    else
    {
        PrintPartialErrors($partialErrors);
    }

    // Delete the campaign and any remaining assocations.

    DeleteCampaigns($proxy, $AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $campaignIds[0]);

    // DeleteCampaigns does not delete the negative keyword list from the account's library.
    // Call the DeleteSharedEntities operation to delete the shared entities.

    $partialErrors = DeleteSharedEntities($proxy, array($encodedNegativeKeywordList));
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Deleted Negative Keyword List (SharedEntity) Id %d\n\n", $sharedEntityId);
    }
    else
    {
        PrintPartialErrors($partialErrors);
    }
}
catch (SoapFault $e)
{
    // Output the last request/response.

    print "\nLast SOAP request/response:\n";
    print $proxy->GetWsdl() . "\n";
    print $proxy->GetService()->__getLastRequest()."\n";
    print $proxy->GetService()->__getLastResponse()."\n";

    // Campaign Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
        ? $e->detail->AdApiFaultDetail->Errors->AdApiError
        : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

        // If the AdApiError array is not null, the following are examples of error codes that may be found.
        foreach ($errors as $error)
        {
            print "AdApiError\n";
            printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

            switch ($error->Code)
            {
                default:
                    print "Please see MSDN documentation for more details about the error code output above.\n";
                    break;
            }
        }
    }

    // Campaign Management service operations can throw ApiFaultDetail.
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        // If the BatchError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
            ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

            foreach ($errors as $error)
            {
                printf("BatchError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // If the EditorialError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
            ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

            foreach ($errors as $error)
            {
                printf("EditorialError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // If the OperationError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
            ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
            : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

            foreach ($errors as $error)
            {
                print "OperationError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }
    }
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Adds one or more campaigns to the specified account.

function AddCampaigns($proxy, $accountId, $campaigns)
{
    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;

    return $proxy->GetService()->AddCampaigns($request)->CampaignIds->long;
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($proxy, $accountId, $campaignIds)
{
    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;

    $proxy->GetService()->DeleteCampaigns($request);
}

// Prints the campaign identifiers for each campaign added.

function PrintCampaignIdentifiers($campaignIds)
{
    if(count((array)$campaignIds) == 0)
    {
        return;
    }

    foreach ($campaignIds as $id)
    {
        printf("Campaign successfully added and assigned CampaignId %s\n\n", $id);
    }
}

// Adds list items such as negative keywords to the corresponding list.

function AddListItemsToSharedList(
         $proxy,
         $listItems,
         $sharedList)
{
    $request = new AddListItemsToSharedListRequest();
    $request->ListItems = $listItems;
    $request->SharedList = $sharedList;

    return $proxy->GetService()->AddListItemsToSharedList($request);
}

// Adds a shared entity such as a negative keyword list to the account's library.
// Lists in the account's library can be associated with any campaign within the account.

function AddSharedEntity(
         $proxy,
         $sharedEntity,
         $listItems)
{
    $request = new AddSharedEntityRequest();
    $request->SharedEntity = $sharedEntity;
    $request->ListItems = $listItems;

    return $proxy->GetService()->AddSharedEntity($request);
}

// Deletes list items such as negative keywords from the corresponding list.

function DeleteListItemsFromSharedList(
         $proxy,
         $listItemIds,
         $sharedList)
{
    $request = new DeleteListItemsFromSharedListRequest();
    $request->ListItemIds = $listItemIds;
    $request->SharedList = $sharedList;

    return $proxy->GetService()->DeleteListItemsFromSharedList($request)->PartialErrors;
}

// Deletes shared entities such as negative keyword lists from the account's library.

function DeleteSharedEntities(
         $proxy,
         $sharedEntities)
{
    $request = new DeleteSharedEntitiesRequest();
    $request->SharedEntities = $sharedEntities;

    return $proxy->GetService()->DeleteSharedEntities($request)->PartialErrors;
}

// Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.

function DeleteSharedEntityAssociations(
         $proxy,
         $associations)
{
    $request = new DeleteSharedEntityAssociationsRequest();
    $request->Associations = $associations;

    return $proxy->GetService()->DeleteSharedEntityAssociations($request)->PartialErrors;
}

// Gets the list items such as the negative keywords of a negative keyword list.

function GetListItemsBySharedList(
         $proxy,
         $sharedList)
{
    $request = new GetListItemsBySharedListRequest();
    $request->SharedList = $sharedList;

    return $proxy->GetService()->GetListItemsBySharedList($request)->ListItems;
}

// Gets the shared entities such as negative keyword lists from the account's library.

function GetSharedEntitiesByAccountId(
         $proxy,
         $sharedEntityType)
{
    $request = new GetSharedEntitiesByAccountIdRequest();
    $request->SharedEntityType = $sharedEntityType;

    return $proxy->GetService()->GetSharedEntitiesByAccountId($request)->SharedEntities;
}

// Gets associations between a campaign and a shared entity such as a negative keyword list.
// You can request associations by associated entity identifiers.

function GetSharedEntityAssociationsByEntityIds(
         $proxy,
         $entityIds,
         $entityType,
         $sharedEntityType)
{
    $request = new GetSharedEntityAssociationsByEntityIdsRequest();
    $request->EntityIds = $entityIds;
    $request->EntityType = $entityType;
    $request->SharedEntityType = $sharedEntityType;

    return $proxy->GetService()->GetSharedEntityAssociationsByEntityIds($request);
}

// Gets associations between a campaign and a shared entity such as a negative keyword list.
// You can request associations by shared entity identifiers.

function GetSharedEntityAssociationsBySharedEntityIds(
         $proxy,
         $entityType,
         $sharedEntityIds,
         $sharedEntityType)
{
    $request = new GetSharedEntityAssociationsBySharedEntityIdsRequest();
    $request->EntityType = $entityType;
    $request->SharedEntityIds = $sharedEntityIds;
    $request->SharedEntityType = $sharedEntityType;

    return $proxy->GetService()->GetSharedEntityAssociationsBySharedEntityIds($request);
}

// Sets the association between a campaign and a shared entity such as a negative keyword list.

function SetSharedEntityAssociations(
         $proxy,
         $associations)
{
    $request = new SetSharedEntityAssociationsRequest();
    $request->Associations = $associations;

    return $proxy->GetService()->SetSharedEntityAssociations($request)->PartialErrors;
}

// Updates shared entities such as negative keyword lists within the account's library.

function UpdateSharedEntities(
         $proxy,
         $sharedEntities)
{
    $request = new UpdateSharedEntitiesRequest();
    $request->SharedEntities = $sharedEntities;

    return $proxy->GetService()->UpdateSharedEntities($request)->PartialErrors;
}

// Adds negative keywords to the specified campaign or ad group.

function AddNegativeKeywordsToEntities(
         $proxy,
         $entityNegativeKeywords)
{
    $request = new AddNegativeKeywordsToEntitiesRequest();
    $request->EntityNegativeKeywords = $entityNegativeKeywords;

    return $proxy->GetService()->AddNegativeKeywordsToEntities($request);
}

// Deletes negative keywords from the specified campaign or ad group.

function DeleteNegativeKeywordsFromEntities(
         $proxy,
         $entityNegativeKeywords)
{
    $request = new DeleteNegativeKeywordsFromEntitiesRequest();
    $request->EntityNegativeKeywords = $entityNegativeKeywords;

    return $proxy->GetService()->DeleteNegativeKeywordsFromEntities($request)->NestedPartialErrors;
}

// Gets the negative keywords that are only associated with the specified campaigns or ad groups.

function GetNegativeKeywordsByEntityIds(
         $proxy,
         $entityIds,
         $entityType,
         $parentEntityId)
{
    $request = new GetNegativeKeywordsByEntityIdsRequest();
    $request->EntityIds = $entityIds;
    $request->EntityType = $entityType;
    $request->ParentEntityId = $parentEntityId;

    return $proxy->GetService()->GetNegativeKeywordsByEntityIds($request);
}

// Prints the negative keyword identifiers added to each campaign or ad group entity.
// The IdCollection items are available by calling AddNegativeKeywordsToEntities.

function PrintNegativeKeywordIds($idCollections)
{
    if(count((array)$idCollections) == 0)
    {
        return;
    }

    for ($index = 0; $index < count($idCollections); $index++)
    {
        printf("NegativeKeyword Ids at entity index %d:\n\n", $index);
        foreach ($idCollections[$index]->Ids->long as $id)
        {
            printf("\tId: %s\n\n", $id);
        }
    }
}

// Prints the negative keywords

function PrintNegativeKeywords($sharedListItems)
{
    if(count((array)$sharedListItems) == 0)
    {
        return;
    }

    foreach ($sharedListItems as $sharedListItem)
    {
        if($sharedListItem->Type == "NegativeKeyword")
        {
            printf("\tNegativeKeyword Text: %s\n", $sharedListItem->Text);
            printf("\tId: %s\n", $sharedListItem->Id);
            printf("\tMatchType: %s\n\n", $sharedListItem->MatchType);
        }
    }
}

// Prints a list of EntityNegativeKeyword objects

function PrintEntityNegativeKeywords($entityNegativeKeywords)
{
    if(count((array)$entityNegativeKeywords) == 0)
    {
        return;
    }

    print "EntityNegativeKeyword items:\n\n";
    foreach ($entityNegativeKeywords as $entityNegativeKeyword)
    {
        printf("\tEntityId: %s\n", $entityNegativeKeyword->EntityId);
        printf("\tEntityType: %s\n\n", $entityNegativeKeyword->EntityType);
        PrintNegativeKeywords($entityNegativeKeyword->NegativeKeywords->NegativeKeyword);
    }
}

// Gets the negative keywords that are only associated with the specified campaigns or ad groups.

function GetAndPrintSharedEntityIdentifiers(
         $proxy,
         $sharedEntityType)
{
    $sharedEntities = GetSharedEntitiesByAccountId($proxy, $sharedEntityType);
    $sharedEntityIds = array();

    if((count((array)$sharedEntities) != 0) && is_array($sharedEntities->SharedEntity))
    {
        for ($index = 0; $index < count($sharedEntities->SharedEntity); $index++)
        {
            $sharedEntity = $sharedEntities->SharedEntity[$index];
            if(!is_null($sharedEntity->Id))
            {
                $sharedEntityIds[] = $sharedEntity->Id;
                printf("SharedEntity[%d] (%s) has SharedEntity Id %s.\n\n",
                       $index,
                       $sharedEntities->SharedEntity[$index]->Name,
                       $sharedEntities->SharedEntity[$index]->Id);
            }
        }
    }
    return $sharedEntityIds;
}

// Prints a list of BatchError objects that represent partial errors while managing negative keywords.

function PrintPartialErrors($partialErrors)
{
    if(count((array)$partialErrors) == 0)
    {
        return;
    }

    print "BatchError (PartialErrors) items:\n\n";
    foreach ($partialErrors->BatchError as $error)
    {
        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n\n", $error->Message);

        // In the case of an EditorialError, more details are available
        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n\n", $error->ReasonCode);
        }
    }
}

// Prints the list item identifiers, as well as any partial errors

function PrintNegativeKeywordResults(
         $sharedListId,
         $sharedListItems,
         $sharedListItemIds,
         $partialErrors)
{
    if(count((array)$sharedListItemIds) == 0)
    {
        return;
    }

    for ($index = 0; $index < count($sharedListItemIds); $index++)
    {
        // Determine if the SharedListItem is a NegativeKeyword.
        if($sharedListItems[$index]->enc_stype === "NegativeKeyword")
        {
            // Determine if the corresponding index has a valid identifier
            if($sharedListItemIds[$index] > 0)
            {
                printf("NegativeKeyword[%d] (%s) successfully added to NegativeKeywordList (%d) and assigned Negative Keyword Id %s.\n",
                        $index,
                        $sharedListItems[$index]->enc_value->Text,
                        $sharedListId,
                        $sharedListItemIds[$index]);
            }
        }
        else
        {
            print "SharedListItem is not a NegativeKeyword.\n\n";
        }
    }

    print "\n";

    PrintPartialErrors($partialErrors);
}

// Prints a list of SharedEntityAssociation objects.

function PrintSharedEntityAssociations($associations)
{
    if(count((array)$associations) == 0)
    {
        return;
    }

    printf("SharedEntityAssociation items:\n\n");
    foreach ($associations as $sharedEntityAssociation)
    {
        printf("\tEntityId: %s\n", $sharedEntityAssociation->EntityId);
        printf("\tEntityType: %s\n", $sharedEntityAssociation->EntityType);
        printf("\tSharedEntityId: %s\n", $sharedEntityAssociation->SharedEntityId);
        printf("\tSharedEntityType: %s\n\n", $sharedEntityAssociation->SharedEntityType);
    }
}

// Prints a list of BatchErrorCollection objects that represent partial errors while managing
// negative keywords.

function PrintNestedPartialErrors($nestedPartialErrors)
{
    if(count((array)$nestedPartialErrors) == 0)
    {
        return;
    }

    printf("BatchErrorCollection (NestedPartialErrors) items:\n\n");
    foreach ($nestedPartialErrors as $collection)
    {
        // The top level list index corresponds to the campaign or ad group index identifier.
        if (!empty($collection))
        {
            if (!is_null($collection->Code))
            {
                printf("\tIndex: %d", $collection->Index);
                printf("\tCode: %d", $collection->Code);
                printf("\tErrorCode: %s", $collection->ErrorCode);
                printf("\tMessage: %s\n\n", $collection->Message);
            }

            PrintPartialErrors($collection->BatchErrors);
        }
    }
}

?>
