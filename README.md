Due to licensing I am not allowed to say the name of the library that this bundles for Symfony2 Applications. However, you can find the source and the author of that at this URL: http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml

The original work and it's license is in the NS folder at the root of this Bundle.

#Installation 

using composer add the line below to your require section:

	"knoxguru/nsbundle": "dev-master"

Edit the parameters for your NS account in the Resources/config/services.yml file

Add the bundle to your AppKernel.php file

	new KnoxGuru\Bundle\NSBundle\KnoxGuruNSBundle(),

Next you will copy and paste these parameters to your app/config/parameters.yml and edit them appropriately:

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

	use KnoxGuru\Bundle\NSbundle\RecordType;

	class MyController extends Controller {

		public function indexAction() {
			$this->container->get('knoxguru.nsservice');
			$record = new Record;
			// etc. etc. etc.
		}
	}

# Further reading

You can find the toolkit documentation here: http://tellsaqib.github.io/NSPHP-Doc/index.html

#License
My work is MIT the NS folder has it's own license file attached. Everything inside the NS dir is not my work at all just distributing it with the code as allowed by the license.
