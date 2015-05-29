<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible industry segments in which a customer operates.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671992(v=msads.90).aspx Industry Value Set
 *
 * @used-by Customer
 */
final class Industry
{
    /** Not applicable. */
    const NA = 'NA';
    /** The advertising agency sales house industry. */
    const AGENCY_SALES_HOUSE = 'AgencySalesHouse';
    /** The automotive industry. */
    const AUTOMOTIVE = 'Automotive';
    /** The consumer packaged goods industry. */
    const CONSUMER_PACKAGED_GOODS = 'ConsumerPackagedGoods';
    /** The education industry. */
    const EDUCATION = 'Education';
    /** The entertainment industry. */
    const ENTERTAINMENT = 'Entertainment';
    /** The financial services industry. */
    const FINANCIAL_SERVICES = 'FinancialServices';
    /** The food services industry. */
    const FOOD_SERVICES = 'FoodServices';
    /** The gaming industry. */
    const GAMING = 'Gaming';
    /** The government, non-profit, or political industry. */
    const GOVERNMENT_NONPROFIT_POLITICAL = 'GovernmentNonprofitPolitical';
    /** The healthcare industry. */
    const HEALTHCARE = 'Healthcare';
    /** This value is reserved for internal use. */
    const INTERNAL = 'Internal';
    /** The publishing and web media industry. */
    const PUBLISHING_AND_WEB_MEDIA = 'PublishingAndWebMedia';
    /** The real estate industry. */
    const REAL_ESTATE = 'RealEstate';
    /** The retail industry. */
    const RETAIL = 'Retail';
    /** The services industry. */
    const SERVICES = 'Services';
    /** The technology industry. */
    const TECHNOLOGY = 'Technology';
    /** The telecommunications industry. */
    const TELECOMMUNICATIONS = 'Telecommunications';
    /** The travel and hospitality industry. */
    const TRAVEL_HOSPITALITY = 'TravelHospitality';
    /** An industry that is not listed. */
    const OTHER = 'Other';
    const PHARMACEUTICALS = 'Pharmaceuticals';
}
