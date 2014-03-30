Due to licensing I am not allowed to say the name of the library that this bundles for Symfony2 Applications. However, you can find the source and the author of that at this URL: http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml

The original work and it's license is in the NS folder at the root of this Bundle.

#Installation 

using composer add the line below to your require section:

	"knoxguru/nsbundle": "dev-master"

Add the bundle to your AppKernel.php file

	new KnoxGuru\Bundle\NSBundle\KnoxGuruNSBundle(),

Next you will copy and paste these parameters to your app/config/config.yml and edit them appropriately:
	parameters:
	    /*...*/
	    knoxguru.nsendpoint: "2013_2"
	    knoxguru.nshost:     "https://webservices.netsuite.com"
	    knoxguru.nsemail:    "jDoe@yourdomain.com"
  	    knoxguru.nspassword:  "mySecretPwd"
	    knoxguru.nsrole:      "3"
	    knoxguru.nsaccount:  "MYACCT1"


#Usage
Inside your controller simply initialize using this command

	$this->container->get('knoxguru.nsservice');

After you have initialized you can use the classes anywhere by adding it to your uses:

	use KnoxGuru\Bundle\NSbundle\NetSuiteService;
	use KnoxGuru\Bundle\NSbundle\GetRequest;
	use KnoxGuru\Bundle\NSbundle\RecordRef;

	class MyController extends Controller {

		public function indexAction() {

			$this->container->get('knoxguru.nsservice');

			$service = new NetSuiteService();

			$request = new GetRequest();
			$request->baseRef = new RecordRef();
			$request->baseRef->internalId = "21";
			$request->baseRef->type = "customer";
			$getResponse = $service->get($request);

			if (!$getResponse->readResponse->status->isSuccess) {
			    echo "GET ERROR";
			} else {
			    $customer = $getResponse->readResponse->record;
			    echo "GET SUCCESS, customer:";
			    echo "\nCompany name: ". $customer->companyName;
			    echo "\nInternal Id: ". $customer->internalId;
			    echo "\nEmail: ". $customer->email;
			} 
		}
	}

# Further reading

You can find the toolkit documentation here: http://tellsaqib.github.io/NSPHP-Doc/index.html

#License
My work is MIT the NS folder has it's own license file attached. Everything inside the NS dir is not my work at all just distributing it with the code as allowed by the license.
