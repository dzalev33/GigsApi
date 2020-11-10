
## About Gigs API 



### run the following commands
before running this commands, Setup .env file with your own database credentials 
 composer require laravel/passport:7.5.1

composer require laravel/helpers

php artisan migrate

php artisan db:seed

##
## API access Points

##### list all gigs 

http://{domain.name}/api/gigs

##### list single gig

http://{domain.name}/api/gigs/{id}

##### create Gig endpoint
http://{domain.name}/api/gig/

##### To delete a gig

http://{domain.name}/api/gig/{id}

##### update Gig it needs a gig_id to refrence the gig id  
http://{domain.name}/api/gig/

##### list all companies

http://{domain.name}/api/companies

##### list single company

http://{domain.name}/api/companies/{id}

##### To delete a company

http://{domain.name}/api/company/{id}

 ##### create Company endpoint
http://{domain.name}/api/company/

##### update Company it needs a company_id to refrence the company id  
http://{domain.name}/api/company/


