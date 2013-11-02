<?php
class LoadFacebookTest extends PHPUnit_Framework_TestCase
{
    private $driver;
    
    public function testLoadFacebook()
    {                   
        // Connect to the Selenuim server. 
        // You can download it here: http://selenium.googlecode.com/files/selenium-server-standalone-2.37.0.jar
        // Start the server using this command:
        // java -jar selenium-server-standalone-2.37.0.jar        
        $host = 'http://localhost:4444/wd/hub'; // this is the default
        
        // This will tell WebDriver to use Firefox
        $capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        
        // Sets up a new RemoteWebDriver
        $this->driver = new RemoteWebDriver($host, $capabilities);
        
        // Gets the Facebook homepage
        $page = $this->driver->get("https://www.facebook.com");

        // Output the page title
        echo $page->getTitle();

        // Close the WebDriver
        $this->driver->close();
    }
}
