## Uses

Users can post what they've drunk with photo.
Users get a random drink every hour per category.

The app can get tweets from twitter
The app can store data based on twitter handles
The app can store access tokens for each user

The app can parse tweets direct to a given username
The app can detect a drink from a hashtag
The app can detect if you drank sth within the hour
The app has post access to users accounts

## Data

All data is volatile and will be destroyed when turning off the server
When a user wants to delete his data, he only has to delete his tweets

All data is returned as JSON formatted text.

## Endpoints
### GET
- /drinks                 // list of all drinks
- /drinks/categories      // list all drink categories
- /drinks/hourly          // hourly drinks for each category


### POST
