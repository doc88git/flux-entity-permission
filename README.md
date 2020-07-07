# Flux Entity Permission
Library for implementing entities access control in Laravel applications.

# Requirements
* Laravel >= 6.0

# Installation

* Run the command below at the project root to add the package to the Laravel application:

```php 
    composer require doc88/flux-entity-permission
```

* In the *providers* list in the *config/app.php* file add:

```php     
    'providers' => [
        ...
        Doc88\FluxEntityPermission\FluxEntityPermissionServiceProvider::class,
    ]
```

* Run the command below at the root of your project to publish the new provider:

```php 
    php artisan vendor:publish
```

* Run migrations

```php 
    php artisan migrate
```

* In your User Model add the following lines:

```php     
    use Doc88\FluxEntityPermission\Traits\HasEntityPermissions;

    class User {
        use HasEntityPermissions;
    }
```
# Usage

## Doc88\FluxEntityPermission\EntityPermission Class
Class used to List, Register, Verify and Revoke permissions to entities.

* **List Entities from a User’s Permissions**
```php
    // Entities which the user has access to
    EntityPermission::list($user);

    // Specifying which entity you want to list
    EntityPermission::list($user, 'App\Company');

    /**
     * Return: array
    */
```

* **List Entities IDs from a User’s Permissions**
```php
    // Ids of entities which the user has access to
    EntityPermission::idList($user, 'App\Company');

    /**
     * Return: array
    */
```

* **Checks a User’s Permission to an Entity**
```php
    // The entity you want to access
    $company = Company::find(1);
    
    // Checking if the user has access to the entity
    EntityPermission::has($user, $company);
    
    /**
    * Return: true or false
    */
    
```

* **Records permission to an Entity**
```php
    // The entity you want to access
    $company = Company::find(1);
    
    // Grants permission to the entity for the User
    EntityPermission::register($user, $company);
    
    /**
    * Return: true or false
    */
```

* **Revokes permission to a Entity**
```php
    // The entity you want to access
    $company = Company::find(1);
    
    // Revokes permission to the Entity
    EntityPermission::revoke($user, $company);

    /**
    * Return: true or false
    */
    
```

## Using the User Model
It is possible to List, Register, Verify and Revoke permissions to entities using the User class.

* **List User Permissions**
```php
    $user = User::find(1);
    
    // Entities which the user has access to
    $user->listEntityAccess();

    // Specifying which entity you want to list
    $user->listEntityAccess('App\Company');

    /**
     * Return: array
    */
```
* **Checks User Permission to an Entity**
```php
    $user = User::find(1);

    // The entity you want to access
    $company = Company::find(1);
    
    // Checking if the user has access to the entity
    $user->hasEntityAccess($company);
    
    /**
    * Return: true or false
    */
    
```
* **Records permission to an Entity**
```php
    $user = User::find(1);

    // The entity you want to access
    $company = Company::find(1);
    
    // Grants permission to the entity for the User
    $user->registerEntityAccess($company);
    
    /**
    * Return: true or false
    */
```

* **Revokes permission to an Entity**
```php    
    $user = User::find(1);

    // The entity you want to access
    $company = Company::find(1);
    
    // Revokes permission to the entity
    $user->revokeEntityAccess($company);

    /**
    * Return: true or false
    */
    
```
