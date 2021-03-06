<?php
use Sulu\Component\Localization\Localization;
use Sulu\Component\Webspace\Manager\WebspaceCollection;
use Sulu\Component\Webspace\Portal;
use Sulu\Component\Webspace\PortalInformation;
use Sulu\Component\Webspace\Environment;
use Sulu\Component\Webspace\Security;
use Sulu\Component\Webspace\Segment;
use Sulu\Component\Webspace\Url;
use Sulu\Component\Webspace\CustomUrl;
use Sulu\Component\Webspace\Webspace;
use Sulu\Component\Webspace\Navigation;
use Sulu\Component\Webspace\NavigationContext;

/**
 * adminWebspaceCollectionCache
 *
 * DO NOT EDIT
 * This file is autogenerated by the Sulu Webspace component
 */
class adminWebspaceCollectionCache extends WebspaceCollection
{
    public function __construct()
    {
        $webspaceRefs = array();
        $portalRefs = array();
        $localizationRefs = array();
        $segmentRefs = array();
        $portalInformationRefs = array();

        // new webspace
        $webspace = new Webspace();
        $webspace->setKey('example');
        $webspace->setName('example.com');
        // add localization to webspace
        $localization0 = new Localization();
        $localization0->setLanguage('en');
        $localization0->setCountry('');
        $localization0->setShadow('');
        $localization0->setDefault(true);
        $localization0->setXDefault('');
        $localizationRefs['example_en'] = $localization0;
        $webspace->addLocalization($localization0);
        // add theme


        $webspace->addTemplate('search', 'search/search');
        $webspace->addTemplate('error', 'error/error');
        $webspace->addDefaultTemplate('page', 'default');
        $webspace->addDefaultTemplate('home', 'homepage');

        // add navigation
        $navigation = new Navigation();
        $navigation->addContext(new NavigationContext('main',     array(
                        'title' =>     array(
                        'en' => 'Main Navigation',
                                'de' => 'Hauptnavigation',
                )
,
                )
));
        $webspace->setNavigation($navigation);
        $webspace->setResourceLocatorStrategy('tree_leaf_edit');


        // new portal
        $portal = new Portal();
        $portal->setName('example.com');
        $portal->setKey('example');
        $portal->setWebspace($webspace);

        // add localization
        $localization = new Localization();
        $localization->setLanguage('en');
        $localization->setCountry('');
        $localization->setDefault('1');
        $localization->setXDefault('');
        $portal->addLocalization($localization);


        // add environment
        $environment = new Environment();
        $environment->setType('prod');

        // add environment url
        $url = new Url();
        $url->setUrl('{host}');
        $url->setLanguage('en');
        $url->setCountry('');
        $url->setSegment('');
        $url->setRedirect('');
        $url->setMain(true);
        $environment->addUrl($url);

        $portal->addEnvironment($environment);

        // add environment
        $environment = new Environment();
        $environment->setType('stage');

        // add environment url
        $url = new Url();
        $url->setUrl('{host}');
        $url->setLanguage('en');
        $url->setCountry('');
        $url->setSegment('');
        $url->setRedirect('');
        $url->setMain(true);
        $environment->addUrl($url);

        $portal->addEnvironment($environment);

        // add environment
        $environment = new Environment();
        $environment->setType('test');

        // add environment url
        $url = new Url();
        $url->setUrl('{host}');
        $url->setLanguage('en');
        $url->setCountry('');
        $url->setSegment('');
        $url->setRedirect('');
        $url->setMain(true);
        $environment->addUrl($url);

        $portal->addEnvironment($environment);

        // add environment
        $environment = new Environment();
        $environment->setType('dev');

        // add environment url
        $url = new Url();
        $url->setUrl('{host}');
        $url->setLanguage('en');
        $url->setCountry('');
        $url->setSegment('');
        $url->setRedirect('');
        $url->setMain(true);
        $environment->addUrl($url);

        $portal->addEnvironment($environment);
        $portalRefs['example'] = $portal;
        $webspace->addPortal($portal);

        $webspaceRefs['example'] = $webspace;



        $portalInformationRefs['prod']['{host}'] = new PortalInformation(
            1,
            $webspaceRefs['example'],
            $portalRefs['example'],
            $localizationRefs['example_en'],
            '{host}',
            null,
            null,
            true,
            '{host}',
            5
        );

        $portalInformationRefs['stage']['{host}'] = new PortalInformation(
            1,
            $webspaceRefs['example'],
            $portalRefs['example'],
            $localizationRefs['example_en'],
            '{host}',
            null,
            null,
            true,
            '{host}',
            5
        );

        $portalInformationRefs['test']['{host}'] = new PortalInformation(
            1,
            $webspaceRefs['example'],
            $portalRefs['example'],
            $localizationRefs['example_en'],
            '{host}',
            null,
            null,
            true,
            '{host}',
            5
        );

        $portalInformationRefs['dev']['{host}'] = new PortalInformation(
            1,
            $webspaceRefs['example'],
            $portalRefs['example'],
            $localizationRefs['example_en'],
            '{host}',
            null,
            null,
            true,
            '{host}',
            5
        );


        $this->setWebspaces($webspaceRefs);
        $this->setPortals($portalRefs);
        $this->setPortalInformations($portalInformationRefs);
    }
}


