<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\Container04qEQqd\App_KernelDevDebugContainer::class, null);
require __DIR__.'/Container04qEQqd/EntityManagerGhostEbeb667.php';
require __DIR__.'/Container04qEQqd/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/Container04qEQqd/getValidator_WhenService.php';
require __DIR__.'/Container04qEQqd/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/Container04qEQqd/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/Container04qEQqd/getValidator_ExpressionService.php';
require __DIR__.'/Container04qEQqd/getValidator_EmailService.php';
require __DIR__.'/Container04qEQqd/getSession_Handler_NativeService.php';
require __DIR__.'/Container04qEQqd/getSession_FactoryService.php';
require __DIR__.'/Container04qEQqd/getServicesResetterService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/Container04qEQqd/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/Container04qEQqd/getSecurity_RouteLoader_LogoutService.php';
require __DIR__.'/Container04qEQqd/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/Container04qEQqd/getSecurity_HttpUtilsService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/Container04qEQqd/getSecurity_ChannelListenerService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/Container04qEQqd/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/Container04qEQqd/getSecurity_AccessMapService.php';
require __DIR__.'/Container04qEQqd/getSecurity_AccessListenerService.php';
require __DIR__.'/Container04qEQqd/getSecrets_VaultService.php';
require __DIR__.'/Container04qEQqd/getRouting_LoaderService.php';
require __DIR__.'/Container04qEQqd/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/Container04qEQqd/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/Container04qEQqd/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/Container04qEQqd/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/Container04qEQqd/getErrorControllerService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container04qEQqd/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/Container04qEQqd/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/Container04qEQqd/getDebug_Security_Firewall_Authenticator_LoginService.php';
require __DIR__.'/Container04qEQqd/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/Container04qEQqd/getDebug_Security_EventDispatcher_LoginService.php';
require __DIR__.'/Container04qEQqd/getDebug_Security_EventDispatcher_ApiService.php';
require __DIR__.'/Container04qEQqd/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/Container04qEQqd/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/Container04qEQqd/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container04qEQqd/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container04qEQqd/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/Container04qEQqd/getCache_SystemClearerService.php';
require __DIR__.'/Container04qEQqd/getCache_SystemService.php';
require __DIR__.'/Container04qEQqd/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/Container04qEQqd/getCache_GlobalClearerService.php';
require __DIR__.'/Container04qEQqd/getCache_AppClearerService.php';
require __DIR__.'/Container04qEQqd/getCache_AppService.php';
require __DIR__.'/Container04qEQqd/getTemplateControllerService.php';
require __DIR__.'/Container04qEQqd/getRedirectControllerService.php';
require __DIR__.'/Container04qEQqd/getUtilisateurMecanoRepositoryService.php';
require __DIR__.'/Container04qEQqd/getUserRepositoryService.php';
require __DIR__.'/Container04qEQqd/getTypePieceRepositoryService.php';
require __DIR__.'/Container04qEQqd/getPieceRepositoryService.php';
require __DIR__.'/Container04qEQqd/getMonTypeTRepositoryService.php';
require __DIR__.'/Container04qEQqd/getModeleVehiculeRepositoryService.php';
require __DIR__.'/Container04qEQqd/getModeleTestRepositoryService.php';
require __DIR__.'/Container04qEQqd/getMarqueVehiculeRepositoryService.php';
require __DIR__.'/Container04qEQqd/getContratRepositoryService.php';
require __DIR__.'/Container04qEQqd/getCRepositoryService.php';
require __DIR__.'/Container04qEQqd/getUtilisateurMecanoControllerService.php';
require __DIR__.'/Container04qEQqd/getTypePieceControllerService.php';
require __DIR__.'/Container04qEQqd/getPieceModeleControllerService.php';
require __DIR__.'/Container04qEQqd/getPieceControllerService.php';
require __DIR__.'/Container04qEQqd/getMonControllerService.php';
require __DIR__.'/Container04qEQqd/getModeleVehiculeControllerService.php';
require __DIR__.'/Container04qEQqd/getMarqueVehiculeControllerService.php';
require __DIR__.'/Container04qEQqd/getContratPieceControllerService.php';
require __DIR__.'/Container04qEQqd/getContratControllerService.php';
require __DIR__.'/Container04qEQqd/getAutreControllerService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Vkx0CD5Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_PFr8VsZService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_LXU4AHPService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Kw2KoECService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_JxInMaGService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_J9NudlRService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_J3fuGrHService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Fp3a_JXService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_EopROvService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_ECRFt3YService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Dwa2toXService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_DpqHdnmService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_CZQUKxCService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Xc7OmM0Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_XLWPdHNService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_W4ACqPdService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_SeLVk3GService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_RY8LhGsService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_RGXR1yService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_O2p6Lk7Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_N5P0Wj7Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_MTytMZ4Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Ii2msFJService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_HSrsuleService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_GF4LUwfService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_FoeC1S9Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_F8iQf8Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_CsMkqUaService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_Bo6LrAmService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_BkN6WinService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_3vVwZ08Service.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_2jTuGluService.php';
require __DIR__.'/Container04qEQqd/get_ServiceLocator_1mmku44Service.php';
require __DIR__.'/Container04qEQqd/get_Security_RequestMatcher_Vhy2oy3Service.php';
require __DIR__.'/Container04qEQqd/get_Security_RequestMatcher_KLbKLHaService.php';
require __DIR__.'/Container04qEQqd/get_Security_RequestMatcher_0QxrXJtService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_Security_UserValueResolverService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/Container04qEQqd/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/Container04qEQqd/get_Debug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/Container04qEQqd/get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\AutreController';
$classes[] = 'App\Controller\ContratController';
$classes[] = 'App\Controller\ContratPieceController';
$classes[] = 'App\Controller\MarqueVehiculeController';
$classes[] = 'App\Controller\ModeleVehiculeController';
$classes[] = 'App\Controller\MonController';
$classes[] = 'App\Controller\PieceController';
$classes[] = 'App\Controller\PieceModeleController';
$classes[] = 'App\Controller\TypePieceController';
$classes[] = 'App\Controller\UtilisateurMecanoController';
$classes[] = 'App\EventSubscriber\ExceptionSubscriber';
$classes[] = 'App\Repository\CRepository';
$classes[] = 'App\Repository\ContratRepository';
$classes[] = 'App\Repository\MarqueVehiculeRepository';
$classes[] = 'App\Repository\ModeleTestRepository';
$classes[] = 'App\Repository\ModeleVehiculeRepository';
$classes[] = 'App\Repository\MonTypeTRepository';
$classes[] = 'App\Repository\PieceRepository';
$classes[] = 'App\Repository\TypePieceRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Repository\UtilisateurMecanoRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AttributeLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);