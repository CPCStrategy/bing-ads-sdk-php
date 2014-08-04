<?php
// Generated on 7/15/2014 5:43:19 AM

namespace BingAds\CustomerManagement
{
    use DateTime;

    final class CustomerManagementServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/Customer/v9';
        const ProductionEndpoint = 'https://clientcenter.api.bingads.microsoft.com/Api/CustomerManagement/v9/CustomerManagementService.svc';
        const SandboxEndpoint = 'https://clientcenter.api.sandbox.bingads.microsoft.com/Api/CustomerManagement/v9/CustomerManagementService.svc';
    }

    /**
     * Defines the possible status values of an account.
     * @link http://msdn.microsoft.com/en-us/library/ff728394(v=msads.90).aspx AccountLifeCycleStatus Value Set
     * 
     * @used-by Account
     * @used-by AccountInfo
     * @used-by AccountInfoWithCustomerData
     */
    final class AccountLifeCycleStatus
    {
        /** The account is active, which means that the account and its campaigns can be managed and its ads served. */
        const Active = 'Active';

        /** The account is in a draft state. */
        const Draft = 'Draft';

        /** The account is inactive, which means that the system deleted the account. */
        const Inactive = 'Inactive';

        /** For internal use only. */
        const Pause = 'Pause';

        /** For internal use only. */
        const Pending = 'Pending';

        /** Your account has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
        const Suspended = 'Suspended';
    }

    /**
     * Defines the possible application types.
     * @link http://msdn.microsoft.com/en-us/library/ee704168(v=msads.90).aspx ApplicationType Value Set
     * 
     * @used-by User
     * @used-by FindAccountsRequest
     * @used-by FindAccountsOrCustomersInfoRequest
     * @used-by GetCustomersInfoRequest
     * @used-by SearchCustomersRequest
     * @used-by SignupCustomerRequest
     */
    final class ApplicationType
    {
        /** An advertiser application. */
        const Advertiser = 'Advertiser';
    }

    /**
     * Defines the possible account types.
     * @link http://msdn.microsoft.com/en-us/library/ff728392(v=msads.90).aspx AccountType Value Set
     * 
     * @used-by Account
     */
    final class AccountType
    {
        /** An advertiser account. */
        const Advertiser = 'Advertiser';
    }

    /**
     * Defines a selection of currency values.
     * @link http://msdn.microsoft.com/en-us/library/bb671938(v=msads.90).aspx CurrencyType Value Set
     * 
     * @used-by Account
     */
    final class CurrencyType
    {
        const AlgerianDinar = 'AlgerianDinar';
        const ArgentinePeso = 'ArgentinePeso';
        const ArmenianDram = 'ArmenianDram';
        const AustralianDollar = 'AustralianDollar';
        const AzerbaijanianManat = 'AzerbaijanianManat';
        const BahrainiDinar = 'BahrainiDinar';
        const Baht = 'Baht';
        const Balboa = 'Balboa';
        const BelarussianRuble = 'BelarussianRuble';
        const BelizeDollar = 'BelizeDollar';
        const Bolivar = 'Bolivar';
        const Boliviano = 'Boliviano';
        const BrazilianReal = 'BrazilianReal';
        const BruneiDollar = 'BruneiDollar';
        const CanadianDollar = 'CanadianDollar';
        const ChileanPeso = 'ChileanPeso';
        const ColombianPeso = 'ColombianPeso';
        const CordobaOro = 'CordobaOro';
        const CostaRicanColon = 'CostaRicanColon';
        const Croatiankuna = 'Croatiankuna';
        const CzechKoruna = 'CzechKoruna';
        const DanishKrone = 'DanishKrone';
        const Denar = 'Denar';
        const DominicanPeso = 'DominicanPeso';
        const Dong = 'Dong';
        const EgyptianPound = 'EgyptianPound';
        const Euro = 'Euro';
        const Forint = 'Forint';
        const Guarani = 'Guarani';
        const HongKongDollar = 'HongKongDollar';
        const Hryvnia = 'Hryvnia';
        const IcelandKrona = 'IcelandKrona';
        const IndianRupee = 'IndianRupee';
        const IranianRial = 'IranianRial';
        const IraqiDinar = 'IraqiDinar';
        const JamaicanDollar = 'JamaicanDollar';
        const JapaneseYen = 'JapaneseYen';
        const JordanianDinar = 'JordanianDinar';
        const KenyanShilling = 'KenyanShilling';
        const Kroon = 'Kroon';
        const KuwaitiDinar = 'KuwaitiDinar';
        const Lari = 'Lari';
        const LatvianLats = 'LatvianLats';
        const LebanesePound = 'LebanesePound';
        const Lek = 'Lek';
        const Lempira = 'Lempira';
        const Leu = 'Leu';
        const Lev = 'Lev';
        const LibyanDinar = 'LibyanDinar';
        const LithuanianLitus = 'LithuanianLitus';
        const MalaysianRinggit = 'MalaysianRinggit';
        const MexicanPeso = 'MexicanPeso';
        const MoroccanDirham = 'MoroccanDirham';
        const NewIsraeliSheqel = 'NewIsraeliSheqel';
        const NewTaiwanDollar = 'NewTaiwanDollar';
        const NewZealandDollar = 'NewZealandDollar';
        const NorwegianKrone = 'NorwegianKrone';
        const NuevoSol = 'NuevoSol';
        const PakistanRupee = 'PakistanRupee';
        const Pataca = 'Pataca';
        const PesoUruguayo = 'PesoUruguayo';
        const PhilippinePeso = 'PhilippinePeso';
        const QatariRial = 'QatariRial';
        const Quetzal = 'Quetzal';
        const RialOmani = 'RialOmani';
        const Rufiyaa = 'Rufiyaa';
        const Rupiah = 'Rupiah';
        const RussianRuble = 'RussianRuble';
        const SaudiRiyal = 'SaudiRiyal';
        const SingaporeDollar = 'SingaporeDollar';
        const SlovakKoruna = 'SlovakKoruna';
        const Som = 'Som';
        const SouthAfricanRand = 'SouthAfricanRand';
        const SwedishKrona = 'SwedishKrona';
        const SwissFranc = 'SwissFranc';
        const SyrianPound = 'SyrianPound';
        const Tenge = 'Tenge';
        const Tolar = 'Tolar';
        const TrinidadandTobagoDollar = 'TrinidadandTobagoDollar';
        const Tugrik = 'Tugrik';
        const TunisianDinar = 'TunisianDinar';
        const TurkishLira = 'TurkishLira';
        const UAEDirham = 'UAEDirham';
        const UKPound = 'UKPound';
        const USDollar = 'USDollar';
        const UzbekistanSum = 'UzbekistanSum';
        const Won = 'Won';
        const YemeniRial = 'YemeniRial';
        const YuanRenminbi = 'YuanRenminbi';
        const YugoslavianNewDinar = 'YugoslavianNewDinar';
        const ZimbabweDollar = 'ZimbabweDollar';
        const Zloty = 'Zloty';
    }

    /**
     * Defines the possible financial status values of an account.
     * @link http://msdn.microsoft.com/en-us/library/ff728399(v=msads.90).aspx AccountFinancialStatus Value Set
     * 
     * @used-by Account
     */
    final class AccountFinancialStatus
    {
        /** The account is in good standing. */
        const ClearFinancialStatus = 'ClearFinancialStatus';

        /** Not used. */
        const CreditWarning = 'CreditWarning';

        /** For an advertiser account, this status indicates that the account is past due. */
        const Hold = 'Hold';

        /** Not used. */
        const PendingCreditCheck = 'PendingCreditCheck';

        /** For an advertiser account, this status indicates that the customer can add campaigns to the account; however, the service will not deliver the account's ads. */
        const Proposed = 'Proposed';

        /** Not used. */
        const SoldToOnly = 'SoldToOnly';

        /** For a publisher account, this status indicates that the publisher has yet to provide a valid tax instrument. */
        const TaxOnHold = 'TaxOnHold';

        /** For a publisher account, this status indicates that the payout to the publisher was placed on hold by publisher. */
        const UserHold = 'UserHold';

        /** The account is past due; however, collection is no longer being pursued. */
        const WriteOff = 'WriteOff';
    }

    /**
     * Defines a selection of language values.
     * @link http://msdn.microsoft.com/en-us/library/bb672074(v=msads.90).aspx LanguageType Value Set
     * 
     * @used-by Account
     * @used-by Customer
     */
    final class LanguageType
    {
        const Arabic = 'Arabic';
        const Danish = 'Danish';
        const Dutch = 'Dutch';
        const English = 'English';
        const Finnish = 'Finnish';
        const French = 'French';
        const German = 'German';
        const Hebrew = 'Hebrew';
        const Italian = 'Italian';
        const Japanese = 'Japanese';
        const Korean = 'Korean';
        const Norwegian = 'Norwegian';
        const Portuguese = 'Portuguese';
        const Russian = 'Russian';
        const SimplifiedChinese = 'SimplifiedChinese';
        const Spanish = 'Spanish';
        const Swedish = 'Swedish';
        const TraditionalChinese = 'TraditionalChinese';
    }

    /**
     * The value set defines a broad selection of languages; however, not all languages are supported.
     * @link http://msdn.microsoft.com/en-us/library/ee704164(v=msads.90).aspx PaymentMethodType Value Set
     * 
     * @used-by Account
     */
    final class PaymentMethodType
    {
        /** The payments are made with a check. */
        const Check = 'Check';

        /** The payments are made with a credit card. */
        const CreditCard = 'CreditCard';

        /** The payments are made with an electronic funds transfer. */
        const ElectronicFundsTransfer = 'ElectronicFundsTransfer';

        /** An invoice is sent to the customer requesting payment. */
        const Invoice = 'Invoice';
    }

    /**
     * Defines the possible time zones for the customer management service.
     * @link http://msdn.microsoft.com/en-us/library/dn451293(v=msads.90).aspx TimeZoneType Value Set
     * 
     * @used-by Account
     */
    final class TimeZoneType
    {
        const AbuDhabiMuscat = 'AbuDhabiMuscat';
        const Adelaide = 'Adelaide';
        const Alaska = 'Alaska';
        const AlmatyNovosibirsk = 'AlmatyNovosibirsk';
        const AmsterdamBerlinBernRomeStockholmVienna = 'AmsterdamBerlinBernRomeStockholmVienna';
        const Arizona = 'Arizona';
        const AstanaDhaka = 'AstanaDhaka';
        const AthensBuckarestIstanbul = 'AthensBuckarestIstanbul';
        const AtlanticTimeCanada = 'AtlanticTimeCanada';
        const AucklandWellington = 'AucklandWellington';
        const Azores = 'Azores';
        const Baghdad = 'Baghdad';
        const BakuTbilisiYerevan = 'BakuTbilisiYerevan';
        const BangkokHanoiJakarta = 'BangkokHanoiJakarta';
        const BeijingChongqingHongKongUrumqi = 'BeijingChongqingHongKongUrumqi';
        const BelgradeBratislavaBudapestLjubljanaPrague = 'BelgradeBratislavaBudapestLjubljanaPrague';
        const BogotaLimaQuito = 'BogotaLimaQuito';
        const Brasilia = 'Brasilia';
        const Brisbane = 'Brisbane';
        const BrusselsCopenhagenMadridParis = 'BrusselsCopenhagenMadridParis';
        const Bucharest = 'Bucharest';
        const BuenosAiresGeorgetown = 'BuenosAiresGeorgetown';
        const Cairo = 'Cairo';
        const CanberraMelbourneSydney = 'CanberraMelbourneSydney';
        const CapeVerdeIsland = 'CapeVerdeIsland';
        const CaracasLaPaz = 'CaracasLaPaz';
        const CasablancaMonrovia = 'CasablancaMonrovia';
        const CentralAmerica = 'CentralAmerica';
        const CentralTimeUSCanada = 'CentralTimeUSCanada';
        const ChennaiKolkataMumbaiNewDelhi = 'ChennaiKolkataMumbaiNewDelhi';
        const ChihuahuaLaPazMazatlan = 'ChihuahuaLaPazMazatlan';
        const Darwin = 'Darwin';
        const EasternTimeUSCanada = 'EasternTimeUSCanada';
        const Ekaterinburg = 'Ekaterinburg';
        const FijiKamchatkaMarshallIsland = 'FijiKamchatkaMarshallIsland';
        const Greenland = 'Greenland';
        const GreenwichMeanTimeDublinEdinburghLisbonLondon = 'GreenwichMeanTimeDublinEdinburghLisbonLondon';
        const GuadalajaraMexicoCityMonterrey = 'GuadalajaraMexicoCityMonterrey';
        const GuamPortMoresby = 'GuamPortMoresby';
        const HararePretoria = 'HararePretoria';
        const Hawaii = 'Hawaii';
        const HelsinkiKyivRigaSofiaTallinnVilnius = 'HelsinkiKyivRigaSofiaTallinnVilnius';
        const Hobart = 'Hobart';
        const IndianaEast = 'IndianaEast';
        const InternationalDatelineWest = 'InternationalDatelineWest';
        const IrkutskUlaanBataar = 'IrkutskUlaanBataar';
        const IslamabadKarachiTashkent = 'IslamabadKarachiTashkent';
        const Jerusalem = 'Jerusalem';
        const Kabul = 'Kabul';
        const Kathmandu = 'Kathmandu';
        const Krasnoyarsk = 'Krasnoyarsk';
        const KualaLumpurSingapore = 'KualaLumpurSingapore';
        const KuwaitRiyadh = 'KuwaitRiyadh';
        const MagadanSolomonIslandNewCaledonia = 'MagadanSolomonIslandNewCaledonia';
        const MidAtlantic = 'MidAtlantic';
        const MidwayIslandAndSamoa = 'MidwayIslandAndSamoa';
        const MoscowStPetersburgVolgograd = 'MoscowStPetersburgVolgograd';
        const MountainTimeUSCanada = 'MountainTimeUSCanada';
        const Nairobi = 'Nairobi';
        const Newfoundland = 'Newfoundland';
        const Nukualofa = 'Nukualofa';
        const OsakaSapporoTokyo = 'OsakaSapporoTokyo';
        const PacificTimeUSCanadaTijuana = 'PacificTimeUSCanadaTijuana';
        const Perth = 'Perth';
        const Rangoon = 'Rangoon';
        const Santiago = 'Santiago';
        const SarajevoSkopjeWarsawZagreb = 'SarajevoSkopjeWarsawZagreb';
        const Saskatchewan = 'Saskatchewan';
        const Seoul = 'Seoul';
        const SriJayawardenepura = 'SriJayawardenepura';
        const Taipei = 'Taipei';
        const Tehran = 'Tehran';
        const Vladivostok = 'Vladivostok';
        const WestCentralAfrica = 'WestCentralAfrica';
        const Yakutsk = 'Yakutsk';
    }

    final class TaxType
    {
        const Business = 'Business';
        const Personal = 'Personal';
    }

    /**
     * Defines the possible financial status values of a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728435(v=msads.90).aspx CustomerFinancialStatus Value Set
     * 
     * @used-by Customer
     */
    final class CustomerFinancialStatus
    {
        /** The customer is in good standing. */
        const ClearFinancialStatus = 'ClearFinancialStatus';

        /** One of the customer's accounts is past due. */
        const CreditHold = 'CreditHold';

        /** Not used. */
        const CreditWarning = 'CreditWarning';

        /** The customer is undergoing a credit check as part of the customer sign-up process. */
        const PendingCreditCheck = 'PendingCreditCheck';

        /** Not used. */
        const ProposalsOnly = 'ProposalsOnly';

        /** The customer is considered to be a credit risk. */
        const SoldToOnly = 'SoldToOnly';
    }

    /**
     * Defines the possible industry segments in which a customer operates.
     * @link http://msdn.microsoft.com/en-us/library/bb671992(v=msads.90).aspx Industry Value Set
     * 
     * @used-by Customer
     */
    final class Industry
    {
        /** The advertising agency sales house industry. */
        const AgencySalesHouse = 'AgencySalesHouse';

        /** The automotive industry. */
        const Automotive = 'Automotive';

        /** The consumer packaged goods industry. */
        const ConsumerPackagedGoods = 'ConsumerPackagedGoods';

        /** The education industry. */
        const Education = 'Education';

        /** The entertainment industry. */
        const Entertainment = 'Entertainment';

        /** The financial services industry. */
        const FinancialServices = 'FinancialServices';

        /** The food services industry. */
        const FoodServices = 'FoodServices';

        /** The gaming industry. */
        const Gaming = 'Gaming';

        /** The government, non-profit, or political industry. */
        const GovernmentNonprofitPolitical = 'GovernmentNonprofitPolitical';

        /** The healthcare industry. */
        const Healthcare = 'Healthcare';

        /** This value is reserved for internal use. */
        const Internal = 'Internal';

        /** Not applicable. */
        const NA = 'NA';

        /** An industry that is not listed. */
        const Other = 'Other';
        const Pharmaceuticals = 'Pharmaceuticals';

        /** The publishing and web media industry. */
        const PublishingAndWebMedia = 'PublishingAndWebMedia';

        /** The real estate industry. */
        const RealEstate = 'RealEstate';

        /** The retail industry. */
        const Retail = 'Retail';

        /** The services industry. */
        const Services = 'Services';

        /** The technology industry. */
        const Technology = 'Technology';

        /** The telecommunications industry. */
        const Telecommunications = 'Telecommunications';

        /** The travel and hospitality industry. */
        const TravelHospitality = 'TravelHospitality';
    }

    /**
     * For internal use only.
     * @link http://msdn.microsoft.com/en-us/library/ff728418(v=msads.90).aspx ServiceLevel Value Set
     * 
     * @used-by Customer
     */
    final class ServiceLevel
    {
        /** For internal use only. */
        const Internal = 'Internal';

        /** For internal use only. */
        const Premium = 'Premium';

        /** For internal use only. */
        const Select = 'Select';

        /** For internal use only. */
        const SelfServe = 'SelfServe';

        /** For internal use only. */
        const SelfServeTrusted = 'SelfServeTrusted';
    }

    /**
     * Defines the possible status values of a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728419(v=msads.90).aspx CustomerLifeCycleStatus Value Set
     * 
     * @used-by Customer
     */
    final class CustomerLifeCycleStatus
    {
        /** The customer is active. */
        const Active = 'Active';

        /** The customer is inactive, which means that the customer was deleted. */
        const Inactive = 'Inactive';
    }

    /**
     * Defines the possible formats of the body of an email message.
     * @link http://msdn.microsoft.com/en-us/library/bb671705(v=msads.90).aspx EmailFormat Value Set
     * 
     * @used-by ContactInfo
     */
    final class EmailFormat
    {
        const Html = 'Html';
        const Text = 'Text';
    }

    /**
     * Defines a selection of locale values.
     * @link http://msdn.microsoft.com/en-us/library/bb671785(v=msads.90).aspx LCID Value Set
     * 
     * @used-by User
     * @used-by UserInvitation
     */
    final class LCID
    {
        const ArabicAlgeria = 'ArabicAlgeria';
        const ArabicBahrain = 'ArabicBahrain';
        const ArabicEgypt = 'ArabicEgypt';
        const ArabicIraq = 'ArabicIraq';
        const ArabicJordan = 'ArabicJordan';
        const ArabicKuwait = 'ArabicKuwait';
        const ArabicLebanon = 'ArabicLebanon';
        const ArabicLibya = 'ArabicLibya';
        const ArabicMorocco = 'ArabicMorocco';
        const ArabicOman = 'ArabicOman';
        const ArabicQatar = 'ArabicQatar';

        /** Arabic (Saudi Arabia) */
        const ArabicSaudiArabia = 'ArabicSaudiArabia';
        const ArabicTunisia = 'ArabicTunisia';
        const ArabicUnitedArabEmirates = 'ArabicUnitedArabEmirates';
        const ArabicYemen = 'ArabicYemen';

        /** Chinese (Hong Kong) */
        const ChineseHongKong = 'ChineseHongKong';

        /** Chinese (Taiwan) */
        const ChineseTaiwan = 'ChineseTaiwan';

        /** Danish (Denmark) */
        const DanishDenmark = 'DanishDenmark';

        /** Dutch (Netherlands) */
        const DutchNetherlands = 'DutchNetherlands';

        /** English (Australia) */
        const EnglishAustralia = 'EnglishAustralia';

        /** English (Canada) */
        const EnglishCanada = 'EnglishCanada';

        /** English (India) */
        const EnglishIndia = 'EnglishIndia';

        /** English (Indonesia) */
        const EnglishIndonesia = 'EnglishIndonesia';
        const EnglishIreland = 'EnglishIreland';

        /** English (Malaysia) */
        const EnglishMalaysia = 'EnglishMalaysia';

        /** English (New Zealand) */
        const EnglishNewZealand = 'EnglishNewZealand';

        /** English (Philippines) */
        const EnglishPhilippines = 'EnglishPhilippines';

        /** English (Singapore) */
        const EnglishSingapore = 'EnglishSingapore';

        /** English (Thailand) */
        const EnglishThailand = 'EnglishThailand';

        /** English (United Kingdom) */
        const EnglishUK = 'EnglishUK';

        /** English (United States) */
        const EnglishUS = 'EnglishUS';

        /** English (Vietnam) */
        const EnglishVietnam = 'EnglishVietnam';

        /** Finnish (Finland) */
        const FinnishFinland = 'FinnishFinland';

        /** French (Canada) */
        const FrenchCanada = 'FrenchCanada';

        /** French (France) */
        const FrenchFrance = 'FrenchFrance';

        /** German (Austria) */
        const GermanAustria = 'GermanAustria';

        /** German (Germany) */
        const GermanGermany = 'GermanGermany';

        /** German (Switzerland) */
        const GermanSwitzerland = 'GermanSwitzerland';

        /** Hebrew (Israel) */
        const HebrewIsrael = 'HebrewIsrael';

        /** Italian (Italy) */
        const ItalianItaly = 'ItalianItaly';

        /** Korean (Korea) */
        const KoreanKorea = 'KoreanKorea';

        /** Norwegian (Norway) */
        const NorwegianNorway = 'NorwegianNorway';
        const PortugueseBrazil = 'PortugueseBrazil';

        /** Russian (Russia) */
        const RussianRussia = 'RussianRussia';

        /** Spanish (Argentina) */
        const SpanishArgentina = 'SpanishArgentina';

        /** Spanish (Chile) */
        const SpanishChile = 'SpanishChile';

        /** Spanish (Colombia) */
        const SpanishColombia = 'SpanishColombia';

        /** Spanish (Mexico) */
        const SpanishMexico = 'SpanishMexico';

        /** Spanish (Peru) */
        const SpanishPeru = 'SpanishPeru';

        /** Spanish (Spain) */
        const SpanishSpain = 'SpanishSpain';

        /** Spanish (Venezuela) */
        const SpanishVenezuela = 'SpanishVenezuela';

        /** Swedish (Sweden) */
        const SwedishSweden = 'SwedishSweden';
    }

    /**
     * Defines the possible secret questions that users can choose from to help them recall their password.
     * @link http://msdn.microsoft.com/en-us/library/bb671980(v=msads.90).aspx SecretQuestion Value Set
     * 
     * @used-by User
     */
    final class SecretQuestion
    {
        /** An anniversary date. */
        const Anniversary = 'Anniversary';

        /** The middle name of your father. */
        const FatherMiddleName = 'FatherMiddleName';

        /** The title of your favorite movie. */
        const FavoriteMovie = 'FavoriteMovie';

        /** The name of your favorite pet. */
        const FavoritePetsName = 'FavoritePetsName';

        /** The name of your favorite sports team. */
        const FavoriteSportsTeam = 'FavoriteSportsTeam';

        /** The name of your favorite teacher. */
        const FavoriteTeacherName = 'FavoriteTeacherName';

        /** The middle name of your first child. */
        const FirstChildMiddleName = 'FirstChildMiddleName';

        /** The name of the high school that you attended. */
        const HighSchoolName = 'HighSchoolName';

        /** Do not specify this value. */
        const None = 'None';

        /** The middle name of your spouse. */
        const SpouseMiddleName = 'SpouseMiddleName';
    }

    /**
     * Defines the possible status values of a user.
     * @link http://msdn.microsoft.com/en-us/library/ee704179(v=msads.90).aspx UserLifeCycleStatus Value Set
     * 
     * @used-by User
     * @used-by GetUsersInfoRequest
     */
    final class UserLifeCycleStatus
    {
        /** The user is active. */
        const Active = 'Active';

        /** The user was deleted by using the DeleteUser operation. */
        const Deleted = 'Deleted';

        /** The user was disabled by the system. */
        const Inactive = 'Inactive';

        /** The user is a new user who has not been activated. */
        const Pending = 'Pending';
    }

    /**
     * Defines the condition of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn518214(v=msads.90).aspx PredicateOperator Value Set
     * 
     * @used-by Predicate
     */
    final class PredicateOperator
    {
        const Contains = 'Contains';
        const Equals = 'Equals';
        const GreaterThanEquals = 'GreaterThanEquals';
        const In = 'In';
        const LessThanEquals = 'LessThanEquals';
        const NotContains = 'NotContains';
        const NotEquals = 'NotEquals';
        const StartsWith = 'StartsWith';
    }

    /**
     * Defines the field order of entities returned using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452058(v=msads.90).aspx OrderByField Value Set
     * 
     * @used-by OrderBy
     */
    final class OrderByField
    {
        /** The order is determined by a predicate identifier. */
        const Id = 'Id';

        /** The order is determined by a predicate name. */
        const Name = 'Name';

        /** The order is determined by a predicate number. */
        const Number = 'Number';
    }

    /**
     * Defines the ascending or descending sort order of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452061(v=msads.90).aspx SortOrder Value Set
     * 
     * @used-by OrderBy
     */
    final class SortOrder
    {
        const Ascending = 'Ascending';
        const Descending = 'Descending';
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632184(v=msads.90).aspx ClientLinkStatus Value Set
     * 
     * @used-by ClientLink
     */
    final class ClientLinkStatus
    {
        /** The link is established and the managing customer can access the client account. */
        const Active = 'Active';

        /** The unlink process has completed and the managing customer can no longer access the client account. */
        const Inactive = 'Inactive';

        /** The invited client should use this value to accept the link invitation. */
        const LinkAccepted = 'LinkAccepted';

        /** The link request has been canceled by the agency. */
        const LinkCanceled = 'LinkCanceled';

        /** The link request has been declined by the invited client. */
        const LinkDeclined = 'LinkDeclined';

        /** The link is inactive due to expiry. */
        const LinkExpired = 'LinkExpired';

        /** The link process failed to complete successfully. */
        const LinkFailed = 'LinkFailed';

        /** The link process is in progress and either waiting for the billing transition to complete or the specified client link start date has not yet arrived. */
        const LinkInProgress = 'LinkInProgress';

        /** The ClientLink object has been added via the AddClientLinks service operation. */
        const LinkPending = 'LinkPending';

        /** Reserved for future use. */
        const UnlinkCanceled = 'UnlinkCanceled';

        /** The unlink process failed to complete successfully, for example because the billing transition could not be completed. */
        const UnlinkFailed = 'UnlinkFailed';

        /** The unlink process is in progress and waiting for the billing transition to complete. */
        const UnlinkInProgress = 'UnlinkInProgress';

        /** A request to terminate the link has been sent. */
        const UnlinkPending = 'UnlinkPending';

        /** The agency should use this value to request an unlink. */
        const UnlinkRequested = 'UnlinkRequested';
    }

    /**
     * Defines the possible roles of a user.
     * @link http://msdn.microsoft.com/en-us/library/ee704157(v=msads.90).aspx UserRole Value Set
     * 
     * @used-by UserInvitation
     */
    final class UserRole
    {
        const AdvertiserCampaignManager = 'AdvertiserCampaignManager';
        const ClientAdmin = 'ClientAdmin';
        const ClientManager = 'ClientManager';
        const ClientViewer = 'ClientViewer';
        const PublisherAccountManager = 'PublisherAccountManager';
        const PublisherAdmin = 'PublisherAdmin';
        const PublisherAdViewer = 'PublisherAdViewer';
        const PublisherListManager = 'PublisherListManager';
        const PublisherReportUser = 'PublisherReportUser';
        const SuperAdmin = 'SuperAdmin';
    }

    /**
     * Defines an account.
     * @link http://msdn.microsoft.com/en-us/library/bb671588(v=msads.90).aspx Account Data Object
     * 
     * @uses AccountType
     * @uses CurrencyType
     * @uses AccountFinancialStatus
     * @uses LanguageType
     * @uses KeyValuePairOfstringstring
     * @uses PaymentMethodType
     * @uses AccountLifeCycleStatus
     * @uses TimeZoneType
     * @used-by AddAccountRequest
     * @used-by AddPrepayAccountRequest
     * @used-by GetAccountResponse
     * @used-by SearchAccountsResponse
     * @used-by SignupCustomerRequest
     * @used-by UpdateAccountRequest
     * @used-by UpdatePrepayAccountRequest
     */
    class Account
    {
        /**
         * The type of the account.
         * @var AccountType
         */
        public $AccountType;

        /**
         * The identifier of the customer that is billed for the charges that the account generates.
         * @var integer
         */
        public $BillToCustomerId;

        /**
         * The code that identifies the country/region in which the account operates.
         * @var string
         */
        public $CountryCode;

        /**
         * The type of currency that is used to settle the account.
         * @var CurrencyType
         */
        public $CurrencyType;

        /**
         * The financial status of the account.
         * @var AccountFinancialStatus
         */
        public $AccountFinancialStatus;

        /**
         * The system generated identifier of the account.
         * @var integer
         */
        public $Id;

        /**
         * The language used to render the invoice (if you use an invoice as your payment method).
         * @var LanguageType
         */
        public $Language;

        /**
         * The following list of key and value strings are available for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The identifier of the last user to update the account's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the account was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * The name of the account.
         * @var string
         */
        public $Name;

        /**
         * The system generated account number that is used to identify the account in the Bing Ads web application.
         * @var string
         */
        public $Number;

        /**
         * The identifier of the customer that owns the account.
         * @var integer
         */
        public $ParentCustomerId;

        /**
         * The identifier of the payment instrument to use to settle the account.
         * @var integer
         */
        public $PaymentMethodId;

        /**
         * The type of payment instrument to use to settle the account.
         * @var PaymentMethodType
         */
        public $PaymentMethodType;

        /**
         * The identifier of the account manager who is primarily responsible for managing this account.
         * @var integer
         */
        public $PrimaryUserId;

        /**
         * The status of the account.
         * @var AccountLifeCycleStatus
         */
        public $AccountLifeCycleStatus;

        /**
         * The time-stamp value that the system uses internally to reconcile updates when you call the UpdateAccount or DeleteAccount operation.
         * @var base64Binary
         */
        public $TimeStamp;

        /**
         * The default time-zone value to use for campaigns in this account.
         * @var TimeZoneType
         */
        public $TimeZone;

        /**
         * A flag value that indicates who paused the account.
         * @var integer
         */
        public $PauseReason;
    }

    /**
     * Defines an account identification object that contains information that identifies an account.
     * @link http://msdn.microsoft.com/en-us/library/ff728414(v=msads.90).aspx AccountInfo Data Object
     * 
     * @uses AccountLifeCycleStatus
     * @used-by FindAccountsResponse
     * @used-by GetAccountsInfoResponse
     */
    final class AccountInfo
    {
        /**
         * The system generated identifier of the account.
         * @var integer
         */
        public $Id;

        /**
         * The name of the account.
         * @var string
         */
        public $Name;

        /**
         * The account number.
         * @var string
         */
        public $Number;

        /**
         * The status of the account.
         * @var AccountLifeCycleStatus
         */
        public $AccountLifeCycleStatus;

        /**
         * A flag value that indicates who paused the account.
         * @var integer
         */
        public $PauseReason;
    }

    /**
     * Defines an object that contains information that identifies an account and the customer that manages or owns the account.
     * @link http://msdn.microsoft.com/en-us/library/hh420973(v=msads.90).aspx AccountInfoWithCustomerData Data Object
     * 
     * @uses AccountLifeCycleStatus
     * @used-by FindAccountsOrCustomersInfoResponse
     */
    final class AccountInfoWithCustomerData
    {
        /**
         * The system generated identifier of the customer that manages or owns the account (see Remarks).
         * @var integer
         */
        public $CustomerId;

        /**
         * The name of the customer that manages or owns the account.
         * @var string
         */
        public $CustomerName;

        /**
         * The system generated identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The name of the account.
         * @var string
         */
        public $AccountName;

        /**
         * The system generated account number that is used to identify the account in the Bing Ads web application.
         * @var string
         */
        public $AccountNumber;

        /**
         * The status of the account.
         * @var AccountLifeCycleStatus
         */
        public $AccountLifeCycleStatus;

        /**
         * A flag value that indicates who paused the account.
         * @var integer
         */
        public $PauseReason;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169116(v=msads.90).aspx AdApiError Data Object
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
     * @link http://msdn.microsoft.com/en-us/library/dn169113(v=msads.90).aspx ApplicationFault Data Object
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
     * @link http://msdn.microsoft.com/en-us/library/dn169115(v=msads.90).aspx AdApiFaultDetail Data Object
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
     * Defines a postal address.
     * @link http://msdn.microsoft.com/en-us/library/bb671505(v=msads.90).aspx Address Data Object
     * 
     * @used-by ContactInfo
     * @used-by Customer
     */
    final class Address
    {
        /**
         * The city, which can contain a maximum of 35 characters.
         * @var string
         */
        public $City;

        /**
         * The country/region code.
         * @var string
         */
        public $CountryCode;

        /**
         * The system generated identifier of the address object.
         * @var integer
         */
        public $Id;

        /**
         * The first line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line1;

        /**
         * The second line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line2;

        /**
         * The third line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line3;

        /**
         * The fourth line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line4;

        /**
         * The Postal or ZIP Code, which can contain a maximum of 10 characters.
         * @var string
         */
        public $PostalCode;

        /**
         * The state or province.
         * @var string
         */
        public $StateOrProvince;
        public $TimeStamp;
    }

    /**
     * Defines an advertiser account.
     * @link http://msdn.microsoft.com/en-us/library/ee704163(v=msads.90).aspx AdvertiserAccount Data Object
     * 
     * @uses TaxType
     */
    final class AdvertiserAccount extends Account
    {
        /**
         * The name of the person to contact regarding this account.
         * @var string
         */
        public $AgencyContactName;

        /**
         * The identifier of the agency that manages an account on behalf of the owner of that account.
         * @var integer
         */
        public $AgencyCustomerId;

        /**
         * The identifier of the third party that is responsible for a sales lead.
         * @var integer
         */
        public $SalesHouseCustomerId;

        /**
         * For internal use only.
         * @var string
         */
        public $TaxId;

        /**
         * For internal use only.
         * @var TaxType
         */
        public $TaxType;

        /**
         * The identifier of a backup payment instrument to use to settle the account.
         * @var integer
         */
        public $BackUpPaymentInstrumentId;

        /**
         * A customer specified amount for settling against the selected payment instrument.
         * @var float
         */
        public $BillingThresholdAmount;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/dn169117(v=msads.90).aspx ApiFault Data Object
     * 
     * @uses OperationError
     */
    final class ApiFault extends ApplicationFault
    {
        public $OperationErrors;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632189(v=msads.90).aspx ClientLink Data Object
     * 
     * @uses ClientLinkStatus
     * @uses KeyValuePairOfstringstring
     * @used-by AddClientLinksRequest
     * @used-by SearchClientLinksResponse
     * @used-by UpdateClientLinksRequest
     */
    final class ClientLink
    {
        /**
         * The identifier of the client account to manage.
         * @var integer
         */
        public $ClientAccountId;

        /**
         * The number of the client account to manage.
         * @var string
         */
        public $ClientAccountNumber;

        /**
         * The identifier of the customer who manages or is requesting to manage the client account.
         * @var integer
         */
        public $ManagingCustomerId;

        /**
         * The number of the customer who manages or is requesting to manage the client account.
         * @var string
         */
        public $ManagingCustomerNumber;

        /**
         * Optional message from the requestor providing context and details about the client link invitation.
         * @var string
         */
        public $Note;

        /**
         * The friendly name that can be used to reference this client link.
         * @var string
         */
        public $Name;

        /**
         * The email of the user who created the client link request.
         * @var string
         */
        public $InviterEmail;

        /**
         * The name of the parent customer of the user who created the client link request.
         * @var string
         */
        public $InviterName;

        /**
         * The phone number of the user who created the client link request.
         * @var string
         */
        public $InviterPhone;

        /**
         * Determines whether the owner of the client account or the managing customer is responsible for billing payments.
         * @var boolean
         */
        public $IsBillToClient;

        /**
         * The date when the status would update.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * Determines the life cycle status of the client link, for example whether the client link has been accepted or declined.
         * @var ClientLinkStatus
         */
        public $Status;

        /**
         * Determines whether or not to send email notification of the client link invitation to the primary user of the client account.
         * @var boolean
         */
        public $SuppressNotification;

        /**
         * The date and time that the client link was last updated.
         * @var \DateTime
         */
        public $LastModifiedDateTime;

        /**
         * The identifier of the last user to update the client link's information.
         * @var integer
         */
        public $LastModifiedByUserId;
        public $Timestamp;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;
    }

    /**
     * Defines the contact information for a user.
     * @link http://msdn.microsoft.com/en-us/library/bb671639(v=msads.90).aspx ContactInfo Data Object
     * 
     * @uses Address
     * @uses EmailFormat
     * @used-by User
     */
    final class ContactInfo
    {
        /**
         * The address of the user.
         * @var Address
         */
        public $Address;

        /**
         * A value that determines whether the user should be contacted by telephone.
         * @var boolean
         */
        public $ContactByPhone;

        /**
         * A value that determines whether the user should be contacted by postal mail.
         * @var boolean
         */
        public $ContactByPostalMail;

        /**
         * The email address is used to send the account activation notification to the user, and can contain a maximum of 100 characters.
         * @var string
         */
        public $Email;

        /**
         * The format of the body of an email message to use when correspondence is sent to the user (this does not apply to the activation notification email message).
         * @var EmailFormat
         */
        public $EmailFormat;

        /**
         * The fax telephone number of the user.
         * @var string
         */
        public $Fax;

        /**
         * The home telephone number of the user.
         * @var string
         */
        public $HomePhone;

        /**
         * The system generated identifier of the object.
         * @var integer
         */
        public $Id;

        /**
         * The mobile telephone number of the user.
         * @var string
         */
        public $Mobile;

        /**
         * The primary telephone number of the user.
         * @var string
         */
        public $Phone1;

        /**
         * An alternate telephone number for the user.
         * @var string
         */
        public $Phone2;
    }

    /**
     * Defines a customer.
     * @link http://msdn.microsoft.com/en-us/library/bb671875(v=msads.90).aspx Customer Data Object
     * 
     * @uses Address
     * @uses CustomerFinancialStatus
     * @uses Industry
     * @uses KeyValuePairOfstringstring
     * @uses LanguageType
     * @uses ServiceLevel
     * @uses CustomerLifeCycleStatus
     * @used-by GetAccessibleCustomerResponse
     * @used-by GetCustomerResponse
     * @used-by SearchCustomersResponse
     * @used-by SignupCustomerRequest
     * @used-by UpdateCustomerRequest
     */
    final class Customer
    {
        /**
         * The customer's business address.
         * @var Address
         */
        public $CustomerAddress;

        /**
         * The financial status of the customer.
         * @var CustomerFinancialStatus
         */
        public $CustomerFinancialStatus;

        /**
         * The system generated customer identifier.
         * @var integer
         */
        public $Id;

        /**
         * The primary business segment of the customer (for example, automotive, food, or entertainment).
         * @var Industry
         */
        public $Industry;

        /**
         * The identifier of the last user to update the customer's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the customer information was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * The primary country where the customer operates.
         * @var string
         */
        public $MarketCountry;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The primary language that the customer uses.
         * @var LanguageType
         */
        public $MarketLanguage;

        /**
         * The name of the customer.
         * @var string
         */
        public $Name;

        /**
         * For internal use only.
         * @var ServiceLevel
         */
        public $ServiceLevel;

        /**
         * The status of the customer.
         * @var CustomerLifeCycleStatus
         */
        public $CustomerLifeCycleStatus;

        /**
         * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateCustomer or DeleteCustomer operation.
         * @var base64Binary
         */
        public $TimeStamp;

        /**
         * A system-generated customer number that is used in the Bing Ads web application.
         * @var string
         */
        public $Number;
    }

    /**
     * Defines a customer identification object that contains information that identifies a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728384(v=msads.90).aspx CustomerInfo Data Object
     * 
     * @used-by GetCustomersInfoResponse
     */
    final class CustomerInfo
    {
        /**
         * The system generated identifier of the customer.
         * @var integer
         */
        public $Id;

        /**
         * The name of the customer.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines a date range object.
     * @link http://msdn.microsoft.com/en-us/library/dn452056(v=msads.90).aspx DateRange Data Object
     * 
     * @used-by SearchCustomersRequest
     */
    final class DateRange
    {
        /**
         * The minimum date.
         * @var string
         */
        public $MinDate;

        /**
         * The maximum date.
         * @var string
         */
        public $MaxDate;
    }

    final class KeyValuePairOfstringstring
    {
        public $key;
        public $value;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169112(v=msads.90).aspx OperationError Data Object
     * 
     * @used-by ApiFault
     * @used-by AddClientLinksResponse
     * @used-by UpdateClientLinksResponse
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

    /**
     * Defines an order for the list of entities returned using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452057(v=msads.90).aspx OrderBy Data Object
     * 
     * @uses OrderByField
     * @uses SortOrder
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     */
    final class OrderBy
    {
        /**
         * Determines the field to order the results.
         * @var OrderByField
         */
        public $Field;

        /**
         * Determines whether the results are ascending or descending.
         * @var SortOrder
         */
        public $Order;
    }

    /**
     * Defines a paging object for the list of entities returned using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452059(v=msads.90).aspx Paging Data Object
     * 
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     */
    final class Paging
    {
        /**
         * The zero-based results page index.
         * @var integer
         */
        public $Index;

        /**
         * The page size and the number of results to return in the specified page.
         * @var integer
         */
        public $Size;
    }

    /**
     * Defines the name of a user.
     * @link http://msdn.microsoft.com/en-us/library/ff728429(v=msads.90).aspx PersonName Data Object
     * 
     * @used-by User
     */
    final class PersonName
    {
        /**
         * The first name of the user.
         * @var string
         */
        public $FirstName;

        /**
         * The last name of the user.
         * @var string
         */
        public $LastName;

        /**
         * The middle initial of the user.
         * @var string
         */
        public $MiddleInitial;
    }

    final class PilotFeature
    {
        public $Id;
        public $Countries;
    }

    /**
     * Defines a predicate for the list of entities requested using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452060(v=msads.90).aspx Predicate Data Object
     * 
     * @uses PredicateOperator
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     * @used-by SearchUserInvitationsRequest
     */
    final class Predicate
    {
        /**
         * The name of the element for the object you are searching.
         * @var string
         */
        public $Field;

        /**
         * Defines the relationship between the field and the value.
         * @var PredicateOperator
         */
        public $Operator;

        /**
         * The string to search in the specified field.
         * @var string
         */
        public $Value;
    }

    /**
     * Defines a user.
     * @link http://msdn.microsoft.com/en-us/library/bb671824(v=msads.90).aspx User Data Object
     * 
     * @uses ContactInfo
     * @uses ApplicationType
     * @uses LCID
     * @uses PersonName
     * @uses SecretQuestion
     * @uses UserLifeCycleStatus
     * @used-by GetCurrentUserResponse
     * @used-by GetUserResponse
     * @used-by UpdateUserRequest
     */
    final class User
    {
        /**
         * The user's contact information.
         * @var ContactInfo
         */
        public $ContactInfo;

        /**
         * Confirms that the customer to whom this user belongs is an advertiser.
         * @var ApplicationType
         */
        public $CustomerAppScope;

        /**
         * The identifier of the customer to whom this user belongs.
         * @var integer
         */
        public $CustomerId;

        /**
         * The system generated identifier of the user.
         * @var integer
         */
        public $Id;

        /**
         * The user's job title.
         * @var string
         */
        public $JobTitle;

        /**
         * The identifier of the last user to update the user's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that that the user information was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * The locale to use when sending correspondence to the user by email or postal mail.
         * @var LCID
         */
        public $Lcid;

        /**
         * The name of the user.
         * @var PersonName
         */
        public $Name;

        /**
         * The user's Bing Ads managed sign-in password.
         * @var string
         */
        public $Password;

        /**
         * The answer to the secret question that is specified in the SecretQuestion element.
         * @var string
         */
        public $SecretAnswer;

        /**
         * A question from a list of predefined questions that the user selects to use as his or her secret question.
         * @var SecretQuestion
         */
        public $SecretQuestion;

        /**
         * The status of the user.
         * @var UserLifeCycleStatus
         */
        public $UserLifeCycleStatus;

        /**
         * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateUser or DeleteUser operation.
         * @var base64Binary
         */
        public $TimeStamp;

        /**
         * If the value of IsMigratedToMicrosoftAccount is false, this element contains the user's Bing Ads managed sign-in user name.
         * @var string
         */
        public $UserName;

        /**
         * If true, the user can be authenticated using a Microsoft Account.
         * @var boolean
         */
        public $IsMigratedToMicrosoftAccount;
    }

    /**
     * Defines a user identification object that contains information that identifies a user.
     * @link http://msdn.microsoft.com/en-us/library/ff728438(v=msads.90).aspx UserInfo Data Object
     * 
     * @used-by GetUsersInfoResponse
     */
    final class UserInfo
    {
        /**
         * The system generated identifier of the user.
         * @var integer
         */
        public $Id;

        /**
         * The logon user name of the user.
         * @var string
         */
        public $UserName;
    }

    /**
     * Defines a user invitation.
     * @link http://msdn.microsoft.com/en-us/library/dn771360(v=msads.90).aspx UserInvitation Data Object
     * 
     * @uses UserRole
     * @uses LCID
     * @used-by SearchUserInvitationsResponse
     * @used-by SendUserInvitationRequest
     */
    final class UserInvitation
    {
        /**
         * A system generated unique identifier for the user invitation.
         * @var integer
         */
        public $Id;

        /**
         * The first name of the user.
         * @var string
         */
        public $FirstName;

        /**
         * The last name of the user.
         * @var string
         */
        public $LastName;

        /**
         * The email address corresponding to the user's Microsoft account.
         * @var string
         */
        public $Email;

        /**
         * The identifier of the customer this user is invited to manage.
         * @var integer
         */
        public $CustomerId;

        /**
         * The user role, which determines the level of access that the user has to the accounts specified in the AccountIds element.
         * @var UserRole
         */
        public $Role;

        /**
         * An array of identifiers of the accounts that the user can manage.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The date and time that the user invitation will expire.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * The locale to use when sending correspondence to the user by email or postal mail.
         * @var LCID
         */
        public $Lcid;
    }

    final class AddAccountRequest
    {
        public $Account;
    }

    final class AddAccountResponse
    {
        public $AccountId;
        public $AccountNumber;
        public $CreateTime;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632187(v=msads.90).aspx AddClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::AddClientLinks
     */
    final class AddClientLinksRequest
    {
        /**
         * The list of client links to add.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632187(v=msads.90).aspx AddClientLinks Response Object
     * 
     * @uses OperationError
     * @used-by BingAdsCustomerManagementService::AddClientLinks
     */
    final class AddClientLinksResponse
    {
        /**
         * A list of one or more reasons why the service operation failed, and no client links were added.
         * @var OperationError[]
         */
        public $OperationErrors;

        /**
         * An array of OperationError lists that contain details for any client links that were not successfully added.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }

    final class AddPrepayAccountRequest
    {
        public $Account;
    }

    final class AddPrepayAccountResponse
    {
        public $AccountId;
        public $AccountNumber;
        public $CreateTime;
    }

    /**
     * Deletes an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccount Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteAccount
     */
    final class DeleteAccountRequest
    {
        /**
         * The identifier of the account to delete.
         * @var integer
         */
        public $AccountId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }

    /**
     * Deletes an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451272(v=msads.90).aspx DeleteAccount Response Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteAccount
     */
    final class DeleteAccountResponse
    {
    }

    /**
     * Deletes a customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.90).aspx DeleteCustomer Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteCustomer
     */
    final class DeleteCustomerRequest
    {
        /**
         * The identifier of the customer to delete.
         * @var integer
         */
        public $CustomerId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }

    /**
     * Deletes a customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451278(v=msads.90).aspx DeleteCustomer Response Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteCustomer
     */
    final class DeleteCustomerResponse
    {
    }

    /**
     * Deletes a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUser Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteUser
     */
    final class DeleteUserRequest
    {
        /**
         * The identifier of the user to delete.
         * @var integer
         */
        public $UserId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }

    /**
     * Deletes a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUser Response Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteUser
     */
    final class DeleteUserResponse
    {
    }

    /**
     * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.90).aspx FindAccounts Request Object
     * 
     * @uses ApplicationType
     * @used-by BingAdsCustomerManagementService::FindAccounts
     */
    final class FindAccountsRequest
    {
        /**
         * The identifier of the customer whose accounts you want to get.
         * @var integer
         */
        public $CustomerId;

        /**
         * The criteria to use to filter the list of accounts.
         * @var string
         */
        public $AccountFilter;

        /**
         * A nonzero positive integer that specifies the number of accounts to return in the result.
         * @var integer
         */
        public $TopN;

        /**
         * A value that determines whether to return advertiser accounts or publisher accounts.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }

    /**
     * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.90).aspx FindAccounts Response Object
     * 
     * @uses AccountInfo
     * @used-by BingAdsCustomerManagementService::FindAccounts
     */
    final class FindAccountsResponse
    {
        /**
         * A list of AccountInfo objects of the accounts that match the specified filter criteria.
         * @var AccountInfo[]
         */
        public $AccountsInfo;
    }

    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfo Request Object
     * 
     * @uses ApplicationType
     * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
     */
    final class FindAccountsOrCustomersInfoRequest
    {
        /**
         * The criteria to use to filter the list of accounts and customers.
         * @var string
         */
        public $Filter;

        /**
         * A nonzero positive integer that specifies the number of accounts to return in the result.
         * @var integer
         */
        public $TopN;

        /**
         * A value that determines whether to return advertiser accounts or publisher accounts.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }

    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfo Response Object
     * 
     * @uses AccountInfoWithCustomerData
     * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
     */
    final class FindAccountsOrCustomersInfoResponse
    {
        /**
         * A list of AccountInfoWithCustomerData objects of the accounts and customers that match the specified filter criteria.
         * @var AccountInfoWithCustomerData[]
         */
        public $AccountInfoWithCustomerData;
    }

    final class GetAccessibleCustomerRequest
    {
        public $CustomerId;
    }

    final class GetAccessibleCustomerResponse
    {
        public $AccessibleCustomer;
        public $ValidFields;
    }

    /**
     * Gets the details of an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccount Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountRequest
    {
        /**
         * The identifier of the account to get.
         * @var integer
         */
        public $AccountId;
    }

    /**
     * Gets the details of an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccount Response Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountResponse
    {
        /**
         * An account object that contains information about the account, such as payment method, account type, and parent customer.
         * @var Account
         */
        public $Account;
    }

    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoRequest
    {
        /**
         * The identifier of the customer who owns the accounts to get.
         * @var integer
         */
        public $CustomerId;

        /**
         * Determines whether to return only the accounts that belong to the customer or to also return the accounts that the customer manages for other customers.
         * @var boolean
         */
        public $OnlyParentAccounts;
    }

    /**
     * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfo Response Object
     * 
     * @uses AccountInfo
     * @used-by BingAdsCustomerManagementService::GetAccountsInfo
     */
    final class GetAccountsInfoResponse
    {
        /**
         * An array of AccountInfo objects that identifies the list of accounts that the customer owns.
         * @var AccountInfo[]
         */
        public $AccountsInfo;
    }

    final class GetCurrentUserRequest
    {
    }

    final class GetCurrentUserResponse
    {
        public $User;
    }

    /**
     * Gets the details of a customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomer Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomer
     */
    final class GetCustomerRequest
    {
        /**
         * The identifier of the customer whose information you want to get.
         * @var integer
         */
        public $CustomerId;
    }

    /**
     * Gets the details of a customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomer Response Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::GetCustomer
     */
    final class GetCustomerResponse
    {
        /**
         * A Customer object that contains information about the customer.
         * @var Customer
         */
        public $Customer;
    }

    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesRequest
    {
        /**
         * The identifier of the customer whose list of pilot programs you want to get.
         * @var integer
         */
        public $CustomerId;
    }

    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeatures Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesResponse
    {
        /**
         * A list of integers that identifies the pilot programs in which the customer participates.
         * @var integer[]
         */
        public $FeaturePilotFlags;
    }

    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfo Request Object
     * 
     * @uses ApplicationType
     * @used-by BingAdsCustomerManagementService::GetCustomersInfo
     */
    final class GetCustomersInfoRequest
    {
        /**
         * A partial or full name of the customers that you want to get.
         * @var string
         */
        public $CustomerNameFilter;

        /**
         * A nonzero positive integer that specifies the number of customers to return in the result.
         * @var integer
         */
        public $TopN;

        /**
         * A value that determines whether to return results for advertising customers or publishing customers.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }

    /**
     * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfo Response Object
     * 
     * @uses CustomerInfo
     * @used-by BingAdsCustomerManagementService::GetCustomersInfo
     */
    final class GetCustomersInfoResponse
    {
        /**
         * An array of CustomerInfo objects that identifies the list of customers that meet the filter criteria.
         * @var CustomerInfo[]
         */
        public $CustomersInfo;
    }

    final class GetPilotFeaturesCountriesRequest
    {
    }

    final class GetPilotFeaturesCountriesResponse
    {
        public $PilotFeatures;
    }

    /**
     * Gets the details of a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUser Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetUser
     */
    final class GetUserRequest
    {
        /**
         * The identifier of the user to get.
         * @var integer
         */
        public $UserId;
    }

    /**
     * Gets the details of a user.
     * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUser Response Object
     * 
     * @uses User
     * @used-by BingAdsCustomerManagementService::GetUser
     */
    final class GetUserResponse
    {
        /**
         * A user object that contains information about the user.
         * @var User
         */
        public $User;

        /**
         * An array of roles that determines the permissions that the user has to manage the customer or account data.
         * @var integer[]
         */
        public $Roles;

        /**
         * An array of identifiers of the accounts to which the user has access permissions.
         * @var integer[]
         */
        public $Accounts;

        /**
         * An array of identifiers of the customers to which the user has access permissions.
         * @var integer[]
         */
        public $Customers;
    }

    /**
     * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
     * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfo Request Object
     * 
     * @uses UserLifeCycleStatus
     * @used-by BingAdsCustomerManagementService::GetUsersInfo
     */
    final class GetUsersInfoRequest
    {
        /**
         * The identifier of the customer to which the users belong.
         * @var integer
         */
        public $CustomerId;

        /**
         * The status value that the operation uses to filter the list of users that it returns.
         * @var UserLifeCycleStatus
         */
        public $StatusFilter;
    }

    /**
     * Gets a list of objects that contains user identification information, for example the user name and identifier of the user.
     * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfo Response Object
     * 
     * @uses UserInfo
     * @used-by BingAdsCustomerManagementService::GetUsersInfo
     */
    final class GetUsersInfoResponse
    {
        /**
         * A list of UserInfo objects that identifies the list of users who meet the filter criteria.
         * @var UserInfo[]
         */
        public $UsersInfo;
    }

    final class MapAccountIdToExternalAccountIdsRequest
    {
        public $AccountId;
        public $ExternalAccountIds;
    }

    final class MapAccountIdToExternalAccountIdsResponse
    {
    }

    final class MapCustomerIdToExternalCustomerIdRequest
    {
        public $CustomerId;
        public $ExternalCustomerId;
    }

    final class MapCustomerIdToExternalCustomerIdResponse
    {
    }

    /**
     * Searches for accounts that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn743757(v=msads.90).aspx SearchAccounts Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results by the specified property of an account.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }

    /**
     * Searches for accounts that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn743757(v=msads.90).aspx SearchAccounts Response Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsResponse
    {
        /**
         * A list of accounts that meet the specified criteria.
         * @var Account[]
         */
        public $Accounts;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632186(v=msads.90).aspx SearchClientLinks Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchClientLinks
     */
    final class SearchClientLinksRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632186(v=msads.90).aspx SearchClientLinks Response Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::SearchClientLinks
     */
    final class SearchClientLinksResponse
    {
        /**
         * The list of client link invitations.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }

    /**
     * Searches for customers that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomers Request Object
     * 
     * @uses ApplicationType
     * @uses Predicate
     * @uses DateRange
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersRequest
    {
        /**
         * A value that determines whether to return results for advertising customers or publishing customers.
         * @var ApplicationType
         */
        public $ApplicationScope;

        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the minimum and maximum customer creation date range.
         * @var DateRange
         */
        public $DateRange;

        /**
         * Determines the order of results by the specified property of a customer.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }

    /**
     * Searches for customers that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomers Response Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::SearchCustomers
     */
    final class SearchCustomersResponse
    {
        /**
         * A list of customers that meet the specified criteria.
         * @var Customer[]
         */
        public $Customers;
    }

    /**
     * Searches for user invitations that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn771300(v=msads.90).aspx SearchUserInvitations Request Object
     * 
     * @uses Predicate
     * @used-by BingAdsCustomerManagementService::SearchUserInvitations
     */
    final class SearchUserInvitationsRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;
    }

    /**
     * Searches for user invitations that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn771300(v=msads.90).aspx SearchUserInvitations Response Object
     * 
     * @uses UserInvitation
     * @used-by BingAdsCustomerManagementService::SearchUserInvitations
     */
    final class SearchUserInvitationsResponse
    {
        /**
         * A list of user invitations that meet the specified criteria.
         * @var UserInvitation[]
         */
        public $UserInvitations;
    }

    /**
     * Sends an invitation for a Microsoft account user to manage one or more Bing Ads customer accounts.
     * @link http://msdn.microsoft.com/en-us/library/dn789440(v=msads.90).aspx SendUserInvitation Request Object
     * 
     * @uses UserInvitation
     * @used-by BingAdsCustomerManagementService::SendUserInvitation
     */
    final class SendUserInvitationRequest
    {
        /**
         * The user invitation to send.
         * @var UserInvitation
         */
        public $UserInvitation;
    }

    /**
     * Sends an invitation for a Microsoft account user to manage one or more Bing Ads customer accounts.
     * @link http://msdn.microsoft.com/en-us/library/dn789440(v=msads.90).aspx SendUserInvitation Response Object
     * 
     * @used-by BingAdsCustomerManagementService::SendUserInvitation
     */
    final class SendUserInvitationResponse
    {
        /**
         * A system-generated identifier for the user invitation that was sent.
         * @var integer
         */
        public $UserInvitationId;
    }

    /**
     * Signs up a customer with Bing Ads.
     * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.90).aspx SignupCustomer Request Object
     * 
     * @uses Customer
     * @uses Account
     * @uses ApplicationType
     * @used-by BingAdsCustomerManagementService::SignupCustomer
     */
    final class SignupCustomerRequest
    {
        /**
         * A Customer object that specifies the details of the customer that you are adding.
         * @var Customer
         */
        public $Customer;

        /**
         * An Account object that specifies the details of the customer's primary account.
         * @var Account
         */
        public $Account;

        /**
         * The customer identifier of the reseller that will manage this customer.
         * @var integer
         */
        public $ParentCustomerId;

        /**
         * Determines whether the customer is an advertiser or publisher.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }

    /**
     * Signs up a customer with Bing Ads.
     * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.90).aspx SignupCustomer Response Object
     * 
     * @used-by BingAdsCustomerManagementService::SignupCustomer
     */
    final class SignupCustomerResponse
    {
        public $CustomerId;
        public $CustomerNumber;
        public $AccountId;
        public $AccountNumber;
        public $CreateTime;
    }

    /**
     * Updates the details of the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn451286(v=msads.90).aspx UpdateAccount Request Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::UpdateAccount
     */
    final class UpdateAccountRequest
    {
        /**
         * An AdvertiserAccount object that contains the updated account information.
         * @var Account
         */
        public $Account;
    }

    /**
     * Updates the details of the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn451286(v=msads.90).aspx UpdateAccount Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateAccount
     */
    final class UpdateAccountResponse
    {
        public $LastModifiedTime;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632185(v=msads.90).aspx UpdateClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::UpdateClientLinks
     */
    final class UpdateClientLinksRequest
    {
        /**
         * The list of client links to update.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }

    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632185(v=msads.90).aspx UpdateClientLinks Response Object
     * 
     * @uses OperationError
     * @used-by BingAdsCustomerManagementService::UpdateClientLinks
     */
    final class UpdateClientLinksResponse
    {
        /**
         * A list of one or more reasons why the service operation failed, and no client links were added.
         * @var OperationError[]
         */
        public $OperationErrors;

        /**
         * An array of OperationError lists that contain details for any client links that were not successfully added.
         * @var OperationError[][]
         */
        public $PartialErrors;
    }

    /**
     * Updates the details of the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451294(v=msads.90).aspx UpdateCustomer Request Object
     * 
     * @uses Customer
     * @used-by BingAdsCustomerManagementService::UpdateCustomer
     */
    final class UpdateCustomerRequest
    {
        /**
         * A customer object that contains the updated customer information.
         * @var Customer
         */
        public $Customer;
    }

    /**
     * Updates the details of the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn451294(v=msads.90).aspx UpdateCustomer Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateCustomer
     */
    final class UpdateCustomerResponse
    {
        public $LastModifiedTime;
    }

    final class UpdatePrepayAccountRequest
    {
        public $Account;
    }

    final class UpdatePrepayAccountResponse
    {
        public $LastModifiedTime;
    }

    /**
     * Updates the details of the specified user.
     * @link http://msdn.microsoft.com/en-us/library/dn451277(v=msads.90).aspx UpdateUser Request Object
     * 
     * @uses User
     * @used-by BingAdsCustomerManagementService::UpdateUser
     */
    final class UpdateUserRequest
    {
        /**
         * The user object that contains the updated user information.
         * @var User
         */
        public $User;
    }

    /**
     * Updates the details of the specified user.
     * @link http://msdn.microsoft.com/en-us/library/dn451277(v=msads.90).aspx UpdateUser Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateUser
     */
    final class UpdateUserResponse
    {
        public $LastModifiedTime;
    }

    /**
     * Updates the roles of the specified user.
     * @link http://msdn.microsoft.com/en-us/library/dn451284(v=msads.90).aspx UpdateUserRoles Request Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateUserRoles
     */
    final class UpdateUserRolesRequest
    {
        /**
         * The identifier of the customer to which the user belongs.
         * @var integer
         */
        public $CustomerId;

        /**
         * The identifier of the user whose role you want to update.
         * @var integer
         */
        public $UserId;

        /**
         * The identifier of the role to which the values specified in the NewAccounts or NewCustomers element applies to, if set.
         * @var integer
         */
        public $NewRoleId;
        public $NewAccountIds;
        public $NewCustomerIds;

        /**
         * The identifier of the role to which the values specified in the DeleteAccounts or DeleteCustomers element applies, if set.
         * @var integer
         */
        public $DeleteRoleId;
        public $DeleteAccountIds;
        public $DeleteCustomerIds;
    }

    /**
     * Updates the roles of the specified user.
     * @link http://msdn.microsoft.com/en-us/library/dn451284(v=msads.90).aspx UpdateUserRoles Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateUserRoles
     */
    final class UpdateUserRolesResponse
    {
        public $LastModifiedTime;
    }

    final class UpgradeCustomerToAgencyRequest
    {
        public $CustomerId;
    }

    final class UpgradeCustomerToAgencyResponse
    {
    }
}
