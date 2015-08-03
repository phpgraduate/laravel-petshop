## Pet Shop built in Laravel 4.2 and SQLite database.

This is done as an assignment as part of job selection process.
Assignment:
This app is a pet shop who provide pet care services for customers. 
They provide the following services at the moment but can provide more services later on. 

•Washing
•Shampooing
•Pedicure
•Manicure
•Polishing

They provide these services to Cats, Dogs, Rabbits, Tortoises and pet snakes as well as a number of other animals

Some services are offered to some animals eg: Shampooing is offered for cats and dogs but not for tortoises, and polishing is offered for tortoises.

Make a simple application that allows the user to 

•Add/delete services
•Add/delete pet types
•allocate a service to one or more pet type
•Show a list of services and the pet types they are offered to
•Show a list of pets and the services available for each pet type

##How to install
### Step 1: Get the code
#### Option 1: Git Clone

	git clone https://github.com/phpgraduate/laravel-petshop.git laravel

#### Option 2: Download the repository

	https://github.com/phpgraduate/laravel-petshop/archive/master.zip

### Step 2: Use Composer to install dependencies
#### Option 1: Composer is not installed globally

    cd {project-folder}
	curl -s http://getcomposer.org/installer | php
	php composer.phar install --dev
#### Option 2: Composer is installed globally

    cd laravel
	composer install --dev

### Step 3: Populate Database
	Open the file ***app/config/database.php*** edit it to match your local database settings.
	
### Step 4: Populate Database
Run these commands to create and populate Users table:
	php artisan migrate
	php artisan db:seed
	
### Setp 5: Setup a virtual host and visit url
	
## License

[MIT license](http://opensource.org/licenses/MIT)
