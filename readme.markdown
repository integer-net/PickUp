Magento Store PickUp Module
=====================
This module adds a new shipping method "Pickup at Store" with a corresponding payment method "Payment on Pickup".

Facts
-----
- version: 0.1.0
- extension key: IntegerNet_PickUp
- composer name: integer-net/pickup
- [extension on GitHub](https://github.com/integer-net/PickUp)
- [direct download link](https://github.com/integer-net/PickUp/archive/master.zip)

Description
-----------
This module adds a new shipping method "Pickup at Store" with a corresponding payment method "Payment on Pickup".
The payment method is available only if the pickup shipping method is selected. You have the possibility to add
information texts for the payment method and a store location for the shipping method.

Requirements
------------
- PHP >= 5.2.0
- Mage_Core
- Mage_Payment
- Mage_Shipping

Compatibility
-------------
- Magento >= 1.4

Installation Instructions
-------------------------
1. Clone or download the module and copy the contents of the "src" directory to your Magento root directory.
2. Clear the cache, logout from the admin panel and then login again.
3. Configure and activate the extension under System - Configuration - Shipping Methods and System - Configuration - Payment Methods .

Uninstallation
--------------
1. Remove all extension files from your Magento installation

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/integer-net/PickUp/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Andreas von Studnitz, integer_net GmbH
[http://www.integer-net.de](http://www.integer-net.de)
[@integer_net](https://twitter.com/integer_net)

License
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2014 integer_net GmbH
