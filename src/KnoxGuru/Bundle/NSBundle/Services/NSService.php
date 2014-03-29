<?php

namespace KnoxGuru\Bundle\NSBundle\Services;

use Symfony\Component\DependencyInjection\ContainerInterface;

class NSService {
	
	public function __construct(ContainerInterface $container) {
		


                // Load NS config variables from parameter file
                global $nsendpoint, $nshost, $nsemail, $nspassword, $nsrole, $nsaccount;

                $nsendpoint = $container->getParameter('knoxguru.nsendpoint');
                $nshost     = $container->getParameter('knoxguru.nshost');
                $nsemail    = $container->getParameter('knoxguru.nsemail');
                $nspassword = $container->getParameter('knoxguru.nspassword');
                $nsrole     = $container->getParameter('knoxguru.nsrole');
                $nsaccount  = $container->getParameter('knoxguru.nsaccount');

                // Load NS class and objects files 
                require_once dirname(__DIR__) . "/NS/NSPHPClient.php";
                require_once dirname(__DIR__) . '/NS/NetSuiteService.php';

        }


}
