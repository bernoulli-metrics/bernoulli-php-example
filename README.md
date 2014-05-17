bernoulli-php-example
=====================

Example use of the Bernoulli PHP SDK

To deploy this on Heroku follow these steps:
1. git clone https://github.com/bernoulli-metrics/bernoulli-php-example
2. cd bernoulli-php-example
3. heroku create
4. heroku addons:add bernoulli
5. heroku addons:open bernoulli (create an experiment)
6. git push heroku master
7. heroku open
