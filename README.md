Initial try to provide scripts to get maybe useful data out of AWS VPC Flow Logs.

https://aws.amazon.com/blogs/aws/vpc-flow-logs-log-and-view-network-traffic-flows/

### HOWTO ###

* Expects that you have your credentials in `~/.aws/credentials` (default profile)
* Adjust `config.php`
* Install deps via composer (https://getcomposer.org/doc/00-intro.md#using-composer)
* Run `fetch` (fetches cloud watch logs)
* Run `analyze` (aggregates logs)
