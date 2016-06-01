# Nylon PHP Framework Exploration

Five of the most popular and fully-featured PHP frameworks have been setup for evaluation. Each displays index and detail views for the Contacts model and includes the related Office model. Repository containing all 5 test projects available at: 

https://github.com/NylonTechnology/Framework_Exploration

For testing and evaluation, this repository was installed into the root web directory.


## Requirements

- PHP 5.5+
- MySQL


## Installation

1. Clone repo into webroot or subdirectory
2. Run nt-frameworks.sql 
3. Frameworks are configured to connect with username:root and password:root. Modify as needed for your local environment.
4. Browse to public webroot of each framework to see it working in your browser. 


## Framework-Specific Paths and File Locations

### Laravel
##### Contacts index
http://localhost/Framework_Exploration/laravel/public/contacts
##### Contacts detail
http://localhost/Framework_Exploration/laravel/public/contacts/1

##### Model File Locations
/Framework_Exploration/laravel/app/Contact.php
/Framework_Exploration/laravel/app/Office.php
##### Controller File Location
/Framework_Exploration/laravel/app/Http/Controllers/ContactsController.php
/Framework_Exploration/laravel/app/Http/Controllers/OfficesController.php
##### View File Location
/Framework_Exploration/laravel/resources/views/contacts/

### Cake 
##### Contacts index
http://localhost/Framework_Exploration/cake/contacts
##### Contacts detail
http://localhost/Framework_Exploration/cake/contacts/view/1

##### Model File Locations
/Framework_Exploration/cake/src/Model/Entity/Contact.php
/Framework_Exploration/cake/src/Model/Table/ContactsTable.php
/Framework_Exploration/cake/src/Model/Entity/Office.php
/Framework_Exploration/cake/src/Model/Table/OfficesTable.php 
##### Controller File Location
/Framework_Exploration/cake/src/Controller/ContactsController.php
/Framework_Exploration/cake/src/Controller/OfficesController.php
##### View File Location
/Framework_Exploration/cake/src/Template/Contacts/

### CodeIgniter
##### Contacts index
http://localhost/Framework_Exploration/codeIgniter/contacts
##### Contacts detail
http://localhost/Framework_Exploration/codeIgniter/contacts/1

##### Model File Locations
/Framework_Exploration/codeIgniter/application/models/contacts_model.php
/Framework_Exploration/codeIgniter/application/models/offices_model.php
##### Controller File Location
/Framework_Exploration/codeIgniter/application/controllers/contacts.php
/Framework_Exploration/codeIgniter/application/controllers/offices.php
##### View File Location
/Framework_Exploration/codeIgniter/application/views/contacts

### Yii
##### Contacts index
http://localhost/Framework_Exploration/yii/yii2-app-basic/web/index.php?r=contact
##### Contacts detail
http://localhost/Framework_Exploration/yii/yii2-app-basic/web/index.php?r=contact%2Fview&id=1

##### Model File Locations
/Framework_Exploration/yii/yii2-app-basic/models/Contact.php
/Framework_Exploration/yii/yii2-app-basic/models/Office.php
##### Controller File Location
/Framework_Exploration/yii/yii2-app-basic/controllers/Contact.php
/Framework_Exploration/yii/yii2-app-basic/controllers/Office.php
##### View File Location
/Framework_Exploration/yii/yii2-app-basic/views/contact/


### Symfony
##### Contacts index
http://localhost/Framework_Exploration/
##### Contacts detail
http://localhost/Framework_Exploration/

##### Model File Locations
/Framework_Exploration/symfony/src/PublicBundle/Entity/Contact.php
/Framework_Exploration/symfony/src/PublicBundle/Repository/ContactRepository.php
/Framework_Exploration/symfony/src/PublicBundle/Entity/Office.php
/Framework_Exploration/symfony/src/PublicBundle/Repository/OfficeRepository.php
##### Controller File Location
/Framework_Exploration/symfony/src/PublicBundle/Controller/ContactController.php
/Framework_Exploration/symfony/src/PublicBundle/Controller/OfficeController.php
##### View File Location
/Framework_Exploration/symfony/src/PublicBundle/Resources/views/Contact

