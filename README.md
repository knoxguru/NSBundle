Due to licensing I am not allowed to say the name of the library that this bundles for Symfony2 Applications. However, you can find the source and the author of that at this URL: http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml

The original work and it's license is in the NS folder at the route of this Bundle.

#Installation 
Edit the parameters for your NS account in the Resources/config/services.yml file

Add the bundle to your AppKernel.php file
	new KnoxGuru\Bundle\NSBundle\KnoxGuruNSBundle(),


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

#License
My work is MIT the NS folder has it's own license file attached. Everything inside the NS dir is not my work at all just distributing it with the code as allowed by the license.
