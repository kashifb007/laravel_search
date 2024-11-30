## Search API

This is a Laravel API example. You can test with Postman or Insomnia.

You need to login, fetch a bearer token and use that when posting a search request.

To login, POST request to https://search.preview1.co.uk/api/login

Provide these 2 parameters as form data to authenticate.
- **email**: user@company.com
- **password**: password

Then use the supplied bearer token in the next POST request to https://search.preview1.co.uk/api/search

Simply supply a parameter named **query** with a search term, **ipad** for example.

If the data is in the database you will receive matching products.

The VueJS front end is still under development.
