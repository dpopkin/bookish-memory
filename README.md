## How this works
- This application uses factories and fakers to source the data. You need to run the migrations with the seeds to display said data. This was built with Sail, but should work with Valet or Homestead.

## Files To Look At
- `PeopleController.php`
- `StorePersonRequest.php`
- `Company.php`
- `Person.php`
- `create.blade.php`
- `index.blade.php`
- `web.php`
- All files in the migrations folder.
- `CompanyFactory.php`
- `PersonFactory.php`
- `DatabaseSeeder.php`
- `app.scss`

## Install instructions
- Clone repo.
- Run `composer install`.
- Run `artisan migrate --seed`
- Run `npm install`
- Run `npm run dev`
- Run app in setup of choice.
