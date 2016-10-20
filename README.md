# PURL-ADF

The Auto-lead Data Format (ADF) is the standard format for sending leads to Dealer CRMs. In this process, an XML-formatted email will be sent to the dealerships CRM email address.  The CRM will accept the email, and enter the the visitor's data. 

### Installing

1. Add the script in the `index.php` file to your Purlem landing page, just under the "PURL CODE". 

2. Upload the purl-adf.php file. 

3. Update the custom field IDs in the purl-adf.php file to match your Purlem account. 


### Example of ADF Format

```
<?xml version="1.0" encoding="UTF-8"?>
<?adf version="1.0"?>
<adf>
	<prospect> 
		<requestdate>2016-03-30T15:30:20-08:0</requestdate>

		<vehicle>             
            <year>2016</year>
            <make>Honda</make>
            <model>Accord</model>   
        </vehicle>
 
		<customer>
        	<contact>
                <name part="first">Joe</name>
                <name part="last">Smith</name>
                <phone>123-123-1234</phone>
                <email>joe@email.com</email>
                <address type="home">
                    <street line="1">'123 Main St</street>
                    <city>New York</city>
                    <regioncode>NY</regioncode>
                    <postalcode>01234</postalcode>
                </address>
            </contact>
            <comments>I want to buy a car now</comments>
        </customer>
         
		<vendor>
			<vendorname>ABC Dealer</vendorname>
		</vendor>
 
		<provider>
			<name part="full">Your Co</name>
		</provider>
                 
	</prospect>
</adf>
```